<?php

/**
 * ajax -> data -> browse_categories
 *
 * Returns RedNote-style browse categories for the newsfeed sidebar / top bar.
 * Accessible when the user is logged in OR when the newsfeed is public.
 *
 * @package Sngine
 * @author RedNote Theme Integration
 */

// fetch bootstrap
require('../../../bootstrap.php');

// check AJAX Request
is_ajax();

// user access — allow if logged in OR if the system is public
if (!$user->_logged_in && !$system['system_public']) {
  user_access();
}

try {

  // initialize the return array
  $return = [];

  // query active categories ordered by category_order
  $get_categories = $db->query("SELECT * FROM posts_categories WHERE is_active = 1 ORDER BY category_order ASC");

  // build categories array
  $categories = [];
  while ($category = $get_categories->fetch_assoc()) {
    $categories[] = [
      'category_id'          => (int) $category['category_id'],
      'category_name'        => $category['category_name'],
      'category_description' => $category['category_description'],
      'category_icon'        => $category['category_icon'],
      'category_order'       => (int) $category['category_order'],
      'category_color'       => $category['category_color'],
      'is_active'            => (int) $category['is_active']
    ];
  }

  // return categories as JSON
  $return['categories'] = $categories;
  $return['total'] = count($categories);

  // return & exit
  return_json($return);

} catch (Exception $e) {
  return_json(['error' => __("Error") . ': ' . $e->getMessage()]);
}
