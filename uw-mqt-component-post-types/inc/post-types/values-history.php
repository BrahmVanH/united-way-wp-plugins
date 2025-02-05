<?php

if (!defined('ABSPATH')) {
  exit;
}

require_once plugin_dir_path(dirname(dirname(__FILE__))) . 'constants.php';

function register_values_history_post_type()
{
  register_post_type(
    VALUES_HISTORY_POST_TYPE_NAME,
    [
      'labels' => [
        'name' => 'Our Values and History',
        'singular_name' => 'Values and History',
        'menu_name' => 'Values & History',
        'add_new' => 'Add New Entry',
        'add_new_item' => 'Add New Values & History Entry',
        'edit_item' => 'Edit Values & History Entry',
        'view_item' => 'View Values & History Entry'
      ],
      'public' => true,
      'show_in_graphql' => true,
      'graphql_single_name' => 'valuesHistory',
      'graphql_plural_name' => 'valuesHistories',
      'show_ui' => true,
      'show_in_menu' => true,
      'menu_position' => 16,
      'menu_icon' => 'dashicons-book-alt',
      'supports' => ['title', 'editor', 'custom-fields'], // Added 'editor' for title field
      'has_archive' => false
    ]
  );
}

add_action('init', 'register_values_history_post_type');
