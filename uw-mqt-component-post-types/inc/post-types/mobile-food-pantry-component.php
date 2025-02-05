<?php

if (!defined('ABSPATH')) {
    exit;
}


add_action('init', function () {
    register_post_type(
        MOBILE_FOOD_PANTRY_COMPONENT_POST_TYPE_NAME,
        [
            'labels' => [
                'name' => 'Mobile Food Pantry Components',
                'singular_name' => 'Mobile Food Pantry Component',
            ],
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => ['slug' => 'mobile-food-pantry'],
            'capability_type' => 'post',
            'has_archive' => false,
            'hierarchical' => false,
            'menu_position' => 14,
            'supports' => ['title'],
            'show_in_graphql' => true,
            'graphql_single_name' => 'mobileFoodPantryComponent',
            'graphql_plural_name' => 'mobileFoodPantryComponents',
        ]
    );
});
