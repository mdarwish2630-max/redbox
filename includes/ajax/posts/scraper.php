<?php

/**
 * ajax -> posts -> scraper
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

// valid inputs
if (!isset($_POST['query']) || is_empty($_POST['query'])) {
  _error(403);
}

/* FIX: Validate URL to prevent SSRF (Server-Side Request Forgery) */
$scraper_url = trim($_POST['query']);
$parsed_url = parse_url($scraper_url);

// Only allow http and https schemes
if (!$parsed_url || !isset($parsed_url['scheme']) || !in_array(strtolower($parsed_url['scheme']), ['http', 'https'])) {
  return_json(['error' => true, 'message' => __('Invalid URL scheme. Only HTTP and HTTPS are allowed.')]);
  exit;
}

// Block private/internal IP ranges (RFC 1918, link-local, metadata endpoints)
if (isset($parsed_url['host'])) {
  $host = $parsed_url['host'];
  $ip = gethostbyname($host);

  // Check if IP is private or reserved
  if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)) {
    return_json(['error' => true, 'message' => __('Access to internal or private URLs is not allowed.')]);
    exit;
  }

  // Block AWS metadata endpoint
  if ($host === '169.254.169.254' || $host === 'metadata.google.internal') {
    return_json(['error' => true, 'message' => __('Access to metadata endpoints is not allowed.')]);
    exit;
  }

  // Block localhost
  if (in_array($host, ['localhost', '127.0.0.1', '::1'])) {
    return_json(['error' => true, 'message' => __('Access to local URLs is not allowed.')]);
    exit;
  }
}

// initialize the return array
$return = [];

try {

  // scraper
  $link = $user->scraper($scraper_url);
  if ($link) {
    /* return */
    $return['link'] = $link;
  }
} catch (Exception $e) {
  /* FIX: Log error instead of silently swallowing */
  error_log('Scraper error for URL ' . $scraper_url . ': ' . $e->getMessage());
}

// return & exit
return_json($return);
