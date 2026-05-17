<?php
/* Smarty version 5.7.0, created on 2026-05-16 21:58:23
  from 'file:__feeds_notification.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_6a08e87fdacf29_12373598',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ae5a17fa706a5acb379f61fd16f32ff2de4f8d3' => 
    array (
      0 => '__feeds_notification.tpl',
      1 => 1761059890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 4,
    'file:__reaction_emojis.tpl' => 2,
  ),
))) {
function content_6a08e87fdacf29_12373598 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\selfie\\content\\themes\\default\\templates';
if ($_smarty_tpl->getValue('_tpl') == "with-action") {?>
  <li class="feeds-action-item <?php if (!$_smarty_tpl->getValue('notification')['seen']) {?>unread<?php }?>" data-id="<?php echo $_smarty_tpl->getValue('notification')['notification_id'];?>
">
    <a class="d-flex align-items-start rounded-3 p-3 mb-2" href="<?php echo $_smarty_tpl->getValue('notification')['url'];?>
" <?php if ($_smarty_tpl->getValue('notification')['action'] == "mass_notification") {?>target="_blank" <?php }?>>
      <div class="me-3">
        <img src="<?php echo $_smarty_tpl->getValue('notification')['user_picture'];?>
" class="rounded-circle" width="48" height="48">
      </div>
      <div class="flex-grow-1">
        <div class="fw-semibold">
          <?php echo $_smarty_tpl->getValue('notification')['name'];?>

          <?php if (!$_smarty_tpl->getValue('notification')['system_notification'] && $_smarty_tpl->getValue('notification')['user_verified']) {?>
            <span class="verified-badge" data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Verified User");?>
'>
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"verified_badge",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
            </span>
          <?php }?>
          <?php if (!$_smarty_tpl->getValue('notification')['system_notification'] && $_smarty_tpl->getValue('notification')['user_subscribed']) {?>
            <span class="pro-badge" data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pro User");?>
'>
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"pro_badge",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
            </span>
          <?php }?>
        </div>
        <div class="text-muted">
          <?php if ($_smarty_tpl->getValue('notification')['reaction']) {?>
            <div class="reaction-btn float-start mr5">
              <div class="reaction-btn-icon">
                <div class="inline-emoji no_animation">
                  <?php $_smarty_tpl->renderSubTemplate('file:__reaction_emojis.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_reaction'=>$_smarty_tpl->getValue('notification')['reaction']), (int) 0, $_smarty_current_dir);
?>
                </div>
              </div>
            </div>
          <?php } else { ?>
            <i class="<?php echo $_smarty_tpl->getValue('notification')['icon'];?>
 mr5"></i>
          <?php }?>
          <?php echo $_smarty_tpl->getValue('notification')['message'];?>

        </div>
        <div class="text-muted small js_moment" data-time="<?php echo $_smarty_tpl->getValue('notification')['time'];?>
"><?php echo $_smarty_tpl->getValue('notification')['time'];?>
</div>
      </div>
      <div>
        <button data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Delete");?>
' class="btn btn-icon btn-rounded btn-light js_notification-deleter" data-id="<?php echo $_smarty_tpl->getValue('notification')['notification_id'];?>
">
          <i class="fa fa-trash-alt text-danger"></i>
        </button>
      </div>
    </a>
  </li>
<?php } else { ?>
  <li class="feeds-item <?php if (!$_smarty_tpl->getValue('notification')['seen']) {?>unread<?php }?>" data-id="<?php echo $_smarty_tpl->getValue('notification')['notification_id'];?>
">
    <a class="data-container" href="<?php echo $_smarty_tpl->getValue('notification')['url'];?>
" <?php if ($_smarty_tpl->getValue('notification')['action'] == "mass_notification") {?>target="_blank" <?php }?>>
      <div class="data-avatar">
        <img src="<?php echo $_smarty_tpl->getValue('notification')['user_picture'];?>
" alt="">
      </div>
      <div class="data-content">
        <div>
          <span class="name"><?php echo $_smarty_tpl->getValue('notification')['name'];?>
</span>
          <?php if (!$_smarty_tpl->getValue('notification')['system_notification'] && $_smarty_tpl->getValue('notification')['user_verified']) {?>
            <span class="verified-badge" data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Verified User");?>
'>
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"verified_badge",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
            </span>
          <?php }?>
          <?php if (!$_smarty_tpl->getValue('notification')['system_notification'] && $_smarty_tpl->getValue('notification')['user_subscribed']) {?>
            <span class="pro-badge" data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pro User");?>
'>
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"pro_badge",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
            </span>
          <?php }?>
        </div>
        <div>
          <?php if ($_smarty_tpl->getValue('notification')['reaction']) {?>
            <div class="reaction-btn float-start mr5">
              <div class="reaction-btn-icon">
                <div class="inline-emoji no_animation">
                  <?php $_smarty_tpl->renderSubTemplate('file:__reaction_emojis.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_reaction'=>$_smarty_tpl->getValue('notification')['reaction']), (int) 0, $_smarty_current_dir);
?>
                </div>
              </div>
            </div>
          <?php } else { ?>
            <i class="<?php echo $_smarty_tpl->getValue('notification')['icon'];?>
 mr5"></i>
          <?php }?>
          <?php echo $_smarty_tpl->getValue('notification')['message'];?>

        </div>
      </div>
    </a>
  </li>
<?php }
}
}
