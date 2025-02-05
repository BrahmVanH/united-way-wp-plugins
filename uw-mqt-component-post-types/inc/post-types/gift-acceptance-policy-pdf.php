<?php

if (!defined('ABSPATH')) {
    exit;
}

require_once plugin_dir_path(dirname(dirname(__FILE__))) . 'constants.php';

function register_gift_acceptance_policy_pdf_post_type() {
    register_post_type(
        GIFT_ACCEPTANCE_POLICY_PDF_POST_TYPE_NAME,
        [
            'labels' => [
                'name' => 'Gift Acceptance Policy PDFs',
                'singular_name' => 'Gift Acceptance Policy PDF'
            ],
            'public' => true,
            'show_in_graphql' => true,
            'graphql_single_name' => 'giftAcceptancePolicyPdf',
            'graphql_plural_name' => 'giftAcceptancePolicyPdfs',
            'show_ui' => true,
            'show_in_menu' => true,
            'supports' => ['title', 'custom-fields'],
            'menu_position' => 19,
        ]
    );
}

add_action('init', 'register_gift_acceptance_policy_pdf_post_type');
