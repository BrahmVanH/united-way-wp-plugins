<?php

if (!defined('ABSPATH')) {
    exit;
}

if (function_exists('acf_add_local_field_group')):
    acf_add_local_field_group([
        'key' => 'group_home_page_hero',
        'title' => 'Home Page Hero Fields',
        'fields' => [
            [
                'key' => 'field_home_page_hero_title',
                'label' => 'Title',
                'name' => 'title',
                'type' => 'text',
                'required' => 1,
            ],
            [
                'key' => 'field_home_page_hero_text',
                'label' => 'Text',
                'name' => 'text',
                'type' => 'text',
                'required' => 1,
            ],
            [
                'key' => 'field_home_page_hero_bg',
                'label' => 'Background Image',
                'name' => 'bg',
                'type' => 'image',
                'required' => 1,
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
            ],
            [
                'key' => 'field_home_page_hero_bg_mobile',
                'label' => 'Mobile Background Image',
                'name' => 'bgMobile',
                'type' => 'image',
                'required' => 1,
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
            ],
            [
                'key' => 'field_home_page_hero_link',
                'label' => 'Link',
                'name' => 'link',
                'type' => 'text',
                'required' => 1,
            ],
            [
                'key' => 'field_home_page_hero_link_text',
                'label' => 'Link Text',
                'name' => 'linkText',
                'type' => 'text',
                'required' => 0,
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => HOME_PAGE_HERO_POST_TYPE_NAME,
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
        'show_in_graphql' => true,
    ]);
endif;
