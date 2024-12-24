<?php




if (!defined('ABSPATH')) {
  exit;
}

add_action('admin_notices', function () {
  if (!function_exists('acf_add_local_field_group')) {
    echo '<div class="error"><p>ACF is not active!</p></div>';
  }
});

if (function_exists('acf_add_local_field_group')):
  acf_add_local_field_group([
    'key' => 'group_partners_ticker_items',
    'title' => 'Partners Ticker Item Fields',
    'fields' => [
      [
        'key' => 'field_partner_title',
        'label' => 'Title',
        'name' => 'title',
        'type' => 'text',
      ],
      [
        'key' => 'field_partner_name',
        'label' => 'Name',
        'name' => 'name',
        'type' => 'text',
      ],
      [
        'key' => 'field_partner_brand_image',
        'label' => 'Brand Image',
        'name' => 'brandImg',
        'type' => 'image',
        'return_format' => 'array'
      ],
      [
        'key' => 'field_partner_img_alt',
        'label' => 'Image Alt Text',
        'name' => 'alt',
        'type' => 'text',
      ],
      [
        'key' => 'field_partner_link',
        'label' => 'Link',
        'name' => 'link',
        'type' => 'url',
      ],
    ],
    'location' => [
      [
        [
          'param' => 'post_type',
          'operator' => '==',
          'value' => PARTNERS_TICKER_ITEMS_POST_TYPE_NAME
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
