<?php
if (!defined('ABSPATH'))
  exit;

function register_custom_post_types()
{
  register_post_type('page_builder', [
    'label' => 'Page Builder',
    'public' => true,
    'show_in_rest' => true,
    'show_ui' => true,
    'supports' => ['title', 'editor', 'custom-fields'],
    'labels' => [
      'name' => 'Page Builder',
      'singular_name' => 'Page',
      'add_new' => 'Add New Page',
      'add_new_item' => 'Add New Page',
      'edit_item' => 'Edit Page',
      'new_item' => 'New Page',
      'view_item' => 'View Page',
      'search_items' => 'Search Pages',
      'not_found' => 'No pages found',
      'not_found_in_trash' => 'No pages found in Trash',
    ],
    'menu_position' => 5,
    'menu_icon' => 'dashicons-admin-page',
    'hierarchical' => true,
    'rewrite' => ['slug' => 'pages'],
  ]);
}
add_action('init', 'register_custom_post_types');
