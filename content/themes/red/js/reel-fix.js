/* ============================================
   REEL FIX v5 - BASED ON REAL SNGINE HTML
   
   Sngine v4.2 actual reel HTML:
   
   <div class="">                                    ← parent div (empty class!)
     <video class="js_video-plyr" id="reel-2"        ← video id starts with "reel-"
            onplay="update_media_views('reel', 2)"   ← onplay has 'reel'
            playsinline controls preload="auto">
       <source src="...sngine_xxx.mp4" type="video/mp4">
     </video>
   </div>
   
   STRATEGY:
   1. Find all video[id^="reel-"] → that's our reels
   2. Get the video wrapper (parentElement)
   3. Hide the wrapper completely
   4. Build our own .rn-reel-thumb before it
   5. On click → open fullscreen modal with video
   ============================================ */

(function() {
    'use strict';

    var DEBUG = true; // Set to false after testing

    function log(msg) {
        if (DEBUG) console.log('[ReelFix] ' + msg);
    }

    // =============================================
    // 1. FIND ALL REEL VIDEOS
    //    Target: video[id^="reel-"] means video 
    //    whose id STARTS WITH "reel-"
    // =============================================
    function findReelVideos() {
        // Method 1: video id starts with "reel-"
        var videos = document.querySelectorAll('video[id^="reel-"]');
        
        // Method 2: video with onplay containing 'reel'
        if (videos.length === 0) {
            videos = document.querySelectorAll('video[onplay*="reel"]');
            log('Found reels via onplay attribute');
        }

        return videos;
    }

    // =============================================
    // 2. BUILD CUSTOM THUMBNAIL FOR ONE REEL
    // =============================================
    function buildThumbnail(videoEl) {
        var wrapper = videoEl.parentElement;
        
        // Don't rebuild if already done
        if (wrapper._rnThumbBuilt) return;
        wrapper._rnThumbBuilt = true;

        // Get video source
        var source = videoEl.querySelector('source');
        var videoSrc = source ? source.src : videoEl.src;
        var posterSrc = videoEl.poster || '';

        log('Building thumbnail for: ' + videoEl.id);
        log('Video src: ' + videoSrc);
        log('Poster: ' + posterSrc);

        // === HIDE SNGINE'S ORIGINAL WRAPPER ===
        wrapper.style.display = 'none';
        wrapper.style.height = '0';
        wrapper.style.overflow = 'hidden';
        wrapper.style.padding = '0';
        wrapper.style.margin = '0';
        wrapper.style.maxHeight = '0';
        wrapper.style.minHeight = '0';
        wrapper.style.visibility = 'hidden';
        wrapper.style.position = 'absolute';
        wrapper.style.pointerEvents = 'none';
        wrapper.setAttribute('data-rn-hidden', 'true');

        // === CREATE OUR THUMBNAIL ===
        var thumb = document.createElement('div');
        thumb.className = 'rn-reel-thumb';
        thumb.setAttribute('data-rn-reel-thumb', 'true');

        if (posterSrc) {
            var img = document.createElement('img');
            img.src = posterSrc;
            img.alt = 'Reel';
            img.loading = 'lazy';
            // On error, show gradient placeholder
            img.onerror = function() {
                this.style.display = 'none';
                thumb.style.background = 'linear-gradient(135deg, #1a1a2e, #16213e)';
            };
            thumb.appendChild(img);
        } else {
            // No poster - use video's first frame via canvas
            thumb.style.background = 'linear-gradient(135deg, #1a1a2e, #16213e)';
            
            // Try to capture first frame as thumbnail
            tryCaptureFrame(videoEl, thumb);
        }

        // Play icon
        var play = document.createElement('div');
        play.className = 'rn-reel-thumb-play';
        thumb.appendChild(play);

        // === INSERT BEFORE THE HIDDEN WRAPPER ===
        wrapper.parentNode.insertBefore(thumb, wrapper);

        // === CLICK → OPEN MODAL ===
        thumb.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            openModal(videoSrc, posterSrc, videoEl.id);
        });

        log('Thumbnail inserted for ' + videoEl.id);
    }

    // =============================================
    // 3. CAPTURE VIDEO FIRST FRAME AS THUMBNAIL
    // =============================================
    function tryCaptureFrame(videoEl, thumbEl) {
        if (!videoEl.src && !videoEl.querySelector('source')) return;

        var canvas = document.createElement('canvas');
        var ctx = canvas.getContext('2d');

        function capture() {
            try {
                canvas.width = videoEl.videoWidth || 360;
                canvas.height = videoEl.videoHeight || 640;
                ctx.drawImage(videoEl, 0, 0, canvas.width, canvas.height);
                var dataUrl = canvas.toDataURL('image/jpeg', 0.7);

                // Remove any existing placeholder gradient
                thumbEl.style.background = '';

                var img = document.createElement('img');
                img.src = dataUrl;
                img.alt = 'Reel';
                img.style.cssText = 'width:100%;height:100%;object-fit:cover;display:block;';
                thumbEl.insertBefore(img, thumbEl.firstChild);

                log('Captured video frame as thumbnail');
            } catch(e) {
                log('Frame capture failed: ' + e.message);
            }
        }

        // Try when video is ready
        if (videoEl.readyState >= 2) {
            // Seek to 1 second to get a meaningful frame
            videoEl.currentTime = 1;
            videoEl.addEventListener('seeked', capture, { once: true });
        } else {
            videoEl.addEventListener('loadeddata', function() {
                videoEl.currentTime = 1;
                videoEl.addEventListener('seeked', capture, { once: true });
            }, { once: true });
        }
    }

    // =============================================
    // 4. OPEN FULLSCREEN VIDEO MODAL
    // =============================================
    function openModal(videoSrc, posterSrc, reelId) {
        // Don't open if modal already exists
        if (document.querySelector('.rn-reel-modal-overlay')) return;

        log('Opening modal for: ' + reelId);

        var overlay = document.createElement('div');
        overlay.className = 'rn-reel-modal-overlay';

        var content = document.createElement('div');
        content.className = 'rn-reel-modal-content';

        var video = document.createElement('video');
        video.src = videoSrc;
        video.controls = true;
        video.autoplay = true;
        video.playsInline = true;
        video.preload = 'auto';
        if (posterSrc) video.poster = posterSrc;

        content.appendChild(video);

        var closeBtn = document.createElement('button');
        closeBtn.className = 'rn-reel-modal-close';
        closeBtn.innerHTML = '&times;';
        closeBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            closeModal(overlay, video);
        });

        overlay.appendChild(content);
        overlay.appendChild(closeBtn);

        // Close on background click
        overlay.addEventListener('click', function(e) {
            if (e.target === overlay) {
                closeModal(overlay, video);
            }
        });

        // Close on Escape key
        function escHandler(e) {
            if (e.key === 'Escape') {
                closeModal(overlay, video);
                document.removeEventListener('keydown', escHandler);
            }
        }
        document.addEventListener('keydown', escHandler);

        document.body.appendChild(overlay);
        document.body.style.overflow = 'hidden';
    }

    function closeModal(overlay, video) {
        video.pause();
        overlay.remove();
        document.body.style.overflow = '';
    }

    // =============================================
    // 5. PROCESS ALL REELS ON PAGE
    // =============================================
    function processAllReels() {
        var videos = findReelVideos();
        var count = 0;

        videos.forEach(function(video) {
            // Check if already processed
            var wrapper = video.parentElement;
            if (wrapper && wrapper._rnThumbBuilt) return;

            buildThumbnail(video);
            count++;
        });

        if (count > 0) {
            log('Processed ' + count + ' reel(s) on this run');
        }

        return count;
    }

    // =============================================
    // 6. WATCH FOR NEW POSTS (AJAX / Infinite Scroll)
    // =============================================
    function setupWatcher() {
        // MutationObserver
        var observer = new MutationObserver(function(mutations) {
            var hasNew = false;
            for (var i = 0; i < mutations.length; i++) {
                if (mutations[i].addedNodes && mutations[i].addedNodes.length > 0) {
                    hasNew = true;
                    break;
                }
            }
            if (hasNew) {
                setTimeout(processAllReels, 300);
            }
        });

        observer.observe(document.body, {
            childList: true,
            subtree: true
        });
        log('MutationObserver active');

        // jQuery AJAX complete
        if (typeof jQuery !== 'undefined') {
            $(document).ajaxComplete(function() {
                setTimeout(processAllReels, 500);
            });
            log('AJAX intercept active');
        }
    }

    // =============================================
    // INIT
    // =============================================
    function init() {
        log('v5 Init - Targeting video[id^="reel-"]');

        // Process immediately
        processAllReels();

        // Retry for late-loading content
        setTimeout(processAllReels, 500);
        setTimeout(processAllReels, 1000);
        setTimeout(processAllReels, 2000);
        setTimeout(processAllReels, 4000);

        // Watch for new posts
        setupWatcher();
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

})();
