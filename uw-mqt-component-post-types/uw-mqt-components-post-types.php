<?php
/*
Plugin Name: UW MQT Components
Description: Custom post types and fields for UW MQT website components
Version: 1.0
Author: Brahm Van Houzen
*/

if (!defined('ABSPATH')) {
  exit;
}

// Load all post types
require_once plugin_dir_path(__FILE__) . 'inc/post-types/hero-component-our-impact-page.php';
require_once plugin_dir_path(__FILE__) . 'inc/post-types/our-impact-component-home-page.php';
require_once plugin_dir_path(__FILE__) . 'inc/post-types/partners-ticker-items.php';

// Load ACF fields after ACF is initialized
function uw_mqt_init_custom_fields()
{
  if (function_exists('acf_add_local_field_group')) {
    require_once plugin_dir_path(__FILE__) . 'inc/acf/hero-component-our-impact-page.php';
    require_once plugin_dir_path(__FILE__) . 'inc/acf/our-impact-component-home-page.php';
    require_once plugin_dir_path(__FILE__) . 'inc/acf/partners-ticker-items.php';
  }
}
add_action('acf/init', 'uw_mqt_init_custom_fields');