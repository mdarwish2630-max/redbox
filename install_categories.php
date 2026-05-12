<?php

/**
 * install_categories.php
 *
 * One-time setup helper for the RedNote posts_categories feature.
 * Run this from the browser to:
 *   1. Create the posts_categories table (if it does not exist)
 *   2. Insert the 20 default RedNote-style browsing categories
 *   3. Add category_id column to the posts table (if missing)
 *
 * After successful installation, DELETE this file for security.
 *
 * @package Sngine
 * @author RedNote Theme Integration
 */

// fetch bootstrap (handles config, DB connection, $db, $user, $system)
require('bootstrap.php');

// only allow admins
if (!$user->_logged_in || !$user->_is_admin) {
  die('Access denied. You must be logged in as an administrator.');
}

// HTML output helper
function output($message, $success = true)
{
  $color = $success ? '#27ae60' : '#e74c3c';
  $icon  = $success ? '&#10004;' : '&#10008;';
  echo "<p style='color:{$color}; font-size:16px; margin:8px 0;'>{$icon} {$message}</p>\n";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Install RedNote Browse Categories</title>
  <style>
    body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; max-width: 700px; margin: 60px auto; padding: 0 20px; background: #fafafa; }
    .card { background: #fff; border-radius: 12px; box-shadow: 0 2px 12px rgba(0,0,0,.08); padding: 32px; }
    h1 { font-size: 22px; color: #ff2442; margin-bottom: 4px; }
    h2 { font-size: 15px; color: #666; font-weight: 400; margin-bottom: 24px; }
    .divider { border: none; border-top: 1px solid #eee; margin: 20px 0; }
    .warning { background: #fff3cd; border-left: 4px solid #f39c12; padding: 12px 16px; border-radius: 4px; margin-top: 24px; font-size: 14px; color: #856404; }
  </style>
</head>
<body>
  <div class="card">
    <h1>RedNote Browse Categories Installer</h1>
    <h2>Setting up posts_categories table and default categories...</h2>

    <hr class="divider">

<?php
try {

  /* -------------------------------------------------------
   * Step 1: Create the posts_categories table
   * ------------------------------------------------------- */
  $db->query("
    CREATE TABLE IF NOT EXISTS `posts_categories` (
      `category_id` int(11) NOT NULL AUTO_INCREMENT,
      `category_name` varchar(128) NOT NULL,
      `category_description` varchar(256) DEFAULT NULL,
      `category_icon` varchar(128) DEFAULT NULL,
      `category_order` int(11) NOT NULL DEFAULT '0',
      `category_color` varchar(7) DEFAULT '#ff2442',
      `is_active` tinyint(1) NOT NULL DEFAULT '1',
      PRIMARY KEY (`category_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci
  ");
  output('posts_categories table created (or already exists).');

  /* -------------------------------------------------------
   * Step 2: Insert default categories if the table is empty
   * ------------------------------------------------------- */
  $check = $db->query("SELECT COUNT(*) AS cnt FROM posts_categories");
  $row   = $check->fetch_assoc();

  if ((int) $row['cnt'] === 0) {
    $db->query("
      INSERT INTO `posts_categories`
        (`category_name`, `category_description`, `category_icon`, `category_order`, `category_color`)
      VALUES
        ('Travel',        'Travel and adventure posts',       'fa-plane',               1,  '#3498db'),
        ('Food',          'Food and cooking posts',           'fa-utensils',            2,  '#e67e22'),
        ('Fashion',       'Fashion and style posts',          'fa-shirt',               3,  '#e91e63'),
        ('Beauty',        'Beauty and skincare posts',        'fa-spa',                 4,  '#9b59b6'),
        ('Technology',    'Tech and gadgets posts',           'fa-laptop',              5,  '#2ecc71'),
        ('Fitness',       'Fitness and health posts',         'fa-dumbbell',            6,  '#1abc9c'),
        ('Art',           'Art and creativity posts',         'fa-palette',             7,  '#f39c12'),
        ('Music',         'Music and audio posts',            'fa-music',               8,  '#e74c3c'),
        ('Photography',   'Photography posts',                'fa-camera',              9,  '#34495e'),
        ('Pets',          'Pets and animals posts',           'fa-paw',                 10, '#27ae60'),
        ('Education',     'Education and learning',           'fa-graduation-cap',      11, '#2980b9'),
        ('Gaming',        'Gaming posts',                     'fa-gamepad',             12, '#8e44ad'),
        ('DIY',           'DIY and crafts posts',             'fa-screwdriver-wrench',  13, '#d35400'),
        ('Home',          'Home and decor posts',             'fa-house',               14, '#16a085'),
        ('Sports',        'Sports posts',                     'fa-futbol',              15, '#c0392b'),
        ('Comedy',        'Comedy and fun posts',             'fa-face-laugh',          16, '#f1c40f'),
        ('Nature',        'Nature and environment',           'fa-leaf',                17, '#27ae60'),
        ('Cars',          'Cars and vehicles',                'fa-car',                 18, '#7f8c8d'),
        ('Movies',        'Movies and TV shows',              'fa-film',                19, '#e74c3c'),
        ('Books',         'Books and reading',                'fa-book',                20, '#8e44ad')
    ");
    output('20 default RedNote-style categories inserted.');
  } else {
    output('Categories already exist (' . $row['cnt'] . ' rows) — skipping insert.');
  }

  /* -------------------------------------------------------
   * Step 3: Add category_id column to posts table (if missing)
   * ------------------------------------------------------- */
  // Check whether the column already exists
  $col_check = $db->query("
    SELECT COLUMN_NAME
    FROM INFORMATION_SCHEMA.COLUMNS
    WHERE TABLE_SCHEMA = '" . secure(DB_NAME) . "'
      AND TABLE_NAME   = 'posts'
      AND COLUMN_NAME  = 'category_id'
  ");

  if ($col_check->num_rows === 0) {
    $db->query("ALTER TABLE `posts` ADD COLUMN `category_id` int(11) DEFAULT NULL AFTER `user_id`");
    $db->query("ALTER TABLE `posts` ADD INDEX `idx_category_id` (`category_id`)");
    output('category_id column and index added to posts table.');
  } else {
    output('category_id column already exists in posts table — skipping.');
  }

  /* -------------------------------------------------------
   * Done
   * ------------------------------------------------------- */
  echo '<hr class="divider">';
  echo '<p style="color:#27ae60; font-size:18px; font-weight:600;">&#127881; Installation complete!</p>';

} catch (Exception $e) {
  output('Database error: ' . $e->getMessage(), false);
}
?>

    <div class="warning">
      <strong>Security:</strong> Please delete <code>install_categories.php</code> from your server after running this setup.
    </div>
  </div>
</body>
</html>
