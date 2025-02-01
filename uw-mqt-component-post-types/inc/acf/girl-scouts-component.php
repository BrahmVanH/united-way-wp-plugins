<?php
require_once plugin_dir_path(dirname(dirname(__FILE__))) . 'constants.php';

if (!defined('ABSPATH')) {
  exit;
}

if (function_exists('acf_add_local_field_group')):
  acf_add_local_field_group([
    'key' => 'group_girl_scouts_component',
    'title' => 'Girl Scouts Component Fields',
    'fields' => [
      [
        'key' => 'field_girl_scouts_title',
        'label' => 'Title',
        'name' => 'title',
        'type' => 'text',
        'required' => 1,
      ],
      [
        'key' => 'field_girl_scouts_text',
        'label' => 'Text',
        'name' => 'text',
        'type' => 'text',
        'required' => 1,
        'tabs' => 'all',
        'toolbar' => 'full',
        'media_upload' => 0,
      ],
      [
        'key' => 'field_girl_scouts_bg',
        'label' => 'Background Image',
        'name' => 'bg',
        'type' => 'image',
        'required' => 1,
        'return_format' => 'array',
        'preview_size' => 'medium',
        'library' => 'all',
      ],
      [
        'key' => 'field_girl_scouts_image_1',
        'label' => 'Image 1',
        'name' => 'image_1',
        'type' => 'image',
        'required' => 1,
        'return_format' => 'array',
        'preview_size' => 'medium',
        'library' => 'all',
      ],
      [
        'key' => 'field_girl_scouts_image_2',
        'label' => 'Image 2',
        'name' => 'image_2',
        'type' => 'image',
        'required' => 1,
        'return_format' => 'array',
        'preview_size' => 'medium',
        'library' => 'all',
      ],
      [
        'key' => 'field_girl_scouts_link_1',
        'label' => 'Link 1',
        'name' => 'link_1',
        'type' => 'url',
        'required' => 1,
      ],
      [
        'key' => 'field_girl_scouts_link_text_1',
        'label' => 'Link Text 1',
        'name' => 'link_text_1',
        'type' => 'text',
        'required' => 1,
      ],
      [
        'key' => 'field_girl_scouts_link_2',
        'label' => 'Link 2',
        'name' => 'link_2',
        'type' => 'url',
        'required' => 1,
      ],
      [
        'key' => 'field_girl_scouts_link_text_2',
        'label' => 'Link Text 2',
        'name' => 'link_text_2',
        'type' => 'text',
        'required' => 1,
      ],
    ],
    'location' => [
      [
        [
          'param' => 'post_type',
          'operator' => '==',
          'value' => GIRL_SCOUTS_COMPONENT_POST_TYPE_NAME
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
