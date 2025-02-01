<?php

if (!defined('ABSPATH')) {
  exit;
}

require_once plugin_dir_path(dirname(dirname(__FILE__))) . 'constants.php';

function register_impact_carousel_post_type()
{
  register_post_type(
    IMPACT_CAROUSEL_POST_TYPE_NAME,
    [
      'labels' => [
        'name' => 'Our Impact Carousels',
        'singular_name' => 'Our Impact Carousel',
        'menu_name' => 'Impact Carousel',
        'add_new' => 'Add New Carousel',
        'add_new_item' => 'Add New Impact Carousel',
        'edit_item' => 'Edit Impact Carousel',
        'view_item' => 'View Impact Carousel'
      ],
      'public' => true,
      'show_in_graphql' => true,
      'graphql_single_name' => 'impactCarousel',
      'graphql_plural_name' => 'impactCarousels',
      'show_ui' => true,
      'show_in_menu' => true,
      'menu_position' => 20,
      'menu_icon' => 'dashicons-slides',
      'supports' => ['title', 'custom-fields'],
      'has_archive' => false
    ]
  );
}

add_action('init', 'register_impact_carousel_post_type');
