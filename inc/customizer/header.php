<?php


/*
 *	Add the Header section
 */
mortar_theme_Kirki::add_section( 'header', array(
  'title'          => __( 'Header' ),
  'description'    => __( 'Customize the page header here' ),
  'priority'       => 60,
  'capability'     => 'edit_theme_options'
) );

// Header padding-y
mortar_theme_Kirki::add_field( 'mortar_theme', array(
  'type'        => 'dimension',
  'settings'    => 'header_padding_y',
  'label'       => __( 'Header Top and Bottom Padding', 'mortar-theme' ),
  'section'     => 'header',
  'default'     => '1.5rem',
  'priority'    => 10,
  'transport'   => 'auto',
  'output'      => array(
    array(
      'element'  => '.header-top',
      'property' => 'padding-top',
    ),
    array(
      'element'  => '.header-top',
      'property' => 'padding-bottom',
    ),
  ),
) );


// Optional header logo
mortar_theme_Kirki::add_field( 'mortar_theme', array(
  'type'        => 'toggle',
  'settings'    => 'optional_header_logo',
  'label'       => __( 'Display Logo in Header', 'mortar-theme' ),
  'section'     => 'header',
  'default'     => '1',
  'priority'    => 20,
) );


// Custom logo/title spacing
mortar_theme_Kirki::add_field( 'mortar_theme', array(
  'type'        => 'dimension',
  'settings'    => 'header_logo_title_spacing',
  'label'       => __( 'Logo and Title Spacing', 'mortar-theme' ),
  'section'     => 'header',
  'default'     => '1rem',
  'priority'    => 30,
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_header_logo',
      'operator' 		=> '==',
      'value'    		=> '1',
    ),
  ),
  'transport'   => 'auto',
  'output'      => array(
    array(
      'element'  => '.header-top .site-logo',
      'property' => 'margin-bottom',
    ),
  ),
) );


// Optional custom header logo
mortar_theme_Kirki::add_field( 'mortar_theme', array(
  'type'        => 'toggle',
  'settings'    => 'optional_custom_header_logo',
  'label'       => __( 'Enable Custom Logo', 'mortar-theme' ),
  'section'     => 'header',
  'default'     => '0',
  'priority'    => 40,
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_header_logo',
      'operator' 		=> '==',
      'value'    		=> '1',
    ),
  ),
) );


// Custom header logo
mortar_theme_Kirki::add_field( 'mortar_theme', array(
  'type'        => 'image',
  'settings'    => 'custom_header_logo',
  'label'       => __( 'Header Logo', 'mortar-theme' ),
  'description' => __( 'Override the default header logo', 'mortar-theme' ),
  'section'     => 'header',
  'default'     => wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ) , 'full' )[0],
  'priority'    => 50,
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
  'default'     => '150',
  'priority'    => 60,
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
  'output'    => array(
    array(
      'element'  => 'header img.custom-logo',
      'property' => 'height',
      'units'    => 'px',
    ),
  ),
) );


// Custom header site title
mortar_theme_Kirki::add_field( 'mortar_theme', array(
  'type'        => 'toggle',
  'settings'    => 'optional_custom_header_site_title',
  'label'       => __( 'Enable Custom Site Title', 'mortar-theme' ),
  'section'     => 'header',
  'default'     => '0',
  'priority'    => 70,
) );

mortar_theme_Kirki::add_field( 'mortar_theme', array(
  'type'        => 'text',
  'settings'    => 'custom_header_site_title',
  'section'     => 'header',
  'default'     => esc_attr__('Title', 'mortar-theme'),
  'priority'    => 80,
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_custom_header_site_title',
      'operator' 		=> '==',
      'value'    		=> '1',
    ),
  ),
  'transport'   => 'postMessage',
  'js_vars'     => array(
    array(
      'element'  => 'header .site-title',
      'function' => 'html',
    ),
  ),
) );


// Custom header site description
mortar_theme_Kirki::add_field( 'mortar_theme', array(
  'type'        => 'toggle',
  'settings'    => 'optional_custom_header_site_description',
  'label'       => __( 'Enable Custom Site Description', 'mortar-theme' ),
  'section'     => 'header',
  'default'     => '0',
  'priority'    => 90,
) );

mortar_theme_Kirki::add_field( 'mortar_theme', array(
  'type'        => 'text',
  'settings'    => 'custom_header_site_description',
  'section'     => 'header',
  'default'     => esc_attr__('Description', 'mortar-theme'),
  'priority'    => 100,
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_custom_header_site_description',
      'operator' 		=> '==',
      'value'    		=> '1',
    ),
  ),
  'transport'   => 'postMessage',
  'js_vars'     => array(
    array(
      'element'  => 'header .site-description',
      'function' => 'html',
    ),
  ),
) );


/*
 * TODO: Site title and description typography
 */