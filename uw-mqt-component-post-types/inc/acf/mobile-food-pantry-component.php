<?php

if (!defined('ABSPATH')) {
    exit;
}

if (function_exists('acf_add_local_field_group')):
    acf_add_local_field_group([
        'key' => 'group_mobile_food_pantry_component',
        'title' => 'Mobile Food Pantry Component Fields',
        'fields' => [
            [
                'key' => 'field_mobile_food_pantry_component_title',
                'label' => 'Title',
                'name' => 'title',
                'type' => 'text',
                'required' => 1,
            ],
            [
                'key' => 'field_mobile_food_pantry_component_text',
                'label' => 'Text',
                'name' => 'text',
                'type' => 'textarea',
                'required' => 1,
            ],
            [
                'key' => 'field_mobile_food_pantry_component_button_text',
                'label' => 'Button Text',
                'name' => 'buttonText',
                'type' => 'text',
                'required' => 1,
            ],
            [
                'key' => 'field_mobile_food_pantry_component_link',
                'label' => 'Link',
                'name' => 'link',
                'type' => 'text',
                'required' => 1,
            ],
            [
                'key' => 'field_mobile_food_pantry_component_image',
                'label' => 'Image',
                'name' => 'image',
                'type' => 'image',
                'required' => 1,
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
            ],
            [
                'key' => 'field_mobile_food_pantry_component_bg_mobile',
                'label' => 'Mobile Background Image',
                'name' => 'bgMobile',
                'type' => 'image',
                'required' => 1,
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => MOBILE_FOOD_PANTRY_COMPONENT_POST_TYPE_NAME
                ]
            ]
        ],
        // ...existing code...
    ]);
endif;
