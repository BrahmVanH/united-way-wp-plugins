<?php

if (!defined('ABSPATH')) {
  exit;
}

if (function_exists('acf_add_local_field_group')):
  acf_add_local_field_group([
    'key' => 'group_alice_report_page',
    'title' => 'ALICE Report Page Fields',
    'fields' => [
      [
        'key' => 'field_alice_report_hero',
        'label' => 'Hero Section',
        'name' => 'hero',
        'type' => 'group',
        'sub_fields' => [
          [
            'key' => 'field_hero_bg',
            'label' => 'Background Image',
            'name' => 'bg',
            'type' => 'image',
            'required' => 1,
            'return_format' => 'array',
          ],
          [
            'key' => 'field_hero_mobile_bg',
            'label' => 'Mobile Background',
            'name' => 'mobileBg',
            'type' => 'image',
            'required' => 1,
            'return_format' => 'array',
          ],
          [
            'key' => 'field_hero_title',
            'label' => 'Title',
            'name' => 'title',
            'type' => 'text',
            'required' => 1,
          ],
          [
            'key' => 'field_hero_text',
            'label' => 'Text',
            'name' => 'text',
            'type' => 'textarea',
            'required' => 1,
          ],
          [
            'key' => 'field_hero_img',
            'label' => 'Image',
            'name' => 'img',
            'type' => 'image',
            'required' => 1,
            'return_format' => 'array',
          ],
        ]
      ],
      [
        'key' => 'field_heading',
        'label' => 'Heading',
        'name' => 'heading',
        'type' => 'text',
        'required' => 1,
      ],
      [
        'key' => 'field_sub_heading',
        'label' => 'Sub Heading',
        'name' => 'subHeading',
        'type' => 'text',
        'required' => 1,
      ],
      [
        'key' => 'field_text_1',
        'label' => 'Text 1',
        'name' => 'text1',
        'type' => 'textarea',
        'required' => 1,
      ],
      [
        'key' => 'field_text_2',
        'label' => 'Text 2',
        'name' => 'text2',
        'type' => 'textarea',
        'required' => 1,
      ],
      [
        'key' => 'field_image_1',
        'label' => 'Image 1',
        'name' => 'image1',
        'type' => 'image',
        'required' => 1,
        'return_format' => 'array',
      ],
      [
        'key' => 'field_image_2',
        'label' => 'Image 2',
        'name' => 'image2',
        'type' => 'image',
        'required' => 1,
        'return_format' => 'array',
      ],
      [
        'key' => 'field_image_3',
        'label' => 'Image 3',
        'name' => 'image3',
        'type' => 'image',
        'required' => 1,
        'return_format' => 'array',
      ],
      [
        'key' => 'field_image_4',
        'label' => 'Image 4',
        'name' => 'image4',
        'type' => 'image',
        'required' => 1,
        'return_format' => 'array',
      ],
      [
        'key' => 'field_image_5',
        'label' => 'Image 5',
        'name' => 'image5',
        'type' => 'image',
        'required' => 1,
        'return_format' => 'array',
      ],
      [
        'key' => 'field_image_6',
        'label' => 'Image 6',
        'name' => 'image6',
        'type' => 'image',
        'required' => 1,
        'return_format' => 'array',
      ],
      [
        'key' => 'field_image_7',
        'label' => 'Image 7',
        'name' => 'image7',
        'type' => 'image',
        'required' => 1,
        'return_format' => 'array',
      ],
      [
        'key' => 'field_image_8',
        'label' => 'Image 8',
        'name' => 'image8',
        'type' => 'image',
        'required' => 1,
        'return_format' => 'array',
      ],

      [
        'key' => 'field_full_report_link',
        'label' => 'Full Report Link',
        'name' => 'fullReportLink',
        'type' => 'text',
        'required' => 1,
      ],
      [
        'key' => 'field_interactive_report_link',
        'label' => 'Interactive Report Link',
        'name' => 'interactiveReportLink',
        'type' => 'text',
        'required' => 1,
      ],
    ],
    'location' => [
      [
        [
          'param' => 'post_type',
          'operator' => '==',
          'value' => ALICE_REPORT_PAGE_POST_TYPE_NAME
        ]
      ]
    ],
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
  ]);
endif;
