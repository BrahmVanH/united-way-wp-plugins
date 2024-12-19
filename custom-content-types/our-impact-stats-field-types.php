<?php
/*
Plugin Name: Our Impact Stats Fields
Plugin URI: your-site.com
Description: Registers custom our impact statistics post types and ACF field groups
Version: 1.0
Author: Your Name
*/

if (!defined('ABSPATH'))
  exit;

// Check if ACF is active
if (!class_exists('ACF')) {
  add_action('admin_notices', function () {
    echo '<div class="error"><p>This plugin requires Advanced Custom Fields to be installed and activated.</p></div>';
  });
  return;
}

define('IMPACT_STATISTICS_LABEL', 'Impact Statistics');

// Register Custom Post Types
function registerCustomContentTypes()
{
  // Your post type registration code here
  register_post_type('impact_statistics', [
    'label' => IMPACT_STATISTICS_LABEL,
    'public' => true,
    'show_in_rest' => true, // Enable Gutenberg/REST API
    'supports' => ['title'], // Only show title field, remove editor and other fields
    'menu_icon' => 'dashicons-chart-bar',
    'labels' => [
      'name' => IMPACT_STATISTICS_LABEL,
      'singular_name' => IMPACT_STATISTICS_LABEL,
      'add_new' => 'Add Statistics',
      'add_new_item' => 'Add New Statistics',
      'edit_item' => 'Edit Statistics',
      'new_item' => 'New Statistics',
      'view_item' => 'View Statistics',
      'search_items' => 'Search Statistics',
      'not_found' => 'No statistics found',
      'not_found_in_trash' => 'No statistics found in trash'
    ],
  ]);
}
add_action('init', 'registerCustomContentTypes');

// Register ACF Field Groups
function linkAcfFieldsToPostTypes()
{
  if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group([
      'key' => 'group_impact_statistics',
      'title' => 'Impact Statistics Details',
      'menu_order' => 0,
      'position' => 'normal',
      'style' => 'default',
      'label_placement' => 'top',
      'instruction_placement' => 'label',
      'hide_on_screen' => '',
      'active' => true,
      'description' => '',
      'show_in_rest' => false,
      'fields' => [
        [
          'key' => 'field_statistics',
          'label' => 'Statistics',
          'name' => 'statistics',
          'type' => 'group',
          'layout' => 'block',
          'sub_fields' => [
            [
              'key' => 'field_stat1',
              'label' => 'Statistic 1',
              'name' => 'stat_1',
              'type' => 'group',
              'layout' => 'block',
              'sub_fields' => [
                [
                  'key' => 'field_stat1_unit',
                  'label' => 'Unit',
                  'name' => 'unit',
                  'type' => 'text',
                  'required' => 1,
                ],
                [
                  'key' => 'field_stat1_value',
                  'label' => 'Value',
                  'name' => 'value',
                  'type' => 'text',
                  'required' => 1,
                ],
                [
                  'key' => 'field_stat1_text',
                  'label' => 'Text',
                  'name' => 'text',
                  'type' => 'text',
                  'required' => 1,
                ],
              ]
            ],
            [
              'key' => 'field_stat2',
              'label' => 'Statistic 2',
              'name' => 'stat_2',
              'type' => 'group',
              'layout' => 'block',
              'sub_fields' => [
                [
                  'key' => 'field_stat2_unit',
                  'label' => 'Unit',
                  'name' => 'unit',
                  'type' => 'text',
                  'required' => 1,
                ],
                [
                  'key' => 'field_stat2_value',
                  'label' => 'Value',
                  'name' => 'value',
                  'type' => 'text',
                  'required' => 1,
                ],
                [
                  'key' => 'field_stat2_text',
                  'label' => 'Text',
                  'name' => 'text',
                  'type' => 'text',
                  'required' => 1,
                ],
              ]
            ],
            [
              'key' => 'field_stat3',
              'label' => 'Statistic 3',
              'name' => 'stat_3',
              'type' => 'group',
              'layout' => 'block',
              'sub_fields' => [
                [
                  'key' => 'field_stat3_unit',
                  'label' => 'Unit',
                  'name' => 'unit',
                  'type' => 'text',
                  'required' => 1,
                ],
                [
                  'key' => 'field_stat3_value',
                  'label' => 'Value',
                  'name' => 'value',
                  'type' => 'text',
                  'required' => 1,
                ],
                [
                  'key' => 'field_stat3_text',
                  'label' => 'Text',
                  'name' => 'text',
                  'type' => 'text',
                  'required' => 1,
                ],
              ]
            ],
            [
              'key' => 'field_stat4',
              'label' => 'Statistic 4',
              'name' => 'stat_4',
              'type' => 'group',
              'layout' => 'block',
              'sub_fields' => [
                [
                  'key' => 'field_stat4_unit',
                  'label' => 'Unit',
                  'name' => 'unit',
                  'type' => 'text',
                  'required' => 1,
                ],
                [
                  'key' => 'field_stat4_value',
                  'label' => 'Value',
                  'name' => 'value',
                  'type' => 'text',
                  'required' => 1,
                ],
                [
                  'key' => 'field_stat4_text',
                  'label' => 'Text',
                  'name' => 'text',
                  'type' => 'text',
                  'required' => 1,
                ],
              ]
            ],
            [
              'key' => 'field_stat5',
              'label' => 'Statistic 5',
              'name' => 'stat_5',
              'type' => 'group',
              'layout' => 'block',
              'sub_fields' => [
                [
                  'key' => 'field_stat5_unit',
                  'label' => 'Unit',
                  'name' => 'unit',
                  'type' => 'text',
                  'required' => 1,
                ],
                [
                  'key' => 'field_stat5_value',
                  'label' => 'Value',
                  'name' => 'value',
                  'type' => 'text',
                  'required' => 1,
                ],
                [
                  'key' => 'field_stat5_text',
                  'label' => 'Text',
                  'name' => 'text',
                  'type' => 'text',
                  'required' => 1,
                ],
              ]
            ],
            [
              'key' => 'field_stat6',
              'label' => 'Statistic 6',
              'name' => 'stat_6',
              'type' => 'group',
              'layout' => 'block',
              'sub_fields' => [
                [
                  'key' => 'field_stat6_unit',
                  'label' => 'Unit',
                  'name' => 'unit',
                  'type' => 'text',
                  'required' => 1,
                ],
                [
                  'key' => 'field_stat6_value',
                  'label' => 'Value',
                  'name' => 'value',
                  'type' => 'text',
                  'required' => 1,
                ],
                [
                  'key' => 'field_stat6_text',
                  'label' => 'Text',
                  'name' => 'text',
                  'type' => 'text',
                  'required' => 1,
                ],
              ]
            ],
          ]
        ],
        [
          'key' => 'impactful-events',
          'label' => 'Impactful Events',
          'name' => 'impactful_events',
          'type' => 'group',
          'layout' => 'block',
          'sub_fields' => [
            [
              'key' => 'event1',
              'label' => 'Event 1',
              'name' => 'event_1',
              'type' => 'group',
              'layout' => 'block',
              'sub_fields' => [
                [
                  'key' => 'event1_image',
                  'label' => 'Image',
                  'name' => 'image',
                  'type' => 'image',
                  'required' => 1,
                ],
                [
                  'key' => 'event1_text',
                  'label' => 'Text',
                  'name' => 'text',
                  'type' => 'text',
                  'required' => 1,
                ],

              ],
            ],
            [
              'key' => 'event2',
              'label' => 'Event 2',
              'name' => 'event_2',
              'type' => 'group',
              'layout' => 'block',
              'sub_fields' => [
                [
                  'key' => 'event2_image',
                  'label' => 'Image',
                  'name' => 'image',
                  'type' => 'image',
                  'required' => 1,
                ],
                [
                  'key' => 'event2_text',
                  'label' => 'Text',
                  'name' => 'text',
                  'type' => 'text',
                  'required' => 1,
                ],

              ]
            ],
            [
              'key' => 'event3',
              'label' => 'Event 3',
              'name' => 'event_3',
              'type' => 'group',
              'layout' => 'block',
              'sub_fields' => [
                [
                  'key' => 'event3_image',
                  'label' => 'Image',
                  'name' => 'image',
                  'type' => 'image',
                  'required' => 1,
                ],
                [
                  'key' => 'event3_text',
                  'label' => 'Text',
                  'name' => 'text',
                  'type' => 'text',
                  'required' => 1,
                ],

              ]
            ],
          ]
        ],
        'location' => [
          [
            [
              'param' => 'post_type',
              'operator' => '==',
              'value' => 'impact_statistics',
            ]
          ]
        ],
        
      ]
    ]);
  }
}
add_action('acf/init', 'linkAcfFieldsToPostTypes');



function removeDefaultPostType()
{
  remove_menu_page('edit.php'); // Remove Posts
  remove_menu_page('edit-comments.php'); // Remove Comments
}
add_action('admin_menu', 'removeDefaultPostType');
