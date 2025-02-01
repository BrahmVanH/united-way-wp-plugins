<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('init', function () {
    register_post_type(
        FAQ_POST_TYPE_NAME,
        [
            'labels' => [
                'name' => 'Frequently Asked Questions',
                'singular_name' => 'FAQ',
            ],
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => ['slug' => 'faqs'],
            'capability_type' => 'post',
            'has_archive' => false,
            'hierarchical' => false,
            'menu_position' => null,
            'supports' => ['title'],
            'show_in_graphql' => true,
            'graphql_single_name' => 'faq',
            'graphql_plural_name' => 'faqs',
        ]
    );
});
