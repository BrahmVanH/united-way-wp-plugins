<?php

if (!defined('ABSPATH')) {
    exit;
}

require_once plugin_dir_path(dirname(dirname(__FILE__))) . 'constants.php';

// Add debugging
add_action('admin_notices', function () {
    if (!function_exists('acf_add_local_field_group')) {
        echo '<div class="error"><p>ACF is not active!</p></div>';
    }
});

if (function_exists('acf_add_local_field_group')):
    acf_add_local_field_group([
        'key' => 'group_donor_privacy_policy_pdf',
        'title' => 'Donor Privacy Policy PDF Fields',
        'fields' => [
            [
                'key' => 'field_donor_privacy_policy_pdf_file',
                'label' => 'PDF File',
                'name' => 'pdfFile',
                'type' => 'file',
                'required' => 1,
                'return_format' => 'url',
                'library' => 'all',
                'mime_types' => 'pdf'
            ],
            
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => DONOR_PRIVACY_POLICY_PDF_POST_TYPE_NAME
                ]
            ]
        ],
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_graphql' => true
    ]);
endif;
