<?php

add_theme_support( 'title-tag' );

// Menus
function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ),
      'social-menu-bottombar' => __( 'Footer Social Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

// Font-awesome menu
add_filter( 'storm_social_icons_use_latest', '__return_true' );
add_filter( 'storm_social_icons_size', create_function( '', 'return "normal";' ) );
add_filter( 'storm_social_icons_networks', 'storm_social_icons_networks');
function storm_social_icons_networks( $networks ) {
  $extra_icons = array (
    'www.google.com' => array(
      'name' => 'Google',
      'icon' => 'fa fa-google'
    ),
  );
  $extra_icons = array_merge( $networks, $extra_icons );
  return $extra_icons;
}

// Customizer
require get_template_directory() . '/inc/customizer.php';