<?php
if (!defined('ABSPATH')) {
  exit;
}

function register_custom_rest_routes()
{
  register_rest_route('uwmc/v1', '/page/(?P<slug>[a-zA-Z0-9-]+)', [
    'methods' => 'GET',
    'callback' => 'get_page_data',
    'permission_callback' => '__return_true'
  ]);
}
add_action('rest_api_init', 'register_custom_rest_routes');

function get_page_data($request)
{
  $slug = $request['slug'];

  // Get the page by slug
  $page = get_page_by_path($slug, OBJECT, 'page_builder');

  if (!$page) {
    return new WP_Error('no_page', 'Page not found', ['status' => 404]);
  }

  // Get ACF fields
  $data = [
    $slug => [
      'our-impact-component' => get_field('our_impact_component', $page->ID),
      'partners-ticker' => get_field('partners_ticker', $page->ID)
    ]
  ];

  return new WP_REST_Response($data, 200);
}
