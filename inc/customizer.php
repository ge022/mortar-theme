<?php

/*
 *	Mortar Theme Customizer
 */

/*
 *	Add postMessage support for site title and description for the Theme Customizer.
 */
function mortar_theme_customize_register( $wp_customize ) {
  // TODO: header_textcolor and footer_textcolor
  
  $transport = ( $wp_customize->selective_refresh ? 'postMessage' : 'refresh' );
  
  $wp_customize->get_setting( 'blogname' )->transport         = $transport;
  $wp_customize->get_setting( 'blogdescription' )->transport  = $transport;
  $wp_customize->get_setting( 'header_textcolor' )->transport = $transport;
  $wp_customize->get_control('custom_logo')->description = __( 'This logo will be displayed on the site\'s login form, and if not overridden in the Header section, in the page\'s header.' );
  
  
  /*
   *	Selective refresh for controls
   */
  if ( isset( $wp_customize->selective_refresh ) ) {
    
    $wp_customize->selective_refresh->add_partial( 'blogname', array(
      'selector'        => '.site-title',
      'render_callback' => 'mortar_customize_partial_blogname',
    ) );
    
    $wp_customize->selective_refresh->add_partial( 'blogdescription', array(
      'selector'        => '.site-description',
      'render_callback' => 'mortar_customize_partial_blogdescription',
    ) );
    
  }
}
add_action( 'customize_register', 'mortar_theme_customize_register' );

/*
 *	Render the site title for the selective refresh partial.
 */
function mortar_customize_partial_blogname() {
  bloginfo( 'name' );
}

/*
 *	Render the site tagline for the selective refresh partial.
 */
function mortar_customize_partial_blogdescription() {
  bloginfo( 'description' );
}

/*
 *	Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function mortar_customize_preview_js() {
  wp_enqueue_script( 'mortar-customizer', get_template_directory_uri() . '/assets/js/customize-preview.js', array( 'customize-preview', 'jquery' ), '20170906', true );
}
add_action( 'customize_preview_init', 'mortar_customize_preview_js' );


/*
 *	Set path for Kirki customization parts
 */
$customizer_path = '/inc/customizer';

/*
 *	Customizer configuration setting.
 *	Used globally for all fields.
 */
require_once( get_template_directory() . $customizer_path . '/config.php' );

/*
 *  Add the Header section
 */
require_once( get_template_directory() . $customizer_path . '/header.php' );

/*
 *  Add the Header Menu section
 */
require_once( get_template_directory() . $customizer_path . '/header-menu.php' );

/*
 *  Add the Footer Menu section
 */
require_once( get_template_directory() . $customizer_path . '/footer-menu.php' );

