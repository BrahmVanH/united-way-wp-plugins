<?php

if (!defined('ABSPATH')) {
  exit;
}

add_action('init', function () {
  register_post_type(
    GET_INVOLVED_HERO_POST_TYPE_NAME,
    [
      'labels' => [
        'name' => 'Get Involved Hero',
        'singular_name' => 'Get Involved Hero',
      ],
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'query_var' => true,
      'rewrite' => ['slug' => 'get-involved-hero'],
      'capability_type' => 'post',
      'has_archive' => false,
      'hierarchical' => false,
      'menu_position' => 4,
      'supports' => ['title'],
      'show_in_graphql' => true,
      'graphql_single_name' => 'getInvolvedHero',
      'graphql_plural_name' => 'getInvolvedHeroes',
    ]
  );
});
