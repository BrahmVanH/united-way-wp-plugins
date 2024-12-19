<?php
if (!defined('ABSPATH')) {
  exit;
}

if (function_exists('acf_add_local_field_group')):
  acf_add_local_field_group([
    'key' => 'group_home_page',
    'title' => 'Home Page Components',
    'fields' => [
      // Our Impact Component
      [
        'key' => 'field_our_impact',
        'label' => 'Our Impact Component',
        'name' => 'our-impact-component',
        'type' => 'group',
        'sub_fields' => [
          [
            'key' => 'field_title',
            'label' => 'Title',
            'name' => 'title',
            'type' => 'text'
          ],
          [
            'key' => 'field_text',
            'label' => 'Text',
            'name' => 'text',
            'type' => 'textarea'
          ],
          [
            'key' => 'field_bg',
            'label' => 'Background Image',
            'name' => 'bg',
            'type' => 'image'
          ],
          [
            'key' => 'field_button_text',
            'label' => 'Button Text',
            'name' => 'buttonText',
            'type' => 'text'
          ]
        ]
      ],
      // Partners Ticker
      [
        'key' => 'field_partners_ticker',
        'label' => 'Partners Ticker',
        'name' => 'partners_ticker',
        'type' => 'group',
        'sub_fields' => [
          [
            'key' => 'field_partners',
            'label' => 'Partners',
            'name' => 'partners',
            'type' => 'repeater',
            'sub_fields' => [
              [
                'key' => 'field_partner_name',
                'label' => 'Name',
                'name' => 'name',
                'type' => 'text'
              ],
              [
                'key' => 'field_partner_logo',
                'label' => 'Logo',
                'name' => 'logo',
                'type' => 'image'
              ],
              [
                'key' => 'field_partner_logo_alt',
                'label' => 'Logo Alt Text',
                'name' => 'logoAlt',
                'type' => 'text'
              ],
              [
                'key' => 'field_partner_link',
                'label' => 'Link',
                'name' => 'link',
                'type' => 'url'
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
          'value' => 'page_builder',
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
  ]);
endif;
