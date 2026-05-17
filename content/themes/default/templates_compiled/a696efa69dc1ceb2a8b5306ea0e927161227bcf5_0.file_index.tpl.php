<?php
/* Smarty version 5.7.0, created on 2026-05-16 21:58:18
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_6a08e87ad50654_36840657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a696efa69dc1ceb2a8b5306ea0e927161227bcf5' => 
    array (
      0 => 'index.tpl',
      1 => 1710804816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index.landing.tpl' => 1,
    'file:index.newsfeed.tpl' => 1,
  ),
))) {
function content_6a08e87ad50654_36840657 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\selfie\\content\\themes\\default\\templates';
if (!$_smarty_tpl->getValue('user')->_logged_in && !$_smarty_tpl->getValue('system')['newsfeed_public']) {?>
  <?php $_smarty_tpl->renderSubTemplate('file:index.landing.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
} else { ?>
  <?php $_smarty_tpl->renderSubTemplate('file:index.newsfeed.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
}
