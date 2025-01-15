<?php

if (!defined('ABSPATH')) {
    exit;
}

require_once plugin_dir_path(dirname(dirname(__FILE__))) . 'constants.php';

function register_alice_report_page_post_type() {
    register_post_type(
        ALICE_REPORT_PAGE_POST_TYPE_NAME,
        [
            'labels' => [
                'name' => 'ALICE Report Pages',
                'singular_name' => 'ALICE Report Page'
            ],
            'public' => true,
            'show_in_graphql' => true,
            'graphql_single_name' => 'aliceReportPage',
            'graphql_plural_name' => 'aliceReportPages',
            'show_ui' => true,
            'show_in_menu' => true,
            'supports' => ['title', 'custom-fields'],
            'hierarchical' => true
        ]
    );
}

add_action('init', 'register_alice_report_page_post_type');
