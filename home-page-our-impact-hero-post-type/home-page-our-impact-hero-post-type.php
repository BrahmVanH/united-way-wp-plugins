<?php
/*
Plugin Name: Our Impact Component - Home Page
Description: Custom post types, fields, and REST API endpoints for the Home Page Our Impact Hero section.
Version: 1.0
Author: Brahm Van Houzen
*/

if (!defined('ABSPATH')) {
  exit;
}

// Load post types first
require_once plugin_dir_path(__FILE__) . 'inc/post-types.php';

// Load ACF fields after ACF is initialized
function init_custom_fields_our_impact_home_page()
{
  if (function_exists('acf_add_local_field_group')) {
    require_once plugin_dir_path(__FILE__) . 'inc/acf.php';
  }
}
add_action('acf/init', 'init_custom_fields_our_impact_home_page');