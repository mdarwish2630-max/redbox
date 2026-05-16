<?php

/**
 * ajax -> core -> forget password
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

// check secret
/* FIX: Use strict comparison (!==) instead of loose (!=) to prevent type juggling */
if (!isset($_SESSION['secret']) || !isset($_POST['secret']) || $_SESSION['secret'] !== $_POST['secret']) {
  _error(403);
}

try {

  // forget password
  $user->forget_password($_POST['email'], $_POST['g-recaptcha-response'], $_POST['cf-turnstile-response'], true);

  // return
  /* FIX: Escape email to prevent XSS in JavaScript callback */
  $safe_email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
  modal("#forget-password-confirm", "{email: '" . $safe_email . "'}");
} catch (Exception $e) {
  return_json(['error' => true, 'message' => $e->getMessage()]);
}
