<?php

if (!defined('ABSPATH')) {
    exit;
}

require_once plugin_dir_path(dirname(dirname(__FILE__))) . 'constants.php';

function register_ymca_component_post_type() {
    register_post_type(
    YMCA_COMPONENT_POST_TYPE_NAME,
        [
            'labels' => [
                'name' => 'YMCA Components',
                'singular_name' => 'YMCA Component'
            ],
            'public' => true,
            'show_in_graphql' => true,
            'graphql_single_name' => 'ymcaComponent',
            'graphql_plural_name' => 'ymcaComponents',
            'show_ui' => true,
            'show_in_menu' => true,
            'supports' => ['title', 'custom-fields']
        ]
    );
}

add_action('init', 'register_ymca_component_post_type');
