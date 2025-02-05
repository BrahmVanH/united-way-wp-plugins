<?php

if (!defined('ABSPATH')) {
    exit;
}

require_once plugin_dir_path(dirname(dirname(__FILE__))) . 'constants.php';

function register_how_to_contribute_component_post_type() {
    register_post_type(
        HOW_TO_CONTRIBUTE_COMPONENT_POST_TYPE_NAME,
        [
            'labels' => [
                'name' => 'How To Contribute Components',
                'singular_name' => 'How To Contribute Component'
            ],
            'public' => true,
            'show_in_graphql' => true,
            'graphql_single_name' => 'howToContributeComponent',
            'graphql_plural_name' => 'howToContributeComponents',
            'show_ui' => true,
            'show_in_menu' => true,
            'supports' => ['title', 'custom-fields'],
            'menu_position' => 9,
        ]
    );
}

add_action('init', 'register_how_to_contribute_component_post_type');
