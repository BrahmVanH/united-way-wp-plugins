<?php
require_once plugin_dir_path(dirname(dirname(__FILE__))) . 'constants.php';

if (!defined('ABSPATH')) {
  exit;
}

if (function_exists('acf_add_local_field_group')):
  acf_add_local_field_group([
    'key' => 'group_uw_contact_info',
    'title' => 'UW Contact Information Fields',
    'fields' => [
      [
        'key' => 'field_google_maps_url',
        'label' => 'Google Maps URL',
        'name' => 'google_maps_url',
        'type' => 'text',
        'required' => 1
      ],
      [
        'key' => 'field_phone_number',
        'label' => 'Phone Number',
        'name' => 'phone_number',
        'type' => 'text',
        'required' => 1,
        'maxlength' => 14
      ],
      [
        'key' => 'field_street_address',
        'label' => 'Street Address',
        'name' => 'street_address',
        'type' => 'text',
        'required' => 1
      ],
      [
        'key' => 'field_city',
        'label' => 'City',
        'name' => 'city',
        'type' => 'text',
        'required' => 1
      ],
      [
        'key' => 'field_state',
        'label' => 'State',
        'name' => 'state',
        'type' => 'text',
        'required' => 1,
        'maxlength' => 2,
        'placeholder' => 'MI'
      ],
      [
        'key' => 'field_zip',
        'label' => 'ZIP Code',
        'name' => 'zip',
        'type' => 'text',
        'required' => 1,
        'maxlength' => 5
      ],
      [
        'key' => 'field_facebook_link',
        'label' => 'Facebook Link',
        'name' => 'facebook_link',
        'type' => 'text',
        'required' => 0
      ],
      [
        'key' => 'field_linkedin_link',
        'label' => 'LinkedIn Link',
        'name' => 'linkedin_link',
        'type' => 'text',
        'required' => 0
      ],
      [
        'key' => 'field_instagram_link',
        'label' => 'Instagram Link',
        'name' => 'instagram_link',
        'type' => 'text',
        'required' => 0
      ]
    ],
    'location' => [
      [
        [
          'param' => 'post_type',
          'operator' => '==',
          'value' => UW_CONTACT_INFO_POST_TYPE_NAME
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
