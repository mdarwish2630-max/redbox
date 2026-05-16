<?php
/* Smarty version 5.7.0, created on 2026-05-16 15:39:59
  from 'file:reels.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_6a088fcf7fbcb6_02760743',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd85eb7c25223bb0ec4d47fb1d0d6551c9ca26b87' => 
    array (
      0 => 'reels.tpl',
      1 => 1734751146,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:__feeds_reel.tpl' => 1,
    'file:_no_data.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
))) {
function content_6a088fcf7fbcb6_02760743 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\selfie\\content\\themes\\default\\templates';
$_smarty_tpl->renderSubTemplate('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<!-- page content -->
<!-- page content -->
<div class="<?php if ($_smarty_tpl->getValue('system')['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?> mt20 sg-offcanvas">
  <div class="row">

    <!-- left panel -->
    <div class="col-md-4 col-lg-3 sg-offcanvas-sidebar js_sticky-sidebar">
      <?php $_smarty_tpl->renderSubTemplate('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </div>
    <!-- left panel -->

    <!-- content panel -->
    <div class="col-md-8 col-lg-9 sg-offcanvas-mainbar">

      <div class="reels-wrapper">
        <?php if ($_smarty_tpl->getValue('posts')) {?>
          <div class="reels-loader" data-offset="1"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Loading");?>
 <span class="spinner-grow spinner-grow-sm ml-3"></span></div>
          <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('posts'), 'post');
$_smarty_tpl->getVariable('post')->iteration = 0;
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('post')->value) {
$foreach0DoElse = false;
$_smarty_tpl->getVariable('post')->iteration++;
$foreach0Backup = clone $_smarty_tpl->getVariable('post');
?>
            <?php $_smarty_tpl->renderSubTemplate('file:__feeds_reel.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_iteration'=>$_smarty_tpl->getVariable('post')->iteration), (int) 0, $_smarty_current_dir);
?>
          <?php
$_smarty_tpl->setVariable('post', $foreach0Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        <?php } else { ?>
          <div class="mtb30">
            <?php $_smarty_tpl->renderSubTemplate('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?> </div>
        <?php }?>
      </div>
    </div>
    <!-- content panel -->

  </div>
</div>
<!-- page content -->
<!--page content-->

<?php $_smarty_tpl->renderSubTemplate('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php echo '<script'; ?>
>
  var first_id = $('.reel-container').first().data('id');
  if (first_id) {
    var url = site_path + '/reels/' + first_id;
    window.history.pushState({ state: 'new' }, '', url);
  }
<?php echo '</script'; ?>
><?php }
}
