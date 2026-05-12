<?php
/* Smarty version 5.7.0, created on 2026-04-24 19:09:46
  from 'file:__reaction_emojis.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_69ebbffa3e8dd6_89959765',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40448c02c3cf3b51f1a0d7d0c18b8e2ee9ec82dd' => 
    array (
      0 => '__reaction_emojis.tpl',
      1 => 1776786010,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ebbffa3e8dd6_89959765 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\selfie\\content\\themes\\red\\templates';
?><!-- reaction -->
<div class="emoji">
  <img src="<?php echo $_smarty_tpl->getValue('system')['reactions'][$_smarty_tpl->getValue('_reaction')]['image_url'];?>
" alt="<?php echo $_smarty_tpl->getValue('system')['reactions'][$_smarty_tpl->getValue('_reaction')]['title'];?>
" />
</div>
<!-- reaction --><?php }
}
