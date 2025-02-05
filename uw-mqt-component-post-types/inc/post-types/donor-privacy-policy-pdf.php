<?php

if (!defined('ABSPATH')) {
    exit;
}

require_once plugin_dir_path(dirname(dirname(__FILE__))) . 'constants.php';

function register_donor_privacy_policy_pdf_post_type()
{
    register_post_type(
        DONOR_PRIVACY_POLICY_PDF_POST_TYPE_NAME,
        [
            'labels' => [
                'name' => 'Donor Privacy Policy PDFs',
                'singular_name' => 'Donor Privacy Policy PDF'
            ],
            'public' => true,
            'show_in_graphql' => true,
            'graphql_single_name' => 'donorPrivacyPolicyPdf',
            'graphql_plural_name' => 'donorPrivacyPolicyPdfs',
            'show_ui' => true,
            'show_in_menu' => true,
            'supports' => ['title', 'custom-fields'],
            'menu_position' => 18,
            'menu_icon' => 'dashicons-admin-page',
            'hierarchical' => false,
            'rewrite' => ['slug' => 'donor-privacy-policy-pdf'],
        ],
    );
}

add_action('init', 'register_donor_privacy_policy_pdf_post_type');
