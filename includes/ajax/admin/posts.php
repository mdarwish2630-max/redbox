<?php

/**
 * ajax -> admin -> posts
 * 
 * @package Sngine
 * @author Zamblek
 */

// fetch bootstrap
require('../../../bootstrap.php');

// check AJAX Request
is_ajax();

// check admin|moderator permission
if (!$user->_is_admin && ($user->_is_moderator && !$system['mods_posts_permission'])) {
  modal("MESSAGE", __("System Message"), __("You don't have the right permission to access this"));
}

// check demo account
if ($user->_data['user_demo']) {
  modal("ERROR", __("Demo Restriction"), __("You can't do this with demo account"));
}

// handle posts
try {

  switch ($_REQUEST['do']) {
    case 'approve':
      /* get the post */
      $post = $user->get_post($_POST['id']);
      if (!$post) {
        _error(400);
      }
      /* approve post */
      $db->query(sprintf("UPDATE posts SET has_approved = '1' WHERE post_id = %s", secure($_POST['id'], 'int')));
      /* notify the user */
      $user->post_notification(['to_user_id' => $post['author_id'], 'action' => 'pending_post_approved', 'node_url' => $post['post_id']]);
      /* return */
      return_json();
      break;

    /* ---------- Browse Categories (unified posts/videos) ---------- */
    case 'add_browse_category':
      /* valid inputs */
      if (is_empty($_POST['category_name'])) {
        throw new Exception(__("Please enter a valid category name"));
      }
      if (!is_empty($_POST['category_order']) && !is_numeric($_POST['category_order'])) {
        throw new Exception(__("Please enter a valid category order"));
      }
      /* insert */
      $db->query(sprintf("INSERT INTO posts_categories (category_name, category_description, category_icon, category_order, category_color, is_active) VALUES (%s, %s, %s, %s, %s, %s)",
        secure($_POST['category_name']),
        secure($_POST['category_description']),
        secure($_POST['category_icon']),
        secure($_POST['category_order'], 'int'),
        secure($_POST['category_color']),
        secure($_POST['is_active'], 'int', false, 1)
      ));
      /* return */
      return_json(['callback' => 'window.location = "' . $system['system_url'] . '/' . $control_panel['url'] . '/posts/browse_categories";']);
      break;

    case 'edit_browse_category':
      /* valid inputs */
      if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
        _error(400);
      }
      if (is_empty($_POST['category_name'])) {
        throw new Exception(__("Please enter a valid category name"));
      }
      if (!is_empty($_POST['category_order']) && !is_numeric($_POST['category_order'])) {
        throw new Exception(__("Please enter a valid category order"));
      }
      /* update */
      $db->query(sprintf("UPDATE posts_categories SET category_name = %s, category_description = %s, category_icon = %s, category_order = %s, category_color = %s, is_active = %s WHERE category_id = %s",
        secure($_POST['category_name']),
        secure($_POST['category_description']),
        secure($_POST['category_icon']),
        secure($_POST['category_order'], 'int'),
        secure($_POST['category_color']),
        secure($_POST['is_active'], 'int', false, 1),
        secure($_GET['id'], 'int')
      ));
      /* return */
      return_json(['success' => true, 'message' => __("Category info have been updated")]);
      break;

    case 'toggle_browse_category':
      /* valid inputs */
      if (!isset($_POST['id']) || !is_numeric($_POST['id'])) {
        _error(400);
      }
      /* toggle is_active */
      $db->query(sprintf("UPDATE posts_categories SET is_active = IF(is_active = 1, 0, 1) WHERE category_id = %s", secure($_POST['id'], 'int')));
      /* return */
      $get_status = $db->query(sprintf("SELECT is_active FROM posts_categories WHERE category_id = %s", secure($_POST['id'], 'int')));
      $status = $get_status->fetch_assoc();
      return_json(['success' => true, 'is_active' => $status['is_active']]);
      break;

    /* ---------- Videos Categories (legacy) ---------- */
    case 'add_videos_category':
      /* valid inputs */
      if (is_empty($_POST['category_name'])) {
        throw new Exception(__("Please enter a valid category name"));
      }
      if (!is_empty($_POST['category_order']) && !is_numeric($_POST['category_order'])) {
        throw new Exception(__("Please enter a valid category order"));
      }
      /* insert */
      $db->query(sprintf("INSERT INTO posts_videos_categories (category_name, category_description, category_parent_id, category_order) VALUES (%s, %s, %s, %s)", secure($_POST['category_name']),  secure($_POST['category_description']), secure($_POST['category_parent_id'], 'int'), secure($_POST['category_order'], 'int')));
      /* return */
      return_json(['callback' => 'window.location = "' . $system['system_url'] . '/' . $control_panel['url'] . '/posts/videos_categories";']);
      break;

    case 'edit_videos_category':
      /* valid inputs */
      if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
        _error(400);
      }
      if (is_empty($_POST['category_name'])) {
        throw new Exception(__("Please enter a valid category name"));
      }
      if (!is_empty($_POST['category_order']) && !is_numeric($_POST['category_order'])) {
        throw new Exception(__("Please enter a valid category order"));
      }
      /* update */
      $db->query(sprintf("UPDATE posts_videos_categories SET category_name = %s, category_description = %s, category_parent_id = %s, category_order = %s WHERE category_id = %s", secure($_POST['category_name']), secure($_POST['category_description']), secure($_POST['category_parent_id'], 'int'), secure($_POST['category_order'], 'int'), secure($_GET['id'], 'int')));
      /* return */
      return_json(['success' => true, 'message' => __("Category info have been updated")]);
      break;

    default:
      _error(400);
      break;
  }
} catch (Exception $e) {
  return_json(['error' => true, 'message' => $e->getMessage()]);
}
