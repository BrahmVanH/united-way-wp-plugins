<?php

if (!defined('ABSPATH')) {
    exit;
}

if (function_exists('acf_add_local_field_group')):
    acf_add_local_field_group([
        'key' => 'group_four_pillars_preview',
        'title' => 'Four Pillars Preview Fields',
        'fields' => [
            [
                'key' => 'field_four_pillars_preview_pillars',
                'label' => 'Pillars',
                'name' => 'pillars',
                'type' => 'group',
                'sub_fields' => [
                    // Healthy Community
                    [
                        'key' => 'field_pillar_healthy_community_title',
                        'label' => 'Healthy Community Title',
                        'name' => 'healthy_community_title',
                        'type' => 'text',
                        'default_value' => 'HEALTHY COMMUNITY'
                    ],
                    [
                        'key' => 'field_pillar_healthy_community_text',
                        'label' => 'Healthy Community Text',
                        'name' => 'healthy_community_text',
                        'type' => 'text'
                    ],
                    [
                        'key' => 'field_pillar_healthy_community_img',
                        'label' => 'Healthy Community Image',
                        'name' => 'healthy_community_img',
                        'type' => 'image'
                    ],
                    [
                        'key' => 'field_pillar_healthy_community_bg',
                        'label' => 'Healthy Community Background',
                        'name' => 'healthy_community_bg',
                        'type' => 'image'
                    ],
                    [
                        'key' => 'field_pillar_healthy_community_link',
                        'label' => 'Healthy Community Link',
                        'name' => 'healthy_community_link',
                        'type' => 'text',
                        'default_value' => 'our-impact/healthy-community'
                    ],
                    // Youth Opportunity
                    [
                        'key' => 'field_pillar_youth_opportunity_title',
                        'label' => 'Youth Opportunity Title',
                        'name' => 'youth_opportunity_title',
                        'type' => 'text',
                        'default_value' => 'YOUTH OPPORTUNITY'
                    ],
                    [
                        'key' => 'field_pillar_youth_opportunity_text',
                        'label' => 'Youth Opportunity Text',
                        'name' => 'youth_opportunity_text',
                        'type' => 'text'
                    ],
                    [
                        'key' => 'field_pillar_youth_opportunity_img',
                        'label' => 'Youth Opportunity Image',
                        'name' => 'youth_opportunity_img',
                        'type' => 'image'
                    ],
                    [
                        'key' => 'field_pillar_youth_opportunity_bg',
                        'label' => 'Youth Opportunity Background',
                        'name' => 'youth_opportunity_bg',
                        'type' => 'image'
                    ],
                    [
                        'key' => 'field_pillar_youth_opportunity_link',
                        'label' => 'Youth Opportunity Link',
                        'name' => 'youth_opportunity_link',
                        'type' => 'text',
                        'default_value' => 'our-impact/youth-opportunity'
                    ],
                    // Financial Security
                    [
                        'key' => 'field_pillar_financial_security_title',
                        'label' => 'Financial Security Title',
                        'name' => 'financial_security_title',
                        'type' => 'text',
                        'default_value' => 'FINANCIAL SECURITY'
                    ],
                    [
                        'key' => 'field_pillar_financial_security_text',
                        'label' => 'Financial Security Text',
                        'name' => 'financial_security_text',
                        'type' => 'text'
                    ],
                    [
                        'key' => 'field_pillar_financial_security_img',
                        'label' => 'Financial Security Image',
                        'name' => 'financial_security_img',
                        'type' => 'image'
                    ],
                    [
                        'key' => 'field_pillar_financial_security_bg',
                        'label' => 'Financial Security Background',
                        'name' => 'financial_security_bg',
                        'type' => 'image'
                    ],
                    [
                        'key' => 'field_pillar_financial_security_link',
                        'label' => 'Financial Security Link',
                        'name' => 'financial_security_link',
                        'type' => 'text',
                        'default_value' => 'our-impact/financial-security'
                    ],
                    // Community Resiliency
                    [
                        'key' => 'field_pillar_community_resiliency_title',
                        'label' => 'Community Resiliency Title',
                        'name' => 'community_resiliency_title',
                        'type' => 'text',
                        'default_value' => 'COMMUNITY RESILIENCY'
                    ],
                    [
                        'key' => 'field_pillar_community_resiliency_text',
                        'label' => 'Community Resiliency Text',
                        'name' => 'community_resiliency_text',
                        'type' => 'text'
                    ],
                    [
                        'key' => 'field_pillar_community_resiliency_img',
                        'label' => 'Community Resiliency Image',
                        'name' => 'community_resiliency_img',
                        'type' => 'image'
                    ],
                    [
                        'key' => 'field_pillar_community_resiliency_bg',
                        'label' => 'Community Resiliency Background',
                        'name' => 'community_resiliency_bg',
                        'type' => 'image'
                    ],
                    [
                        'key' => 'field_pillar_community_resiliency_link',
                        'label' => 'Community Resiliency Link',
                        'name' => 'community_resiliency_link',
                        'type' => 'text',
                        'default_value' => 'our-impact/community-resiliency'
                    ]
                ]
            ]
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => FOUR_PILLARS_PREVIEW_POST_TYPE_NAME
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
