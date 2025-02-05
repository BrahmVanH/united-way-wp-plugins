<?php

if (!defined('ABSPATH')) {
  exit;
}

require_once plugin_dir_path(dirname(dirname(__FILE__))) . 'constants.php';

function register_campaign_toolkit_asset_post_type()
{
  register_post_type(
    CAMPAIGN_TOOLKIT_ASSET_POST_TYPE_NAME,
    [
      'labels' => [
        'name' => 'Campaign Toolkit Assets',
        'singular_name' => 'Campaign Toolkit Asset'
      ],
      'public' => true,
      'show_in_graphql' => true,
      'graphql_single_name' => 'campaignToolkitAsset',
      'graphql_plural_name' => 'campaignToolkitAssets',
      'show_ui' => true,
      'show_in_menu' => true,
      'supports' => ['title', 'custom-fields'],
      'menu_position' => 17,
    ]
  );
}

add_action('init', 'register_campaign_toolkit_asset_post_type');
