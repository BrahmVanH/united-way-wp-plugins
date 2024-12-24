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
    'show_in_menu' => true,        // Add this
    'show_in_admin_bar' => true,   // Add this
    'show_in_nav_menus' => true,   // Add this
    'show_in_graphql' => true,
    'graphql_single_name' => 'heroComponentOurImpactPage',
    'graphql_plural_name' => 'heroComponentOurImpactPages',
    'supports' => ['title', 'custom-fields'],  // Make sure custom-fields is included
    'labels' => [
      'name' => 'Hero Component Our Impact Page',
      'singular_name' => 'Hero - Our Impact Page Component',
      'add_new' => 'Add New Hero - Our Impact Page Component',
      'add_new_item' => 'Add New Hero - Our Impact Page Component',
      'edit_item' => 'Edit Hero - Our Impact Page Component',
      'new_item' => 'New Hero - Our Impact Page Component',
      'view_item' => 'View Hero - Our Impact Page Component',
      'search_items' => 'Search Hero - Our Impact Page Components',
      'not_found' => 'No hero - our impact page components found',
      'not_found_in_trash' => 'No hero - our impact page components found in Trash',
    ],
    'menu_position' => 4,
    'menu_icon' => 'dashicons-admin-page',
    'hierarchical' => false,  // Changed to false since this is a component
    'rewrite' => ['slug' => 'hero-component-our-impact-page'],
  ];

  register_post_type(HERO_COMPONENT_OUR_IMPACT_PAGE_POST_TYPE_NAME, $args);
}
add_action('init', 'register_custom_post_types_hero_component_our_impact_page');