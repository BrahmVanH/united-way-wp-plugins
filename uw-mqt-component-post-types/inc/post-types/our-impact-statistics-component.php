<?php
if (!defined('ABSPATH'))
  exit;

function register_custom_post_types_impact_statistics()
{
  $args = [
    'label' => 'Impact Statistics',
    'public' => true,
    'show_in_rest' => true,
    'show_ui' => true,
    'show_in_graphql' => true,
    'graphql_single_name' => 'impactStatistic',
    'graphql_plural_name' => 'impactStatistics',
    'supports' => ['title', 'custom-fields'],
    'labels' => [
      'name' => 'Impact Statistics',
      'singular_name' => 'Impact Statistic',
      'add_new' => 'Add New Statistic',
      'add_new_item' => 'Add New Impact Statistic',
      'edit_item' => 'Edit Impact Statistic',
      'new_item' => 'New Impact Statistic',
      'view_item' => 'View Impact Statistic',
      'search_items' => 'Search Impact Statistics',
      'not_found' => 'No impact statistics found',
      'not_found_in_trash' => 'No impact statistics found in Trash',
    ],
    'menu_position' => 10,
    'menu_icon' => 'dashicons-chart-bar',
    'hierarchical' => false,
    'rewrite' => ['slug' => 'impact-statistics'],
  ];

  register_post_type(IMPACT_STATISTICS_POST_TYPE_NAME, $args);
}
add_action('init', 'register_custom_post_types_impact_statistics');