<?php

/**
 * ajax -> payments -> wallet
 *
 * @package Sngine
 * @author Zamblek
 */

// fetch bootstrap
require('../../../bootstrap.php');

// check AJAX Request
is_ajax();

// user access
user_access(true, true);

try {

  switch ($_REQUEST['do']) {
    case 'wallet_transfer':
      // valid inputs
      if (!isset($_POST['amount']) || !is_numeric($_POST['amount']) || $_POST['amount'] < 0) {
        throw new Exception(__("Enter valid amount of money"));
      }
      /* FIX: Validate send_to_id is numeric to prevent IDOR/SQL injection */
      if (!isset($_POST['send_to_id']) || !is_numeric($_POST['send_to_id'])) {
        _error(400);
      }

      // process
      $user->wallet_transfer($_POST['send_to_id'], $_POST['amount']);

      // return
      return_json(['callback' => 'window.location = site_path + "/wallet?wallet_transfer_succeed"']);
      break;

    case 'send_tip':
      // valid inputs
      if (!isset($_POST['amount']) || !is_numeric($_POST['amount']) || $_POST['amount'] < 0) {
        throw new Exception(__("Enter valid amount of money"));
      }
      /* FIX: Validate send_to_id is numeric */
      if (!isset($_POST['send_to_id']) || !is_numeric($_POST['send_to_id'])) {
        _error(400);
      }

      // process
      $user->wallet_send_tip($_POST['send_to_id'], $_POST['amount']);

      // return
      modal("SUCCESS", __("Thanks"), __("Tip Sent Successfully"));
      break;

    case 'wallet_replenish':
      // valid inputs
      if (!isset($_POST['amount']) || !is_numeric($_POST['amount']) || $_POST['amount'] < 0) {
        throw new Exception(__("Enter valid amount of money"));
      }

      // return
      /* FIX: Use json_encode to prevent XSS in JavaScript callback */
      $safe_amount = floatval($_POST['amount']);
      $vat = get_payment_vat_value($_POST['amount']);
      $fees = get_payment_fees_value($_POST['amount']);
      $total = get_payment_total_value($_POST['amount']);
      $total_printed = get_payment_total_value($_POST['amount'], true);
      modal("#payment", json_encode(['handle' => 'wallet', 'price' => $safe_amount, 'vat' => $vat, 'fees' => $fees, 'total' => $total, 'total_printed' => $total_printed]));
      break;

    case 'wallet_withdraw_affiliates':
      // valid inputs
      if (!isset($_POST['amount']) || !is_numeric($_POST['amount']) || $_POST['amount'] < 0) {
        throw new Exception(__("Enter valid amount of money"));
      }

      // process
      $user->wallet_withdraw_affiliates($_POST['amount']);

      // return
      return_json(['callback' => 'window.location = site_path + "/wallet?wallet_withdraw_affiliates_succeed"']);
      break;

    case 'wallet_withdraw_points':
      // valid inputs
      if (!isset($_POST['amount']) || !is_numeric($_POST['amount']) || $_POST['amount'] < 0) {
        throw new Exception(__("Enter valid amount of money"));
      }

      // process
      $user->wallet_withdraw_points($_POST['amount']);

      // return
      return_json(['callback' => 'window.location = site_path + "/wallet?wallet_withdraw_points_succeed"']);
      break;

    case 'wallet_withdraw_market':
      // valid inputs
      if (!isset($_POST['amount']) || !is_numeric($_POST['amount']) || $_POST['amount'] < 0) {
        throw new Exception(__("Enter valid amount of money"));
      }

      // process
      $user->wallet_withdraw_market($_POST['amount']);

      // return
      return_json(['callback' => 'window.location = site_path + "/wallet?wallet_withdraw_market_succeed"']);
      break;

    case 'wallet_withdraw_funding':
      // valid inputs
      if (!isset($_POST['amount']) || !is_numeric($_POST['amount']) || $_POST['amount'] < 0) {
        throw new Exception(__("Enter valid amount of money"));
      }

      // process
      $user->wallet_withdraw_funding($_POST['amount']);

      // return
      return_json(['callback' => 'window.location = site_path + "/wallet?wallet_withdraw_funding_succeed"']);
      break;

    case 'wallet_withdraw_monetization':
      // valid inputs
      if (!isset($_POST['amount']) || !is_numeric($_POST['amount']) || $_POST['amount'] < 0) {
        throw new Exception(__("Enter valid amount of money"));
      }

      // process
      $user->wallet_withdraw_monetization($_POST['amount']);

      // return
      return_json(['callback' => 'window.location = site_path + "/wallet?wallet_withdraw_monetization_succeed"']);
      break;

    case 'wallet_package_payment':
      /* FIX: Validate package_id is numeric */
      if (!isset($_POST['package_id']) || !is_numeric($_POST['package_id'])) {
        _error(400);
      }
      // process
      $user->wallet_package_payment($_POST['package_id']);

      // return
      return_json(['callback' => 'window.location = site_path + "/wallet?wallet_package_payment_succeed"']);
      break;

    case 'wallet_monetization_payment':
      /* FIX: Validate plan_id is numeric */
      if (!isset($_POST['plan_id']) || !is_numeric($_POST['plan_id'])) {
        _error(400);
      }
      // process
      $user->wallet_monetization_payment($_POST['plan_id']);

      // return
      return_json(['callback' => 'window.location = site_path + "/wallet?wallet_monetization_payment_succeed"']);
      break;

    case 'wallet_paid_post':
      /* FIX: Validate post_id is numeric */
      if (!isset($_POST['post_id']) || !is_numeric($_POST['post_id'])) {
        _error(400);
      }
      // process
      $user->wallet_paid_post($_POST['post_id']);

      // return
      return_json(['callback' => 'window.location = site_path + "/wallet?wallet_paid_post_succeed"']);
      break;

    case 'wallet_donate':
      // valid inputs
      if (!isset($_POST['amount']) || !is_numeric($_POST['amount']) || $_POST['amount'] < 0) {
        throw new Exception(__("Enter valid amount of money"));
      }
      /* FIX: Validate post_id is numeric */
      if (!isset($_POST['post_id']) || !is_numeric($_POST['post_id'])) {
        _error(400);
      }

      // process
      $user->wallet_donate($_POST['post_id'], $_POST['amount']);

      // return
      return_json(['callback' => 'window.location = site_path + "/wallet?wallet_donate_succeed"']);
      break;

    case 'wallet_marketplace':
      /* FIX: Validate orders_collection_id is numeric */
      if (!isset($_POST['orders_collection_id']) || !is_numeric($_POST['orders_collection_id'])) {
        _error(400);
      }
      // process
      $user->wallet_marketplace_payment($_POST['orders_collection_id']);

      // return
      return_json(['callback' => 'window.location = site_path + "/wallet?wallet_marketplace_succeed"']);
      break;

    default:
      _error(400);
      break;
  }
} catch (Exception $e) {
  if ($_REQUEST['do'] == "wallet_marketplace") {
    modal("ERROR", __("Error"), __("An error occurred"));
  } else {
    return_json(['error' => true, 'message' => __("An error occurred")]);
  }
}
