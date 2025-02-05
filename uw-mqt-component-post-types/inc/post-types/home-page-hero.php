<?php

if (!defined('ABSPATH')) {
    exit;
}

require_once plugin_dir_path(dirname(dirname(__FILE__))) . 'constants.php';

add_action('init', function () {
    register_post_type(
        HOME_PAGE_HERO_POST_TYPE_NAME,
        [
            'labels' => [
                'name' => 'Home Page Hero',
                'singular_name' => 'Home Page Hero',
                'add_new' => 'Add New Home Page Hero',
                'add_new_item' => 'Add New Home Page Hero',
                'edit_item' => 'Edit Home Page Hero',
                'view_item' => 'View Home Page Hero',
            ],
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => ['slug' => 'home-page-hero'],
            'capability_type' => 'post',
            'has_archive' => false,
            'hierarchical' => false,
            'menu_position' => 1, // Change this number to adjust position
            'supports' => ['title'],
            'show_in_graphql' => true,
            'graphql_single_name' => 'homePageHero',
            'graphql_plural_name' => 'homePageHeroes',
        ]
    );
});
