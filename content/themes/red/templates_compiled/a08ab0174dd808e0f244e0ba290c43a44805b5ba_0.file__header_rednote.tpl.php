<?php
/* Smarty version 5.7.0, created on 2026-04-24 19:09:36
  from 'file:_header_rednote.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_69ebbff0b4db22_43332994',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a08ab0174dd808e0f244e0ba290c43a44805b5ba' => 
    array (
      0 => '_header_rednote.tpl',
      1 => 1776868718,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_ads.tpl' => 1,
  ),
))) {
function content_69ebbff0b4db22_43332994 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\selfie\\content\\themes\\red\\templates';
if (!$_smarty_tpl->getValue('user')->_logged_in) {?>
  <body data-hash-tok="<?php echo $_smarty_tpl->getValue('session_hash')['token'];?>
" data-hash-pos="<?php echo $_smarty_tpl->getValue('session_hash')['position'];?>
" <?php if ($_smarty_tpl->getValue('system')['theme_mode_night']) {?>data-bs-theme="dark" <?php }?> class="<?php if ($_smarty_tpl->getValue('system')['theme_mode_night']) {?>night-mode<?php }?> visitor n_chat <?php if ($_smarty_tpl->getValue('page') == 'index' && !$_smarty_tpl->getValue('system')['newsfeed_public']) {?>index-body<?php }?>" <?php if ($_smarty_tpl->getValue('page') == 'profile' && $_smarty_tpl->getValue('system')['system_profile_background_enabled'] && $_smarty_tpl->getValue('profile')['user_profile_background']) {?>style="background: url(<?php echo $_smarty_tpl->getValue('profile')['user_profile_background'];?>
) fixed !important; background-size: 100% auto;" <?php }?>>
<?php } else { ?>
  <body data-hash-tok="<?php echo $_smarty_tpl->getValue('session_hash')['token'];?>
" data-hash-pos="<?php echo $_smarty_tpl->getValue('session_hash')['position'];?>
" data-chat-enabled="<?php echo $_smarty_tpl->getValue('user')->_data['user_chat_enabled'];?>
" <?php if ($_smarty_tpl->getValue('system')['theme_mode_night']) {?>data-bs-theme="dark" <?php }?> class="<?php if ($_smarty_tpl->getValue('system')['theme_mode_night']) {?>night-mode<?php }?> <?php if (!$_smarty_tpl->getValue('system')['chat_enabled'] || $_smarty_tpl->getValue('user')->_data['user_privacy_chat'] == "me") {?>n_chat<?php }
if ($_smarty_tpl->getValue('system')['activation_enabled'] && !$_smarty_tpl->getValue('system')['activation_required'] && !$_smarty_tpl->getValue('user')->_data['user_activated']) {?> n_activated<?php }
if (!$_smarty_tpl->getValue('system')['system_live']) {?> n_live<?php }?>" <?php if ($_smarty_tpl->getValue('page') == 'profile' && $_smarty_tpl->getValue('system')['system_profile_background_enabled'] && $_smarty_tpl->getValue('profile')['user_profile_background']) {?>style="background: url(<?php echo $_smarty_tpl->getValue('profile')['user_profile_background'];?>
) fixed !important; background-size: 100% auto;" <?php }?>>
<?php }?>
<!-- main wrapper -->
<div class="main-wrapper">
  <?php if ($_smarty_tpl->getValue('user')->_logged_in && $_smarty_tpl->getValue('system')['activation_enabled'] && !$_smarty_tpl->getValue('system')['activation_required'] && !$_smarty_tpl->getValue('user')->_data['user_activated']) {?>
    <!-- top-bar -->
    <div class="top-bar">
      <div class="<?php if ($_smarty_tpl->getValue('system')['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?>">
        <div class="row">
          <div class="col-sm-7 d-none d-sm-block">
            <?php if ($_smarty_tpl->getValue('system')['activation_type'] == "email") {?>
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Please go to");?>
 <span class="text-primary"><?php echo $_smarty_tpl->getValue('user')->_data['user_email'];?>
</span> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("to complete the activation process");?>
.
            <?php } else { ?>
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Please check the SMS on your phone");?>
 <strong><?php echo $_smarty_tpl->getValue('user')->_data['user_phone'];?>
</strong> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("to complete the activation process");?>
.
            <?php }?>
          </div>
          <div class="col-sm-5">
            <?php if ($_smarty_tpl->getValue('system')['activation_type'] == "email") {?>
              <span class="text-link" data-toggle="modal" data-url="core/activation_email_resend.php"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Resend Verification Email");?>
</span> -
              <span class="text-link" data-toggle="modal" data-url="#activation-email-reset"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Change Email");?>
</span>
            <?php } else { ?>
              <span class="btn btn-info btn-sm mr10" data-toggle="modal" data-url="#activation-phone"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Enter Code");?>
</span>
              <?php if ($_smarty_tpl->getValue('user')->_data['user_phone']) {?>
                <span class="text-link" data-toggle="modal" data-url="core/activation_phone_resend.php"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Resend SMS");?>
</span> -
              <?php }?>
              <span class="text-link" data-toggle="modal" data-url="#activation-phone-reset"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Change Phone Number");?>
</span>
            <?php }?>
          </div>
        </div>
      </div>
    </div>
    <!-- top-bar -->
  <?php }?>

  <?php if (!$_smarty_tpl->getValue('system')['system_live']) {?>
    <!-- top-bar alert -->
    <div class="top-bar danger">
      <div class="<?php if ($_smarty_tpl->getValue('system')['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?>">
        <i class="fa fa-exclamation-triangle fa-lg pr5"></i>
        <span class="d-none d-sm-inline"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The system has been shut down");?>
.</span>
        <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Turn it on from");?>
</span> <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/admincp/settings"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Admin Panel");?>
</a>
      </div>
    </div>
    <!-- top-bar alert -->
  <?php }?>

  <?php if ($_smarty_tpl->getValue('user')->_login_as) {?>
    <!-- bottom-bar alert -->
    <div class="bottom-bar">
      <div class="container logged-as-container">
        <i class="fa fa-exclamation-triangle fa-lg pr5"></i>
        <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("You are currently logged in as");?>
 <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('user')->_data['user_name'];?>
"><?php echo $_smarty_tpl->getValue('user')->_data['user_fullname'];?>
</a></span>
        <button class="btn btn-sm btn-warning ml20 js_login-as" data-handle="revoke">
          <i class="fa-solid fa-arrow-rotate-left mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Switch Back");?>

        </button>
      </div>
    </div>
    <!-- bottom-bar alert -->
  <?php }?>

  <!-- No main-header here for RedNote layout - sidebar handles navigation -->

  <?php if ($_smarty_tpl->getValue('user')->_logged_in) {?>
    <!-- Hidden live-tracking elements for data_heartbeat() -->
    <!-- These are required so the heartbeat can track last_notification, last_request, last_message IDs -->
    <!-- Without them, the heartbeat always sends 0 and notifications repeat infinitely -->
    <div style="display:none!important;position:absolute;width:0;height:0;overflow:hidden;pointer-events:none;">
      <?php if ($_smarty_tpl->getValue('system')['friends_enabled']) {?>
        <div class="js_live-requests">
          <div class="js_scroller">
            <?php if ($_smarty_tpl->getValue('user')->_data['friend_requests']) {?>
              <ul>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('user')->_data['friend_requests'], 'request');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('request')->value) {
$foreach3DoElse = false;
?>
                  <li data-id="<?php echo $_smarty_tpl->getValue('request')['request_id'];?>
"></li>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
              </ul>
            <?php } else { ?>
              <ul></ul>
            <?php }?>
          </div>
          <span class="counter"><?php echo (($tmp = $_smarty_tpl->getValue('user')->_data['friend_requests_total'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp);?>
</span>
        </div>
      <?php }?>
      <?php if ($_smarty_tpl->getValue('system')['chat_enabled'] && $_smarty_tpl->getValue('user')->_data['user_privacy_chat'] != "me") {?>
        <div class="js_live-messages">
          <div class="js_scroller">
            <?php if ($_smarty_tpl->getValue('user')->_data['conversations']) {?>
              <ul>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('user')->_data['conversations']['data'], 'conversation');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('conversation')->value) {
$foreach4DoElse = false;
?>
                  <li data-last-message="<?php echo $_smarty_tpl->getValue('conversation')['message_id'];?>
"></li>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
              </ul>
            <?php } else { ?>
              <ul></ul>
            <?php }?>
          </div>
          <span class="counter"><?php echo (($tmp = $_smarty_tpl->getValue('user')->_data['user_live_messages_counter'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp);?>
</span>
        </div>
      <?php }?>
      <div class="js_live-notifications">
        <div class="js_scroller">
          <?php if ($_smarty_tpl->getValue('user')->_data['notifications']) {?>
            <ul>
              <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('user')->_data['notifications'], 'notification');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('notification')->value) {
$foreach5DoElse = false;
?>
                <li data-id="<?php echo $_smarty_tpl->getValue('notification')['notification_id'];?>
"></li>
              <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </ul>
          <?php } else { ?>
            <ul></ul>
          <?php }?>
        </div>
        <span class="counter"><?php echo (($tmp = $_smarty_tpl->getValue('user')->_data['user_live_notifications_counter'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp);?>
</span>
      </div>
    </div>
    <!-- Hidden live-tracking elements end -->
  <?php }?>

  <!-- ads -->
  <?php $_smarty_tpl->renderSubTemplate('file:_ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_ads'=>$_smarty_tpl->getValue('ads_master')['header'],'_master'=>true), (int) 0, $_smarty_current_dir);
?>
  <!-- ads --><?php }
}
