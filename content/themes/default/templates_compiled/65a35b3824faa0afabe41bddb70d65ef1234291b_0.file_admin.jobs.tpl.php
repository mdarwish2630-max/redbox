<?php
/* Smarty version 5.7.0, created on 2026-05-16 06:40:43
  from 'file:admin.jobs.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_6a08116bcbce51_48924179',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65a35b3824faa0afabe41bddb70d65ef1234291b' => 
    array (
      0 => 'admin.jobs.tpl',
      1 => 1740612298,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__categories.recursive_rows.tpl' => 1,
    'file:__categories.recursive_options.tpl' => 2,
  ),
))) {
function content_6a08116bcbce51_48924179 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\selfie\\content\\themes\\default\\templates';
?><div class="card">
  <div class="card-header with-icon">
    <?php if ($_smarty_tpl->getValue('sub_view') == "find") {?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/jobs" class="btn btn-md btn-light">
          <i class="fa fa-arrow-circle-left mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Go Back");?>

        </a>
      </div>
    <?php } elseif ($_smarty_tpl->getValue('sub_view') == "categories") {?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/jobs/add_category" class="btn btn-md btn-primary">
          <i class="fa fa-plus mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add New Category");?>

        </a>
      </div>
    <?php } elseif ($_smarty_tpl->getValue('sub_view') == "add_category" || $_smarty_tpl->getValue('sub_view') == "edit_category") {?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/jobs/categories" class="btn btn-md btn-light">
          <i class="fa fa-arrow-circle-left mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Go Back");?>

        </a>
      </div>
    <?php }?>
    <i class="fa fa-briefcase mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Jobs");?>

    <?php if ($_smarty_tpl->getValue('sub_view') == "find") {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Find");
}?>
    <?php if ($_smarty_tpl->getValue('sub_view') == "categories") {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Categories");
}?>
    <?php if ($_smarty_tpl->getValue('sub_view') == "add_category") {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Categories");?>
 &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add New Category");
}?>
    <?php if ($_smarty_tpl->getValue('sub_view') == "edit_category") {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Categories");?>
 &rsaquo; <?php echo $_smarty_tpl->getValue('data')['category_name'];
}?>
  </div>

  <?php if ($_smarty_tpl->getValue('sub_view') == '' || $_smarty_tpl->getValue('sub_view') == "find") {?>

    <div class="card-body">

      <!-- search form -->
      <div class="mb20">
        <form class="d-flex flex-row align-items-center flex-wrap" action="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/jobs/find" method="get">
          <div class="form-group mb0">
            <div class="input-group">
              <input type="text" class="form-control" name="query">
              <button type="submit" class="btn btn-sm btn-light"><i class="fas fa-search mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search");?>
</button>
            </div>
          </div>
        </form>
        <div class="form-text small">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search by Job Title or Description");?>

        </div>
      </div>
      <!-- search form -->

      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("ID");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Author");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Title");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Time");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Link");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Actions");?>
</th>
            </tr>
          </thead>
          <tbody>
            <?php if ($_smarty_tpl->getValue('rows')) {?>
              <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('rows'), 'row');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('row')->value) {
$foreach0DoElse = false;
?>
                <tr>
                  <td><?php echo $_smarty_tpl->getValue('row')['post_id'];?>
</td>
                  <td>
                    <a target="_blank" href="<?php echo $_smarty_tpl->getValue('row')['job_author_url'];?>
">
                      <img class="tbl-image" src="<?php echo $_smarty_tpl->getValue('row')['job_author_picture'];?>
">
                      <?php echo $_smarty_tpl->getValue('row')['job_author_name'];?>

                    </a>
                  </td>
                  <td>
                    <span title="<?php echo $_smarty_tpl->getValue('row')['title'];?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('row')['title'],30);?>
</span>
                  </td>
                  <td><span class="js_moment" data-time="<?php echo $_smarty_tpl->getValue('row')['time'];?>
"><?php echo $_smarty_tpl->getValue('row')['time'];?>
</span></td>
                  <td>
                    <a class="btn btn-sm btn-light" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/posts/<?php echo $_smarty_tpl->getValue('row')['post_id'];?>
" target="_blank">
                      <i class="fa fa-eye mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("View");?>

                    </a>
                  </td>
                  <td>
                    <button data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="post" data-id="<?php echo $_smarty_tpl->getValue('row')['post_id'];?>
">
                      <i class="fa fa-trash-alt"></i>
                    </button>
                  </td>
                </tr>
              <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
              <tr>
                <td colspan="6" class="text-center">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("No data to show");?>

                </td>
              </tr>
            <?php }?>
          </tbody>
        </table>
      </div>

      <?php echo $_smarty_tpl->getValue('pager');?>


    </div>

  <?php } elseif ($_smarty_tpl->getValue('sub_view') == "categories") {?>

    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover js_treegrid">
          <thead>
            <tr>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Title");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Description");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Order");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Actions");?>
</th>
            </tr>
          </thead>
          <tbody>
            <?php if ($_smarty_tpl->getValue('rows')) {?>
              <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('rows'), 'row');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('row')->value) {
$foreach1DoElse = false;
?>
                <?php $_smarty_tpl->renderSubTemplate('file:__categories.recursive_rows.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_url'=>"jobs",'_handle'=>"jobs_category"), (int) 0, $_smarty_current_dir);
?>
              <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
              <tr>
                <td colspan="4" class="text-center">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("No data to show");?>

                </td>
              </tr>
            <?php }?>
          </tbody>
        </table>
      </div>
    </div>

  <?php } elseif ($_smarty_tpl->getValue('sub_view') == "add_category") {?>

    <form class="js_ajax-forms" data-url="admin/jobs.php?do=add_category">
      <div class="card-body">
        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Name");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="category_name">
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Description");?>

          </label>
          <div class="col-md-9">
            <textarea class="form-control" name="category_description" rows="3"></textarea>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Parent Category");?>

          </label>
          <div class="col-md-9">
            <select class="form-select" name="category_parent_id">
              <option value="0"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Set as a Parent Category");?>
</option>
              <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('categories'), 'category');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach2DoElse = false;
?>
                <?php $_smarty_tpl->renderSubTemplate('file:__categories.recursive_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
              <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </select>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Order");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="category_order">
          </div>
        </div>

        <!-- success -->
        <div class="alert alert-success mt15 mb0 x-hidden"></div>
        <!-- success -->

        <!-- error -->
        <div class="alert alert-danger mt15 mb0 x-hidden"></div>
        <!-- error -->
      </div>
      <div class="card-footer text-end">
        <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Save Changes");?>
</button>
      </div>
    </form>

  <?php } elseif ($_smarty_tpl->getValue('sub_view') == "edit_category") {?>

    <form class="js_ajax-forms" data-url="admin/jobs.php?do=edit_category&id=<?php echo $_smarty_tpl->getValue('data')['category_id'];?>
">
      <div class="card-body">
        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Name");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="category_name" value="<?php echo $_smarty_tpl->getValue('data')['category_name'];?>
">
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Description");?>

          </label>
          <div class="col-md-9">
            <textarea class="form-control" name="category_description" rows="3"><?php echo $_smarty_tpl->getValue('data')['category_description'];?>
</textarea>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Parent Category");?>

          </label>
          <div class="col-md-9">
            <select class="form-select" name="category_parent_id">
              <option value="0"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Set as a Parent Category");?>
</option>
              <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')["categories"], 'category');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach3DoElse = false;
?>
                <?php $_smarty_tpl->renderSubTemplate('file:__categories.recursive_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data_category'=>$_smarty_tpl->getValue('data')['category_parent_id']), (int) 0, $_smarty_current_dir);
?>
              <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </select>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Order");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="category_order" value="<?php echo $_smarty_tpl->getValue('data')['category_order'];?>
">
          </div>
        </div>

        <!-- success -->
        <div class="alert alert-success mt15 mb0 x-hidden"></div>
        <!-- success -->

        <!-- error -->
        <div class="alert alert-danger mt15 mb0 x-hidden"></div>
        <!-- error -->
      </div>
      <div class="card-footer text-end">
        <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Save Changes");?>
</button>
      </div>
    </form>

  <?php }?>
</div><?php }
}
