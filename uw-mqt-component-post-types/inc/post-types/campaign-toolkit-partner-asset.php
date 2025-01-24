<?php

if (!defined('ABSPATH')) {
  exit;
}

require_once plugin_dir_path(dirname(dirname(__FILE__))) . 'constants.php';

function register_campaign_toolkit_partner_asset_post_type()
{
  register_post_type(
    CAMPAIGN_TOOLKIT_PARTNER_ASSET_POST_TYPE_NAME,
    [
      'labels' => [
        'name' => 'Campaign Toolkit Partner Assets',
        'singular_name' => 'Campaign Toolkit Partner Asset'
      ],
      'public' => true,
      'show_in_graphql' => true,
      'graphql_single_name' => 'campaignToolkitPartnerAsset',
      'graphql_plural_name' => 'campaignToolkitPartnerAssets',
      'show_ui' => true,
      'show_in_menu' => true,
      'supports' => ['title', 'custom-fields']
    ]
  );
}

add_action('init', 'register_campaign_toolkit_partner_asset_post_type');
