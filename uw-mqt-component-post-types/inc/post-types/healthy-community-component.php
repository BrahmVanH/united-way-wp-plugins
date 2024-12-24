<?php



if (!defined('ABSPATH'))
  exit;

function register_custom_post_types_healthy_community_component_our_impact_page()
{
  $args = [
    'label' => 'Healthy Community Component - Our Impact Page',
    'public' => true,
    'show_in_rest' => true,
    'show_ui' => true,
    'show_in_graphql' => true,
    'graphql_single_name' => 'healthyCommunityComponentOurImpactPage',
    'graphql_plural_name' => 'healthyCommunityComponentOurImpactPages',
    'supports' => ['title', 'custom-fields'],
    'labels' => [
      'name' => 'Healthy Community Component - Our Impact Page',
      'singular_name' => 'Healthy Community Component - Our Impact Page',
      'add_new' => 'Add New Healthy Community Component - Our Impact Page',
      'add_new_item' => 'Add New Healthy Community Component - Our Impact Page',
      'edit_item' => 'Edit Healthy Community Component - Our Impact Page',
      'new_item' => 'New Healthy Community Component - Our Impact Page',
      'view_item' => 'View Healthy Community Component - Our Impact Page',
      'search_items' => 'Search Healthy Community Component - Our Impact Page',
      'not_found' => 'No Healthy Community Component - Our Impact Page found',
      'not_found_in_trash' => 'No Healthy Community Component - Our Impact Page found in Trash',
    ],
    'menu_position' => 2,
    'menu_icon' => 'dashicons-admin-page',
    'hierarchical' => false,  // Changed to false since this is a component
    'rewrite' => ['slug' => 'healthy-community-component'],
  ];

  register_post_type(HEALTHY_COMMUNITY_COMPONENT_OUR_IMPACT_PAGE_POST_TYPE_NAME, $args);
}
add_action('init', 'register_custom_post_types_healthy_community_component_our_impact_page');