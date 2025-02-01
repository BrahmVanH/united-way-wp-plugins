<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('init', function () {
    register_post_type(
        INDIVIDUALS_PAGE_HERO_POST_TYPE_NAME,
        [
            'labels' => [
                'name' => 'Individuals Page Hero',
                'singular_name' => 'Individuals Page Hero',
            ],
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => ['slug' => 'individuals-page-hero'],
            'capability_type' => 'post',
            'has_archive' => false,
            'hierarchical' => false,
            'menu_position' => null,
            'supports' => ['title'],
            'show_in_graphql' => true,
            'graphql_single_name' => 'individualsPageHero',
            'graphql_plural_name' => 'individualsPageHeroes',
        ]
    );
});
