<?php

/**
 * APIs -> utils -> functions
 *
 * @package Sngine
 * @author Zamblek
 */

/**
 * checkAPIRequest
 *
 * @return void
 */
function checkAPIRequest()
{
  if (!valid_api_request()) {
    apiError('The API key is invalid', 401);
  }
}


/**
 * expressJSON
 *
 * @return void
 */
function expressJSON()
{
  /* FIX: Use exact path match instead of substring match to prevent bypass */
  $request_uri = strtok($_SERVER['REQUEST_URI'], '?');
  if (preg_match('#/data/upload$#', $request_uri)) return;
  $_POST = json_decode(file_get_contents('php://input'), true);
}


/**
 * isUserAuthenticated
 *
 * @return void
 */
function isUserAuthenticated()
{
  global $user;
  $excluded_endpoints = [
    '/ping',
    '/400',
    '/401',
    '/403',
    '/404',
    '/500',
    '/app/contact_us',
    '/app/settings',
    '/app/static_pages',
    '/app/genders',
    '/app/user_groups',
    '/app/languages',
    '/app/countries',
    '/app/custom_fields',
    '/auth/signup',
    '/auth/signin',
    '/auth/two_factor_authentication',
    '/auth/forget_password',
    '/auth/forget_password_confirm',
    '/auth/forget_password_reset',
  ];
  $endpoint = strtok(str_replace(API_STACK, '', $_SERVER['REQUEST_URI']), '?');
  /* FIX: Use exact match instead of strpos substring match to prevent authentication bypass */
  if (in_array($endpoint, $excluded_endpoints)) return;
  if (!$user->_logged_in) {
    apiError(__('You are not logged in'), 401);
  }
}


/**
 * apiError
 *
 * @param string $message
 * @param int $code
 *
 * @return void
 */
function apiError($message, $code = null)
{
  global $date;
  header('Content-Type: application/json');
  /* FIX: Sanitize error message to prevent information disclosure */
  $safe_message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
  switch ($code) {
    case '400':
      header('HTTP/1.1 400 Bad Request');
      break;

    case '401':
      header('HTTP/1.1 401 Unauthorized');
      break;

    case '403':
      header('HTTP/1.1 403 Forbidden');
      break;

    case '404':
      header('HTTP/1.1 404 Not Found');
      break;

    default:
      header('HTTP/1.1 500 Internal Server Error');
      break;
  }
  exit(json_encode([
    'status' => 'error',
    'message' => $safe_message,
    'timestamp' => $date
  ]));
}


/**
 * apiResponse
 *
 * @param object $res
 * @param array $args
 *
 * @return void
 */
function apiResponse($res, $args = [])
{
  global $date;
  $code = (isset($args['code'])) ? $args['code'] : 200;
  $data = (isset($args['data'])) ? $args['data'] : [];
  $reponse['status'] = 'success';
  if (isset($args['message'])) {
    $reponse['message'] = $args['message'];
  }
  if (isset($data)) {
    $reponse['data'] = $data;
  }
  if (isset($args['has_more'])) {
    $reponse['has_more'] = $args['has_more'];
  }
  $reponse['timestamp'] = $date;
  $res->status($code);
  $res->send(
    json_encode($reponse),
    ['Content-type' => 'application/json']
  );
}
