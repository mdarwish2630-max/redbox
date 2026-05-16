{* 
  RedNote App-Like Bottom Navigation
  Works on ALL pages for a consistent mobile app experience
*}
<nav class="rn-bottom-nav" id="rn-bottom-nav">
  {if $user->_logged_in}
    <!-- Home -->
    <a href="{$system['system_url']}" class="rn-bottom-nav-item {if $page == "index"}active{/if}" data-rn-nav="home">
      <i class="fa fa-home"></i>
      <span>{__("Home")}</span>
    </a>
    <!-- Discover -->
    {if $system['discover_posts_enabled']}
      <a href="{$system['system_url']}/discover" class="rn-bottom-nav-item {if $view == "discover"}active{/if}" data-rn-nav="discover">
        <i class="fa fa-compass"></i>
        <span>{__("Discover")}</span>
      </a>
    {else}
      <a href="{$system['system_url']}/people" class="rn-bottom-nav-item" data-rn-nav="discover">
        <i class="fa fa-compass"></i>
        <span>{__("Explore")}</span>
      </a>
    {/if}
    <!-- Publish (+) Button -->
    {if $user->_data['can_publish_posts']}
      <div class="rn-bottom-nav-pub" data-toggle="modal" data-url="posts/publisher.php">
        <i class="fa fa-plus"></i>
      </div>
    {else}
      <div class="rn-bottom-nav-pub disabled" title="{__("You can't publish posts")}">
        <i class="fa fa-plus"></i>
      </div>
    {/if}
    <!-- Notifications -->
    <a href="{$system['system_url']}/notifications" class="rn-bottom-nav-item {if $page == "notifications"}active{/if}" data-rn-nav="notifications">
      <i class="fa fa-bell"></i>
      <span>{__("Alerts")}</span>
    </a>
    <!-- Profile / Menu -->
    <div class="rn-bottom-nav-item {if $page == "profile" || $page == "settings"}active{/if}" id="rn-mobile-menu-btn" data-rn-nav="me">
      <i class="fa fa-user"></i>
      <span>{__("Me")}</span>
    </div>
  {else}
    <!-- Guest bottom nav -->
    <a href="{$system['system_url']}" class="rn-bottom-nav-item active" data-rn-nav="home">
      <i class="fa fa-home"></i>
      <span>{__("Home")}</span>
    </a>
    <a href="{$system['system_url']}/signin" class="rn-bottom-nav-item" data-rn-nav="login">
      <i class="fa fa-sign-in-alt"></i>
      <span>{__("Login")}</span>
    </a>
    {if $system['registration_enabled']}
      <a href="{$system['system_url']}/signup" class="rn-bottom-nav-item rn-signup-nav" data-rn-nav="signup">
        <i class="fa fa-user-plus"></i>
        <span>{__("Sign Up")}</span>
      </a>
    {/if}
  {/if}
</nav>

{* Mobile Sidebar Overlay *}
<div class="rn-sidebar-overlay" id="rn-sidebar-overlay"></div>

{* Mobile Sidebar Panel *}
<div class="rn-mobile-sidebar" id="rn-mobile-sidebar">
  <div class="rn-mobile-sidebar-header">
    {if $user->_logged_in}
      <a href="{$system['system_url']}/{$user->_data['user_name']}" class="rn-mobile-sidebar-user">
        <img src="{$user->_data['user_picture']}" class="rn-mobile-sidebar-avatar" alt="">
        <div class="rn-mobile-sidebar-info">
          <span class="rn-mobile-sidebar-name">
            {if $system['show_usernames_enabled']}
              {$user->_data['user_name']}
            {else}
              {$user->_data['user_firstname']} {$user->_data['user_lastname']}
            {/if}
          </span>
          <span class="rn-mobile-sidebar-email">{$user->_data['user_email']}</span>
        </div>
      </a>
    {else}
      <a href="{$system['system_url']}" class="rn-mobile-sidebar-logo">
        {if $system['current_language']|substr:0:2 == 'ar' && $system['system_logo_ar']}
          <img src="{$system['system_uploads']}/{$system['system_logo_ar']}" alt="Logo" style="height: 28px;">
        {elseif $system['system_logo']}
          <img src="{$system['system_uploads']}/{$system['system_logo']}" alt="Logo" style="height: 28px;">
        {else}
          REDNOTE
        {/if}
      </a>
    {/if}
    <div class="rn-mobile-sidebar-close" id="rn-sidebar-close">
      <i class="fa fa-times"></i>
    </div>
  </div>
  <div class="rn-mobile-sidebar-menu">
    {if $user->_logged_in || (!$user->_logged_in && $system['newsfeed_public'])}
      <a href="{$system['system_url']}" class="rn-mobile-sidebar-item {if $page == "index"}active{/if}">
        <i class="fa fa-home"></i>
        <span>{__("News Feed")}</span>
      </a>
    {/if}

    {if $user->_logged_in}
      {if $system['live_enabled']}
        <a href="{$system['system_url']}/live" class="rn-mobile-sidebar-item {if $page == "live"}active{/if}">
          <i class="fa fa-broadcast-tower"></i>
          <span>{__("Live streaming")}</span>
        </a>
      {/if}
      <a href="{$system['system_url']}/messages" class="rn-mobile-sidebar-item {if $page == "messages"}active{/if}">
        <i class="fa fa-comment-dots"></i>
        <span>{__("Messages")}</span>
      </a>
      <a href="{$system['system_url']}/notifications" class="rn-mobile-sidebar-item {if $page == "notifications"}active{/if}">
        <i class="fa fa-bell"></i>
        <span>{__("Notifications")}</span>
      </a>
      <a href="{$system['system_url']}/saved" class="rn-mobile-sidebar-item {if $view == "saved"}active{/if}">
        <i class="fa fa-bookmark"></i>
        <span>{__("Saved")}</span>
      </a>
    {/if}

    <div class="rn-mobile-sidebar-divider"></div>
    <span class="rn-mobile-sidebar-label">{__("Explore")}</span>

    <a href="{$system['system_url']}/people" class="rn-mobile-sidebar-item {if $page == "people"}active{/if}">
      <i class="fa fa-users"></i>
      <span>{__("People")}</span>
    </a>
    {if $system['pages_enabled']}
      <a href="{$system['system_url']}/pages" class="rn-mobile-sidebar-item {if $page == "pages"}active{/if}">
        <i class="fa fa-flag"></i>
        <span>{__("Pages")}</span>
      </a>
    {/if}
    {if $system['groups_enabled']}
      <a href="{$system['system_url']}/groups" class="rn-mobile-sidebar-item {if $page == "groups"}active{/if}">
        <i class="fa fa-users-rectangle"></i>
        <span>{__("Groups")}</span>
      </a>
    {/if}
    {if $system['events_enabled']}
      <a href="{$system['system_url']}/events" class="rn-mobile-sidebar-item {if $page == "events"}active{/if}">
        <i class="fa fa-calendar-alt"></i>
        <span>{__("Events")}</span>
      </a>
    {/if}
    {if $system['reels_enabled']}
      <a href="{$system['system_url']}/reels" class="rn-mobile-sidebar-item {if $page == "reels"}active{/if}">
        <i class="fa fa-film"></i>
        <span>{__("Reels")}</span>
      </a>
    {/if}
    {if $system['blogs_enabled']}
      <a href="{$system['system_url']}/blogs" class="rn-mobile-sidebar-item {if $page == "blogs"}active{/if}">
        <i class="fa fa-pencil-alt"></i>
        <span>{__("Blogs")}</span>
      </a>
    {/if}
    {if $system['market_enabled']}
      <a href="{$system['system_url']}/market" class="rn-mobile-sidebar-item {if $page == "market"}active{/if}">
        <i class="fa fa-shopping-bag"></i>
        <span>{__("Market")}</span>
      </a>
    {/if}
    {if $system['forums_enabled']}
      <a href="{$system['system_url']}/forums" class="rn-mobile-sidebar-item {if $page == "forums"}active{/if}">
        <i class="fa fa-comments"></i>
        <span>{__("Forums")}</span>
      </a>
    {/if}
    {if $system['jobs_enabled']}
      <a href="{$system['system_url']}/jobs" class="rn-mobile-sidebar-item {if $page == "jobs"}active{/if}">
        <i class="fa fa-briefcase"></i>
        <span>{__("Jobs")}</span>
      </a>
    {/if}

    {if $user->_logged_in}
      <div class="rn-mobile-sidebar-divider"></div>
      <span class="rn-mobile-sidebar-label">{__("Account")}</span>

      {if $system['wallet_enabled']}
        <a href="{$system['system_url']}/wallet" class="rn-mobile-sidebar-item {if $page == "wallet"}active{/if}">
          <i class="fa fa-wallet"></i>
          <span>{__("Wallet")}</span>
        </a>
      {/if}
      <a href="{$system['system_url']}/settings" class="rn-mobile-sidebar-item {if $page == "settings"}active{/if}">
        <i class="fa fa-cog"></i>
        <span>{__("Settings")}</span>
      </a>
      {if $user->_is_admin}
        <a href="{$system['system_url']}/admincp" class="rn-mobile-sidebar-item">
          <i class="fa fa-shield-alt"></i>
          <span>{__("Admin Panel")}</span>
        </a>
      {/if}
    {/if}

    {if $user->_logged_in}
      <div class="rn-mobile-sidebar-divider"></div>
      <div class="rn-mobile-sidebar-item rn-mobile-sidebar-logout" data-toggle="modal" data-url="core/signout.php">
        <i class="fa fa-sign-out-alt"></i>
        <span>{__("Sign Out")}</span>
      </div>
    {else}
      <div class="rn-mobile-sidebar-divider"></div>
      <a href="{$system['system_url']}/signin" class="rn-mobile-sidebar-item">
        <i class="fa fa-sign-in-alt"></i>
        <span>{__("Log in")}</span>
      </a>
      {if $system['registration_enabled']}
        <a href="{$system['system_url']}/signup" class="rn-mobile-sidebar-item rn-signup-nav">
          <i class="fa fa-user-plus"></i>
          <span>{__("Sign Up")}</span>
        </a>
      {/if}
    {/if}
  </div>
</div>
