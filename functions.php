<?php
include_once( 'gutenberg-blocks.php' );

function register_theme_menus() {
  register_nav_menus(
    array(
      'main' => __('Main', 'kornel'),
      'footer' => __('Footer', 'kornel'),
    )
  );
}
add_action('init', 'register_theme_menus');

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(
		array(
			'page_title' => 'Opcje motywu',
		)
	);
}

add_theme_support( 'post-thumbnails' );

add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts() {
  echo '<style>
    .wp-block { max-width: 100% !important; }
  </style>';
}

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

// Move Yoast to bottom
function yoasttobottom() {
	return 'low';
}
add_filter( 'wpseo_metabox_prio', 'yoasttobottom');