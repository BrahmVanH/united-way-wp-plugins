<?php




if (!defined('ABSPATH'))
  exit;

function register_custom_post_types_youth_opportunity_component_our_impact_page()
{
  $args = [
    'label' => 'Youth Opportunity Component - Our Impact Page',
    'public' => true,
    'show_in_rest' => true,
    'show_ui' => true,
    'show_in_graphql' => true,
    'graphql_single_name' => 'youthOpportunityComponentOurImpactPage',
    'graphql_plural_name' => 'youthOpportunityComponentOurImpactPages',
    'supports' => ['title', 'custom-fields'],
    'labels' => [
      'name' => 'Youth Opportunity Component - Our Impact Page',
      'singular_name' => 'Youth Opportunity Component - Our Impact Page',
      'add_new' => 'Add New Youth Opportunity Component - Our Impact Page',
      'add_new_item' => 'Add New Youth Opportunity Component - Our Impact Page',
      'edit_item' => 'Edit Youth Opportunity Component - Our Impact Page',
      'new_item' => 'New Youth Opportunity Component - Our Impact Page',
      'view_item' => 'View Youth Opportunity Component - Our Impact Page',
      'search_items' => 'Search Youth Opportunity Component - Our Impact Page',
      'not_found' => 'No Youth Opportunity Component - Our Impact Page found',
      'not_found_in_trash' => 'No Youth Opportunity Component - Our Impact Page found in Trash',
    ],
    'menu_position' => 2,
    'menu_icon' => 'dashicons-admin-page',
    'hierarchical' => false,
    'rewrite' => ['slug' => 'youth-opportunity-component'],
  ];

  register_post_type(YOUTH_OPPORTUNITY_COMPONENT_OUR_IMPACT_PAGE_POST_TYPE_NAME, $args);
}
add_action('init', 'register_custom_post_types_youth_opportunity_component_our_impact_page');