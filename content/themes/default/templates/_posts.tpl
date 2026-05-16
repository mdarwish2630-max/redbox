<!-- posts-filter -->
<div class="posts-filter">
  {if in_array($_get, ['newsfeed', 'popular', 'discover'])}
    {if !$system['popular_posts_enabled'] && !$system['discover_posts_enabled']}
      <span>{if $_title}{$_title}{else}{__("Recent Updates")}{/if}</span>
    {else}
      <a href="#" data-bs-toggle="dropdown" class="dropdown-toggle countries-filter">
        <span>{if $_title}{$_title}{else}{__("Recent Updates")}{/if}</span>
      </a>
      <div class="dropdown-menu">
        <a href="{$system['system_url']}" class="dropdown-item">
          {include file='__svg_icons.tpl' icon="newsfeed" class="main-icon mr10" width="24px" height="24px"}
          {__("Recent Updates")}
        </a>
        {if $system['popular_posts_enabled']}
          <a href="{$system['system_url']}/popular" class="dropdown-item">
            {include file='__svg_icons.tpl' icon="popularity" class="main-icon mr10" width="24px" height="24px"}
            {__("Popular Posts")}
          </a>
        {/if}
        {if $system['discover_posts_enabled']}
          <a href="{$system['system_url']}/discover" class="dropdown-item">
            {include file='__svg_icons.tpl' icon="posts_discover" class="main-icon mr10" width="24px" height="24px"}
            {__("Discover Posts")}
          </a>
        {/if}
      </div>
    {/if}
  {else}
    <span>{if $_title}{$_title}{else}{__("Recent Updates")}{/if}</span>
  {/if}

  <div class="float-end">

    <!-- newsfeed location filter -->
    {if $system['newsfeed_location_filter_enabled'] && in_array($page, ['index', 'group', 'event']) && $view != "scheduled" && $view != "boosted_posts" && (!$_filter || $view == "watch")}
      <a href="#" data-bs-toggle="dropdown" class="dropdown-toggle countries-filter" id="rn-country-filter-btn">
        <i class="fa fa-globe fa-fw"></i>
        {if $selected_country}
          <span id="rn-country-filter-name">{$selected_country['country_name']}</span>
          {if $geo_auto_detected && !$user_country_override}
            <i class="fa fa-location-crosshairs fa-xs ml5" style="color: #0d6efd;" title="{__("Auto-detected")}"></i>
          {/if}
        {else}
          <span id="rn-country-filter-name">{__("All Countries")}</span>
        {/if}
      </a>
      <div class="dropdown-menu dropdown-menu-end countries-dropdown">
        <div class="js_scroller">
          <a class="dropdown-item {if !$selected_country}active{/if}" href="?country=all">
            <i class="fa fa-globe fa-fw mr5"></i>{__("All Countries")}
          </a>
          {if $geo_country && $selected_country}
            <a class="dropdown-item rn-geo-country-link" href="?country={$geo_country['country_name_native']}" style="background: #f0f6ff; font-weight: 500;">
              <i class="fa fa-location-crosshairs fa-fw mr5" style="color: #0d6efd;"></i>{$geo_country['country_name']}
              <small class="text-muted ml10">({__("My Location")})</small>
            </a>
          {/if}
          {foreach $countries as $country}
            <a class="dropdown-item" href="?country={$country['country_name_native']}">
              {$country['country_name']}
            </a>
          {/foreach}
        </div>
      </div>
    {/if}
    <!-- newsfeed location filter -->

    {if $user->_logged_in && !$_filter && !$_query}
      <div class="btn-group btn-group-sm js_posts-filter ml10" data-value="all" title='{__("All")}'>
        <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" data-display="static">
          <i class="btn-group-icon fa fa-bars fa-fw"></i> <span class="btn-group-text">{__("All")}</span>
        </button>
        <div class="dropdown-menu dropdown-menu-end">
          <div class="js_scroller">
            <div class="dropdown-item pointer" data-title='{__("All")}' data-value="all">
              {include file='__svg_icons.tpl' icon="newsfeed" class="main-icon mr10" width="24px" height="24px"}
              {__("All")}
            </div>
            <div class="dropdown-item pointer" data-title='{__("Text")}' data-value="">
              {include file='__svg_icons.tpl' icon="comments" class="main-icon mr10" width="24px" height="24px"}
              {__("Text")}
            </div>
            <div class="dropdown-item pointer" data-title='{__("Links")}' data-value="link">
              {include file='__svg_icons.tpl' icon="links" class="main-icon mr10" width="24px" height="24px"}
              {__("Links")}</div>
            <div class="dropdown-item pointer" data-title='{__("Media")}' data-value="media">
              {include file='__svg_icons.tpl' icon="media" class="main-icon mr10" width="24px" height="24px"}
              {__("Media")}
            </div>
            {if $system['live_enabled'] && $_get != "posts_page" && $_get != "posts_group" && $_get != "posts_event"}
              <div class="dropdown-item pointer" data-title='{__("Live")}' data-value="live">
                {include file='__svg_icons.tpl' icon="live" class="main-icon mr10" width="24px" height="24px"}
                {__("Live")}
              </div>
            {/if}
            <div class="dropdown-item pointer" data-title='{__("Photos")}' data-value="photos">
              {include file='__svg_icons.tpl' icon="photos" class="main-icon mr10" width="24px" height="24px"}
              {__("Photos")}
            </div>
            {if $system['geolocation_enabled']}
              <div class="dropdown-item pointer" data-title='{__("Maps")}' data-value="map">
                {include file='__svg_icons.tpl' icon="map" class="main-icon mr10" width="24px" height="24px"}
                {__("Maps")}
              </div>
            {/if}
            {if $system['blogs_enabled']}
              <div class="dropdown-item pointer" data-title='{__("Blogs")}' data-value="article">
                {include file='__svg_icons.tpl' icon="blogs" class="main-icon mr10" width="24px" height="24px"}
                {__("Blogs")}
              </div>
            {/if}
            {if $system['market_enabled'] && $_get != "posts_page" && $_get != "posts_group" && $_get != "posts_event"}
              <div class="dropdown-item pointer" data-title='{__("Products")}' data-value="product">
                {include file='__svg_icons.tpl' icon="products" class="main-icon mr10" width="24px" height="24px"}
                {__("Products")}
              </div>
            {/if}
            {if $system['funding_enabled'] && $_get != "posts_page" && $_get != "posts_group" && $_get != "posts_event"}
              <div class="dropdown-item pointer" data-title='{__("Funding")}' data-value="funding">
                {include file='__svg_icons.tpl' icon="funding" class="main-icon mr10" width="24px" height="24px"}
                {__("Funding")}
              </div>
            {/if}
            {if $system['offers_enabled']}
              <div class="dropdown-item pointer" data-title='{__("Offers")}' data-value="offer">
                {include file='__svg_icons.tpl' icon="offers" class="main-icon mr10" width="24px" height="24px"}
                {__("Offers")}
              </div>
            {/if}
            {if $system['jobs_enabled']}
              <div class="dropdown-item pointer" data-title='{__("Jobs")}' data-value="job">
                {include file='__svg_icons.tpl' icon="jobs" class="main-icon mr10" width="24px" height="24px"}
                {__("Jobs")}
              </div>
            {/if}
            {if $system['courses_enabled']}
              <div class="dropdown-item pointer" data-title='{__("Courses")}' data-value="course">
                {include file='__svg_icons.tpl' icon="courses" class="main-icon mr10" width="24px" height="24px"}
                {__("Courses")}
              </div>
            {/if}
            {if $system['polls_enabled']}
              <div class="dropdown-item pointer" data-title='{__("Polls")}' data-value="poll">
                {include file='__svg_icons.tpl' icon="polls" class="main-icon mr10" width="24px" height="24px"}
                {__("Polls")}
              </div>
            {/if}
            {if $system['reels_enabled']}
              <div class="dropdown-item pointer" data-title='{__("Reels")}' data-value="reel">
                {include file='__svg_icons.tpl' icon="reels" class="main-icon mr10" width="24px" height="24px"}
                {__("Reels")}
              </div>
            {/if}
            {if $system['videos_enabled']}
              <div class="dropdown-item pointer" data-title='{__("Videos")}' data-value="video">
                {include file='__svg_icons.tpl' icon="videos" class="main-icon mr10" width="24px" height="24px"}
                {__("Videos")}
              </div>
            {/if}
            {if $system['audio_enabled']}
              <div class="dropdown-item pointer" data-title='{__("Audios")}' data-value="audio">
                {include file='__svg_icons.tpl' icon="audios" class="main-icon mr10" width="24px" height="24px"}
                {__("Audios")}
              </div>
            {/if}
            {if $system['file_enabled']}
              <div class="dropdown-item pointer" data-title='{__("Files")}' data-value="file">
                {include file='__svg_icons.tpl' icon="files" class="main-icon mr10" width="24px" height="24px"}
                {__("Files")}
              </div>
            {/if}
            {if $system['merits_enabled']}
              <div class="dropdown-item pointer" data-title='{__("Merits")}' data-value="merit">
                {include file='__svg_icons.tpl' icon="merits" class="main-icon mr10" width="24px" height="24px"}
                {__("Merits")}
              </div>
            {/if}
          </div>
        </div>
      </div>
    {elseif $_filter == "article"}
      {if $user->_data['can_write_blogs']}
        <a href="{$system['system_url']}/blogs/new" class="btn btn-sm btn-primary">
          {__("Create Blog")}
        </a>
      {/if}
    {elseif $_filter == "product" && !$_query}
      {if $system['market_enabled'] && !in_array($_get, ['posts_page', 'posts_group', 'posts_event'])}
        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-url="posts/product.php?do=create">
          {__("Create Product")}
        </button>
      {/if}
    {elseif $_filter == "funding"}
      {if $user->_data['can_raise_funding'] && !in_array($_get, ['posts_page', 'posts_group', 'posts_event'])}
        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-url="posts/funding.php?do=create">
          {__("Create Funding")}
        </button>
      {/if}

    {elseif $_filter == "offer"}
      {if $system['offers_enabled'] && !in_array($_get, ['posts_page', 'posts_group', 'posts_event'])}
        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-url="posts/offer.php?do=create">
          {__("Create Offer")}
        </button>
      {/if}

    {elseif $_filter == "job"}
      {if $system['jobs_enabled'] && !in_array($_get, ['posts_page', 'posts_group', 'posts_event'])}
        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-url="posts/job.php?do=create">
          {__("Create Job")}
        </button>
      {/if}

    {elseif $_filter == "course"}
      {if $user->_data['can_create_courses'] && !in_array($_get, ['posts_page', 'posts_group', 'posts_event'])}
        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-url="posts/course.php?do=create">
          {__("Create Course")}
        </button>
      {/if}
    {/if}

  </div>
</div>
<!-- posts-filter -->

<!-- posts-loader -->
<div class="post x-hidden js_posts_loader">
  <div class="post-body with-loader">
    <div class="panel-effect">
      <div class="fake-effect fe-0"></div>
      <div class="fake-effect fe-1"></div>
      <div class="fake-effect fe-2"></div>
      <div class="fake-effect fe-3"></div>
      <div class="fake-effect fe-4"></div>
      <div class="fake-effect fe-5"></div>
      <div class="fake-effect fe-6"></div>
      <div class="fake-effect fe-7"></div>
      <div class="fake-effect fe-8"></div>
      <div class="fake-effect fe-9"></div>
      <div class="fake-effect fe-10"></div>
      <div class="fake-effect fe-11"></div>
    </div>
  </div>
</div>
<!-- posts-loader -->

<!-- posts staging -->
<button class="btn btn-primary rounded-pill posts-staging-btn js_view-staging-posts">
  {__("View")} <span>0</span> {__("New Posts")}
</button>

<div class="js_posts_stream_staging" style="display: none;"></div>
<!-- posts staging -->

<!-- Redbox: Geo-detected country banner -->
{if $geo_auto_detected && $selected_country && !$user_country_override}
<div class="rn-geo-banner" id="rn-geo-banner">
  <div class="rn-geo-banner-inner">
    <i class="fa fa-location-dot"></i>
    <span>{__("Showing posts from")} <strong>{$selected_country['country_name']}</strong> {__("based on your location")}</span>
    <a href="?country=all" class="rn-geo-banner-dismiss" title="{__("Show all countries")}">
      <i class="fa fa-times"></i>
    </a>
  </div>
</div>
{/if}
<!-- end geo banner -->

<!-- Redbox: Switched to global banner (hidden by default, shown via JS when country posts exhausted) -->
<div class="rn-global-banner" id="rn-global-banner" style="display: none;">
  <div class="rn-global-banner-inner">
    <i class="fa fa-globe"></i>
    <span id="rn-global-banner-text">{__("No more local posts. Showing posts from around the world.")}</span>
    <a href="javascript:void(0)" class="rn-global-banner-back" id="rn-global-banner-back" style="display: none;">
      <i class="fa fa-arrow-left"></i>
      <span id="rn-global-banner-back-text"></span>
    </a>
  </div>
</div>
<!-- end global banner -->

<!-- posts stream -->
<div class="js_posts_stream" data-get="{$_get}" data-filter="{if $_filter}{$_filter}{else}all{/if}" data-country="{if $selected_country}{$selected_country['country_id']}{else}all{/if}" {if $_id}data-id="{$_id}" {/if} {if $_query}data-query="{$_query}" {/if}>
  {if $posts}
    <ul>
      <!-- posts -->
      {foreach $posts as $post}
        {include file='__feeds_post.tpl' _get=$_get}
      {/foreach}
      <!-- posts -->
    </ul>

    <!-- see-more -->
    <div class="alert alert-post see-more js_see-more js_see-more-infinite" data-get="{if $_load_more}{$_load_more}{else}{$_get}{/if}" data-filter="{if $_filter}{$_filter}{else}all{/if}" data-country="{if $selected_country}{$selected_country['country_id']}{else}all{/if}" {if $_id}data-id="{$_id}" {/if} {if $_query}data-query="{$_query}" {/if}>
      <span>{__("More Stories")}</span>
      <div class="loader loader_small x-hidden"></div>
    </div>
    <!-- see-more -->
  {else}
    <div class="js_posts_stream" data-get="{$_get}" data-filter="{if $_filter}{$_filter}{else}all{/if}" data-country="{if $selected_country}{$selected_country['country_id']}{else}all{/if}" {if $_id}data-id="{$_id}" {/if}>
      <ul>
        {include file='_no_data.tpl'}
      </ul>
    </div>
  {/if}
</div>
<!-- posts stream -->