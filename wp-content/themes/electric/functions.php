<?php
add_action( 'carbon_fields_register_fields', 'register_theme_options' );
add_action('wp_enqueue_scripts', 'site_scripts');


remove_action('wp_head',             'print_emoji_detection_script', 7 );
remove_action('admin_print_scripts', 'print_emoji_detection_script' );
remove_action('wp_print_styles',     'print_emoji_styles' );
remove_action('admin_print_styles',  'print_emoji_styles' );

remove_action('wp_head', 'wp_resource_hints', 2 ); //remove dns-prefetch
remove_action('wp_head', 'wp_generator'); //remove meta name="generator"
remove_action('wp_head', 'wlwmanifest_link'); //remove wlwmanifest
remove_action('wp_head', 'rsd_link'); // remove EditURI
remove_action('wp_head', 'rest_output_link_wp_head');// remove 'https://api.w.org/
remove_action('wp_head', 'rel_canonical'); //remove canonical
remove_action('wp_head', 'wp_shortlink_wp_head', 10); //remove shortlink
remove_action('wp_head', 'wp_oembed_add_discovery_links'); //remove alternate



function site_scripts() {
  $version = '0.0.0.4';
  wp_dequeue_style( 'wp-block-library' );
  wp_enqueue_style('main', get_template_directory_uri() . '/static/css/main.css', $version);
  wp_enqueue_style('custom', get_template_directory_uri() . '/static/css/custom.css', $version);
  wp_enqueue_script( 'svg', get_template_directory_uri() . '/static/js/separate-js/svg4everybody.min.js', [], $version, true);
  wp_enqueue_script( 'main', get_template_directory_uri() . '/static/js/main.js', ['svg'], $version, true);
}

function register_theme_options() {
  require_once __DIR__ . '/carbon-fields/theme-options.php';
  require_once __DIR__ . '/carbon-fields/post-meta.php';
}
