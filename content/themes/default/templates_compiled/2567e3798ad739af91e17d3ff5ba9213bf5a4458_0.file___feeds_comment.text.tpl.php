<?php
/* Smarty version 5.7.0, created on 2026-05-17 03:29:19
  from 'file:__feeds_comment.text.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_6a09360f294070_61619040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2567e3798ad739af91e17d3ff5ba9213bf5a4458' => 
    array (
      0 => '__feeds_comment.text.tpl',
      1 => 1648011576,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a09360f294070_61619040 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\selfie\\content\\themes\\default\\templates';
?><div class="comment-replace">
  <div class="comment-text js_readmore" dir="auto"><?php echo $_smarty_tpl->getValue('_comment')['text'];?>
</div>
  <div class="comment-text-plain x-hidden"><?php echo $_smarty_tpl->getValue('_comment')['text_plain'];?>
</div>
  <?php if ($_smarty_tpl->getValue('_comment')['image'] != '') {?>
    <span class="text-link js_lightbox-nodata" data-image="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_comment')['image'];?>
">
      <img alt="" class="img-fluid" src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_comment')['image'];?>
">
    </span>
  <?php }?>
  <?php if ($_smarty_tpl->getValue('_comment')['voice_note'] != '') {?>
    <audio class="js_audio" id="audio-<?php echo $_smarty_tpl->getValue('_comment')['comment_id'];?>
" controls preload="auto" style="width: 100%; min-width: 200px;">
      <source src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_comment')['voice_note'];?>
" type="audio/mpeg">
      <source src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_comment')['voice_note'];?>
" type="audio/mp3">
      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Your browser does not support HTML5 audio");?>

    </audio>
  <?php }?>
</div><?php }
}
