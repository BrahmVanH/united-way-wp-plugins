<?php

if (!defined('ABSPATH')) {
    exit;
}


add_action('init', function () {
    register_post_type(
        FOUR_PILLARS_PREVIEW_POST_TYPE_NAME,
        [
            'labels' => [
                'name' => 'Four Pillars Preview',
                'singular_name' => 'Four Pillars Preview',
            ],
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => ['slug' => 'four-pillars-preview'],
            'capability_type' => 'post',
            'has_archive' => false,
            'hierarchical' => false,
            'menu_position' => 19,
            'supports' => ['title'],
            'show_in_graphql' => true,
            'graphql_single_name' => 'fourPillarsPreview',
            'graphql_plural_name' => 'fourPillarsPreviews',
        ]
    );
});
