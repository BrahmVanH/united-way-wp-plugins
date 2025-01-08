<?php

if (!defined('ABSPATH')) {
  exit;
}

require_once plugin_dir_path(dirname(dirname(__FILE__))) . 'constants.php';

// Add debugging
add_action('admin_notices', function () {
  if (!function_exists('acf_add_local_field_group')) {
    echo '<div class="error"><p>ACF is not active!</p></div>';
  }
});

if (function_exists('acf_add_local_field_group')):
  acf_add_local_field_group([
    'key' => 'group_hero_our_impact_page',  // Simplified key
    'title' => 'Hero Component Fields',
    'fields' => [
      [
        'key' => 'field_hero_our_impact_page_title',
        'label' => 'Title',
        'name' => 'title',
        'type' => 'text'
      ],
      [
        'key' => 'field_hero_our_impact_page_text',
        'label' => 'Text',
        'name' => 'text',
        'type' => 'textarea'
      ],
      [
        'key' => 'field_hero_our_impact_page_bg',
        'label' => 'Background Image',
        'name' => 'bg',
        'type' => 'image'
      ],
      [
        'key' => 'field_hero_our_impact_page_bg_mobile',
        'label' => 'Mobile Background Image',
        'name' => 'bgMobile',
        'type' => 'image'
      ]
    ],
    'location' => [
      [
        [
          'param' => 'post_type',
          'operator' => '==',
          'value' => HERO_COMPONENT_OUR_IMPACT_PAGE_POST_TYPE_NAME  // Make sure this matches EXACTLY with your post type registration
        ]
      ]
    ],
    'menu_order' => 3,
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