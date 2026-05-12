<?php
/* Smarty version 5.7.0, created on 2026-05-12 06:37:31
  from 'file:admin.posts.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_6a02caabd1c959_91498318',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2f1670d8ae20cabac146a95eb5a0f96640bc086' => 
    array (
      0 => 'admin.posts.tpl',
      1 => 1776786014,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__categories.recursive_rows.tpl' => 1,
    'file:__categories.recursive_options.tpl' => 2,
  ),
))) {
function content_6a02caabd1c959_91498318 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\selfie\\content\\themes\\red\\templates';
?><div class="card">
  <div class="card-header with-icon">
    <?php if ($_smarty_tpl->getValue('sub_view') == "find") {?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/posts" class="btn btn-md btn-light">
          <i class="fa fa-arrow-circle-left mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Go Back");?>

        </a>
      </div>
    <?php } elseif ($_smarty_tpl->getValue('sub_view') == "videos_categories") {?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/posts/add_videos_category" class="btn btn-md btn-primary">
          <i class="fa fa-plus"></i><span class="ml5 d-none d-lg-inline-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add New Category");?>
</span>
        </a>
      </div>
    <?php } elseif ($_smarty_tpl->getValue('sub_view') == "add_videos_category" || $_smarty_tpl->getValue('sub_view') == "edit_videos_category") {?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/posts/videos_categories" class="btn btn-md btn-light">
          <i class="fa fa-arrow-circle-left"></i><span class="ml5 d-none d-lg-inline-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Go Back");?>
</span>
        </a>
      </div>
    <?php }?>
    <i class="fa fa-newspaper mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Posts");?>

    <?php if ($_smarty_tpl->getValue('sub_view') == "find") {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Find");
}?>
    <?php if ($_smarty_tpl->getValue('sub_view') == "pending") {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pending");
}?>
    <?php if ($_smarty_tpl->getValue('sub_view') == "videos_categories") {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Videos Categories");
}?>
    <?php if ($_smarty_tpl->getValue('sub_view') == "add_videos_category") {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Videos Categories");?>
 &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add New Category");
}?>
    <?php if ($_smarty_tpl->getValue('sub_view') == "edit_videos_category") {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Videos Categories");?>
 &rsaquo; <?php echo $_smarty_tpl->getValue('data')['category_name'];
}?>
  </div>

  <?php if ($_smarty_tpl->getValue('sub_view') == '' || $_smarty_tpl->getValue('sub_view') == "pending" || $_smarty_tpl->getValue('sub_view') == "find") {?>

    <div class="card-body">

      <?php if ($_smarty_tpl->getValue('sub_view') == '' || $_smarty_tpl->getValue('sub_view') == "pending") {?>
        <div class="row">
          <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="stat-panel bg-gradient-indigo">
              <div class="stat-cell narrow">
                <i class="fa fa-newspaper bg-icon"></i>
                <span class="text-xxlg"><?php echo $_smarty_tpl->getValue('insights')['posts'];?>
</span><br>
                <span class="text-lg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Posts");?>
</span><br>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="stat-panel bg-gradient-warning">
              <div class="stat-cell narrow">
                <i class="fa fa-clock bg-icon"></i>
                <span class="text-xxlg"><?php echo $_smarty_tpl->getValue('insights')['pending_posts'];?>
</span><br>
                <span class="text-lg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pending Posts");?>
</span><br>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="stat-panel bg-gradient-primary">
              <div class="stat-cell narrow">
                <i class="fa fa-comments bg-icon"></i>
                <span class="text-xxlg"><?php echo $_smarty_tpl->getValue('insights')['posts_comments'];?>
</span><br>
                <span class="text-lg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Comments");?>
</span><br>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="stat-panel bg-gradient-info">
              <div class="stat-cell narrow">
                <i class="fa fa-smile bg-icon"></i>
                <span class="text-xxlg"><?php echo $_smarty_tpl->getValue('insights')['posts_likes'];?>
</span><br>
                <span class="text-lg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Reactions");?>
</span><br>
              </div>
            </div>
          </div>
        </div>
      <?php }?>

      <!-- search form -->
      <div class="mb20">
        <form class="d-flex flex-row align-items-center flex-wrap" action="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/posts/find" method="get">
          <div class="form-group mb0">
            <div class="input-group">
              <input type="text" class="form-control" name="query">
              <button type="submit" class="btn btn-sm btn-light"><i class="fas fa-search mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search");?>
</button>
            </div>
          </div>
        </form>
        <div class="form-text small">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search by Post ID or Text");?>

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
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Type");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Approved");?>
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
                  <td>
                    <?php echo $_smarty_tpl->getValue('row')['post_id'];?>

                  </td>
                  <td>
                    <a target="_blank" href="<?php echo $_smarty_tpl->getValue('row')['post_author_url'];?>
">
                      <img class="tbl-image" src="<?php echo $_smarty_tpl->getValue('row')['post_author_picture'];?>
">
                      <?php echo $_smarty_tpl->getValue('row')['post_author_name'];?>

                    </a>
                  </td>
                  <td>
                    <span class="badge rounded-pill badge-lg bg-secondary">
                      <?php if ($_smarty_tpl->getValue('row')['post_type'] == "shared") {?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Share");?>


                      <?php } elseif ($_smarty_tpl->getValue('row')['post_type'] == '') {?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Text");?>


                      <?php } elseif ($_smarty_tpl->getValue('row')['post_type'] == "map") {?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Maps");?>


                      <?php } elseif ($_smarty_tpl->getValue('row')['post_type'] == "link") {?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Link");?>


                      <?php } elseif ($_smarty_tpl->getValue('row')['post_type'] == "media") {?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Media");?>


                      <?php } elseif ($_smarty_tpl->getValue('row')['post_type'] == "live") {?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Live Streaming");?>


                      <?php } elseif ($_smarty_tpl->getValue('row')['post_type'] == "photos") {?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Photos");?>


                      <?php } elseif ($_smarty_tpl->getValue('row')['post_type'] == "album") {?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Album");?>


                      <?php } elseif ($_smarty_tpl->getValue('row')['post_type'] == "profile_picture") {?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Profile Picture");?>


                      <?php } elseif ($_smarty_tpl->getValue('row')['post_type'] == "profile_cover") {?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Cover Photo");?>


                      <?php } elseif ($_smarty_tpl->getValue('row')['post_type'] == "page_picture") {?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Page Picture");?>


                      <?php } elseif ($_smarty_tpl->getValue('row')['post_type'] == "page_cover") {?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Page Cover");?>


                      <?php } elseif ($_smarty_tpl->getValue('row')['post_type'] == "group_picture") {?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Group Picture");?>


                      <?php } elseif ($_smarty_tpl->getValue('row')['post_type'] == "group_cover") {?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Group Cover");?>


                      <?php } elseif ($_smarty_tpl->getValue('row')['post_type'] == "event_cover") {?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Event Cover");?>


                      <?php } elseif ($_smarty_tpl->getValue('row')['post_type'] == "article") {?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Blog");?>


                      <?php } elseif ($_smarty_tpl->getValue('row')['post_type'] == "product") {?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Product");?>


                      <?php } elseif ($_smarty_tpl->getValue('row')['post_type'] == "funding") {?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Funding");?>


                      <?php } elseif ($_smarty_tpl->getValue('row')['post_type'] == "offer") {?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Offer");?>


                      <?php } elseif ($_smarty_tpl->getValue('row')['post_type'] == "job") {?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Job");?>


                      <?php } elseif ($_smarty_tpl->getValue('row')['post_type'] == "poll") {?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Poll");?>


                      <?php } elseif ($_smarty_tpl->getValue('row')['post_type'] == "reel") {?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Reel");?>


                      <?php } elseif ($_smarty_tpl->getValue('row')['post_type'] == "video") {?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Video");?>


                      <?php } elseif ($_smarty_tpl->getValue('row')['post_type'] == "audio") {?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Audio");?>


                      <?php } elseif ($_smarty_tpl->getValue('row')['post_type'] == "file") {?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("File");?>


                      <?php } elseif ($_smarty_tpl->getValue('row')['post_type'] == "combo") {?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Combo");?>


                      <?php }?>
                    </span>
                  </td>
                  <td>
                    <?php if ($_smarty_tpl->getValue('row')['pre_approved'] || $_smarty_tpl->getValue('row')['has_approved']) {?>
                      <span class="badge rounded-pill bg-success">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Yes");?>

                      </span>
                    <?php } else { ?>
                      <span class="badge rounded-pill bg-danger">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("No");?>

                      </span>
                    <?php }?>
                  </td>
                  <td>
                    <span class="js_moment" data-time="<?php echo $_smarty_tpl->getValue('row')['time'];?>
"><?php echo $_smarty_tpl->getValue('row')['time'];?>
</span>
                  </td>
                  <td>
                    <a class="btn btn-sm btn-light" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/posts/<?php echo $_smarty_tpl->getValue('row')['post_id'];?>
" target="_blank">
                      <i class="fa fa-eye mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("View");?>

                    </a>
                  </td>
                  <td>
                    <?php if ($_smarty_tpl->getValue('sub_view') == "pending") {?>
                      <button data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Approve");?>
' class="btn btn-sm btn-icon btn-rounded btn-success js_post-approve" data-id="<?php echo $_smarty_tpl->getValue('row')['post_id'];?>
">
                        <i class="fa fa-check"></i>
                      </button>
                    <?php }?>
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
                <td colspan="7" class="text-center">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("No data to show");?>

                </td>
              </tr>
            <?php }?>
          </tbody>
        </table>
      </div>

      <?php echo $_smarty_tpl->getValue('pager');?>


    </div>

  <?php } elseif ($_smarty_tpl->getValue('sub_view') == "videos_categories") {?>

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
                <?php $_smarty_tpl->renderSubTemplate('file:__categories.recursive_rows.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_url'=>"posts",'_edit_slug'=>"videos",'_handle'=>"video_category"), (int) 0, $_smarty_current_dir);
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

  <?php } elseif ($_smarty_tpl->getValue('sub_view') == "add_videos_category") {?>

    <form class="js_ajax-forms" data-url="admin/posts.php?do=add_videos_category">
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

  <?php } elseif ($_smarty_tpl->getValue('sub_view') == "edit_videos_category") {?>

    <form class="js_ajax-forms" data-url="admin/posts.php?do=edit_videos_category&id=<?php echo $_smarty_tpl->getValue('data')['category_id'];?>
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
