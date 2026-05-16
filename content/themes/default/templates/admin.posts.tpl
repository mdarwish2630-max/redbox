<div class="card">
  <div class="card-header with-icon">
    {if $sub_view == "find"}
      <div class="float-end">
        <a href="{$system['system_url']}/{$control_panel['url']}/posts" class="btn btn-md btn-light">
          <i class="fa fa-arrow-circle-left mr5"></i>{__("Go Back")}
        </a>
      </div>
    {elseif $sub_view == "browse_categories"}
      <div class="float-end">
        <a href="{$system['system_url']}/{$control_panel['url']}/posts/add_browse_category" class="btn btn-md btn-primary">
          <i class="fa fa-plus"></i><span class="ml5 d-none d-lg-inline-block">{__("Add New Category")}</span>
        </a>
      </div>
    {elseif $sub_view == "videos_categories"}
      <div class="float-end">
        <a href="{$system['system_url']}/{$control_panel['url']}/posts/add_videos_category" class="btn btn-md btn-primary">
          <i class="fa fa-plus"></i><span class="ml5 d-none d-lg-inline-block">{__("Add New Category")}</span>
        </a>
      </div>
    {elseif $sub_view == "add_browse_category" || $sub_view == "edit_browse_category"}
      <div class="float-end">
        <a href="{$system['system_url']}/{$control_panel['url']}/posts/browse_categories" class="btn btn-md btn-light">
          <i class="fa fa-arrow-circle-left"></i><span class="ml5 d-none d-lg-inline-block">{__("Go Back")}</span>
        </a>
      </div>
    {elseif $sub_view == "add_videos_category" || $sub_view == "edit_videos_category"}
      <div class="float-end">
        <a href="{$system['system_url']}/{$control_panel['url']}/posts/videos_categories" class="btn btn-md btn-light">
          <i class="fa fa-arrow-circle-left"></i><span class="ml5 d-none d-lg-inline-block">{__("Go Back")}</span>
        </a>
      </div>
    {/if}
    <i class="fa fa-newspaper mr10"></i>{__("Posts")}
    {if $sub_view == "find"} &rsaquo; {__("Find")}{/if}
    {if $sub_view == "pending"} &rsaquo; {__("Pending")}{/if}
    {if $sub_view == "browse_categories"} &rsaquo; {__("Categories")}{/if}
    {if $sub_view == "add_browse_category"} &rsaquo; {__("Categories")} &rsaquo; {__("Add New Category")}{/if}
    {if $sub_view == "edit_browse_category"} &rsaquo; {__("Categories")} &rsaquo; {__($data['category_name'])}{/if}
    {if $sub_view == "videos_categories"} &rsaquo; {__("Videos Categories")}{/if}
    {if $sub_view == "add_videos_category"} &rsaquo; {__("Videos Categories")} &rsaquo; {__("Add New Category")}{/if}
    {if $sub_view == "edit_videos_category"} &rsaquo; {__("Videos Categories")} &rsaquo; {$data['category_name']}{/if}
  </div>

  {if $sub_view == "" || $sub_view == "pending" || $sub_view == "find"}

    <div class="card-body">

      {if $sub_view == "" || $sub_view == "pending"}
        <div class="row">
          <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="stat-panel bg-gradient-indigo">
              <div class="stat-cell narrow">
                <i class="fa fa-newspaper bg-icon"></i>
                <span class="text-xxlg">{$insights['posts']}</span><br>
                <span class="text-lg">{__("Posts")}</span><br>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="stat-panel bg-gradient-warning">
              <div class="stat-cell narrow">
                <i class="fa fa-clock bg-icon"></i>
                <span class="text-xxlg">{$insights['pending_posts']}</span><br>
                <span class="text-lg">{__("Pending Posts")}</span><br>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="stat-panel bg-gradient-primary">
              <div class="stat-cell narrow">
                <i class="fa fa-comments bg-icon"></i>
                <span class="text-xxlg">{$insights['posts_comments']}</span><br>
                <span class="text-lg">{__("Comments")}</span><br>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="stat-panel bg-gradient-info">
              <div class="stat-cell narrow">
                <i class="fa fa-smile bg-icon"></i>
                <span class="text-xxlg">{$insights['posts_likes']}</span><br>
                <span class="text-lg">{__("Reactions")}</span><br>
              </div>
            </div>
          </div>
        </div>
      {/if}

      <!-- search form -->
      <div class="mb20">
        <form class="d-flex flex-row align-items-center flex-wrap" action="{$system['system_url']}/{$control_panel['url']}/posts/find" method="get">
          <div class="form-group mb0">
            <div class="input-group">
              <input type="text" class="form-control" name="query">
              <button type="submit" class="btn btn-sm btn-light"><i class="fas fa-search mr5"></i>{__("Search")}</button>
            </div>
          </div>
        </form>
        <div class="form-text small">
          {__("Search by Post ID or Text")}
        </div>
      </div>
      <!-- search form -->

      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th>{__("ID")}</th>
              <th>{__("Author")}</th>
              <th>{__("Type")}</th>
              <th>{__("Approved")}</th>
              <th>{__("Time")}</th>
              <th>{__("Link")}</th>
              <th>{__("Actions")}</th>
            </tr>
          </thead>
          <tbody>
            {if $rows}
              {foreach $rows as $row}
                <tr>
                  <td>
                    {$row['post_id']}
                  </td>
                  <td>
                    <a target="_blank" href="{$row['post_author_url']}">
                      <img class="tbl-image" src="{$row['post_author_picture']}">
                      {$row['post_author_name']}
                    </a>
                  </td>
                  <td>
                    <span class="badge rounded-pill badge-lg bg-secondary">
                      {if $row['post_type'] == "shared"}
                        {__("Share")}

                      {elseif $row['post_type'] == ""}
                        {__("Text")}

                      {elseif $row['post_type'] == "map"}
                        {__("Maps")}

                      {elseif $row['post_type'] == "link"}
                        {__("Link")}

                      {elseif $row['post_type'] == "media"}
                        {__("Media")}

                      {elseif $row['post_type'] == "live"}
                        {__("Live Streaming")}

                      {elseif $row['post_type'] == "photos"}
                        {__("Photos")}

                      {elseif $row['post_type'] == "album"}
                        {__("Album")}

                      {elseif $row['post_type'] == "profile_picture"}
                        {__("Profile Picture")}

                      {elseif $row['post_type'] == "profile_cover"}
                        {__("Cover Photo")}

                      {elseif $row['post_type'] == "page_picture"}
                        {__("Page Picture")}

                      {elseif $row['post_type'] == "page_cover"}
                        {__("Page Cover")}

                      {elseif $row['post_type'] == "group_picture"}
                        {__("Group Picture")}

                      {elseif $row['post_type'] == "group_cover"}
                        {__("Group Cover")}

                      {elseif $row['post_type'] == "event_cover"}
                        {__("Event Cover")}

                      {elseif $row['post_type'] == "article"}
                        {__("Blog")}

                      {elseif $row['post_type'] == "product"}
                        {__("Product")}

                      {elseif $row['post_type'] == "funding"}
                        {__("Funding")}

                      {elseif $row['post_type'] == "offer"}
                        {__("Offer")}

                      {elseif $row['post_type'] == "job"}
                        {__("Job")}

                      {elseif $row['post_type'] == "poll"}
                        {__("Poll")}

                      {elseif $row['post_type'] == "reel"}
                        {__("Reel")}

                      {elseif $row['post_type'] == "video"}
                        {__("Video")}

                      {elseif $row['post_type'] == "audio"}
                        {__("Audio")}

                      {elseif $row['post_type'] == "file"}
                        {__("File")}

                      {elseif $row['post_type'] == "combo"}
                        {__("Combo")}

                      {/if}
                    </span>
                  </td>
                  <td>
                    {if $row['pre_approved'] || $row['has_approved']}
                      <span class="badge rounded-pill bg-success">
                        {__("Yes")}
                      </span>
                    {else}
                      <span class="badge rounded-pill bg-danger">
                        {__("No")}
                      </span>
                    {/if}
                  </td>
                  <td>
                    <span class="js_moment" data-time="{$row['time']}">{$row['time']}</span>
                  </td>
                  <td>
                    <a class="btn btn-sm btn-light" href="{$system['system_url']}/posts/{$row['post_id']}" target="_blank">
                      <i class="fa fa-eye mr5"></i>{__("View")}
                    </a>
                  </td>
                  <td>
                    {if $sub_view == "pending"}
                      <button data-bs-toggle="tooltip" title='{__("Approve")}' class="btn btn-sm btn-icon btn-rounded btn-success js_post-approve" data-id="{$row['post_id']}">
                        <i class="fa fa-check"></i>
                      </button>
                    {/if}
                    <button data-bs-toggle="tooltip" title='{__("Delete")}' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="post" data-id="{$row['post_id']}">
                      <i class="fa fa-trash-alt"></i>
                    </button>
                  </td>
                </tr>
              {/foreach}
            {else}
              <tr>
                <td colspan="7" class="text-center">
                  {__("No data to show")}
                </td>
              </tr>
            {/if}
          </tbody>
        </table>
      </div>

      {$pager}

    </div>

  {elseif $sub_view == "browse_categories"}

    <div class="card-body">
      <div class="alert alert-info mb15">
        <i class="fa fa-info-circle mr5"></i>
        {__("Category names are used as translation keys. Add translations in the language files.")}
      </div>
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th style="width:50px;">{__("Icon")}</th>
              <th>{__("Title")}</th>
              <th>{__("Description")}</th>
              <th style="width:80px;">{__("Color")}</th>
              <th style="width:60px;">{__("Order")}</th>
              <th style="width:80px;">{__("Status")}</th>
              <th style="width:100px;">{__("Actions")}</th>
            </tr>
          </thead>
          <tbody>
            {if $rows}
              {foreach $rows as $row}
                <tr>
                  <td class="text-center">
                    {if $row['category_icon']}
                      <i class="fa {$row['category_icon']}" style="color: {$row['category_color']}; font-size: 18px;"></i>
                    {else}
                      <i class="fa fa-tag" style="color: #999; font-size: 18px;"></i>
                    {/if}
                  </td>
                  <td>
                    <strong>{__($row['category_name'])}</strong>
                    <br><small class="text-muted">[{$row['category_name']}]</small>
                  </td>
                  <td>
                    {if $row['category_description']}
                      {$row['category_description']|truncate:60}
                    {else}
                      <span class="text-muted">-</span>
                    {/if}
                  </td>
                  <td class="text-center">
                    <span style="display:inline-block; width:22px; height:22px; border-radius:4px; background:{$row['category_color']}; vertical-align:middle;" title="{$row['category_color']}"></span>
                  </td>
                  <td class="text-center">
                    <span class="badge rounded-pill badge-lg bg-info">{$row['category_order']}</span>
                  </td>
                  <td class="text-center">
                    <label class="switch" style="margin-bottom:0;">
                      <input type="checkbox" class="js_admin-toggle-browse-category" data-id="{$row['category_id']}" {if $row['is_active']}checked{/if}>
                      <span class="slider round"></span>
                    </label>
                  </td>
                  <td>
                    <a data-bs-toggle="tooltip" title='{__("Edit")}' href="{$system['system_url']}/{$control_panel['url']}/posts/edit_browse_category/{$row['category_id']}" class="btn btn-sm btn-icon btn-rounded btn-primary">
                      <i class="fa fa-pencil-alt"></i>
                    </a>
                    <button data-bs-toggle="tooltip" title='{__("Delete")}' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="browse_category" data-id="{$row['category_id']}">
                      <i class="fa fa-trash-alt"></i>
                    </button>
                  </td>
                </tr>
              {/foreach}
            {else}
              <tr>
                <td colspan="7" class="text-center">
                  {__("No data to show")}
                </td>
              </tr>
            {/if}
          </tbody>
        </table>
      </div>
    </div>

  {elseif $sub_view == "add_browse_category"}

    <form class="js_ajax-forms" data-url="admin/posts.php?do=add_browse_category">
      <div class="card-body">
        <div class="row form-group">
          <label class="col-md-3 form-label">
            {__("Category Name")}
          </label>
          <div class="col-md-9">
            <input class="form-control" name="category_name" placeholder='Travel'>
            <span class="form-text">{__("This name is used as the translation key in all language files")}</span>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            {__("Description")}
          </label>
          <div class="col-md-9">
            <input class="form-control" name="category_description">
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            {__("Icon")}
          </label>
          <div class="col-md-9">
            <div class="input-group">
              <span class="input-group-text"><i class="fa fa-search"></i></span>
              <input class="form-control" name="category_icon" placeholder="fa-tag" id="browse_category_icon_preview_input">
              <span class="input-group-text" id="browse_category_icon_preview"><i class="fa fa-tag"></i></span>
            </div>
            <span class="form-text">{__("FontAwesome icon class, e.g. fa-plane, fa-music, fa-camera")}</span>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            {__("Color")}
          </label>
          <div class="col-md-9">
            <div class="input-group">
              <input class="form-control" name="category_color" type="color" value="#ff2442" style="height:42px; cursor:pointer;">
              <input class="form-control" name="category_color_text" placeholder="#ff2442" id="browse_category_color_text">
            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            {__("Order")}
          </label>
          <div class="col-md-9">
            <input class="form-control" name="category_order" type="number" value="0">
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            {__("Status")}
          </label>
          <div class="col-md-9">
            <label class="switch" for="bc_is_active">
              <input type="checkbox" name="is_active" id="bc_is_active" checked>
              <span class="slider round"></span>
            </label>
            <span class="form-text">{__("Active categories are visible to users")}</span>
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
        <button type="submit" class="btn btn-primary">{__("Save Changes")}</button>
      </div>
    </form>

  {elseif $sub_view == "edit_browse_category"}

    <form class="js_ajax-forms" data-url="admin/posts.php?do=edit_browse_category&id={$data['category_id']}">
      <div class="card-body">
        <div class="row form-group">
          <label class="col-md-3 form-label">
            {__("Category Name")}
          </label>
          <div class="col-md-9">
            <input class="form-control" name="category_name" value="{$data['category_name']}">
            <span class="form-text">{__("This name is used as the translation key in all language files")}</span>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            {__("Description")}
          </label>
          <div class="col-md-9">
            <input class="form-control" name="category_description" value="{$data['category_description']}">
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            {__("Icon")}
          </label>
          <div class="col-md-9">
            <div class="input-group">
              <span class="input-group-text"><i class="fa fa-search"></i></span>
              <input class="form-control" name="category_icon" value="{$data['category_icon']}" id="browse_category_icon_preview_input">
              <span class="input-group-text" id="browse_category_icon_preview"><i class="fa {$data['category_icon']}"></i></span>
            </div>
            <span class="form-text">{__("FontAwesome icon class, e.g. fa-plane, fa-music, fa-camera")}</span>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            {__("Color")}
          </label>
          <div class="col-md-9">
            <div class="input-group">
              <input class="form-control" name="category_color" type="color" value="{$data['category_color']}" style="height:42px; cursor:pointer;">
              <input class="form-control" name="category_color_text" value="{$data['category_color']}" id="browse_category_color_text">
            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            {__("Order")}
          </label>
          <div class="col-md-9">
            <input class="form-control" name="category_order" type="number" value="{$data['category_order']}">
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            {__("Status")}
          </label>
          <div class="col-md-9">
            <label class="switch" for="bc_is_active">
              <input type="checkbox" name="is_active" id="bc_is_active" {if $data['is_active']}checked{/if}>
              <span class="slider round"></span>
            </label>
            <span class="form-text">{__("Active categories are visible to users")}</span>
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
        <button type="submit" class="btn btn-primary">{__("Save Changes")}</button>
      </div>
    </form>

  {elseif $sub_view == "videos_categories"}

    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover js_treegrid">
          <thead>
            <tr>
              <th>{__("Title")}</th>
              <th>{__("Description")}</th>
              <th>{__("Order")}</th>
              <th>{__("Actions")}</th>
            </tr>
          </thead>
          <tbody>
            {if $rows}
              {foreach $rows as $row}
                {include file='__categories.recursive_rows.tpl' _url="posts" _edit_slug="videos" _handle="video_category"}
              {/foreach}
            {else}
              <tr>
                <td colspan="4" class="text-center">
                  {__("No data to show")}
                </td>
              </tr>
            {/if}
          </tbody>
        </table>
      </div>
    </div>

  {elseif $sub_view == "add_videos_category"}

    <form class="js_ajax-forms" data-url="admin/posts.php?do=add_videos_category">
      <div class="card-body">
        <div class="row form-group">
          <label class="col-md-3 form-label">
            {__("Name")}
          </label>
          <div class="col-md-9">
            <input class="form-control" name="category_name">
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            {__("Description")}
          </label>
          <div class="col-md-9">
            <textarea class="form-control" name="category_description" rows="3"></textarea>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            {__("Parent Category")}
          </label>
          <div class="col-md-9">
            <select class="form-select" name="category_parent_id">
              <option value="0">{__("Set as a Parent Category")}</option>
              {foreach $categories as $category}
                {include file='__categories.recursive_options.tpl'}
              {/foreach}
            </select>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            {__("Order")}
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
        <button type="submit" class="btn btn-primary">{__("Save Changes")}</button>
      </div>
    </form>

  {elseif $sub_view == "edit_videos_category"}

    <form class="js_ajax-forms" data-url="admin/posts.php?do=edit_videos_category&id={$data['category_id']}">
      <div class="card-body">
        <div class="row form-group">
          <label class="col-md-3 form-label">
            {__("Name")}
          </label>
          <div class="col-md-9">
            <input class="form-control" name="category_name" value="{$data['category_name']}">
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            {__("Description")}
          </label>
          <div class="col-md-9">
            <textarea class="form-control" name="category_description" rows="3">{$data['category_description']}</textarea>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            {__("Parent Category")}
          </label>
          <div class="col-md-9">
            <select class="form-select" name="category_parent_id">
              <option value="0">{__("Set as a Parent Category")}</option>
              {foreach $data["categories"] as $category}
                {include file='__categories.recursive_options.tpl' data_category=$data['category_parent_id']}
              {/foreach}
            </select>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            {__("Order")}
          </label>
          <div class="col-md-9">
            <input class="form-control" name="category_order" value="{$data['category_order']}">
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
        <button type="submit" class="btn btn-primary">{__("Save Changes")}</button>
      </div>
    </form>

  {/if}
</div>