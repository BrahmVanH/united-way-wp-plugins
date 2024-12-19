<?php
if (!defined('ABSPATH')) {
  exit;
}

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
        'key' => 'field_bg_mobile',
        'label' => 'Mobile Background Image',
        'name' => 'bgMobile',
        'type' => 'image'
      ],
      [
        'key' => 'field_button_text',
        'label' => 'Button Text',
        'name' => 'buttonText',
        'type' => 'text'
      ]
    ],
    'location' => [
      [
        [
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'hero_component_our_impact_page'  // Make sure this matches EXACTLY with your post type registration
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