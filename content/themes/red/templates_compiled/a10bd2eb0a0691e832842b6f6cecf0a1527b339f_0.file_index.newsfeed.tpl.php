<?php
/* Smarty version 5.7.0, created on 2026-05-15 09:49:58
  from 'file:index.newsfeed.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_6a06ec46371d97_30430125',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a10bd2eb0a0691e832842b6f6cecf0a1527b339f' => 
    array (
      0 => 'index.newsfeed.tpl',
      1 => 1778863000,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header_rednote.tpl' => 1,
    'file:__svg_icons.tpl' => 15,
    'file:_header.search.tpl' => 2,
    'file:_publisher.tpl' => 1,
    'file:_widget.tpl' => 1,
    'file:_boosted_post.tpl' => 1,
    'file:_posts.tpl' => 14,
    'file:_footer.tpl' => 1,
  ),
))) {
function content_6a06ec46371d97_30430125 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\selfie\\content\\themes\\red\\templates';
$_smarty_tpl->renderSubTemplate('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate('file:_header_rednote.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<!-- ========== REDNOTE LAYOUT ========== -->
<div class="rednote-layout">

  <!-- SIDEBAR -->
  <div class="rednote-sidebar">
    <!-- Close button (mobile only) -->
    <button class="rn-sidebar-close" id="rn-sidebar-close" type="button">
      <i class="fa fa-times"></i>
    </button>

    <!-- Logo -->
    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
" class="rednote-logo">REDNOTE</a>

    <!-- Menu -->
    <div class="rednote-menu">
      <?php if ($_smarty_tpl->getValue('user')->_logged_in || (!$_smarty_tpl->getValue('user')->_logged_in && $_smarty_tpl->getValue('system')['newsfeed_public'])) {?>
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
" class="rednote-menu-item <?php if ($_smarty_tpl->getValue('page') == "index" && ($_smarty_tpl->getValue('view') == '' || $_smarty_tpl->getValue('view') == "discover" || $_smarty_tpl->getValue('view') == "popular")) {?>active<?php }?>">
          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"posts_discover",'class'=>"rn-menu-icon",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Discover");?>

        </a>
      <?php }?>

      <?php if ($_smarty_tpl->getValue('user')->_logged_in) {?>
        <?php if ($_smarty_tpl->getValue('system')['live_enabled']) {?>
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/live" class="rednote-menu-item <?php if ($_smarty_tpl->getValue('page') == "live") {?>active<?php }?>">
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"live",'class'=>"rn-menu-icon",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Live streaming");?>

          </a>
        <?php }?>

        <?php if ($_smarty_tpl->getValue('user')->_data['can_publish_posts']) {?>
          <div class="rednote-menu-item" data-toggle="modal" data-url="posts/publisher.php">
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"newsfeed",'class'=>"rn-menu-icon",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Release");?>

          </div>
        <?php }?>

        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/notifications" class="rednote-menu-item <?php if ($_smarty_tpl->getValue('page') == "notifications") {?>active<?php }?>">
          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"notification",'class'=>"rn-menu-icon",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Notify");?>

        </a>
      <?php }?>

      <div class="rednote-menu-divider"></div>

      <!-- Explore section -->
      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/people" class="rednote-menu-item <?php if ($_smarty_tpl->getValue('page') == "people") {?>active<?php }?>">
        <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"find_people",'class'=>"rn-menu-icon",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("People");?>

      </a>

      <?php if ($_smarty_tpl->getValue('system')['pages_enabled']) {?>
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/pages" class="rednote-menu-item <?php if ($_smarty_tpl->getValue('page') == "pages") {?>active<?php }?>">
          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"pages",'class'=>"rn-menu-icon",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pages");?>

        </a>
      <?php }?>

      <?php if ($_smarty_tpl->getValue('system')['groups_enabled']) {?>
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/groups" class="rednote-menu-item <?php if ($_smarty_tpl->getValue('page') == "groups") {?>active<?php }?>">
          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"groups",'class'=>"rn-menu-icon",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Groups");?>

        </a>
      <?php }?>

      <?php if ($_smarty_tpl->getValue('system')['events_enabled']) {?>
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/events" class="rednote-menu-item <?php if ($_smarty_tpl->getValue('page') == "events") {?>active<?php }?>">
          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"events",'class'=>"rn-menu-icon",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Events");?>

        </a>
      <?php }?>

      <?php if ($_smarty_tpl->getValue('system')['blogs_enabled']) {?>
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/blogs" class="rednote-menu-item <?php if ($_smarty_tpl->getValue('page') == "blogs") {?>active<?php }?>">
          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"blogs",'class'=>"rn-menu-icon",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Blogs");?>

        </a>
      <?php }?>

      <?php if ($_smarty_tpl->getValue('system')['market_enabled']) {?>
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/market" class="rednote-menu-item <?php if ($_smarty_tpl->getValue('page') == "market") {?>active<?php }?>">
          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"market",'class'=>"rn-menu-icon",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Market");?>

        </a>
      <?php }?>

      <?php if ($_smarty_tpl->getValue('system')['reels_enabled']) {?>
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/reels" class="rednote-menu-item <?php if ($_smarty_tpl->getValue('page') == "reels") {?>active<?php }?>">
          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"reels",'class'=>"rn-menu-icon",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Reels");?>

        </a>
      <?php }?>

      <?php if ($_smarty_tpl->getValue('system')['forums_enabled']) {?>
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/forums" class="rednote-menu-item <?php if ($_smarty_tpl->getValue('page') == "forums") {?>active<?php }?>">
          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"forums",'class'=>"rn-menu-icon",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Forums");?>

        </a>
      <?php }?>

      <?php if ($_smarty_tpl->getValue('user')->_logged_in) {?>
        <div class="rednote-menu-divider"></div>

        <?php if ($_smarty_tpl->getValue('system')['wallet_enabled']) {?>
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/wallet" class="rednote-menu-item <?php if ($_smarty_tpl->getValue('page') == "wallet") {?>active<?php }?>">
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"wallet",'class'=>"rn-menu-icon",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Wallet");?>

          </a>
        <?php }?>

        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/settings" class="rednote-menu-item <?php if ($_smarty_tpl->getValue('page') == "settings") {?>active<?php }?>">
          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"settings",'class'=>"rn-menu-icon",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Settings");?>

        </a>
      <?php }?>

      <?php if ($_smarty_tpl->getValue('static_pages')) {?>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('static_pages'), 'static_page');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('static_page')->value) {
$foreach0DoElse = false;
?>
          <?php if ($_smarty_tpl->getValue('static_page')['page_in_sidebar']) {?>
            <a href="<?php echo $_smarty_tpl->getValue('static_page')['url'];?>
" class="rednote-menu-item">
              <img width="20" height="20" class="rn-menu-icon" src="<?php echo $_smarty_tpl->getValue('static_page')['page_icon'];?>
">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('static_page')['page_title']);?>

            </a>
          <?php }?>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
      <?php }?>
    </div>

    <!-- Login / User -->
    <?php if ($_smarty_tpl->getValue('user')->_logged_in) {?>
      <div class="rednote-sidebar-footer">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('user')->_data['user_name'];?>
" class="rednote-user-btn">
          <img src="<?php echo $_smarty_tpl->getValue('user')->_data['user_picture'];?>
" class="rednote-user-avatar" alt="">
          <span class="rednote-user-name">
            <?php if ($_smarty_tpl->getValue('system')['show_usernames_enabled']) {?>
              <?php echo $_smarty_tpl->getValue('user')->_data['user_name'];?>

            <?php } else { ?>
              <?php echo $_smarty_tpl->getValue('user')->_data['user_firstname'];?>
 <?php echo $_smarty_tpl->getValue('user')->_data['user_lastname'];?>

            <?php }?>
          </span>
        </a>
      </div>
    <?php } else { ?>
      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/signin" class="rednote-login-btn">
        <i class="fa fa-sign-in-alt mr5"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Log in");?>

      </a>
      <?php if ($_smarty_tpl->getValue('system')['registration_enabled']) {?>
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/signup" class="rednote-signup-btn"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sign Up");?>
</a>
      <?php }?>
    <?php }?>

  </div>
  <!-- SIDEBAR END -->

  <!-- MAIN AREA -->
  <div class="rednote-main">

    <!-- MOBILE HEADER (App-style: Logo + Search + Hamburger) -->
    <div class="rn-mobile-header">
      <!-- Logo -->
      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
" class="rn-mobile-header-logo">
        <?php if ($_smarty_tpl->getValue('system')['system_logo']) {?>
          <img src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('system')['system_logo'];?>
" alt="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('system')['system_title']);?>
">
        <?php } else { ?>
          <span class="rednote-logo-text">REDNOTE</span>
        <?php }?>
      </a>

      <!-- Search -->
      <?php if ($_smarty_tpl->getValue('user')->_logged_in || (!$_smarty_tpl->getValue('user')->_logged_in && $_smarty_tpl->getValue('system')['system_public'])) {?>
        <div class="rn-mobile-header-search">
          <?php $_smarty_tpl->renderSubTemplate('file:_header.search.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        </div>
      <?php }?>

      <!-- Hamburger Menu -->
      <button class="rn-mobile-header-menu" id="rn-mobile-menu-btn" type="button">
        <i class="fa fa-bars"></i>
      </button>
    </div>
    <!-- MOBILE HEADER END -->

    <!-- SEARCH BAR (Desktop/Tablet) -->
    <div class="rednote-header">
      <?php if ($_smarty_tpl->getValue('user')->_logged_in || (!$_smarty_tpl->getValue('user')->_logged_in && $_smarty_tpl->getValue('system')['system_public'])) {?>
        <div class="rednote-search-wrapper">
          <?php $_smarty_tpl->renderSubTemplate('file:_header.search.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        </div>
      <?php }?>
    </div>

    <!-- CATEGORIES BAR -->
    <div class="rednote-categories-wrapper">
      <!-- Recommended Row (7 categories only) -->
      <div class="rednote-categories">
        <?php if ($_smarty_tpl->getValue('selected_category')) {?>
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
" class="rednote-category js-rn-show-all <?php if (!$_smarty_tpl->getValue('selected_category')) {?>active<?php }?>">
            <i class="fa fa-fire mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("All");?>

          </a>
        <?php } else { ?>
          <div class="rednote-category active js-rn-show-all" data-toggle="all">
            <i class="fa fa-fire mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("All");?>

          </div>
        <?php }?>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('header_categories'), 'cat');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('cat')->value) {
$foreach1DoElse = false;
?>
          <?php if ($_smarty_tpl->getValue('cat')['category_id'] == $_smarty_tpl->getValue('selected_category')) {?>
            <div class="rednote-category active">
              <i class="fa <?php echo $_smarty_tpl->getValue('cat')['category_icon'];?>
 mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('cat')['category_name']);?>

            </div>
          <?php } else { ?>
            <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
?category=<?php echo $_smarty_tpl->getValue('cat')['category_id'];?>
" class="rednote-category">
              <i class="fa <?php echo $_smarty_tpl->getValue('cat')['category_icon'];?>
 mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('cat')['category_name']);?>

            </a>
          <?php }?>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        <span class="rn-recommended-badge"><i class="fa fa-star"></i> Recommended</span>

        <!-- Keep existing view filters -->
        <?php if ($_smarty_tpl->getValue('system')['popular_posts_enabled']) {?>
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/popular" class="rednote-category"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Popular");?>
</a>
        <?php }?>
        <?php if ($_smarty_tpl->getValue('system')['discover_posts_enabled']) {?>
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/discover" class="rednote-category"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Discover");?>
</a>
        <?php }?>
        <?php if ($_smarty_tpl->getValue('user')->_logged_in) {?>
          <?php if ($_smarty_tpl->getValue('view') == "saved") {?>
            <div class="rednote-category active"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Saved");?>
</div>
          <?php } else { ?>
            <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/saved" class="rednote-category"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Saved");?>
</a>
          <?php }?>
        <?php }?>
      </div>

      <!-- Expanded All Categories (hidden by default, shown on "All" click) -->
      <div class="rn-all-categories" style="display: none;">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('browse_categories'), 'cat');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('cat')->value) {
$foreach2DoElse = false;
?>
          <?php if ($_smarty_tpl->getValue('cat')['category_id'] == $_smarty_tpl->getValue('selected_category')) {?>
            <div class="rn-all-cat-item active">
              <i class="fa <?php echo $_smarty_tpl->getValue('cat')['category_icon'];?>
"></i>
              <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('cat')['category_name']);?>
</span>
            </div>
          <?php } else { ?>
            <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
?category=<?php echo $_smarty_tpl->getValue('cat')['category_id'];?>
" class="rn-all-cat-item">
              <i class="fa <?php echo $_smarty_tpl->getValue('cat')['category_icon'];?>
"></i>
              <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('cat')['category_name']);?>
</span>
            </a>
          <?php }?>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
      </div>
    </div>

    <!-- CONTENT AREA -->
    <div class="rednote-content">

      <?php if ($_smarty_tpl->getValue('view') == '') {?>

        <?php if ($_smarty_tpl->getValue('user')->_logged_in) {?>
          <!-- Stories -->
          <?php if ($_smarty_tpl->getValue('user')->_data['can_add_stories'] || ($_smarty_tpl->getValue('system')['stories_enabled'] && !( !true || empty($_smarty_tpl->getValue('stories')['array'])))) {?>
            <div class="rednote-stories-card">
              <div class="rednote-stories-wrapper">
                <div id="stories" data-json='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('htmlspecialchars')($_smarty_tpl->getValue('stories')["json"],ENT_QUOTES,'UTF-8');?>
'>
                  <?php if ($_smarty_tpl->getValue('user')->_data['can_add_stories']) {?>
                    <div class="add-story" data-toggle="modal" data-url="posts/story.php?do=create">
                      <div class="img" style="background-image:url(<?php echo $_smarty_tpl->getValue('user')->_data['user_picture'];?>
);"></div>
                      <div class="add">
                        <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"add",'class'=>"main-icon",'width'=>"18px",'height'=>"18px"), (int) 0, $_smarty_current_dir);
?>
                      </div>
                    </div>
                  <?php }?>
                </div>
              </div>
            </div>
          <?php }?>
          <!-- Stories -->

          <!-- Publisher -->
          <?php $_smarty_tpl->renderSubTemplate('file:_publisher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_handle'=>"me",'_node_can_monetize_content'=>$_smarty_tpl->getValue('user')->_data['can_monetize_content'],'_node_monetization_enabled'=>$_smarty_tpl->getValue('user')->_data['user_monetization_enabled'],'_node_monetization_plans'=>$_smarty_tpl->getValue('user')->_data['user_monetization_plans'],'_privacy'=>true), (int) 0, $_smarty_current_dir);
?>
          <!-- Publisher -->
        <?php }?>

        <?php $_smarty_tpl->renderSubTemplate('file:_widget.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('widgets'=>$_smarty_tpl->getValue('newsfeed_widgets')), (int) 0, $_smarty_current_dir);
?>

        <!-- Boosted post -->
        <?php if ($_smarty_tpl->getValue('boosted_post')) {?>
          <?php $_smarty_tpl->renderSubTemplate('file:_boosted_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('post'=>$_smarty_tpl->getValue('boosted_post')), (int) 0, $_smarty_current_dir);
?>
        <?php }?>
        <!-- Boosted post -->

        <!-- Posts Grid -->
        <?php $_smarty_tpl->renderSubTemplate('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"newsfeed"), (int) 0, $_smarty_current_dir);
?>

      <?php } elseif ($_smarty_tpl->getValue('view') == "popular") {?>
        <?php $_smarty_tpl->renderSubTemplate('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"popular",'_title'=>$_smarty_tpl->getSmarty()->getModifierCallback('__')("Popular Posts")), (int) 0, $_smarty_current_dir);
?>

      <?php } elseif ($_smarty_tpl->getValue('view') == "discover") {?>
        <?php $_smarty_tpl->renderSubTemplate('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"discover",'_title'=>$_smarty_tpl->getSmarty()->getModifierCallback('__')("Discover Posts")), (int) 0, $_smarty_current_dir);
?>

      <?php } elseif ($_smarty_tpl->getValue('view') == "saved") {?>
        <?php $_smarty_tpl->renderSubTemplate('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"saved",'_title'=>$_smarty_tpl->getSmarty()->getModifierCallback('__')("Saved Posts")), (int) 0, $_smarty_current_dir);
?>

      <?php } elseif ($_smarty_tpl->getValue('view') == "scheduled") {?>
        <?php $_smarty_tpl->renderSubTemplate('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"scheduled",'_title'=>$_smarty_tpl->getSmarty()->getModifierCallback('__')("Scheduled Posts")), (int) 0, $_smarty_current_dir);
?>

      <?php } elseif ($_smarty_tpl->getValue('view') == "memories") {?>
        <div class="page-header mini rounded mb10">
          <div class="circle-1"></div>
          <div class="circle-2"></div>
          <div class="inner">
            <h2><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Memories");?>
</h2>
            <p class="text-lg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Enjoy looking back on your memories");?>
</p>
          </div>
        </div>
        <?php $_smarty_tpl->renderSubTemplate('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"memories",'_title'=>$_smarty_tpl->getSmarty()->getModifierCallback('__')("ON THIS DAY"),'_filter'=>"all"), (int) 0, $_smarty_current_dir);
?>

      <?php } elseif ($_smarty_tpl->getValue('view') == "blogs") {?>
        <?php $_smarty_tpl->renderSubTemplate('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"posts_profile",'_id'=>$_smarty_tpl->getValue('user')->_data['user_id'],'_filter'=>"article",'_title'=>$_smarty_tpl->getSmarty()->getModifierCallback('__')("My Blogs")), (int) 0, $_smarty_current_dir);
?>

      <?php } elseif ($_smarty_tpl->getValue('view') == "products") {?>
        <?php $_smarty_tpl->renderSubTemplate('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"posts_profile",'_id'=>$_smarty_tpl->getValue('user')->_data['user_id'],'_filter'=>"product",'_title'=>$_smarty_tpl->getSmarty()->getModifierCallback('__')("My Products")), (int) 0, $_smarty_current_dir);
?>

      <?php } elseif ($_smarty_tpl->getValue('view') == "funding") {?>
        <?php $_smarty_tpl->renderSubTemplate('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"posts_profile",'_id'=>$_smarty_tpl->getValue('user')->_data['user_id'],'_filter'=>"funding",'_title'=>$_smarty_tpl->getSmarty()->getModifierCallback('__')("My Funding")), (int) 0, $_smarty_current_dir);
?>

      <?php } elseif ($_smarty_tpl->getValue('view') == "offers") {?>
        <?php $_smarty_tpl->renderSubTemplate('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"posts_profile",'_id'=>$_smarty_tpl->getValue('user')->_data['user_id'],'_filter'=>"offer",'_title'=>$_smarty_tpl->getSmarty()->getModifierCallback('__')("My Offers")), (int) 0, $_smarty_current_dir);
?>

      <?php } elseif ($_smarty_tpl->getValue('view') == "jobs") {?>
        <?php $_smarty_tpl->renderSubTemplate('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"posts_profile",'_id'=>$_smarty_tpl->getValue('user')->_data['user_id'],'_filter'=>"job",'_title'=>$_smarty_tpl->getSmarty()->getModifierCallback('__')("My Jobs")), (int) 0, $_smarty_current_dir);
?>

      <?php } elseif ($_smarty_tpl->getValue('view') == "courses") {?>
        <?php $_smarty_tpl->renderSubTemplate('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"posts_profile",'_id'=>$_smarty_tpl->getValue('user')->_data['user_id'],'_filter'=>"course",'_title'=>$_smarty_tpl->getSmarty()->getModifierCallback('__')("My Courses")), (int) 0, $_smarty_current_dir);
?>

      <?php } elseif ($_smarty_tpl->getValue('view') == "boosted_posts") {?>
        <?php if ($_smarty_tpl->getValue('user')->_is_admin || $_smarty_tpl->getValue('user')->_data['user_subscribed']) {?>
          <?php $_smarty_tpl->renderSubTemplate('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"boosted",'_title'=>$_smarty_tpl->getSmarty()->getModifierCallback('__')("My Boosted Posts")), (int) 0, $_smarty_current_dir);
?>
        <?php } else { ?>
          <div class="alert alert-warning">
            <div class="icon"><i class="fa fa-id-card fa-2x"></i></div>
            <div class="text">
              <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Membership");?>
</strong><br>
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Choose the Plan That's Right for You");?>
, <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Check the package from");?>
 <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/packages"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Here");?>
</a>
            </div>
          </div>
          <div class="text-center">
            <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/packages" class="btn btn-primary"><i class="fa fa-rocket mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Upgrade to Pro");?>
</a>
          </div>
        <?php }?>

      <?php } elseif ($_smarty_tpl->getValue('view') == "watch") {?>
        <?php $_smarty_tpl->renderSubTemplate('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"discover",'_filter'=>"video",'_load_more'=>"watch",'_title'=>$_smarty_tpl->getSmarty()->getModifierCallback('__')("Watch")), (int) 0, $_smarty_current_dir);
?>

      <?php }?>

    </div>
    <!-- CONTENT AREA END -->

  </div>
  <!-- MAIN AREA END -->

</div>
<!-- ========== REDNOTE LAYOUT END ========== -->

<!-- ===== BOTTOM NAV (Mobile Only) ===== -->
<nav class="rn-bottom-nav d-md-none">
  <?php if ($_smarty_tpl->getValue('user')->_logged_in) {?>
    <!-- Home -->
    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
" class="rn-bottom-nav-item <?php if ($_smarty_tpl->getValue('page') == "index" && ($_smarty_tpl->getValue('view') == '' || $_smarty_tpl->getValue('view') == "discover" || $_smarty_tpl->getValue('view') == "popular")) {?>active<?php }?>">
      <i class="fa fa-home"></i>
      <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Home");?>
</span>
    </a>
    <!-- Discover -->
    <?php if ($_smarty_tpl->getValue('system')['discover_posts_enabled']) {?>
      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/discover" class="rn-bottom-nav-item <?php if ($_smarty_tpl->getValue('view') == "discover") {?>active<?php }?>">
        <i class="fa fa-compass"></i>
        <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Discover");?>
</span>
      </a>
    <?php } else { ?>
      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
" class="rn-bottom-nav-item">
        <i class="fa fa-compass"></i>
        <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Discover");?>
</span>
      </a>
    <?php }?>
    <!-- Publish (+) Button -->
    <div class="rn-bottom-nav-pub" data-toggle="modal" data-url="posts/publisher.php">
      <i class="fa fa-plus"></i>
    </div>
    <!-- Notifications -->
    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/notifications" class="rn-bottom-nav-item <?php if ($_smarty_tpl->getValue('page') == "notifications") {?>active<?php }?>">
      <i class="fa fa-bell"></i>
      <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Alerts");?>
</span>
    </a>
    <!-- Profile / Menu -->
    <div class="rn-bottom-nav-item" id="rn-mobile-menu-btn">
      <i class="fa fa-user"></i>
      <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Me");?>
</span>
    </div>
  <?php } else { ?>
    <!-- Guest bottom nav -->
    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
" class="rn-bottom-nav-item active">
      <i class="fa fa-home"></i>
      <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Home");?>
</span>
    </a>
    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/signin" class="rn-bottom-nav-item">
      <i class="fa fa-sign-in-alt"></i>
      <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Login");?>
</span>
    </a>
    <?php if ($_smarty_tpl->getValue('system')['registration_enabled']) {?>
      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/signup" class="rn-bottom-nav-item" style="color: var(--rednote-primary);">
        <i class="fa fa-user-plus"></i>
        <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sign Up");?>
</span>
      </a>
    <?php }?>
  <?php }?>
</nav>

<!-- Sidebar overlay for mobile -->
<div class="rn-sidebar-overlay" id="rn-sidebar-overlay"></div>

<?php $_smarty_tpl->renderSubTemplate('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php echo '<script'; ?>
>
$(document).ready(function() {
  // Toggle "All" categories panel
  $(document).on('click', '.js-rn-show-all', function(e) {
    e.preventDefault();
    $('.rn-all-categories').slideToggle(200);
  });

  // Helper: open mobile sidebar
  function openSidebar() {
    $('.rednote-sidebar').addClass('show');
    $('#rn-sidebar-overlay').addClass('show');
    $('body').css('overflow', 'hidden');
  }

  // Helper: close mobile sidebar
  function closeSidebar() {
    $('.rednote-sidebar').removeClass('show');
    $('#rn-sidebar-overlay').removeClass('show');
    $('body').css('overflow', '');
  }

  // Mobile: hamburger button opens sidebar
  $(document).on('click', '#rn-mobile-menu-btn', function(e) {
    e.preventDefault();
    e.stopPropagation();
    openSidebar();
  });

  // Mobile: close button on sidebar
  $(document).on('click', '#rn-sidebar-close', function(e) {
    e.preventDefault();
    e.stopPropagation();
    closeSidebar();
  });

  // Mobile: Close sidebar on overlay click
  $(document).on('click', '#rn-sidebar-overlay', function() {
    closeSidebar();
  });

  // Mobile: Close sidebar when navigating (menu item click)
  $(document).on('click', '.rednote-sidebar a.rednote-menu-item, .rednote-sidebar .rednote-user-btn', function() {
    if ($(window).width() < 992) {
      closeSidebar();
    }
  });

  // Mobile: Close sidebar on Escape key
  $(document).on('keydown', function(e) {
    if (e.key === 'Escape') {
      closeSidebar();
    }
  });

  // Fix bottom nav active state for profile/settings pages
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
<?php echo '</script'; ?>
><?php }
}
