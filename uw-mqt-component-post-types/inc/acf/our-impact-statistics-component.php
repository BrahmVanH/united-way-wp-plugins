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
    'key' => 'group_our_impact_statistics',  // Simplified key
    'title' => 'Our Impact Statistic Fields',
    'fields' => [
      [
        'key' => 'field_our_impact_statistics_component_title',
        'label' => 'Title',
        'name' => 'title',
        'type' => 'text'
      ],
      [
        'key' => 'field_our_impact_statistics_component_gallery',
        'label' => 'Gallery',
        'name' => 'gallery',
        'type' => 'group',
        'sub_fields' => [
          [
            'key' => 'field_our_impact_statistics_component_gallery_image',
            'label' => 'Image',
            'name' => 'image',
            'type' => 'image'
          ],
          [
            'key' => 'field_our_impact_statistics_component_gallery_text',
            'label' => 'Text',
            'name' => 'text',
            'type' => 'text'
          ]
        ]
      ],
      [
        'key' => 'field_our_impact_statistics_component_stats',
        'label' => 'Stats',
        'name' => 'stats',
        'type' => 'group',
        'sub_fields' => [
          [
            'key' => 'field_our_impact_statistics_component_gallery_stat',
            'label' => 'Stat',
            'name' => 'stat',
            'type' => 'text'
          ],
          [
            'key' => 'field_our_impact_statistics_component_gallery_text',
            'label' => 'Text',
            'name' => 'text',
            'type' => 'text'
          ]
        ]
      ],
      [
        'key' => 'field_our_impact_statistics_component_home_page_bg',
        'label' => 'Background Image',
        'name' => 'bg',
        'type' => 'image'
      ],
      [
        'key' => 'field_our_impact_statistics_component_home_page_bg_mobile',
        'label' => 'Mobile Background Image',
        'name' => 'bgMobile',
        'type' => 'image'
      ],

    ],
    'location' => [
      [
        [
          'param' => 'post_type',
          'operator' => '==',
          'value' => IMPACT_STATISTICS_POST_TYPE_NAME  // Make sure this matches EXACTLY with your post type registration
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