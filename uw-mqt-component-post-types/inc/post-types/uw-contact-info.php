<?php

if (!defined('ABSPATH')) {
  exit;
}

require_once plugin_dir_path(dirname(dirname(__FILE__))) . 'constants.php';

function register_uw_contact_info_post_type()
{
  // Add debug logging
  error_log('Registering UW Contact Info post type: ' . UW_CONTACT_INFO_POST_TYPE_NAME);
  
  register_post_type(
    UW_CONTACT_INFO_POST_TYPE_NAME,
    [
      'labels' => [
        'name' => 'UW Contact Information',
        'singular_name' => 'UW Contact Information',
        'menu_name' => 'UW Contact Info',
        'add_new' => 'Add New Contact Info',
        'add_new_item' => 'Add New Contact Info',
        'edit_item' => 'Edit Contact Info',
        'view_item' => 'View Contact Info'
      ],
      'public' => true,
      'show_in_graphql' => true,
      'graphql_single_name' => 'uwContactInfo',
      'graphql_plural_name' => 'uwContactInfos',
      'show_ui' => true,
      'show_in_menu' => true,
      'menu_position' => 20,
      'menu_icon' => 'dashicons-phone',
      'supports' => ['title', 'custom-fields'],
      'has_archive' => false
    ]
  );
}

add_action('init', 'register_uw_contact_info_post_type');

// Add debug action to check if our function is being called
add_action('admin_init', function() {
  error_log('UW Contact Info post type file loaded');
});
