<?php

if (!defined('ABSPATH')) {
    exit;
}

require_once plugin_dir_path(dirname(dirname(__FILE__))) . 'constants.php';

function register_alice_report_pdf_post_type() {
    register_post_type(
        ALICE_REPORT_PDF_POST_TYPE_NAME,
        [
            'labels' => [
                'name' => 'ALICE Report PDFs',
                'singular_name' => 'ALICE Report PDF'
            ],
            'public' => true,
            'show_in_graphql' => true,
            'graphql_single_name' => 'aliceReportPdf',
            'graphql_plural_name' => 'aliceReportPdfs',
            'show_ui' => true,
            'show_in_menu' => true,
            'supports' => ['title', 'custom-fields']
        ]
    );
}

add_action('init', 'register_alice_report_pdf_post_type');
