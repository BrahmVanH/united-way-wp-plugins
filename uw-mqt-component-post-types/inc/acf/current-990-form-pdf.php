<?php

if (!defined('ABSPATH')) {
  exit;
}

if (function_exists('acf_add_local_field_group')):
  acf_add_local_field_group([
    'key' => 'group_current_990_form_pdf',
    'title' => 'Current 990 Form PDF Fields',
    'fields' => [
      [
        'key' => 'field_current_990_form_pdf_file',
        'label' => 'PDF File',
        'name' => 'pdf_file',
        'type' => 'file',
        'required' => 1,
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
          'value' => CURRENT_990_FORM_PDF_POST_TYPE_NAME
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
