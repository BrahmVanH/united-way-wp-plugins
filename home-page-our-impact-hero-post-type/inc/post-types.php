<?php
if (!defined('ABSPATH'))
  exit;

function register_custom_post_types_our_impact_home_page()
{
  $args = [
    'label' => 'Our Impact Component - Home Page',
    'public' => true,
    'show_in_rest' => true,
    'show_ui' => true,
    'show_in_graphql' => true,
    'graphql_single_name' => 'ourImpactHomePage',
    'graphql_plural_name' => 'ourImpactHomePages',
    'supports' => ['title', 'custom-fields'],  // Make sure custom-fields is included
    'labels' => [
      'name' => 'Our Impact Component',
      'singular_name' => 'Component',
      'add_new' => 'Add New Component',
      'add_new_item' => 'Add New Component',
      'edit_item' => 'Edit Component',
      'new_item' => 'New Component',
      'view_item' => 'View Component',
      'search_items' => 'Search Components',
      'not_found' => 'No components found',
      'not_found_in_trash' => 'No components found in Trash',
    ],
    'menu_position' => 2,
    'menu_icon' => 'dashicons-admin-page',
    'hierarchical' => false,  // Changed to false since this is a component
    'rewrite' => ['slug' => '/'],
  ];

  register_post_type('our_impact_home_page', $args);
}
add_action('init', 'register_custom_post_types_our_impact_home_page');