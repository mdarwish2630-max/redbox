{include file='_head.tpl'}
{include file='_header_rednote.tpl'}

<!-- ========== REDNOTE LAYOUT ========== -->
<div class="rednote-layout">

  <!-- SIDEBAR -->
  <div class="rednote-sidebar">
    <!-- Logo -->
    <a href="{$system['system_url']}" class="rednote-logo">REDNOTE</a>

    <!-- Menu -->
    <div class="rednote-menu">
      {if $user->_logged_in || (!$user->_logged_in && $system['newsfeed_public'])}
        <a href="{$system['system_url']}" class="rednote-menu-item {if $page == "index" && ($view == "" || $view == "discover" || $view == "popular")}active{/if}">
          {include file='__svg_icons.tpl' icon="posts_discover" class="rn-menu-icon" width="20px" height="20px"}
          {__("Discover")}
        </a>
      {/if}

      {if $user->_logged_in}
        {if $system['live_enabled']}
          <a href="{$system['system_url']}/live" class="rednote-menu-item {if $page == "live"}active{/if}">
            {include file='__svg_icons.tpl' icon="live" class="rn-menu-icon" width="20px" height="20px"}
            {__("Live streaming")}
          </a>
        {/if}

        {if $user->_data['can_publish_posts']}
          <div class="rednote-menu-item" data-toggle="modal" data-url="posts/publisher.php">
            {include file='__svg_icons.tpl' icon="newsfeed" class="rn-menu-icon" width="20px" height="20px"}
            {__("Release")}
          </div>
        {/if}

        <a href="{$system['system_url']}/notifications" class="rednote-menu-item {if $page == "notifications"}active{/if}">
          {include file='__svg_icons.tpl' icon="notification" class="rn-menu-icon" width="20px" height="20px"}
          {__("Notify")}
        </a>
      {/if}

      <div class="rednote-menu-divider"></div>

      <!-- Explore section -->
      <a href="{$system['system_url']}/people" class="rednote-menu-item {if $page == "people"}active{/if}">
        {include file='__svg_icons.tpl' icon="find_people" class="rn-menu-icon" width="20px" height="20px"}
        {__("People")}
      </a>

      {if $system['pages_enabled']}
        <a href="{$system['system_url']}/pages" class="rednote-menu-item {if $page == "pages"}active{/if}">
          {include file='__svg_icons.tpl' icon="pages" class="rn-menu-icon" width="20px" height="20px"}
          {__("Pages")}
        </a>
      {/if}

      {if $system['groups_enabled']}
        <a href="{$system['system_url']}/groups" class="rednote-menu-item {if $page == "groups"}active{/if}">
          {include file='__svg_icons.tpl' icon="groups" class="rn-menu-icon" width="20px" height="20px"}
          {__("Groups")}
        </a>
      {/if}

      {if $system['events_enabled']}
        <a href="{$system['system_url']}/events" class="rednote-menu-item {if $page == "events"}active{/if}">
          {include file='__svg_icons.tpl' icon="events" class="rn-menu-icon" width="20px" height="20px"}
          {__("Events")}
        </a>
      {/if}

      {if $system['blogs_enabled']}
        <a href="{$system['system_url']}/blogs" class="rednote-menu-item {if $page == "blogs"}active{/if}">
          {include file='__svg_icons.tpl' icon="blogs" class="rn-menu-icon" width="20px" height="20px"}
          {__("Blogs")}
        </a>
      {/if}

      {if $system['market_enabled']}
        <a href="{$system['system_url']}/market" class="rednote-menu-item {if $page == "market"}active{/if}">
          {include file='__svg_icons.tpl' icon="market" class="rn-menu-icon" width="20px" height="20px"}
          {__("Market")}
        </a>
      {/if}

      {if $system['reels_enabled']}
        <a href="{$system['system_url']}/reels" class="rednote-menu-item {if $page == "reels"}active{/if}">
          {include file='__svg_icons.tpl' icon="reels" class="rn-menu-icon" width="20px" height="20px"}
          {__("Reels")}
        </a>
      {/if}

      {if $system['forums_enabled']}
        <a href="{$system['system_url']}/forums" class="rednote-menu-item {if $page == "forums"}active{/if}">
          {include file='__svg_icons.tpl' icon="forums" class="rn-menu-icon" width="20px" height="20px"}
          {__("Forums")}
        </a>
      {/if}

      {if $user->_logged_in}
        <div class="rednote-menu-divider"></div>

        {if $system['wallet_enabled']}
          <a href="{$system['system_url']}/wallet" class="rednote-menu-item {if $page == "wallet"}active{/if}">
            {include file='__svg_icons.tpl' icon="wallet" class="rn-menu-icon" width="20px" height="20px"}
            {__("Wallet")}
          </a>
        {/if}

        <a href="{$system['system_url']}/settings" class="rednote-menu-item {if $page == "settings"}active{/if}">
          {include file='__svg_icons.tpl' icon="settings" class="rn-menu-icon" width="20px" height="20px"}
          {__("Settings")}
        </a>
      {/if}

      {if $static_pages}
        {foreach $static_pages as $static_page}
          {if $static_page['page_in_sidebar']}
            <a href="{$static_page['url']}" class="rednote-menu-item">
              <img width="20" height="20" class="rn-menu-icon" src="{$static_page['page_icon']}">
              {__($static_page['page_title'])}
            </a>
          {/if}
        {/foreach}
      {/if}
    </div>

    <!-- Login / User -->
    {if $user->_logged_in}
      <div class="rednote-sidebar-footer">
        <a href="{$system['system_url']}/{$user->_data['user_name']}" class="rednote-user-btn">
          <img src="{$user->_data['user_picture']}" class="rednote-user-avatar" alt="">
          <span class="rednote-user-name">
            {if $system['show_usernames_enabled']}
              {$user->_data['user_name']}
            {else}
              {$user->_data['user_firstname']} {$user->_data['user_lastname']}
            {/if}
          </span>
        </a>
      </div>
    {else}
      <a href="{$system['system_url']}/signin" class="rednote-login-btn">
        <i class="fa fa-sign-in-alt mr5"></i> {__("Log in")}
      </a>
      {if $system['registration_enabled']}
        <a href="{$system['system_url']}/signup" class="rednote-signup-btn">{__("Sign Up")}</a>
      {/if}
    {/if}

    <!-- Mobile menu toggle -->
    <div class="rednote-mobile-toggle" data-bs-toggle="sg-offcanvas">
      <i class="fa fa-bars"></i>
    </div>
  </div>
  <!-- SIDEBAR END -->

  <!-- MAIN AREA -->
  <div class="rednote-main">

    <!-- SEARCH BAR -->
    <div class="rednote-header">
      {if $user->_logged_in || (!$user->_logged_in && $system['system_public'])}
        <div class="rednote-search-wrapper">
          {include file='_header.search.tpl'}
        </div>
      {/if}
    </div>

    <!-- CATEGORIES BAR -->
    <div class="rednote-categories-wrapper">
      <!-- Recommended Row (7 categories only) -->
      <div class="rednote-categories">
        {if $selected_category}
          <a href="{$system['system_url']}" class="rednote-category js-rn-show-all {if !$selected_category}active{/if}">
            <i class="fa fa-fire mr5"></i>{__("All")}
          </a>
        {else}
          <div class="rednote-category active js-rn-show-all" data-toggle="all">
            <i class="fa fa-fire mr5"></i>{__("All")}
          </div>
        {/if}
        {foreach $header_categories as $cat}
          {if $cat['category_id'] == $selected_category}
            <div class="rednote-category active">
              <i class="fa {$cat['category_icon']} mr5"></i>{__($cat['category_name'])}
            </div>
          {else}
            <a href="{$system['system_url']}?category={$cat['category_id']}" class="rednote-category">
              <i class="fa {$cat['category_icon']} mr5"></i>{__($cat['category_name'])}
            </a>
          {/if}
        {/foreach}
        <span class="rn-recommended-badge"><i class="fa fa-star"></i> Recommended</span>

        <!-- Keep existing view filters -->
        {if $system['popular_posts_enabled']}
          <a href="{$system['system_url']}/popular" class="rednote-category">{__("Popular")}</a>
        {/if}
        {if $system['discover_posts_enabled']}
          <a href="{$system['system_url']}/discover" class="rednote-category">{__("Discover")}</a>
        {/if}
        {if $user->_logged_in}
          {if $view == "saved"}
            <div class="rednote-category active">{__("Saved")}</div>
          {else}
            <a href="{$system['system_url']}/saved" class="rednote-category">{__("Saved")}</a>
          {/if}
        {/if}
      </div>

      <!-- Expanded All Categories (hidden by default, shown on "All" click) -->
      <div class="rn-all-categories" style="display: none;">
        {foreach $browse_categories as $cat}
          {if $cat['category_id'] == $selected_category}
            <div class="rn-all-cat-item active">
              <i class="fa {$cat['category_icon']}"></i>
              <span>{__($cat['category_name'])}</span>
            </div>
          {else}
            <a href="{$system['system_url']}?category={$cat['category_id']}" class="rn-all-cat-item">
              <i class="fa {$cat['category_icon']}"></i>
              <span>{__($cat['category_name'])}</span>
            </a>
          {/if}
        {/foreach}
      </div>
    </div>

    <!-- CONTENT AREA -->
    <div class="rednote-content">

      {if $view == ""}

        {if $user->_logged_in}
          <!-- Stories -->
          {if $user->_data['can_add_stories'] || ($system['stories_enabled'] && !empty($stories['array']))}
            <div class="rednote-stories-card">
              <div class="rednote-stories-wrapper">
                <div id="stories" data-json='{htmlspecialchars($stories["json"], ENT_QUOTES, 'UTF-8')}'>
                  {if $user->_data['can_add_stories']}
                    <div class="add-story" data-toggle="modal" data-url="posts/story.php?do=create">
                      <div class="img" style="background-image:url({$user->_data['user_picture']});"></div>
                      <div class="add">
                        {include file='__svg_icons.tpl' icon="add" class="main-icon" width="18px" height="18px"}
                      </div>
                    </div>
                  {/if}
                </div>
              </div>
            </div>
          {/if}
          <!-- Stories -->

          <!-- Publisher -->
          {include file='_publisher.tpl' _handle="me" _node_can_monetize_content=$user->_data['can_monetize_content'] _node_monetization_enabled=$user->_data['user_monetization_enabled'] _node_monetization_plans=$user->_data['user_monetization_plans'] _privacy=true}
          <!-- Publisher -->
        {/if}

        {include file='_widget.tpl' widgets=$newsfeed_widgets}

        <!-- Boosted post -->
        {if $boosted_post}
          {include file='_boosted_post.tpl' post=$boosted_post}
        {/if}
        <!-- Boosted post -->

        <!-- Posts Grid -->
        {include file='_posts.tpl' _get="newsfeed"}

      {elseif $view == "popular"}
        {include file='_posts.tpl' _get="popular" _title=__("Popular Posts")}

      {elseif $view == "discover"}
        {include file='_posts.tpl' _get="discover" _title=__("Discover Posts")}

      {elseif $view == "saved"}
        {include file='_posts.tpl' _get="saved" _title=__("Saved Posts")}

      {elseif $view == "scheduled"}
        {include file='_posts.tpl' _get="scheduled" _title=__("Scheduled Posts")}

      {elseif $view == "memories"}
        <div class="page-header mini rounded mb10">
          <div class="circle-1"></div>
          <div class="circle-2"></div>
          <div class="inner">
            <h2>{__("Memories")}</h2>
            <p class="text-lg">{__("Enjoy looking back on your memories")}</p>
          </div>
        </div>
        {include file='_posts.tpl' _get="memories" _title=__("ON THIS DAY") _filter="all"}

      {elseif $view == "blogs"}
        {include file='_posts.tpl' _get="posts_profile" _id=$user->_data['user_id'] _filter="article" _title=__("My Blogs")}

      {elseif $view == "products"}
        {include file='_posts.tpl' _get="posts_profile" _id=$user->_data['user_id'] _filter="product" _title=__("My Products")}

      {elseif $view == "funding"}
        {include file='_posts.tpl' _get="posts_profile" _id=$user->_data['user_id'] _filter="funding" _title=__("My Funding")}

      {elseif $view == "offers"}
        {include file='_posts.tpl' _get="posts_profile" _id=$user->_data['user_id'] _filter="offer" _title=__("My Offers")}

      {elseif $view == "jobs"}
        {include file='_posts.tpl' _get="posts_profile" _id=$user->_data['user_id'] _filter="job" _title=__("My Jobs")}

      {elseif $view == "courses"}
        {include file='_posts.tpl' _get="posts_profile" _id=$user->_data['user_id'] _filter="course" _title=__("My Courses")}

      {elseif $view == "boosted_posts"}
        {if $user->_is_admin || $user->_data['user_subscribed']}
          {include file='_posts.tpl' _get="boosted" _title=__("My Boosted Posts")}
        {else}
          <div class="alert alert-warning">
            <div class="icon"><i class="fa fa-id-card fa-2x"></i></div>
            <div class="text">
              <strong>{__("Membership")}</strong><br>
              {__("Choose the Plan That's Right for You")}, {__("Check the package from")} <a href="{$system['system_url']}/packages">{__("Here")}</a>
            </div>
          </div>
          <div class="text-center">
            <a href="{$system['system_url']}/packages" class="btn btn-primary"><i class="fa fa-rocket mr5"></i>{__("Upgrade to Pro")}</a>
          </div>
        {/if}

      {elseif $view == "watch"}
        {include file='_posts.tpl' _get="discover" _filter="video" _load_more="watch" _title=__("Watch")}

      {/if}

    </div>
    <!-- CONTENT AREA END -->

  </div>
  <!-- MAIN AREA END -->

</div>
<!-- ========== REDNOTE LAYOUT END ========== -->

<!-- ===== BOTTOM NAV (Mobile Only) ===== -->
<nav class="rn-bottom-nav d-md-none">
  {if $user->_logged_in}
    <!-- Home -->
    <a href="{$system['system_url']}" class="rn-bottom-nav-item {if $page == "index" && ($view == "" || $view == "discover" || $view == "popular")}active{/if}">
      <i class="fa fa-home"></i>
      <span>{__("Home")}</span>
    </a>
    <!-- Discover -->
    {if $system['discover_posts_enabled']}
      <a href="{$system['system_url']}/discover" class="rn-bottom-nav-item {if $view == "discover"}active{/if}">
        <i class="fa fa-compass"></i>
        <span>{__("Discover")}</span>
      </a>
    {else}
      <a href="{$system['system_url']}" class="rn-bottom-nav-item">
        <i class="fa fa-compass"></i>
        <span>{__("Discover")}</span>
      </a>
    {/if}
    <!-- Publish (+) Button -->
    <div class="rn-bottom-nav-pub" data-toggle="modal" data-url="posts/publisher.php">
      <i class="fa fa-plus"></i>
    </div>
    <!-- Notifications -->
    <a href="{$system['system_url']}/notifications" class="rn-bottom-nav-item {if $page == "notifications"}active{/if}">
      <i class="fa fa-bell"></i>
      <span>{__("Alerts")}</span>
    </a>
    <!-- Profile / Menu -->
    <div class="rn-bottom-nav-item" id="rn-mobile-menu-btn">
      <i class="fa fa-user"></i>
      <span>{__("Me")}</span>
    </div>
  {else}
    <!-- Guest bottom nav -->
    <a href="{$system['system_url']}" class="rn-bottom-nav-item active">
      <i class="fa fa-home"></i>
      <span>{__("Home")}</span>
    </a>
    <a href="{$system['system_url']}/signin" class="rn-bottom-nav-item">
      <i class="fa fa-sign-in-alt"></i>
      <span>{__("Login")}</span>
    </a>
    {if $system['registration_enabled']}
      <a href="{$system['system_url']}/signup" class="rn-bottom-nav-item" style="color: var(--rednote-primary);">
        <i class="fa fa-user-plus"></i>
        <span>{__("Sign Up")}</span>
      </a>
    {/if}
  {/if}
</nav>

<!-- Sidebar overlay for mobile -->
<div class="rn-sidebar-overlay" id="rn-sidebar-overlay"></div>

{include file='_footer.tpl'}

<script>
$(document).ready(function() {
  // Toggle "All" categories panel
  $(document).on('click', '.js-rn-show-all', function(e) {
    e.preventDefault();
    $('.rn-all-categories').slideToggle(200);
  });

  // Mobile: "Me" button opens sidebar
  $(document).on('click', '#rn-mobile-menu-btn', function() {
    $('.rednote-sidebar').addClass('show');
    $('#rn-sidebar-overlay').addClass('show');
    $('body').css('overflow', 'hidden');
  });

  // Mobile: Close sidebar on overlay click
  $(document).on('click', '#rn-sidebar-overlay', function() {
    $('.rednote-sidebar').removeClass('show');
    $(this).removeClass('show');
    $('body').css('overflow', '');
  });

  // Mobile: Close sidebar when navigating
  $(document).on('click', '.rednote-sidebar .rednote-menu-item', function() {
    if ($(window).width() < 768) {
      $('.rednote-sidebar').removeClass('show');
      $('#rn-sidebar-overlay').removeClass('show');
      $('body').css('overflow', '');
    }
  });

  // Fix bottom nav active state for profile pages
  var currentPath = window.location.pathname;
  if (currentPath.indexOf('/settings') > -1 || currentPath.indexOf('/profile') > -1) {
    $('#rn-mobile-menu-btn').addClass('active');
  }

  // ===== POST CLICK LAYER - Prevent hover opening, control clicks properly =====
  function injectClickLayers() {
    $('.rednote-grid .post').each(function() {
      var post = $(this);
      // Skip if click layer already exists
      if (post.find('.post-card-click-layer').length) return;
      // Skip if post contains a reel thumbnail (handled by reel-fix.js)
      if (post.find('.rn-reel-thumb').length) return;
      // Skip pending/scheduled posts
      if (post.hasClass('pending')) return;

      // Create click layer
      var clickLayer = $('<div class="post-card-click-layer"></div>');
      post.prepend(clickLayer);
    });
  }

  // Inject click layers on load
  injectClickLayers();

  // Handle click on the click layer - navigate to post page
  $(document).on('click', '.rednote-grid .post .post-card-click-layer', function(e) {
    e.preventDefault();
    e.stopPropagation();
    var post = $(this).closest('.post');
    var postId = post.data('id');
    if (postId && site_path) {
      window.location.href = site_path + '/posts/' + postId;
    }
  });

  // Re-inject click layers when new posts are loaded (AJAX)
  if (typeof jQuery !== 'undefined') {
    jQuery(document).ajaxComplete(function() {
      setTimeout(injectClickLayers, 200);
    });
  }

  // Also watch for DOM changes (MutationObserver)
  if (typeof MutationObserver !== 'undefined') {
    var postsObserver = new MutationObserver(function(mutations) {
      var needsUpdate = false;
      for (var i = 0; i < mutations.length; i++) {
        if (mutations[i].addedNodes && mutations[i].addedNodes.length > 0) {
          needsUpdate = true;
          break;
        }
      }
      if (needsUpdate) {
        setTimeout(injectClickLayers, 300);
      }
    });
    var gridEl = document.querySelector('.rednote-grid');
    if (gridEl) {
      postsObserver.observe(gridEl, { childList: true, subtree: true });
    }
  }
});
</script>