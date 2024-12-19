<?php
/*
Plugin Name: Custom Page Content Posts
Description: Custom post types, fields, and REST API endpoints for UW Mqt
Version: 1.0
Author: Brahm Van Houzen
*/

if (!defined('ABSPATH')) {
  exit;
}

// Load other files
require_once plugin_dir_path(__FILE__) . 'inc/post-types.php';
require_once plugin_dir_path(__FILE__) . 'inc/acf.php';
require_once plugin_dir_path(__FILE__) . 'inc/rest-api.php';
