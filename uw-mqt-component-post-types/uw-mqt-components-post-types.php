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
require_once plugin_dir_path(__FILE__) . 'inc/post-types/our-impact-statistics-component.php';
require_once plugin_dir_path(__FILE__) . 'inc/post-types/partners-ticker-items.php';
require_once plugin_dir_path(__FILE__) . 'inc/post-types/healthy-community-component.php';
require_once plugin_dir_path(__FILE__) . 'inc/post-types/youth-opportunity-component.php';
// require_once plugin_dir_path(__FILE__) . 'inc/post-types/financial-security-component.php';
require_once plugin_dir_path(__FILE__) . 'inc/post-types/community-resiliency-component.php';
require_once plugin_dir_path(__FILE__) . 'inc/post-types/four-pillars-preview-component.php';
require_once plugin_dir_path(__FILE__) . 'inc/post-types/mobile-food-pantry-component.php';
require_once plugin_dir_path(__FILE__) . 'inc/post-types/four-pillars-hero-component.php';
require_once plugin_dir_path(__FILE__) . 'inc/post-types/how-to-contribute-component.php';



// Add this debugging code temporarily
add_action('init', function () {
  $post_types = get_post_types([], 'names');
  error_log('ACF Function exists: ' . (function_exists('acf_add_local_field_group') ? 'yes' : 'no'));
  error_log('Registered post types: ' . print_r($post_types, true));
}, 1000);


// Load ACF fields after ACF is initialized
function uw_mqt_init_custom_fields()
{
  if (function_exists('acf_add_local_field_group')) {
    require_once plugin_dir_path(__FILE__) . 'inc/acf/hero-component-our-impact-page.php';
    require_once plugin_dir_path(__FILE__) . 'inc/acf/our-impact-component-home-page.php';
    require_once plugin_dir_path(__FILE__) . 'inc/acf/our-impact-statistics-component.php';
    require_once plugin_dir_path(__FILE__) . 'inc/acf/healthy-community-component.php';
    require_once plugin_dir_path(__FILE__) . 'inc/acf/partners-ticker-items.php';
    require_once plugin_dir_path(__FILE__) . 'inc/acf/youth-opportunity-component.php';
    // require_once plugin_dir_path(__FILE__) . 'inc/acf/financial-security-component.php';
    require_once plugin_dir_path(__FILE__) . 'inc/acf/community-resiliency-component.php';
    require_once plugin_dir_path(__FILE__) . 'inc/acf/four-pillars-preview-component.php';
    require_once plugin_dir_path(__FILE__) . 'inc/acf/mobile-food-pantry-component.php';
    require_once plugin_dir_path(__FILE__) . 'inc/acf/four-pillars-hero-component.php';
    require_once plugin_dir_path(__FILE__) . 'inc/acf/how-to-contribute-component.php';
  }
}

add_action('acf/init', 'uw_mqt_init_custom_fields');