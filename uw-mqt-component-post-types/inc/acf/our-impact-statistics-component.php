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
            'key' => 'field_our_impact_statistics_component_gallery_image_1',
            'label' => 'Image 1',
            'name' => 'image_1',
            'type' => 'image'
          ],
          [
            'key' => 'field_our_impact_statistics_component_gallery_text_1',
            'label' => 'Text 1',
            'name' => 'text_1',
            'type' => 'text'
          ],
          [
            'key' => 'field_our_impact_statistics_component_gallery_link_1',
            'label' => 'Link 1',
            'name' => 'link_1',
            'type' => 'text'
          ],
          [
            'key' => 'field_our_impact_statistics_component_gallery_image_2',
            'label' => 'Image 2',
            'name' => 'image_2',
            'type' => 'image'
          ],
          [
            'key' => 'field_our_impact_statistics_component_gallery_text_2',
            'label' => 'Text 2',
            'name' => 'text_2',
            'type' => 'text'
          ],
          [
            'key' => 'field_our_impact_statistics_component_gallery_link_2',
            'label' => 'Link 2',
            'name' => 'link_2',
            'type' => 'text'
          ],
          [
            'key' => 'field_our_impact_statistics_component_gallery_image_3',
            'label' => 'Image 3',
            'name' => 'image_3',
            'type' => 'image'
          ],
          [
            'key' => 'field_our_impact_statistics_component_gallery_text_3',
            'label' => 'Text 3',
            'name' => 'text_3',
            'type' => 'text'
          ],
          [
            'key' => 'field_our_impact_statistics_component_gallery_link_3',
            'label' => 'Link 3',
            'name' => 'link_3',
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
            'key' => 'field_our_impact_statistics_component_value_1',
            'label' => 'Value 1',
            'name' => 'value_1',
            'type' => 'text',
            'required' => 1,
            'wrapper' => ['width' => '33%']
          ],
          [
            'key' => 'field_our_impact_statistics_component_unit_1',
            'label' => 'Unit 1',
            'name' => 'unit_1',
            'type' => 'text',
            'required' => 0,
            'default_value' => ' ',
            'wrapper' => ['width' => '33%']
          ],
          [
            'key' => 'field_our_impact_statistics_component_text_1',
            'label' => 'Text 1',
            'name' => 'text_1',
            'type' => 'text',
            'required' => 1,
            'wrapper' => ['width' => '33%']
          ],
          [
            'key' => 'field_our_impact_statistics_component_value_2',
            'label' => 'Value 2',
            'name' => 'value_2',
            'type' => 'text',
            'required' => 1,
            'wrapper' => ['width' => '33%']
          ],
          [
            'key' => 'field_our_impact_statistics_component_unit_2',
            'label' => 'Unit 2',
            'name' => 'unit_2',
            'type' => 'text',
            'required' => 0,
            'default_value' => ' ',
            'wrapper' => ['width' => '33%']
          ],
          [
            'key' => 'field_our_impact_statistics_component_text_2',
            'label' => 'Text 2',
            'name' => 'text_2',
            'type' => 'text',
            'required' => 1,
            'wrapper' => ['width' => '33%']
          ],
          [
            'key' => 'field_our_impact_statistics_component_value_3',
            'label' => 'Value 3',
            'name' => 'value_3',
            'type' => 'text',
            'required' => 1,
            'wrapper' => ['width' => '33%']
          ],
          [
            'key' => 'field_our_impact_statistics_component_unit_3',
            'label' => 'Unit 3',
            'name' => 'unit_3',
            'type' => 'text',
            'required' => 0,
            'default_value' => ' ',
            'wrapper' => ['width' => '33%']
          ],
          [
            'key' => 'field_our_impact_statistics_component_text_3',
            'label' => 'Text 3',
            'name' => 'text_3',
            'type' => 'text',
            'required' => 1,
            'wrapper' => ['width' => '33%']
          ],
          [
            'key' => 'field_our_impact_statistics_component_value_4',
            'label' => 'Value 4',
            'name' => 'value_4',
            'type' => 'text',
            'required' => 1,
            'wrapper' => ['width' => '33%']
          ],
          [
            'key' => 'field_our_impact_statistics_component_unit_4',
            'label' => 'Unit 4',
            'name' => 'unit_4',
            'type' => 'text',
            'required' => 0,
            'default_value' => ' ',
            'wrapper' => ['width' => '33%']
          ],
          [
            'key' => 'field_our_impact_statistics_component_text_4',
            'label' => 'Text 4',
            'name' => 'text_4',
            'type' => 'text',
            'required' => 1,
            'wrapper' => ['width' => '33%']
          ],
          [
            'key' => 'field_our_impact_statistics_component_value_5',
            'label' => 'Value 5',
            'name' => 'value_5',
            'type' => 'text',
            'required' => 1,
            'wrapper' => ['width' => '33%']
          ],
          [
            'key' => 'field_our_impact_statistics_component_unit_5',
            'label' => 'Unit 5',
            'name' => 'unit_5',
            'type' => 'text',
            'required' => 0,
            'default_value' => ' ',
            'wrapper' => ['width' => '33%']
          ],
          [
            'key' => 'field_our_impact_statistics_component_text_5',
            'label' => 'Text 5',
            'name' => 'text_5',
            'type' => 'text',
            'required' => 1,
            'wrapper' => ['width' => '33%']
          ],
          [
            'key' => 'field_our_impact_statistics_component_value_6',
            'label' => 'Value 6',
            'name' => 'value_6',
            'type' => 'text',
            'required' => 1,
            'wrapper' => ['width' => '33%']
          ],
          [
            'key' => 'field_our_impact_statistics_component_unit_6',
            'label' => 'Unit 6',
            'name' => 'unit_6',
            'type' => 'text',
            'required' => 0,
            'default_value' => ' ',
            'wrapper' => ['width' => '33%']
          ],
          [
            'key' => 'field_our_impact_statistics_component_text_6',
            'label' => 'Text 6',
            'name' => 'text_6',
            'type' => 'text',
            'required' => 1,
            'wrapper' => ['width' => '33%']
          ]
        ],
        'show_in_graphql' => true
      ]
      // Removed bg and bgMobile fields
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