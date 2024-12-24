<?php
if (!defined('ABSPATH'))
  exit;

function register_custom_post_types_financial_security_component_our_impact_page()
{
  $args = [
    'label' => 'Financial Security Component - Our Impact Page',
    'public' => true,
    'show_in_rest' => true,
    'show_ui' => true,
    'show_in_graphql' => true,
    'graphql_single_name' => 'financialSecurityComponentOurImpactPage',
    'graphql_plural_name' => 'financialSecurityComponentOurImpactPages',
    'supports' => ['title', 'custom-fields'],
    'labels' => [
      'name' => 'Financial Security Component - Our Impact Page',
      'singular_name' => 'Financial Security Component - Our Impact Page',
      'add_new' => 'Add New Financial Security Component - Our Impact Page',
      'add_new_item' => 'Add New Financial Security Component - Our Impact Page',
      'edit_item' => 'Edit Financial Security Component - Our Impact Page',
      'new_item' => 'New Financial Security Component - Our Impact Page',
      'view_item' => 'View Financial Security Component - Our Impact Page',
      'search_items' => 'Search Financial Security Component - Our Impact Page',
      'not_found' => 'No Financial Security Component - Our Impact Page found',
      'not_found_in_trash' => 'No Financial Security Component - Our Impact Page found in Trash',
    ],
    'menu_position' => 2,
    'menu_icon' => 'dashicons-admin-page',
    'hierarchical' => false,
    'rewrite' => ['slug' => 'financial-security-component'],
  ];

  register_post_type(FINANCIAL_SECURITY_COMPONENT_OUR_IMPACT_PAGE_POST_TYPE_NAME, $args);
}
add_action('init', 'register_custom_post_types_financial_security_component_our_impact_page');