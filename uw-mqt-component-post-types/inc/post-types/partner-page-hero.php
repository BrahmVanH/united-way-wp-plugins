<?php

if (!defined('ABSPATH')) {
  exit;
}

add_action('init', function () {
  register_post_type(
    PARTNER_PAGE_HERO_POST_TYPE_NAME,
    [
      'labels' => [
        'name' => 'Partner Page Hero',
        'singular_name' => 'Partner Page Hero',
      ],
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'query_var' => true,
      'rewrite' => ['slug' => 'partner-page-hero'],
      'capability_type' => 'post',
      'has_archive' => false,
      'hierarchical' => false,
      'menu_position' => 5,
      'supports' => ['title'],
      'show_in_graphql' => true,
      'graphql_single_name' => 'partnerPageHero',
      'graphql_plural_name' => 'partnerPageHeroes',
    ]
  );
});
