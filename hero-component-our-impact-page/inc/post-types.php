<?php
if (!defined('ABSPATH'))
  exit;

function register_custom_post_types_hero_component_our_impact_page()
{
  $args = [
    'label' => 'Hero Component - Our Impact Page',
    'public' => true,
    'show_in_rest' => true,
    'show_ui' => true,
    'show_in_graphql' => true,
    'graphql_single_name' => 'heroComponentOurImpactPage',
    'graphql_plural_name' => 'heroComponentOurImpactPages',
    'supports' => ['title', 'custom-fields'],  // Make sure custom-fields is included
    'labels' => [
      'name' => 'Hero Component Our Impact Page',
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
    'menu_position' => 4,
    'menu_icon' => 'dashicons-admin-page',
    'hierarchical' => false,  // Changed to false since this is a component
    'rewrite' => ['slug' => '/'],
  ];

  register_post_type('hero_component_our_impact_page', $args);
}
add_action('init', 'register_custom_post_types_hero_component_our_impact_page');