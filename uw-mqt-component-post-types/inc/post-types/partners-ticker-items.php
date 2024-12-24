<?php




if (!defined('ABSPATH')) {
  exit;
}

function register_custom_post_types_partners_ticker_items_post_type()
{
  $args = [
    'label' => 'Partners Ticker Items',
    'public' => true,
    'show_in_rest' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'show_in_graphql' => true,
    'graphql_single_name' => 'partnersTickerItem',
    'graphql_plural_name' => 'partnersTickerItems',
    'supports' => ['title', 'custom-fields'],  // Removed 'editor' to disable block editor
    'labels' => [
      'name' => 'Partners Ticker Items',
      'singular_name' => 'Partners Ticker Item',
      'add_new' => 'Add New Partners Ticker Item',
      'add_new_item' => 'Add New Partners Ticker Item',
      'edit_item' => 'Edit Partners Ticker Item',
      'new_item' => 'New Partners Ticker Item',
      'view_item' => 'View Partners Ticker Item',
      'search_items' => 'Search Partners Ticker Items',
      'not_found' => 'No partners ticker item found',
      'not_found_in_trash' => 'No partners ticker items found in Trash',
      'menu_name' => 'Partners Ticker'
    ],
    'menu_position' => 6,
    'menu_icon' => 'dashicons-slides',
    'hierarchical' => false,
    'rewrite' => ['slug' => 'partners-ticker'], // Change from '/' to something specific
  ];

  register_post_type(PARTNERS_TICKER_ITEMS_POST_TYPE_NAME, $args);
}
add_action('init', 'register_custom_post_types_partners_ticker_items_post_type');