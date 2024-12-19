<?php
/*
Plugin Name: Partners Ticker Items
Description: Custom post types, fields, and REST API endpoints for the Partners Ticker Component.
Version: 1.0
Author: Brahm Van Houzen
*/

if (!defined('ABSPATH')) {
  exit;
}

// Load other files
require_once plugin_dir_path(__FILE__) . 'inc/post-types.php';
require_once plugin_dir_path(__FILE__) . 'inc/acf.php';
