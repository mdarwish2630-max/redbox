<?php

/**
 * ajax -> data -> delete
 *
 * @package Sngine
 * @author Zamblek
 */

// fetch bootstrap
require('../../../bootstrap.php');

// check AJAX Request
is_ajax();

// user access
user_access(true);

// check demo account
if ($user->_data['user_demo']) {
  if ($_POST['handle'] == 'tinymce') {
    return_json(["error" => __("You can't do this with demo account")]);
  } else {
    modal("ERROR", __("Error"), __("You can't do this with demo account"));
  }
}

try {

  // initialize the return array
  $return = [];

  /* FIX: Validate and sanitize file path to prevent path traversal / arbitrary file deletion */
  $src = $_POST['src'];
  // Reject paths containing directory traversal sequences
  if (empty($src) || strpos($src, '..') !== false || strpos($src, "\0") !== false) {
    _error(403);
  }
  // Ensure the file path only contains the uploads directory
  $real_base = realpath(ABSPATH . 'content/uploads');
  $requested_path = realpath(ABSPATH . $src);
  if ($requested_path === false || strpos($requested_path, $real_base) !== 0) {
    _error(403);
  }

  // delete uploaded file
  delete_uploads_file($src, false);

  // return & exit
  return_json($return);

  // return
} catch (Exception $e) {
  modal("ERROR", __("Error"), __("An error occurred"));
}
