<?php

if (!defined('ABSPATH')) {
    exit;
}

require_once plugin_dir_path(dirname(dirname(__FILE__))) . 'constants.php';

add_action('init', function () {
    register_post_type(
        FOUR_PILLARS_HERO_COMPONENT_POST_TYPE_NAME,
        [
            'labels' => [
                'name' => 'Four Pillars Hero Components',
                'singular_name' => 'Four Pillars Hero Component',
            ],
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => ['slug' => 'four-pillars-hero'],
            'capability_type' => 'post',
            'has_archive' => false,
            'hierarchical' => false,
            'menu_position' => null,
            'supports' => ['title'],
            'show_in_graphql' => true,
            'graphql_single_name' => 'fourPillarsHeroComponent',
            'graphql_plural_name' => 'fourPillarsHeroComponents',
        ]
    );
});
