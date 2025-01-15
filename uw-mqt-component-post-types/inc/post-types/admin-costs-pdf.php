<?php

if (!defined('ABSPATH')) {
  exit;
}

require_once plugin_dir_path(dirname(dirname(__FILE__))) . 'constants.php';

function register_admin_costs_pdf_post_type()
{
  register_post_type(
    ADMIN_COSTS_PDF_POST_TYPE_NAME,
    [
      'labels' => [
        'name' => 'Admin Costs PDFs',
        'singular_name' => 'Admin Costs PDF'
      ],
      'public' => true,
      'show_in_graphql' => true,
      'graphql_single_name' => 'adminCostPdf',
      'graphql_plural_name' => 'adminCostPdfs',
      'show_ui' => true,
      'show_in_menu' => true,
      'supports' => ['title', 'custom-fields']
    ]
  );
}

add_action('init', 'register_admin_costs_pdf_post_type');
