<?php
/* Smarty version 5.7.0, created on 2026-05-16 21:58:25
  from 'file:_announcements.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_6a08e881a702c0_09444951',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f4184f2abede014be313c4faaff6f6e613a4fbe' => 
    array (
      0 => '_announcements.tpl',
      1 => 1684899814,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a08e881a702c0_09444951 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\selfie\\content\\themes\\default\\templates';
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('announcements'), 'announcement');
$foreach18DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('announcement')->value) {
$foreach18DoElse = false;
?>
  <div class="alert alert-<?php echo $_smarty_tpl->getValue('announcement')['type'];?>
 text-with-list">
    <?php if ($_smarty_tpl->getValue('user')->_logged_in) {?>
      <button type="button" class="btn-close float-end js_announcment-remover" data-id="<?php echo $_smarty_tpl->getValue('announcement')['announcement_id'];?>
"></button>
    <?php }?>
    <?php if ($_smarty_tpl->getValue('announcement')['title']) {?><div class="title"><?php echo $_smarty_tpl->getValue('announcement')['title'];?>
</div><?php }?>
    <?php echo $_smarty_tpl->getValue('announcement')['code'];?>

  </div>
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
}
