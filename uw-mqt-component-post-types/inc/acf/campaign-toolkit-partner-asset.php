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
    'key' => 'group_campaign_toolkit_partner_asset',
    'title' => 'Campaign Toolkit Partner Asset Fields',
    'fields' => [
      [
        'key' => 'field_asset_type',
        'label' => 'Asset Type',
        'name' => 'asset_type',
        'type' => 'select',
        'required' => 1,
        'choices' => [
          'workplace_packet' => 'Workplace Packet',
          'radio_psa_audio' => 'Radio PSA Audio',
          'radio_psa_transcript' => 'Radio PSA Transcript',
          'pledge_form' => 'Pledge Form'
        ]
      ],
      [
        'key' => 'field_pdf_file',
        'label' => 'PDF File',
        'name' => 'pdf_file',
        'type' => 'file',
        'required' => 0,
        'return_format' => 'array',
        'library' => 'all',
        'mime_types' => 'pdf',
        'conditional_logic' => [
          [
            [
              'field' => 'field_asset_type',
              'operator' => '==',
              'value' => 'workplace_packet'
            ]
          ],
          [
            [
              'field' => 'field_asset_type',
              'operator' => '==',
              'value' => 'pledge_form'
            ]
          ]
        ]
      ],
      [
        'key' => 'field_audio_file',
        'label' => 'Audio File',
        'name' => 'audio_file',
        'type' => 'file',
        'required' => 0,
        'return_format' => 'array',
        'library' => 'all',
        'mime_types' => 'mp3',
        'conditional_logic' => [
          [
            [
              'field' => 'field_asset_type',
              'operator' => '==',
              'value' => 'radio_psa_audio'
            ]
          ]
        ]
      ],
      [
        'key' => 'field_transcript_file',
        'label' => 'Transcript File',
        'name' => 'transcript_file',
        'type' => 'file',
        'required' => 0,
        'return_format' => 'array',
        'library' => 'all',
        'mime_types' => 'txt',
        'conditional_logic' => [
          [
            [
              'field' => 'field_asset_type',
              'operator' => '==',
              'value' => 'radio_psa_transcript'
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
          'value' => CAMPAIGN_TOOLKIT_PARTNER_ASSET_POST_TYPE_NAME
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
