<?php

/**
 * Mortar Theme Customizer
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 */
function mortar_theme_customize_register( $wp_customize ) {
  // TODO: header_textcolor and footer_textcolor
  
  $transport = ( $wp_customize->selective_refresh ? 'postMessage' : 'refresh' );
  
  $wp_customize->get_setting( 'blogname' )->transport         = $transport;
  $wp_customize->get_setting( 'blogdescription' )->transport  = $transport;
  $wp_customize->get_setting( 'header_textcolor' )->transport = $transport;
  $wp_customize->get_control('custom_logo')->description = __( 'This logo will be displayed on the site\'s login form, and if not overridden in the Header section, in the page\'s header.' );
  
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

/**
 * Render the site title for the selective refresh partial.
 */
function mortar_customize_partial_blogname() {
  bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 */
function mortar_customize_partial_blogdescription() {
  bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function mortar_customize_preview_js() {
  wp_enqueue_script( 'mortar-customizer', get_template_directory_uri() . '/assets/js/customize-preview.js', array( 'customize-preview', 'jquery' ), '20170906', true );
}
add_action( 'customize_preview_init', 'mortar_customize_preview_js' );




/**
 * Add the Kirki configuration
 */
mortar_theme_Kirki::add_config( 'mortar_theme', array(
  'option_type' => 'theme_mod',
  'capability'  => 'edit_theme_options',
) );

/**
 * Add the Header section
 */
mortar_theme_Kirki::add_section( 'header', array(
  'title'          => __( 'Header' ),
  'description'    => __( 'Customize the page header here' ),
  'priority'       => 60,
  'capability'     => 'edit_theme_options'
) );


// Optional header logo
mortar_theme_Kirki::add_field( 'mortar_theme', array(
  'type'        => 'toggle',
  'settings'    => 'optional_header_logo',
  'label'       => __( 'Display Logo in Header', 'mortar' ),
  'section'     => 'header',
  'default'     => '1',
  'priority'    => 10,
) );

// Optional custom header logo
mortar_theme_Kirki::add_field( 'mortar_theme', array(
  'type'        => 'toggle',
  'settings'    => 'optional_custom_header_logo',
  'label'       => __( 'Enable Custom Logo', 'mortar' ),
  'section'     => 'header',
  'default'     => '0',
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_header_logo',
      'operator' 		=> '==',
      'value'    		=> '1',
    ),
  ),
  'priority'    => 20,
) );


// Custom header logo
mortar_theme_Kirki::add_field( 'mortar_theme', array(
  'type'        => 'image',
  'settings'    => 'custom_header_logo',
  'label'       => __( 'Header Logo', 'mortar-theme' ),
  'description' => __( 'Override the default header logo', 'mortar-theme' ),
  'section'     => 'header',
  'default'     => wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ) , 'full' )[0],
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_header_logo',
      'operator' 		=> '==',
      'value'    		=> '1',
    ),
    array(
      'setting'  		=> 'optional_custom_header_logo',
      'operator' 		=> '==',
      'value'    		=> '1',
    ),
  ),
  'priority'    => 30,
  'transport' => 'postMessage',
  'js_vars'     => array(
    array(
      'element'  => 'header img.custom-logo',
      'function' => 'html',
      'attr'     => 'src',
    ),
  ),
) );

// Header logo height
mortar_theme_Kirki::add_field( 'mortar_theme', array(
  'type'        => 'number',
  'settings'    => 'custom_header_logo_height',
  'label'       => __( 'Header Logo Height', 'mortar-theme' ),
  'description' => __( 'Height is set in pixels', 'mortar-theme' ),
  'section'     => 'header',
  'priority'    => 40,
  'default'     => '150',
  'choices'     => array(
    'min'  => 0,
    'max'  => 1000,
    'step' => 1,
  ),
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_header_logo',
      'operator' 		=> '==',
      'value'    		=> '1',
    ),
    array(
      'setting'  		=> 'optional_custom_header_logo',
      'operator' 		=> '==',
      'value'    		=> '1',
    ),
  ),
  'transport' => 'auto',
  'output' => array(
    array(
      'element'  => 'header img.custom-logo',
      'property' => 'height',
      'units'    => 'px',
    ),
  ),
) );

