<?php

if (!defined('ABSPATH')) {
    exit;
}

require_once plugin_dir_path(dirname(dirname(__FILE__))) . 'constants.php';

if (function_exists('acf_add_local_field_group')):
    acf_add_local_field_group([
        'key' => 'group_how_to_contribute_component',
        'title' => 'How To Contribute Component Fields',
        'fields' => [
            [
                'key' => 'field_how_to_contribute_donate',
                'label' => 'Donate',
                'name' => 'donate',
                'type' => 'group',
                'sub_fields' => [
                    [
                        'key' => 'field_how_to_contribute_donate_title',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                        'required' => 1
                    ],
                    [
                        'key' => 'field_how_to_contribute_donate_text',
                        'label' => 'Text',
                        'name' => 'text',
                        'type' => 'textarea',
                        'required' => 1
                    ],
                    [
                        'key' => 'field_how_to_contribute_donate_link',
                        'label' => 'Link',
                        'name' => 'link',
                        'type' => 'text',
                        'required' => 1
                    ]
                ]
            ],
            [
                'key' => 'field_how_to_contribute_individuals',
                'label' => 'Individuals',
                'name' => 'individuals',
                'type' => 'group',
                'sub_fields' => [
                    [
                        'key' => 'field_how_to_contribute_individuals_title',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                        'required' => 1
                    ],
                    [
                        'key' => 'field_how_to_contribute_individuals_text',
                        'label' => 'Text',
                        'name' => 'text',
                        'type' => 'textarea',
                        'required' => 1
                    ],
                    [
                        'key' => 'field_how_to_contribute_individuals_link',
                        'label' => 'Link',
                        'name' => 'link',
                        'type' => 'text',
                        'required' => 1
                    ]
                ]
            ],
            [
                'key' => 'field_how_to_contribute_partners',
                'label' => 'Partners',
                'name' => 'partners',
                'type' => 'group',
                'sub_fields' => [
                    [
                        'key' => 'field_how_to_contribute_partners_title',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                        'required' => 1
                    ],
                    [
                        'key' => 'field_how_to_contribute_partners_text',
                        'label' => 'Text',
                        'name' => 'text',
                        'type' => 'textarea',
                        'required' => 1
                    ],
                    [
                        'key' => 'field_how_to_contribute_partners_link',
                        'label' => 'Link',
                        'name' => 'link',
                        'type' => 'text',
                        'required' => 1
                    ]
                ]
            ]
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => HOW_TO_CONTRIBUTE_COMPONENT_POST_TYPE_NAME
                ]
            ]
        ],
        'show_in_graphql' => true
    ]);
endif;
