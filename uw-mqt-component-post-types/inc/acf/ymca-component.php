<?php

if (!defined('ABSPATH')) {
  exit;
}

if (function_exists('acf_add_local_field_group')):
  acf_add_local_field_group([
    'key' => 'group_ymca_component',
    'title' => 'YMCA Component Fields',
    'fields' => [
      [
        'key' => 'field_ymca_title',
        'label' => 'Title',
        'name' => 'title',
        'type' => 'text',
        'required' => 1,
      ],
      [
        'key' => 'field_ymca_text',
        'label' => 'Text',
        'name' => 'text',
        'type' => 'text',
        'required' => 1,
      ],
      [
        'key' => 'field_ymca_link_1',
        'label' => 'Link 1',
        'name' => 'link_1',
        'type' => 'url',
        'required' => 1,
      ],
      [
        'key' => 'field_ymca_link_text_1',
        'label' => 'Link Text 1',
        'name' => 'link_text_1',
        'type' => 'text',
        'required' => 1,
      ],
      [
        'key' => 'field_ymca_link_2',
        'label' => 'Link 2',
        'name' => 'link_2',
        'type' => 'url',
        'required' => 1,
      ],
      [
        'key' => 'field_ymca_link_text_2',
        'label' => 'Link Text 2',
        'name' => 'link_text_2',
        'type' => 'text',
        'required' => 1,
      ],
      [
        'key' => 'field_ymca_image',
        'label' => 'Image',
        'name' => 'image',
        'type' => 'image',
        'required' => 1,
        'return_format' => 'array',
        'preview_size' => 'medium',
        'library' => 'all',
      ],

      [
        'key' => 'field_ymca_brand_image',
        'label' => 'Brand Image',
        'name' => 'brandImg',
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
          'value' => YMCA_COMPONENT_POST_TYPE_NAME
        ]
      ]
    ],
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => ''
  ]);
endif;
