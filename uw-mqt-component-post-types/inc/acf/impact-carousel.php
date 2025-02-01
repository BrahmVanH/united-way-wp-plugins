<?php
require_once plugin_dir_path(dirname(dirname(__FILE__))) . 'constants.php';

if (!defined('ABSPATH')) {
  exit;
}

if (function_exists('acf_add_local_field_group')):
  acf_add_local_field_group([
    'key' => 'group_impact_carousel',
    'title' => 'Impact Carousel Fields',
    'fields' => [
      [
        'key' => 'field_bg_img',
        'label' => 'Background Image',
        'name' => 'bgImg',
        'type' => 'image',
        'required' => 1,
        'return_format' => 'array',
        'preview_size' => 'medium',
        'library' => 'all'
      ],

      [
        'key' => 'field_mobile_bg',
        'label' => 'Mobile Background Image',
        'name' => 'mobileBg',
        'type' => 'image',
        'required' => 1,
        'return_format' => 'array',
        'preview_size' => 'medium',
        'library' => 'all'
      ],
      [
        'key' => 'field_carousel_items',
        'label' => 'Carousel Items',
        'name' => 'carousel_items',
        'type' => 'group',
        'layout' => 'block',
        'sub_fields' => [
          [
            'key' => 'field_item_1',
            'label' => 'Item 1',
            'name' => 'item_1',
            'type' => 'group',
            'layout' => 'block',
            'sub_fields' => [
              [
                'key' => 'field_item_1_title',
                'label' => 'Title',
                'name' => 'title',
                'type' => 'text',
                'required' => 1
              ],
              [
                'key' => 'field_item_1_text',
                'label' => 'Text',
                'name' => 'text',
                'type' => 'textarea',
                'required' => 1
              ],
              [
                'key' => 'field_item_1_image',
                'label' => 'Image',
                'name' => 'image',
                'type' => 'image',
                'required' => 1,
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all'
              ],
              [
                'key' => 'field_item_1_link',
                'label' => 'Link',
                'name' => 'link',
                'type' => 'url',
                'required' => 0
              ],
              [
                'key' => 'field_item_1_link_text',
                'label' => 'Link Text',
                'name' => 'link_text',
                'type' => 'text',
                'required' => 0,
                'conditional_logic' => [
                  [
                    [
                      'field' => 'field_item_1_link',
                      'operator' => '!=empty'
                    ]
                  ]
                ]
              ]
            ]
          ],
          [
            'key' => 'field_item_2',
            'label' => 'Item 2',
            'name' => 'item_2',
            'type' => 'group',
            'layout' => 'block',
            'sub_fields' => [
              [
                'key' => 'field_item_2_title',
                'label' => 'Title',
                'name' => 'title',
                'type' => 'text',
                'required' => 1
              ],
              [
                'key' => 'field_item_2_text',
                'label' => 'Text',
                'name' => 'text',
                'type' => 'textarea',
                'required' => 1
              ],
              [
                'key' => 'field_item_2_image',
                'label' => 'Image',
                'name' => 'image',
                'type' => 'image',
                'required' => 1,
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all'
              ],
              [
                'key' => 'field_item_2_link',
                'label' => 'Link',
                'name' => 'link',
                'type' => 'url',
                'required' => 0
              ],
              [
                'key' => 'field_item_2_link_text',
                'label' => 'Link Text',
                'name' => 'link_text',
                'type' => 'text',
                'required' => 0,
                'conditional_logic' => [
                  [
                    [
                      'field' => 'field_item_2_link',
                      'operator' => '!=empty'
                    ]
                  ]
                ]
              ]
            ]
          ],
          [
            'key' => 'field_item_3',
            'label' => 'Item 3',
            'name' => 'item_3',
            'type' => 'group',
            'layout' => 'block',
            'sub_fields' => [
              [
                'key' => 'field_item_3_title',
                'label' => 'Title',
                'name' => 'title',
                'type' => 'text',
                'required' => 1
              ],
              [
                'key' => 'field_item_3_text',
                'label' => 'Text',
                'name' => 'text',
                'type' => 'textarea',
                'required' => 1
              ],
              [
                'key' => 'field_item_3_image',
                'label' => 'Image',
                'name' => 'image',
                'type' => 'image',
                'required' => 1,
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all'
              ],
              [
                'key' => 'field_item_3_link',
                'label' => 'Link',
                'name' => 'link',
                'type' => 'url',
                'required' => 0
              ],
              [
                'key' => 'field_item_3_link_text',
                'label' => 'Link Text',
                'name' => 'link_text',
                'type' => 'text',
                'required' => 0,
                'conditional_logic' => [
                  [
                    [
                      'field' => 'field_item_3_link',
                      'operator' => '!=empty'
                    ]
                  ]
                ]
              ]
            ]
          ]
        ]
      ]
    ],
    'location' => [
      [
        [
          'param' => 'post_type',
          'operator' => '==',
          'value' => IMPACT_CAROUSEL_POST_TYPE_NAME
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
