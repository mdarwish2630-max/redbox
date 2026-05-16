<?php

/**
 * ajax -> core -> forget password confirm
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

try {

  // forget password confirm
  $user->forget_password_confirm($_POST['email'], $_POST['reset_key']);

  // return
  /* FIX: Escape email and reset_key to prevent XSS in JavaScript callback */
  $safe_email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
  $safe_reset_key = htmlspecialchars($_POST['reset_key'], ENT_QUOTES, 'UTF-8');
  modal("#forget-password-reset", "{email: '" . $safe_email . "', reset_key: '" . $safe_reset_key . "'}");
} catch (Exception $e) {
  return_json(['error' => true, 'message' => $e->getMessage()]);
}
