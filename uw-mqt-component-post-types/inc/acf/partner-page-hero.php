<?php

if (!defined('ABSPATH')) {
  exit;
}

if (function_exists('acf_add_local_field_group')):
  acf_add_local_field_group([
    'key' => 'group_partner_page_hero',
    'title' => 'Partner Page Hero Fields',
    'fields' => [
      [
        'key' => 'field_partner_page_hero_bg',
        'label' => 'Background Image',
        'name' => 'bg',
        'type' => 'image',
        'required' => 1,
        'return_format' => 'array',
        'preview_size' => 'medium',
        'library' => 'all',
      ],
      [
        'key' => 'field_partner_page_hero_bg_mobile',
        'label' => 'Mobile Background Image',
        'name' => 'bgMobile',
        'type' => 'image',
        'required' => 1,
        'return_format' => 'array',
        'preview_size' => 'medium',
        'library' => 'all',
      ],
      [
        'key' => 'field_partner_page_hero_title',
        'label' => 'Title',
        'name' => 'title',
        'type' => 'text',
        'required' => 1,
      ],
      [
        'key' => 'field_partner_page_hero_text',
        'label' => 'Text',
        'name' => 'text',
        'type' => 'text',
        'required' => 1,
        'rows' => 4,
      ],
    ],
    'location' => [
      [
        [
          'param' => 'post_type',
          'operator' => '==',
          'value' => PARTNER_PAGE_HERO_POST_TYPE_NAME
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
