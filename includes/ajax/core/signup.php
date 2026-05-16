<?php

/**
 * ajax -> core -> signup
 *
 * @package Sngine
 * @author Zamblek
 */

// fetch bootstrap
require('../../../bootstrap.php');

// check AJAX Request
is_ajax();

// check user logged in
if ($user->_logged_in) {
  return_json(['callback' => 'window.location.reload();']);
}

// check honeypot
if (!is_empty($_POST['field1'])) {
  return_json();
}

try {

  // signup
  $user->sign_up($_POST);

  // return
  if ($_POST['oauth_app_id']) {
    /* FIX: Validate oauth_app_id is numeric and use json_encode to prevent XSS */
    $safe_app_id = is_numeric($_POST['oauth_app_id']) ? intval($_POST['oauth_app_id']) : 0;
    $safe_url = htmlspecialchars($system['system_url'], ENT_QUOTES, 'UTF-8');
    return_json(['callback' => 'window.location.href = "' . $safe_url . '/api/oauth?app_id=' . $safe_app_id . '";']);
  } else {
    return_json(['callback' => 'window.location.reload();']);
  }
} catch (Exception $e) {
  return_json(['error' => true, 'message' => $e->getMessage()]);
}
