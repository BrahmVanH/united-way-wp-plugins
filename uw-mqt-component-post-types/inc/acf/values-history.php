<?php
require_once plugin_dir_path(dirname(dirname(__FILE__))) . 'constants.php';

if (!defined('ABSPATH')) {
  exit;
}

if (function_exists('acf_add_local_field_group')):
  acf_add_local_field_group([
    'key' => 'group_values_history',
    'title' => 'Values and History Fields',
    'fields' => [
      [
        'key' => 'field_image_1',
        'label' => 'Image 1',
        'name' => 'image_1',
        'type' => 'image',
        'required' => 1,
        'return_format' => 'array',
        'preview_size' => 'medium',
        'library' => 'all'
      ],
      [
        'key' => 'field_image_alt_1',
        'label' => 'Image Alt Text 1',
        'name' => 'image_alt_1',
        'type' => 'text',
        'required' => 1,
      ],
      [
        'key' => 'field_image_2',
        'label' => 'Image 2',
        'name' => 'image_2',
        'type' => 'image',
        'required' => 1,
        'return_format' => 'array',
        'preview_size' => 'medium',
        'library' => 'all'
      ],
      [
        'key' => 'field_image_alt_2',
        'label' => 'Image Alt Text 2',
        'name' => 'image_alt_2',
        'type' => 'text',
        'required' => 1,
      ],
      [
        'key' => 'field_image_3',
        'label' => 'Image 3',
        'name' => 'image_3',
        'type' => 'image',
        'required' => 1,
        'return_format' => 'array',
        'preview_size' => 'medium',
        'library' => 'all'
      ],
      [
        'key' => 'field_image_alt_3',
        'label' => 'Image Alt Text 3',
        'name' => 'image_alt_3',
        'type' => 'text',
        'required' => 1,
      ]
    ],
    'location' => [
      [
        [
          'param' => 'post_type',
          'operator' => '==',
          'value' => VALUES_HISTORY_POST_TYPE_NAME
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
