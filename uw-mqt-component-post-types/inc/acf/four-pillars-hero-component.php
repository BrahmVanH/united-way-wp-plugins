<?php

if (!defined('ABSPATH')) {
    exit;
}

if (function_exists('acf_add_local_field_group')):
    acf_add_local_field_group([
        'key' => 'group_four_pillars_hero_component',
        'title' => 'Four Pillars Hero Component Fields',
        'fields' => [
            [
                'key' => 'field_four_pillars_hero_healthy_community',
                'label' => 'Healthy Community',
                'name' => 'healthy_community',
                'type' => 'group',
                'sub_fields' => [
                    [
                        'key' => 'field_four_pillars_hero_healthy_community_title',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                        'required' => 1,
                    ],
                    [
                        'key' => 'field_four_pillars_hero_healthy_community_text',
                        'label' => 'Text',
                        'name' => 'text',
                        'type' => 'text',
                        'required' => 1,
                    ],
                ],
            ],
            [
                'key' => 'field_four_pillars_hero_financial_security',
                'label' => 'Financial Security',
                'name' => 'financial_security',
                'type' => 'group',
                'sub_fields' => [
                    [
                        'key' => 'field_four_pillars_hero_financial_security_title',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                        'required' => 1,
                    ],
                    [
                        'key' => 'field_four_pillars_hero_financial_security_text',
                        'label' => 'Text',
                        'name' => 'text',
                        'type' => 'text',
                        'required' => 1,
                    ],
                ],
            ],
            [
                'key' => 'field_four_pillars_hero_youth_opportunity',
                'label' => 'Youth Opportunity',
                'name' => 'youth_opportunity',
                'type' => 'group',
                'sub_fields' => [
                    [
                        'key' => 'field_four_pillars_hero_youth_opportunity_title',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                        'required' => 1,
                    ],
                    [
                        'key' => 'field_four_pillars_hero_youth_opportunity_text',
                        'label' => 'Text',
                        'name' => 'text',
                        'type' => 'text',
                        'required' => 1,
                    ],
                ],
            ],
            [
                'key' => 'field_four_pillars_hero_community_resiliency',
                'label' => 'Community Resiliency',
                'name' => 'community_resiliency',
                'type' => 'group',
                'sub_fields' => [
                    [
                        'key' => 'field_four_pillars_hero_community_resiliency_title',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                        'required' => 1,
                    ],
                    [
                        'key' => 'field_four_pillars_hero_community_resiliency_text',
                        'label' => 'Text',
                        'name' => 'text',
                        'type' => 'text',
                        'required' => 1,
                    ],
                ],
            ],
            [
                'key' => 'field_four_pillars_hero_bg',
                'label' => 'Background Image',
                'name' => 'bg',
                'type' => 'image',
                'required' => 1,
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
            ],
            [
                'key' => 'field_four_pillars_hero_bg_mobile',
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
                    'value' => FOUR_PILLARS_HERO_COMPONENT_POST_TYPE_NAME
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
