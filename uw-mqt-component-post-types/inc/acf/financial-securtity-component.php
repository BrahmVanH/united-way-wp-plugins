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
    'key' => 'group_financial_security_component',  // Simplified key
    'title' => 'Our Impact Fields',
    'fields' => [
      [
        'key' => 'field_financial_security_component_title',
        'label' => 'Title',
        'name' => 'title',
        'type' => 'text'
      ],
      [
        'key' => 'field_financial_security_component_text',
        'label' => 'Text',
        'name' => 'text',
        'type' => 'textarea'
      ],
      [
        'key' => 'field_financial_security_component_bg',
        'label' => 'Background Image',
        'name' => 'bg',
        'type' => 'image'
      ],
      [
        'key' => 'field_financial_security_component_image',
        'label' => 'Image',
        'name' => 'image',
        'type' => 'image'
      ],
      [
        'key' => 'field_financial_security_component_button_text',
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
          'value' => FINANCIAL_SECURITY_COMPONENT_OUR_IMPACT_PAGE_POST_TYPE_NAME  // Make sure this matches EXACTLY with your post type registration
        ]
      ]
    ],
    'menu_order' => 4,
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
