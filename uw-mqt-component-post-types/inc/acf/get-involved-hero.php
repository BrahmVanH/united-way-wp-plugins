<?php

if (!defined('ABSPATH')) {
  exit;
}

if (function_exists('acf_add_local_field_group')):
  acf_add_local_field_group([
    'key' => 'group_get_involved_hero',
    'title' => 'Get Involved Hero Fields',
    'fields' => [
      [
        'key' => 'field_get_involved_hero_title',
        'label' => 'Title',
        'name' => 'title',
        'type' => 'text',
        'required' => 1,
        'default_value' => '',
      ],
      [
        'key' => 'field_get_involved_hero_text',
        'label' => 'Text',
        'name' => 'text',
        'type' => 'text',
        'required' => 1,
        'default_value' => '',
      ],
      [
        'key' => 'field_get_involved_hero_bg',
        'label' => 'Background Image',
        'name' => 'bg',
        'type' => 'image',
        'required' => 1,
        'return_format' => 'array',
        'preview_size' => 'medium',
        'library' => 'all',
      ],
      [
        'key' => 'field_get_involved_hero_bg_mobile',
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
          'value' => GET_INVOLVED_HERO_POST_TYPE_NAME
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
