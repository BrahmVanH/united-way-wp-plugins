<?php

if (!defined('ABSPATH')) {
    exit;
}

require_once plugin_dir_path(dirname(dirname(__FILE__))) . 'constants.php';

function register_girl_scouts_component_post_type() {
    register_post_type(
        GIRL_SCOUTS_COMPONENT_POST_TYPE_NAME,
        [
            'labels' => [
                'name' => 'Girl Scouts Components',
                'singular_name' => 'Girl Scouts Component'
            ],
            'public' => true,
            'show_in_graphql' => true,
            'graphql_single_name' => 'girlScoutsComponent',
            'graphql_plural_name' => 'girlScoutsComponents',
            'show_ui' => true,
            'show_in_menu' => true,
            'supports' => ['title', 'custom-fields']
        ]
    );
}

add_action('init', 'register_girl_scouts_component_post_type');
