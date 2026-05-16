<?php
/**
 * Install Arabic Logo Settings
 * 
 * Adds system_logo_ar and system_logo_ar_dark settings to the system_options table.
 * Run this file ONCE from browser, then DELETE it.
 * 
 * Usage: https://yourdomain.com/install_arabic_logo.php
 */

require_once('includes/bootstrap.php');

// Only allow admin
if (!$user->_is_admin) {
    die('Access denied. Admin only.');
}

try {
    $db->query("INSERT INTO system_options (option_name, option_value) VALUES ('system_logo_ar', '')");
    echo "✓ Added: system_logo_ar<br>";
} catch (Exception $e) {
    echo "- system_logo_ar already exists (" . $e->getMessage() . ")<br>";
}

try {
    $db->query("INSERT INTO system_options (option_name, option_value) VALUES ('system_logo_ar_dark', '')");
    echo "✓ Added: system_logo_ar_dark<br>";
} catch (Exception $e) {
    echo "- system_logo_ar_dark already exists (" . $e->getMessage() . ")<br>";
}

echo "<br><strong>Done!</strong> Please delete this file now.";
