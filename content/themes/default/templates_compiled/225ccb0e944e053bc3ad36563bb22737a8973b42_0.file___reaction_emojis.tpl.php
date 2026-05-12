<?php
/* Smarty version 5.7.0, created on 2026-04-23 05:53:35
  from 'file:__reaction_emojis.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_69e9b3df3e0900_84601076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '225ccb0e944e053bc3ad36563bb22737a8973b42' => 
    array (
      0 => '__reaction_emojis.tpl',
      1 => 1764735974,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69e9b3df3e0900_84601076 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\selfie\\content\\themes\\default\\templates';
?><!-- reaction -->
<div class="emoji">
  <img src="<?php echo $_smarty_tpl->getValue('system')['reactions'][$_smarty_tpl->getValue('_reaction')]['image_url'];?>
" alt="<?php echo $_smarty_tpl->getValue('system')['reactions'][$_smarty_tpl->getValue('_reaction')]['title'];?>
" />
</div>
<!-- reaction --><?php }
}
