<?php
require_once plugin_dir_path(dirname(dirname(__FILE__))) . 'constants.php';

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
    'key' => 'group_campaign_toolkit_asset',
    'title' => 'Campaign Toolkit Asset Fields',
    'fields' => [
      [
        'key' => 'field_workplace_packet',
        'label' => 'Workplace Packet',
        'name' => 'workplace_packet',
        'type' => 'file',
        'return_format' => 'array',
        'library' => 'all',
        'mime_types' => 'pdf'
      ],
      [
        'key' => 'field_radio_psa_audio',
        'label' => 'Radio PSA Audio',
        'name' => 'radio_psa_audio',
        'type' => 'file',
        'return_format' => 'array',
        'library' => 'all',
        'mime_types' => 'mp3'
      ],
      [
        'key' => 'field_radio_psa_transcript',
        'label' => 'Radio PSA Transcript',
        'name' => 'radio_psa_transcript',
        'type' => 'file',
        'return_format' => 'array',
        'library' => 'all',
        'mime_types' => 'txt'
      ],
      [
        'key' => 'field_pledge_form',
        'label' => 'Pledge Form',
        'name' => 'pledge_form',
        'type' => 'file',
        'return_format' => 'array',
        'library' => 'all',
        'mime_types' => 'pdf'
      ]
    ],
    'location' => [
      [
        [
          'param' => 'post_type',
          'operator' => '==',
          'value' => CAMPAIGN_TOOLKIT_ASSET_POST_TYPE_NAME
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
