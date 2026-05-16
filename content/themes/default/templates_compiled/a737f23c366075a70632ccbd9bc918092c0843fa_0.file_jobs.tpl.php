<?php
/* Smarty version 5.7.0, created on 2026-05-16 06:42:14
  from 'file:jobs.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_6a0811c68f5918_64842871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a737f23c366075a70632ccbd9bc918092c0843fa' => 
    array (
      0 => 'jobs.tpl',
      1 => 1760612894,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_ads.tpl' => 1,
    'file:__feeds_job.tpl' => 2,
    'file:_no_data.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
))) {
function content_6a0811c68f5918_64842871 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\selfie\\content\\themes\\default\\templates';
$_smarty_tpl->renderSubTemplate('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<!-- page header -->
<div class="page-header">
  <img class="floating-img d-none d-md-block" src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->getValue('system')['theme'];?>
/images/headers/undraw_interview_rmcf.svg">
  <div class="circle-2"></div>
  <div class="circle-3"></div>
  <div class="<?php if ($_smarty_tpl->getValue('system')['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?>">
    <h2><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Jobs");?>
</h2>
    <p class="text-xlg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('system')['system_description_jobs']);?>
</p>
    <div class="row mt20">
      <div class="col-sm-9 col-lg-6 mx-sm-auto">
        <form class="js_search-form" data-handle="jobs">
          <div class="input-group">
            <input type="text" class="form-control" name="query" placeholder='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search for jobs");?>
'>
            <button type="submit" class="btn btn-light"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search");?>
</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- page header -->

<!-- page content -->
<div class="<?php if ($_smarty_tpl->getValue('system')['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?> sg-offcanvas" style="margin-top: -25px;">

  <div class="position-relative">
    <!-- tabs -->
    <div class="content-tabs rounded-sm shadow-sm clearfix">
      <ul>
        <li class="active">
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/jobs"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Discover");?>
</a>
        </li>
      </ul>
      <?php if ($_smarty_tpl->getValue('system')['jobs_enabled']) {?>
        <div class="mt10 float-end">
          <button class="btn btn-md btn-primary d-none d-lg-block" data-toggle="modal" data-url="posts/job.php?do=create">
            <i class="fa fa-plus-circle mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Create Job");?>

          </button>
          <button class="btn btn-sm btn-icon btn-primary d-block d-lg-none" data-toggle="modal" data-url="posts/job.php?do=create">
            <i class="fa fa-plus-circle"></i>
          </button>
        </div>
      <?php }?>
    </div>
    <!-- tabs -->
  </div>

  <div class="row">

    <!-- left panel -->
    <div class="col-md-4 col-lg-3 sg-offcanvas-sidebar">
      <!-- categories -->
      <div class="card">
        <div class="card-body with-nav">
          <ul class="side-nav">
            <?php if ($_smarty_tpl->getValue('view') != "category") {?>
              <li class="active">
                <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/jobs">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("All");?>

                </a>
              </li>
            <?php } else { ?>
              <li>
                <?php if ($_smarty_tpl->getValue('current_category')['parent']) {?>
                  <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/jobs/category/<?php echo $_smarty_tpl->getValue('current_category')['parent']['category_id'];?>
/<?php echo $_smarty_tpl->getValue('current_category')['parent']['category_url'];?>
">
                    <i class="fas fa-arrow-alt-circle-left mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('current_category')['parent']['category_name']);?>

                  </a>
                <?php } else { ?>
                  <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/jobs">
                    <?php if ($_smarty_tpl->getValue('current_category')['sub_categories']) {?><i class="fas fa-arrow-alt-circle-left mr5"></i><?php }
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("All");?>

                  </a>
                <?php }?>
              </li>
            <?php }?>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('categories'), 'category');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach0DoElse = false;
?>
              <li <?php if ($_smarty_tpl->getValue('view') == "category" && $_smarty_tpl->getValue('current_category')['category_id'] == $_smarty_tpl->getValue('category')['category_id']) {?>class="active" <?php }?>>
                <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/jobs/category/<?php echo $_smarty_tpl->getValue('category')['category_id'];?>
/<?php echo $_smarty_tpl->getValue('category')['category_url'];?>
">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('category')['category_name']);?>

                  <?php if ($_smarty_tpl->getValue('category')['sub_categories']) {?>
                    <span class="float-end"><i class="fas fa-angle-right"></i></span>
                  <?php }?>
                </a>
              </li>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
          </ul>
        </div>
      </div>
      <!-- categories -->
    </div>
    <!-- left panel -->

    <!-- right panel -->
    <div class="col-md-8 col-lg-9 sg-offcanvas-mainbar">

      <?php $_smarty_tpl->renderSubTemplate('file:_ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

      <?php if ($_smarty_tpl->getValue('view') == "search") {?>
        <div class="bs-callout bs-callout-info mt0">
          <!-- results counter -->
          <span class="badge rounded-pill badge-lg bg-secondary"><?php echo $_smarty_tpl->getValue('total');?>
</span> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("results were found for the search for");?>
 "<strong class="text-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('htmlentities')($_smarty_tpl->getValue('query'),ENT_QUOTES,'utf-8');?>
</strong>"
          <!-- results counter -->
        </div>
      <?php }?>

      <?php if ($_smarty_tpl->getValue('view') == '' && $_smarty_tpl->getValue('promoted_jobs')) {?>
        <div class="posts-filter">
          <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Promoted Jobs");?>
</span>
        </div>
        <div class="row mb20">
          <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('promoted_jobs'), 'post');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('post')->value) {
$foreach1DoElse = false;
?>
            <?php $_smarty_tpl->renderSubTemplate('file:__feeds_job.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_boosted'=>true), (int) 0, $_smarty_current_dir);
?>
          <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>
      <?php }?>

      <div class="posts-filter">
        <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Jobs");?>
</span>
        <div class="float-end">
          <!-- sort -->
          <a href="#" data-bs-toggle="dropdown" class="countries-filter mr10">
            <?php if (!$_smarty_tpl->getValue('sort') || $_smarty_tpl->getValue('sort') == "latest") {?>
              <i class="fas fa-bars fa-fw"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Latest");?>

            <?php } elseif ($_smarty_tpl->getValue('sort') == "salary-high") {?>
              <i class="fas fa-sort-amount-down fa-fw"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Salary High");?>

            <?php } elseif ($_smarty_tpl->getValue('sort') == "salary-low") {?>
              <i class="fas fa-sort-amount-down-alt fa-fw"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Salary Low");?>

            <?php }?>
          </a>
          <div class="dropdown-menu dropdown-menu-end">
            <a href="?<?php if ($_smarty_tpl->getValue('selected_country')) {?>country=<?php echo $_smarty_tpl->getValue('selected_country')['country_name'];?>
&<?php }
if ($_smarty_tpl->getValue('distance')) {?>distance=<?php echo $_smarty_tpl->getValue('distance');?>
&<?php }?>sort=latest" class="dropdown-item"><i class="fas fa-bars fa-fw mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Latest");?>
</a>
            <a href="?<?php if ($_smarty_tpl->getValue('selected_country')) {?>country=<?php echo $_smarty_tpl->getValue('selected_country')['country_name'];?>
&<?php }
if ($_smarty_tpl->getValue('distance')) {?>distance=<?php echo $_smarty_tpl->getValue('distance');?>
&<?php }?>sort=salary-high" class="dropdown-item"><i class="fas fa-sort-amount-down fa-fw mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Salary High");?>
</a>
            <a href="?<?php if ($_smarty_tpl->getValue('selected_country')) {?>country=<?php echo $_smarty_tpl->getValue('selected_country')['country_name'];?>
&<?php }
if ($_smarty_tpl->getValue('distance')) {?>distance=<?php echo $_smarty_tpl->getValue('distance');?>
&<?php }?>sort=salary-low" class="dropdown-item"><i class="fas fa-sort-amount-down-alt fa-fw mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Salary Low");?>
</a>
          </div>
          <!-- sort -->
          <!-- location filter -->
          <?php if ($_smarty_tpl->getValue('user')->_logged_in && $_smarty_tpl->getValue('system')['location_finder_enabled']) {?>
            <a href="#" data-bs-toggle="dropdown" class="countries-filter mr10">
              <i class="fa fa-map-marker-alt mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Distance");?>

            </a>
            <div class="dropdown-menu dropdown-menu-end">
              <form class="ptb15 plr15" method="get" action="?">
                <div class="form-group">
                  <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Distance");?>
</label>
                  <div>
                    <?php if ($_smarty_tpl->getValue('selected_country')) {?>
                      <input type="hidden" name="country" value="<?php echo $_smarty_tpl->getValue('selected_country')['country_name'];?>
">
                    <?php }?>
                    <div class="d-grid mb10">
                      <input type="range" class="custom-range" min="1" max="5000" name="distance" value="<?php if ($_smarty_tpl->getValue('distance')) {
echo $_smarty_tpl->getValue('distance');
} else { ?>5000<?php }?>" oninput="this.form.distance_value.value=this.value">
                    </div>
                    <div class="input-group">
                      <span class="input-group-text" id="basic-addon1"><?php if ($_smarty_tpl->getValue('system')['system_distance'] == "mile") {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("ML");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("KM");
}?></span>
                      <input disabled type="number" class="form-control" min="1" max="5000" name="distance_value" value="<?php if ($_smarty_tpl->getValue('distance')) {
echo $_smarty_tpl->getValue('distance');
} else { ?>5000<?php }?>" oninput="this.form.distance.value=this.value">
                    </div>
                    <?php if ($_smarty_tpl->getValue('sort')) {?>
                      <input type="hidden" name="sort" value="<?php echo $_smarty_tpl->getValue('sort');?>
">
                    <?php }?>
                  </div>
                </div>
                <div class="d-grid">
                  <button type="submit" class="btn btn-sm btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Filter");?>
</button>
                </div>
              </form>
            </div>
          <?php }?>
          <!-- location filter -->
          <!-- country filter -->
          <a href="#" data-bs-toggle="dropdown" class="countries-filter">
            <i class="fa fa-globe fa-fw"></i>
            <?php if ($_smarty_tpl->getValue('selected_country')) {?>
              <span><?php echo $_smarty_tpl->getValue('selected_country')['country_name'];?>
</span>
            <?php } else { ?>
              <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("All Countries");?>
</span>
            <?php }?>
          </a>
          <div class="dropdown-menu dropdown-menu-end countries-dropdown">
            <div class="js_scroller">
              <a class="dropdown-item" href="?<?php if ($_smarty_tpl->getValue('distance')) {?>distance=<?php echo $_smarty_tpl->getValue('distance');
if ($_smarty_tpl->getValue('sort')) {?>&<?php }
}
if ($_smarty_tpl->getValue('sort')) {?>sort=<?php echo $_smarty_tpl->getValue('sort');
}?>">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("All Countries");?>

              </a>
              <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('countries'), 'country');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('country')->value) {
$foreach2DoElse = false;
?>
                <a class="dropdown-item" href="?country=<?php echo $_smarty_tpl->getValue('country')['country_name_native'];
if ($_smarty_tpl->getValue('distance')) {?>&distance=<?php echo $_smarty_tpl->getValue('distance');
}
if ($_smarty_tpl->getValue('sort')) {?>&sort=<?php echo $_smarty_tpl->getValue('sort');
}?>">
                  <?php echo $_smarty_tpl->getValue('country')['country_name'];?>

                </a>
              <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </div>
          </div>
          <!-- country filter -->
        </div>
      </div>

      <?php if ($_smarty_tpl->getValue('rows')) {?>
        <div class="row">
          <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('rows'), 'post');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('post')->value) {
$foreach3DoElse = false;
?>
            <?php $_smarty_tpl->renderSubTemplate('file:__feeds_job.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
          <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>

        <?php echo $_smarty_tpl->getValue('pager');?>

      <?php } else { ?>
        <?php $_smarty_tpl->renderSubTemplate('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
      <?php }?>
    </div>
    <!-- right panel -->

  </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->renderSubTemplate('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
