<?php
/* Smarty version 5.7.0, created on 2026-05-16 09:38:44
  from 'file:admin.apis.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_6a083b24072144_99861964',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7d685394f21e8c84bb104f4abcbaf17c5f98168' => 
    array (
      0 => 'admin.apis.tpl',
      1 => 1746739908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a083b24072144_99861964 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\selfie\\content\\themes\\default\\templates';
?><div class="card">
  <div class="card-header with-icon">
    <i class="fa-solid fa-shapes mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Apps");?>
 &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("APIs Settings");?>

  </div>

  <form class="js_ajax-forms" data-url="admin/settings.php?edit=apis">
    <div class="card-body">

      <div class="alert alert-warning">
        <div class="icon">
          <i class="fa fa-exclamation-circle fa-2x"></i>
        </div>
        <div class="text">
          <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("API Key and Secret");?>
</strong><br>
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Reset the API Key will affect the APIs that are used in the your native apps");?>

        </div>
      </div>

      <div class="row form-group">
        <label class="col-md-3 form-label">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("API Key");?>

        </label>
        <div class="col-md-9">
          <?php if (!$_smarty_tpl->getValue('user')->_data['user_demo']) {?>
            <input type="text" class="form-control" name="system_api_key" value="<?php echo $_smarty_tpl->getValue('system')['system_api_key'];?>
">
          <?php } else { ?>
            <input type="password" class="form-control" value="*********">
          <?php }?>
          <div class="form-text">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The API Key that is used in the your native apps");?>

          </div>
        </div>
      </div>

      <div class="row form-group">
        <label class="col-md-3 form-label">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("API Secret");?>

        </label>
        <div class="col-md-9">
          <?php if (!$_smarty_tpl->getValue('user')->_data['user_demo']) {?>
            <input type="text" class="form-control" name="system_api_secret" value="<?php echo $_smarty_tpl->getValue('system')['system_api_secret'];?>
">
          <?php } else { ?>
            <input type="password" class="form-control" value="*********">
          <?php }?>
          <div class="form-text">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The API Secret that is used in the your native apps");?>

          </div>
        </div>
      </div>

      <div class="row form-group">
        <label class="col-md-3 form-label">
        </label>
        <div class="col-md-9">
          <button type="button" class="btn btn-danger js_admin-api-reset"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Reset API Key");?>
</button>
        </div>
      </div>

      <div class="divider"></div>

      <!-- JWT KEY -->
      <div class="row form-group">
        <label class="col-md-3 form-label">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("JWT Key");?>

        </label>
        <div class="col-md-9">
          <?php if (!$_smarty_tpl->getValue('user')->_data['user_demo']) {?>
            <input type="text" class="form-control" name="system_jwt_key" value="<?php echo $_smarty_tpl->getValue('system')['system_jwt_key'];?>
">
          <?php } else { ?>
            <input type="password" class="form-control" value="*********">
          <?php }?>
          <div class="form-text">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The JSON Web Token Key that is used to generate the token for users sessions");?>
<br>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Note: Resetting the JWT Key will log the users out from all sessions");?>

          </div>
        </div>
      </div>

      <div class="row form-group">
        <label class="col-md-3 form-label">
        </label>
        <div class="col-md-9">
          <button type="button" class="btn btn-danger js_admin-jwt-reset"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Reset JWT Key");?>
</button>
        </div>
      </div>
      <!-- JWT KEY -->

      <!-- success -->
      <div class="alert alert-success mt15 mb0 x-hidden"></div>
      <!-- success -->

      <!-- error -->
      <div class="alert alert-danger mt15 mb0 x-hidden"></div>
      <!-- error -->
    </div>
    <div class="card-footer text-end">
      <button type="button" class="btn btn-success js_admin-tester" data-handle="api">
        <i class="fa fa-bolt mr10"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Ping API");?>

      </button>
      <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Save Changes");?>
</button>
    </div>
  </form>
</div><?php }
}
