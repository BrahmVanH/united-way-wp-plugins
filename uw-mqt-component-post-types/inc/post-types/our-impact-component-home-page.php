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
      'name' => 'Our Impact Component - Home Page',
      'singular_name' => 'Our Impact - Home Page Component ',
      'add_new' => 'Add New Our Impact - Home Page Component',
      'add_new_item' => 'Add New Our Impact - Home Page Component',
      'edit_item' => 'Edit Our Impact Component',
      'new_item' => 'New Our Impact - Home Page Component',
      'view_item' => 'View Our Impact - Home Page Component',
      'search_items' => 'Search Our Impact - Home Page Components',
      'not_found' => 'No our impact - home page components found',
      'not_found_in_trash' => 'No our impact - home page components found in Trash',
    ],
    'menu_position' => 2,
    'menu_icon' => 'dashicons-admin-page',
    'hierarchical' => false,  // Changed to false since this is a component
    'rewrite' => ['slug' => 'our-impact-component-home-page'],
  ];

  register_post_type(OUR_IMPACT_COMPONENT_HOME_PAGE_POST_TYPE_NAME, $args);
}
add_action('init', 'register_custom_post_types_our_impact_home_page');