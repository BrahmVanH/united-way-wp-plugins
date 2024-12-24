<?php
if (!defined('ABSPATH'))
  exit;



function register_custom_post_types_community_resiliency_component_our_impact_page()
{
  $args = [
    'label' => 'Community Resiliency Component - Our Impact Page',
    'public' => true,
    'show_in_rest' => true,
    'show_ui' => true,
    'show_in_graphql' => true,
    'graphql_single_name' => 'communityResiliencyComponentOurImpactPage',
    'graphql_plural_name' => 'communityResiliencyComponentOurImpactPages',
    'supports' => ['title', 'custom-fields'],
    'labels' => [
      'name' => 'Community Resiliency Component - Our Impact Page',
      'singular_name' => 'Community Resiliency Component - Our Impact Page',
      'add_new' => 'Add New Community Resiliency Component - Our Impact Page',
      'add_new_item' => 'Add New Community Resiliency Component - Our Impact Page',
      'edit_item' => 'Edit Community Resiliency Component - Our Impact Page',
      'new_item' => 'New Community Resiliency Component - Our Impact Page',
      'view_item' => 'View Community Resiliency Component - Our Impact Page',
      'search_items' => 'Search Community Resiliency Component - Our Impact Page',
      'not_found' => 'No Community Resiliency Component - Our Impact Page found',
      'not_found_in_trash' => 'No Community Resiliency Component - Our Impact Page found in Trash',
    ],
    'menu_position' => 2,
    'menu_icon' => 'dashicons-admin-page',
    'hierarchical' => false,
    'rewrite' => ['slug' => 'community-resiliency-component'],
  ];

  register_post_type(COMMUNITY_RESILIENCY_COMPONENT_OUR_IMPACT_PAGE_POST_TYPE_NAME, $args);
}
add_action('init', 'register_custom_post_types_community_resiliency_component_our_impact_page');
