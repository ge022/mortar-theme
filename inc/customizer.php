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
  $wp_customize->get_control('custom_logo')->description = __( 'This logo will be displayed on the site\'s login form and in the page\'s header (if not overridden in the Header section).' );
  $wp_customize->get_section('colors')->description =   __( 'Customize the colors here' );
;
  
  
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
 *  Add to the Site Identity section
 */
// Address
mortar_theme_Kirki::add_field( 'mortar_theme', array(
  'type'     => 'text',
  'settings' => 'site_address',
  'label'    => __( 'Address', 'mortar-theme' ),
  'section'  => ' title_tagline',
  'default'  => esc_attr__( '1355 Market St, Suite 900. San Francisco, CA 94103', 'mortar-theme' ),
  'priority' => 70,
  'partial_refresh' => array(
    'site_address' => array(
      'selector'        => '.site-address',
      'render_callback' => function() {
        return get_theme_mod( 'site_address' );
      },
    ),
  ),
  'transport'   => 'postMessage',
  'js_vars'     => array(
    array(
      'element'  => '.site-address',
      'function' => 'html',
    ),
  ),
) );

// Email
mortar_theme_Kirki::add_field( 'mortar_theme', array(
  'type'     => 'text',
  'settings' => 'site_email',
  'label'    => __( 'Email', 'mortar-theme' ),
  'section'  => ' title_tagline',
  'default'  => esc_attr__( 'contact@example.com', 'mortar-theme' ),
  'priority' => 80,
  'partial_refresh' => array(
    'site_email' => array(
      'selector'        => '.site-email',
      'render_callback' => function() {
        return get_theme_mod( 'site_email' );
      },
    ),
  ),
  'transport'   => 'postMessage',
  'js_vars'     => array(
    array(
      'element'  => '.site-email',
      'function' => 'html',
    ),
  ),
) );

/*
 *  Add the Header section
 */
require_once( get_template_directory() . $customizer_path . '/header.php' );

/*
 *  Add the Footer section
 */
require_once( get_template_directory() . $customizer_path . '/footer.php' );

/*
 *  Add the Header Menu section
 */
require_once( get_template_directory() . $customizer_path . '/header-navbar.php' );

/*
 *  Add the Footer Menu section
 */
require_once( get_template_directory() . $customizer_path . '/footer-bottombar.php' );

/*
 *  Add to the Colors section
 */
require_once( get_template_directory() . $customizer_path . '/colors.php' );

/*
 *  Add to the Typography section
 */
require_once( get_template_directory() . $customizer_path . '/typography.php' );
