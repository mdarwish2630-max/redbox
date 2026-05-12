{if !$user->_logged_in}
  <body data-hash-tok="{$session_hash['token']}" data-hash-pos="{$session_hash['position']}" {if $system['theme_mode_night']}data-bs-theme="dark" {/if} class="{if $system['theme_mode_night']}night-mode{/if} visitor n_chat {if $page == 'index' && !$system['newsfeed_public']}index-body{/if}" {if $page == 'profile' && $system['system_profile_background_enabled'] && $profile['user_profile_background']}style="background: url({$profile['user_profile_background']}) fixed !important; background-size: 100% auto;" {/if}>
{else}
  <body data-hash-tok="{$session_hash['token']}" data-hash-pos="{$session_hash['position']}" data-chat-enabled="{$user->_data['user_chat_enabled']}" {if $system['theme_mode_night']}data-bs-theme="dark" {/if} class="{if $system['theme_mode_night']}night-mode{/if} {if !$system['chat_enabled'] || $user->_data['user_privacy_chat'] == "me"}n_chat{/if}{if $system['activation_enabled'] && !$system['activation_required'] && !$user->_data['user_activated']} n_activated{/if}{if !$system['system_live']} n_live{/if}" {if $page == 'profile' && $system['system_profile_background_enabled'] && $profile['user_profile_background']}style="background: url({$profile['user_profile_background']}) fixed !important; background-size: 100% auto;" {/if}>
{/if}
<!-- main wrapper -->
<div class="main-wrapper">
  {if $user->_logged_in && $system['activation_enabled'] && !$system['activation_required'] && !$user->_data['user_activated']}
    <!-- top-bar -->
    <div class="top-bar">
      <div class="{if $system['fluid_design']}container-fluid{else}container{/if}">
        <div class="row">
          <div class="col-sm-7 d-none d-sm-block">
            {if $system['activation_type'] == "email"}
              {__("Please go to")} <span class="text-primary">{$user->_data['user_email']}</span> {__("to complete the activation process")}.
            {else}
              {__("Please check the SMS on your phone")} <strong>{$user->_data['user_phone']}</strong> {__("to complete the activation process")}.
            {/if}
          </div>
          <div class="col-sm-5">
            {if $system['activation_type'] == "email"}
              <span class="text-link" data-toggle="modal" data-url="core/activation_email_resend.php">{__("Resend Verification Email")}</span> -
              <span class="text-link" data-toggle="modal" data-url="#activation-email-reset">{__("Change Email")}</span>
            {else}
              <span class="btn btn-info btn-sm mr10" data-toggle="modal" data-url="#activation-phone">{__("Enter Code")}</span>
              {if $user->_data['user_phone']}
                <span class="text-link" data-toggle="modal" data-url="core/activation_phone_resend.php">{__("Resend SMS")}</span> -
              {/if}
              <span class="text-link" data-toggle="modal" data-url="#activation-phone-reset">{__("Change Phone Number")}</span>
            {/if}
          </div>
        </div>
      </div>
    </div>
    <!-- top-bar -->
  {/if}

  {if !$system['system_live']}
    <!-- top-bar alert -->
    <div class="top-bar danger">
      <div class="{if $system['fluid_design']}container-fluid{else}container{/if}">
        <i class="fa fa-exclamation-triangle fa-lg pr5"></i>
        <span class="d-none d-sm-inline">{__("The system has been shut down")}.</span>
        <span>{__("Turn it on from")}</span> <a href="{$system['system_url']}/admincp/settings">{__("Admin Panel")}</a>
      </div>
    </div>
    <!-- top-bar alert -->
  {/if}

  {if $user->_login_as}
    <!-- bottom-bar alert -->
    <div class="bottom-bar">
      <div class="container logged-as-container">
        <i class="fa fa-exclamation-triangle fa-lg pr5"></i>
        <span>{__("You are currently logged in as")} <a href="{$system['system_url']}/{$user->_data['user_name']}">{$user->_data['user_fullname']}</a></span>
        <button class="btn btn-sm btn-warning ml20 js_login-as" data-handle="revoke">
          <i class="fa-solid fa-arrow-rotate-left mr5"></i>{__("Switch Back")}
        </button>
      </div>
    </div>
    <!-- bottom-bar alert -->
  {/if}

  <!-- No main-header here for RedNote layout - sidebar handles navigation -->

  {if $user->_logged_in}
    <!-- Hidden live-tracking elements for data_heartbeat() -->
    <!-- These are required so the heartbeat can track last_notification, last_request, last_message IDs -->
    <!-- Without them, the heartbeat always sends 0 and notifications repeat infinitely -->
    <div style="display:none!important;position:absolute;width:0;height:0;overflow:hidden;pointer-events:none;">
      {if $system['friends_enabled']}
        <div class="js_live-requests">
          <div class="js_scroller">
            {if $user->_data['friend_requests']}
              <ul>
                {foreach $user->_data['friend_requests'] as $request}
                  <li data-id="{$request['request_id']}"></li>
                {/foreach}
              </ul>
            {else}
              <ul></ul>
            {/if}
          </div>
          <span class="counter">{$user->_data['friend_requests_total']|default:0}</span>
        </div>
      {/if}
      {if $system['chat_enabled'] && $user->_data['user_privacy_chat'] != "me"}
        <div class="js_live-messages">
          <div class="js_scroller">
            {if $user->_data['conversations']}
              <ul>
                {foreach $user->_data['conversations']['data'] as $conversation}
                  <li data-last-message="{$conversation['message_id']}"></li>
                {/foreach}
              </ul>
            {else}
              <ul></ul>
            {/if}
          </div>
          <span class="counter">{$user->_data['user_live_messages_counter']|default:0}</span>
        </div>
      {/if}
      <div class="js_live-notifications">
        <div class="js_scroller">
          {if $user->_data['notifications']}
            <ul>
              {foreach $user->_data['notifications'] as $notification}
                <li data-id="{$notification['notification_id']}"></li>
              {/foreach}
            </ul>
          {else}
            <ul></ul>
          {/if}
        </div>
        <span class="counter">{$user->_data['user_live_notifications_counter']|default:0}</span>
      </div>
    </div>
    <!-- Hidden live-tracking elements end -->
  {/if}

  <!-- ads -->
  {include file='_ads.tpl' _ads=$ads_master['header'] _master=true}
  <!-- ads -->