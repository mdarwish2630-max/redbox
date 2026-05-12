<?php
/* Smarty version 5.7.0, created on 2026-04-24 19:09:36
  from 'file:_head.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_69ebbff0499af0_96786791',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00c87ad6cf6a7d60bedb2d6b4008f6d32cf2c68b' => 
    array (
      0 => '_head.tpl',
      1 => 1776835600,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.css.tpl' => 1,
  ),
))) {
function content_69ebbff0499af0_96786791 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\selfie\\content\\themes\\red\\templates';
?><!doctype html>

<html data-lang="<?php echo $_smarty_tpl->getValue('system')['language']['code'];?>
" <?php if ($_smarty_tpl->getValue('system')['language']['dir'] == "RTL") {?> dir="RTL" <?php }?>>

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="generator" content="Sngine">
    <meta name="version" content="<?php echo $_smarty_tpl->getValue('system')['system_version'];?>
">

    <!-- Title -->
    <title><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('page_title'),70);?>
</title>
    <!-- Title -->

    <!-- Meta -->
    <meta name="description" content="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('page_description'),300);?>
">
    <meta name="keywords" content="<?php echo $_smarty_tpl->getValue('system')['system_keywords'];?>
">
    <!-- Meta -->

    <!-- OG-Meta -->
    <meta property="og:title" content="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('page_title'),70);?>
" />
    <meta property="og:description" content="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('page_description'),300);?>
" />
    <meta property="og:site_name" content="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('system')['system_title']);?>
" />
    <meta property="og:image" content="<?php echo $_smarty_tpl->getValue('page_image');?>
" />
    <!-- OG-Meta -->

    <!-- Twitter-Meta -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('page_title'),70);?>
" />
    <meta name="twitter:description" content="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('page_description'),300);?>
" />
    <meta name="twitter:image" content="<?php echo $_smarty_tpl->getValue('page_image');?>
" />
    <!-- Twitter-Meta -->

    <!-- Favicon -->
    <?php if ($_smarty_tpl->getValue('system')['system_favicon_default']) {?>
      <link rel="shortcut icon" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->getValue('system')['theme'];?>
/images/favicon.png" />
    <?php } elseif ($_smarty_tpl->getValue('system')['system_favicon']) {?>
      <link rel="shortcut icon" href="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('system')['system_favicon'];?>
" />
    <?php }?>
    <!-- Favicon -->

    <!-- Fonts [Poppins|Tajawal|Font-Awesome] -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php if ($_smarty_tpl->getValue('system')['language']['dir'] == "LTR") {?>
      <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" crossorigin="anonymous" />
    <?php } else { ?>
      <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
    <?php }?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Fonts [Poppins|Tajawal|Font-Awesome] -->

    <!-- CSS -->
    <?php if ($_smarty_tpl->getValue('system')['language']['dir'] == "LTR") {?>
      <link href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->getValue('system')['theme'];?>
/css/style.min.css?v=<?php echo $_smarty_tpl->getValue('system')['system_version'];?>
" rel="stylesheet">
    <?php } else { ?>
      <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/node_modules/bootstrap/dist/css/bootstrap.rtl.min.css">
      <link href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->getValue('system')['theme'];?>
/css/style.rtl.min.css?v=<?php echo $_smarty_tpl->getValue('system')['system_version'];?>
" rel="stylesheet">
    <?php }?>
    <!-- CSS -->

    <!-- RedNote Theme Override -->
    <link href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->getValue('system')['theme'];?>
/css/rednote.css?v=<?php echo $_smarty_tpl->getValue('system')['system_version'];?>
" rel="stylesheet">
    <!-- RedNote Theme Override -->

<style>
.rn-reel-thumb{position:relative;width:100%;aspect-ratio:9/16;overflow:hidden;background:#000;border-radius:8px;cursor:pointer;display:block}
.rn-reel-thumb img{width:100%;height:100%;object-fit:cover;display:block}
.rn-reel-thumb-play{position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:52px;height:52px;background:rgba(255,36,66,0.85);border-radius:50%;z-index:5;pointer-events:none;box-shadow:0 4px 15px rgba(255,36,66,0.4)}
.rn-reel-thumb-play::after{content:'';position:absolute;top:50%;left:54%;transform:translate(-50%,-50%);border-left:16px solid #fff;border-top:9px solid transparent;border-bottom:9px solid transparent}
.rn-reel-thumb:hover .rn-reel-thumb-play{transform:translate(-50%,-50%) scale(1.1);background:rgba(255,36,66,1)}
.rn-reel-overlay{position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.85);z-index:1030;display:flex;align-items:center;justify-content:center;animation:rnIn .2s}
@keyframes rnIn{from{opacity:0}to{opacity:1}}
.rn-reel-viewer{display:flex;width:900px;max-width:95vw;max-height:90vh;background:#fff;border-radius:12px;overflow:hidden;box-shadow:0 20px 60px rgba(0,0,0,0.5);position:relative}
.rn-reel-left{flex:0 0 55%;background:#000;display:flex;align-items:center;justify-content:center;overflow:hidden}
.rn-reel-left video{width:100%;height:100%;object-fit:contain;max-height:90vh;display:block}
.rn-reel-right{flex:1;display:flex;flex-direction:column;overflow:hidden;max-height:90vh}
.rn-reel-right .post{margin:0!important;border:none!important;box-shadow:none!important;width:100%!important;border-radius:0!important;display:flex!important;flex-direction:column;height:100%}
.rn-reel-right .post .post-body{flex-shrink:0;overflow:visible;padding:12px 16px 0}
.rn-reel-right .post .post-footer{flex:1;overflow-y:auto;padding:0 16px 12px}
.rn-reel-x{position:absolute;top:10px;right:10px;width:32px;height:32px;background:rgba(0,0,0,0.6);border:none;border-radius:50%;color:#fff;font-size:20px;cursor:pointer;z-index:10;display:flex;align-items:center;justify-content:center;line-height:1}
.rn-reel-x:hover{background:rgba(0,0,0,0.8)}
.header .dropdown-menu,.navbar .dropdown-menu,.popover,.tooltip,.dropdown{z-index:10001!important}
@media(max-width:767px){
.rn-reel-overlay{align-items:flex-end;padding:0}
.rn-reel-viewer{flex-direction:column;width:100%;max-width:100%;max-height:95vh;border-radius:16px 16px 0 0}
.rn-reel-left{flex:0 0 auto;max-height:40vh}
.rn-reel-right{flex:1;max-height:55vh}
.rn-reel-thumb-play{width:42px;height:42px}
.rn-reel-thumb-play::after{border-left-width:13px;border-top-width:7px;border-bottom-width:7px}
}
</style>
<?php echo '<script'; ?>
>
(function(){
'use strict';
function buildThumbnail(v){
var wr=v.parentElement;if(wr._rnDone)return;wr._rnDone=true;
var postEl=v.closest('.post');
var src=v.querySelector('source');var videoSrc=src?src.src:v.src;var posterSrc=v.poster||'';
wr.style.cssText='display:none!important;height:0!important;overflow:hidden!important;padding:0!important;margin:0!important;visibility:hidden!important;pointer-events:none!important;';
var pw=v.closest('.plyr');if(pw)pw.style.cssText='display:none!important;height:0!important;overflow:hidden!important;';
var thumb=document.createElement('div');thumb.className='rn-reel-thumb';
if(posterSrc){var img=document.createElement('img');img.src=posterSrc;img.alt='Reel';img.loading='lazy';img.onerror=function(){this.style.display='none';thumb.style.background='linear-gradient(135deg,#1a1a2e,#16213e)';};thumb.appendChild(img);}
else{thumb.style.background='linear-gradient(135deg,#1a1a2e,#16213e)';tryFrame(v,thumb);}
var play=document.createElement('div');play.className='rn-reel-thumb-play';thumb.appendChild(play);
wr.parentNode.insertBefore(thumb,wr);
thumb.addEventListener('click',function(e){e.preventDefault();e.stopPropagation();e.stopImmediatePropagation();openViewer(videoSrc,posterSrc,postEl);},true);
wr.addEventListener('click',function(e){e.preventDefault();e.stopPropagation();e.stopImmediatePropagation();},true);
}
function tryFrame(v,t){
var c=document.createElement('canvas');var ctx=c.getContext('2d');
function cap(){try{c.width=v.videoWidth||360;c.height=v.videoHeight||640;ctx.drawImage(v,0,0,c.width,c.height);var d=c.toDataURL('image/jpeg',0.7);t.style.background='';var img=document.createElement('img');img.src=d;img.alt='Reel';img.style.cssText='width:100%;height:100%;object-fit:cover;display:block;';t.insertBefore(img,t.firstChild);}catch(e){}}
if(v.readyState>=2){v.currentTime=1;v.addEventListener('seeked',cap,{once:true});}else{v.addEventListener('loadeddata',function(){v.currentTime=1;v.addEventListener('seeked',cap,{once:true});},{once:true});}
}
function openViewer(videoSrc,posterSrc,postEl){
var old=document.querySelector('.rn-reel-overlay');if(old)old.remove();
if(!postEl)return;
var li=postEl.closest('li');if(!li)return;
var placeholder=document.createElement('div');
placeholder.className='rn-reel-thumb';placeholder.style.background='linear-gradient(135deg,#1a1a2e,#16213e)';
li.replaceChild(placeholder,postEl);
var thumbInPost=postEl.querySelector('.rn-reel-thumb');if(thumbInPost)thumbInPost.style.display='none';
var ov=document.createElement('div');ov.className='rn-reel-overlay';
var viewer=document.createElement('div');viewer.className='rn-reel-viewer';
var xb=document.createElement('button');xb.className='rn-reel-x';xb.innerHTML='&times;';
var left=document.createElement('div');left.className='rn-reel-left';
var vid=document.createElement('video');vid.src=videoSrc;vid.controls=true;vid.autoplay=true;vid.playsInline=true;
if(posterSrc)vid.poster=posterSrc;left.appendChild(vid);
var right=document.createElement('div');right.className='rn-reel-right';
right.appendChild(postEl);
viewer.appendChild(xb);viewer.appendChild(left);viewer.appendChild(right);
ov.appendChild(viewer);
function closeView(){
vid.pause();vid.src='';vid.load();
if(thumbInPost)thumbInPost.style.display='';
li.replaceChild(postEl,placeholder);
ov.remove();document.body.style.overflow='';
}
xb.addEventListener('click',function(e){e.stopPropagation();closeView();});
ov.addEventListener('click',function(e){if(e.target===ov)closeView();});
document.addEventListener('keydown',function h(e){if(e.key==='Escape'){closeView();document.removeEventListener('keydown',h);}});
document.body.appendChild(ov);document.body.style.overflow='hidden';
}
function processAll(){
var vs=document.querySelectorAll('video[id^="reel-"]');
vs.forEach(function(v){var w=v.parentElement;if(w&&w._rnDone)return;buildThumbnail(v);});
}
function init(){
processAll();setTimeout(processAll,500);setTimeout(processAll,1000);setTimeout(processAll,2000);setTimeout(processAll,4000);
var obs=new MutationObserver(function(m){var n=false;for(var i=0;i<m.length;i++){if(m[i].addedNodes&&m[i].addedNodes.length>0){n=true;break;}}if(n)setTimeout(processAll,300);});
obs.observe(document.body,{childList:true,subtree:true});
if(typeof jQuery!=='undefined')jQuery(document).ajaxComplete(function(){setTimeout(processAll,500);});
}
if(document.readyState==='loading')document.addEventListener('DOMContentLoaded',init);else init();
})();
<?php echo '</script'; ?>
>

    <!-- CSS Customized -->
    <?php $_smarty_tpl->renderSubTemplate('file:_head.css.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <!-- CSS Customized -->

    <!-- Header Custom JavaScript -->
    <?php if ($_smarty_tpl->getValue('system')['custome_js_header']) {?>
      <?php echo '<script'; ?>
>
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('html_entity_decode')($_smarty_tpl->getValue('system')['custome_js_header'],ENT_QUOTES);?>

      <?php echo '</script'; ?>
>
    <?php }?>
    <!-- Header Custom JavaScript -->

    <!-- PWA -->
    <?php if ($_smarty_tpl->getValue('system')['pwa_enabled']) {?>
      <link rel="manifest" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/manifest.php">
      <!-- register service worker -->
      <?php echo '<script'; ?>
>
        if ('serviceWorker' in navigator) {
          navigator.serviceWorker.register('/sw.js').then((registration) => {
            console.log('Service Worker registered with scope:', registration.scope);
          }).catch((error) => {
            console.log('Service Worker registration failed:', error);
          });
        }
      <?php echo '</script'; ?>
>
      <!-- register service worker -->
    <?php } else { ?>
      <!-- unregister service worker -->
      <?php echo '<script'; ?>
>
        if ('serviceWorker' in navigator) {
          navigator.serviceWorker.getRegistrations().then(function(registrations) {
            for (let registration of registrations) {
              registration.unregister();
            }
          });
        }
      <?php echo '</script'; ?>
>
      <!-- unregister service worker -->
    <?php }?>
    <!-- PWA -->

    <!-- AgeVerif Checker -->
    <?php if (!$_smarty_tpl->getValue('user')->_is_admin && $_smarty_tpl->getValue('system')['age_restriction'] && $_smarty_tpl->getValue('system')['ageverif_enabled'] && $_smarty_tpl->getValue('system')['ageverif_api_key']) {?>
      <?php echo '<script'; ?>
 src="https://www.ageverif.com/checker.js?key=<?php echo $_smarty_tpl->getValue('system')['ageverif_api_key'];?>
"><?php echo '</script'; ?>
>
    <?php }?>
    <!-- AgeVerif Checker -->
    

</head><?php }
}
