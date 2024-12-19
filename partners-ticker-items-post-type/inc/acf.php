<?php
if (!defined('ABSPATH')) {
  exit;
}

function register_partners_ticker_items_acf_fields()
{
  if (!function_exists('acf_add_local_field_group')) {
    return;
  }

  acf_add_local_field_group([
    'key' => 'group_partners_ticker_items',
    'title' => 'Partners Ticker Item Fields',
    'fields' => [
      [
        'key' => 'field_title',
        'label' => 'Title',
        'name' => 'title',
        'type' => 'text',
        'required' => true
      ],
      [
        'key' => 'field_partner_name',
        'label' => 'Name',
        'name' => 'name',
        'type' => 'text',
        'required' => true
      ],
      [
        'key' => 'field_partner_brand_image',
        'label' => 'Brand Image',
        'name' => 'brandImg',
        'type' => 'image',
        'required' => true,
        'return_format' => 'array'
      ],
      [
        'key' => 'field_partner_img_alt',
        'label' => 'Image Alt Text',
        'name' => 'alt',
        'type' => 'text',
        'required' => true
      ],
      [
        'key' => 'field_partner_link',
        'label' => 'Link',
        'name' => 'link',
        'type' => 'url',
        'required' => true
      ],
    ],
    'location' => [
      [
        [
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'partners_ticker_items'
        ]
      ]
    ],
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => ['the_content'],
    'active' => true,
    'description' => '',
    'show_in_graphql' => true
  ]);
}
add_action('acf/init', 'register_partners_ticker_items_acf_fields');