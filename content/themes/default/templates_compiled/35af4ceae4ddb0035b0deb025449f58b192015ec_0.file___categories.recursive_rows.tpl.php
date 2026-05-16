<?php
/* Smarty version 5.7.0, created on 2026-05-16 06:38:57
  from 'file:__categories.recursive_rows.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_6a0811015a3884_26296118',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35af4ceae4ddb0035b0deb025449f58b192015ec' => 
    array (
      0 => '__categories.recursive_rows.tpl',
      1 => 1740869878,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__categories.recursive_rows.tpl' => 2,
  ),
))) {
function content_6a0811015a3884_26296118 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\selfie\\content\\themes\\default\\templates';
?><tr class="treegrid-<?php echo $_smarty_tpl->getValue('row')['category_id'];?>
 <?php if ($_smarty_tpl->getValue('row')['category_parent_id'] != '0') {?>treegrid-parent-<?php echo $_smarty_tpl->getValue('row')['category_parent_id'];
}?>">
  <td>
    <?php echo $_smarty_tpl->getValue('row')['category_name'];?>

  </td>
  <?php if ($_smarty_tpl->getValue('_has_image')) {?>
    <td>
      <?php ob_start();
echo $_smarty_tpl->getValue('row')['category_image'];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1) {?>
        <img class="img-thumbnail table-img-thumbnail" src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('row')['category_image'];?>
" width="64px" height="64px">
      <?php } else { ?>
        N/A
      <?php }?>
    </td>
  <?php }?>
  <td>
    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('row')['category_description'],50);?>

  </td>
  <td>
    <span class="badge rounded-pill badge-lg bg-info"><?php echo $_smarty_tpl->getValue('row')['category_order'];?>
</span>
  </td>
  <td>
    <a data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit");?>
' href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/<?php echo $_smarty_tpl->getValue('_url');?>
/edit_<?php if ($_smarty_tpl->getValue('_edit_slug')) {
echo $_smarty_tpl->getValue('_edit_slug');?>
_<?php }?>category/<?php echo $_smarty_tpl->getValue('row')['category_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
      <i class="fa fa-pencil-alt"></i>
    </a>
    <button data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="<?php echo $_smarty_tpl->getValue('_handle');?>
" data-id="<?php echo $_smarty_tpl->getValue('row')['category_id'];?>
">
      <i class="fa fa-trash-alt"></i>
    </button>
  </td>
</tr>
<?php if ($_smarty_tpl->getValue('row')['sub_categories']) {?>
  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('row')['sub_categories'], '_row');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_row')->value) {
$foreach0DoElse = false;
?>
    <?php $_smarty_tpl->renderSubTemplate('file:__categories.recursive_rows.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('row'=>$_smarty_tpl->getValue('_row'),'_url'=>$_smarty_tpl->getValue('_url'),'_handle'=>$_smarty_tpl->getValue('_handle'),'_has_image'=>$_smarty_tpl->getValue('_has_image'),'_edit_slug'=>$_smarty_tpl->getValue('_edit_slug')), (int) 0, $_smarty_current_dir);
?>
  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
}
}
