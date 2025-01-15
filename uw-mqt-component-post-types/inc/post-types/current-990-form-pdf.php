<?php

if (!defined('ABSPATH')) {
    exit;
}

require_once plugin_dir_path(dirname(dirname(__FILE__))) . 'constants.php';

function register_current_990_form_pdf_post_type() {
    register_post_type(
        CURRENT_990_FORM_PDF_POST_TYPE_NAME,
        [
            'labels' => [
                'name' => 'Current 990 Form PDFs',
                'singular_name' => 'Current 990 Form PDF'
            ],
            'public' => true,
            'show_in_graphql' => true,
            'graphql_single_name' => 'current990FormPdf',
            'graphql_plural_name' => 'current990FormPdfs',
            'show_ui' => true,
            'show_in_menu' => true,
            'supports' => ['title', 'custom-fields']
        ]
    );
}

add_action('init', 'register_current_990_form_pdf_post_type');
