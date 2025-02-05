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
require_once plugin_dir_path(__FILE__) . 'inc/post-types/uw-contact-info.php';
require_once plugin_dir_path(__FILE__) . 'inc/post-types/hero-component-our-impact-page.php';
require_once plugin_dir_path(__FILE__) . 'inc/post-types/our-impact-component-home-page.php';
require_once plugin_dir_path(__FILE__) . 'inc/post-types/our-impact-statistics-component.php';
require_once plugin_dir_path(__FILE__) . 'inc/post-types/partners-ticker-items.php';
require_once plugin_dir_path(__FILE__) . 'inc/post-types/four-pillars-preview-component.php';
require_once plugin_dir_path(__FILE__) . 'inc/post-types/mobile-food-pantry-component.php';
require_once plugin_dir_path(__FILE__) . 'inc/post-types/four-pillars-hero-component.php';
require_once plugin_dir_path(__FILE__) . 'inc/post-types/how-to-contribute-component.php';
require_once plugin_dir_path(__FILE__) . 'inc/post-types/alice-report-page.php';
require_once plugin_dir_path(__FILE__) . 'inc/post-types/alice-report-pdf.php';
require_once plugin_dir_path(__FILE__) . 'inc/post-types/current-990-form-pdf.php';
require_once plugin_dir_path(__FILE__) . 'inc/post-types/donor-privacy-policy-pdf.php';
require_once plugin_dir_path(__FILE__) . 'inc/post-types/gift-acceptance-policy-pdf.php';
require_once plugin_dir_path(__FILE__) . 'inc/post-types/admin-costs-pdf.php';
require_once plugin_dir_path(__FILE__) . 'inc/post-types/girl-scouts-component.php';
require_once plugin_dir_path(__FILE__) . 'inc/post-types/ymca-component.php';
require_once plugin_dir_path(__FILE__) . 'inc/post-types/values-history.php';
require_once plugin_dir_path(__FILE__) . 'inc/post-types/impact-carousel.php';
require_once plugin_dir_path(__FILE__) . 'inc/post-types/campaign-toolkit-partner-asset.php';
require_once plugin_dir_path(__FILE__) . 'inc/post-types/frequently-asked-questions.php';
require_once plugin_dir_path(__FILE__) . 'inc/post-types/individuals-page-hero.php';
require_once plugin_dir_path(__FILE__) . 'inc/post-types/get-involved-hero.php';
require_once plugin_dir_path(__FILE__) . 'inc/post-types/partner-page-hero.php';
require_once plugin_dir_path(__FILE__) . 'inc/post-types/home-page-hero.php';



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
    require_once plugin_dir_path(__FILE__) . 'inc/acf/uw-contact-info.php';
    require_once plugin_dir_path(__FILE__) . 'inc/acf/hero-component-our-impact-page.php';
    require_once plugin_dir_path(__FILE__) . 'inc/acf/our-impact-component-home-page.php';
    require_once plugin_dir_path(__FILE__) . 'inc/acf/our-impact-statistics-component.php';
    require_once plugin_dir_path(__FILE__) . 'inc/acf/partners-ticker-items.php';
    require_once plugin_dir_path(__FILE__) . 'inc/acf/four-pillars-preview-component.php';
    require_once plugin_dir_path(__FILE__) . 'inc/acf/mobile-food-pantry-component.php';
    require_once plugin_dir_path(__FILE__) . 'inc/acf/four-pillars-hero-component.php';
    require_once plugin_dir_path(__FILE__) . 'inc/acf/how-to-contribute-component.php';
    require_once plugin_dir_path(__FILE__) . 'inc/acf/alice-report-page.php';
    require_once plugin_dir_path(__FILE__) . 'inc/acf/alice-report-pdf.php';
    require_once plugin_dir_path(__FILE__) . 'inc/acf/current-990-form-pdf.php';
    require_once plugin_dir_path(__FILE__) . 'inc/acf/donor-privacy-policy-pdf.php';
    require_once plugin_dir_path(__FILE__) . 'inc/acf/gift-acceptance-policy-pdf.php';
    require_once plugin_dir_path(__FILE__) . 'inc/acf/admin-costs-pdf.php';
    require_once plugin_dir_path(__FILE__) . 'inc/acf/girl-scouts-component.php';
    require_once plugin_dir_path(__FILE__) . 'inc/acf/ymca-component.php';
    require_once plugin_dir_path(__FILE__) . 'inc/acf/values-history.php';
    require_once plugin_dir_path(__FILE__) . 'inc/acf/impact-carousel.php';
    require_once plugin_dir_path(__FILE__) . 'inc/acf/campaign-toolkit-partner-asset.php';
    require_once plugin_dir_path(__FILE__) . 'inc/acf/frequently-asked-questions.php';
    require_once plugin_dir_path(__FILE__) . 'inc/acf/individuals-page-hero.php';
    require_once plugin_dir_path(__FILE__) . 'inc/acf/get-involved-hero.php';
    require_once plugin_dir_path(__FILE__) . 'inc/acf/partner-page-hero.php';
    require_once plugin_dir_path(__FILE__) . 'inc/acf/home-page-hero.php';
  }
}

add_action('acf/init', 'uw_mqt_init_custom_fields');