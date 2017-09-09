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

// Optional custom padding-y
mortar_theme_Kirki::add_field( 'mortar_theme', array(
  'type'        => 'toggle',
  'settings'    => 'optional_header_padding',
  'label'       => __( 'Enable Custom Padding', 'mortar-theme' ),
  'section'     => 'header',
  'default'     => false,
  'priority'    => 10,
) );

// Header padding-y
mortar_theme_Kirki::add_field( 'mortar_theme', array(
  'type'        => 'dimension',
  'settings'    => 'header_padding_y',
  'label'       => __( 'Header Top and Bottom Padding', 'mortar-theme' ),
  'section'     => 'header',
  'default'     => '1.5rem',
  'priority'    => 20,
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_header_padding',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
  ),
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
  'default'     => true,
  'priority'    => 30,
) );



// Optional custom header logo
mortar_theme_Kirki::add_field( 'mortar_theme', array(
  'type'        => 'toggle',
  'settings'    => 'optional_custom_header_logo',
  'label'       => __( 'Enable Custom Logo', 'mortar-theme' ),
  'section'     => 'header',
  'default'     => false,
  'priority'    => 40,
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_header_logo',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
  ),
) );

// Header logo height
mortar_theme_Kirki::add_field( 'mortar_theme', array(
  'type'        => 'number',
  'settings'    => 'custom_header_logo_height',
  'label'       => __( 'Header Logo Height', 'mortar-theme' ),
  'description' => __( 'Height is set in pixels. Leave blank to inherit the default height.', 'mortar-theme' ),
  'section'     => 'header',
  'default'     => '150',
  'priority'    => 50,
  'choices'     => array(
    'min'  => 0,
    'max'  => 1000,
    'step' => 1,
  ),
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_header_logo',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
    array(
      'setting'  		=> 'optional_custom_header_logo',
      'operator' 		=> '==',
      'value'    		=> true,
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



// Custom header logo
mortar_theme_Kirki::add_field( 'mortar_theme', array(
  'type'        => 'image',
  'settings'    => 'custom_header_logo',
  'label'       => __( 'Header Logo', 'mortar-theme' ),
  'description' => __( 'The default site logo must be set to override the header logo.', 'mortar-theme' ),
  'section'     => 'header',
  'priority'    => 60,
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_header_logo',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
    array(
      'setting'  		=> 'optional_custom_header_logo',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
  ),
  'transport'   => 'postMessage',
  'js_vars'     => array(
    array(
      'element'  => 'header img.custom-logo',
      'function' => 'html',
      'attr'     => 'src',
    ),
    array(
      'element'  => 'header img.custom-logo',
      'function' => 'html',
      'attr'     => 'srcset',
    ),
  ),
) );



// Custom logo/title spacing
mortar_theme_Kirki::add_field( 'mortar_theme', array(
  'type'        => 'dimension',
  'settings'    => 'header_logo_title_spacing',
  'label'       => __( 'Logo and Title Spacing', 'mortar-theme' ),
  'section'     => 'header',
  'default'     => '1rem',
  'priority'    => 70,
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_header_logo',
      'operator' 		=> '==',
      'value'    		=> true,
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


// Custom header site title
mortar_theme_Kirki::add_field( 'mortar_theme', array(
  'type'        => 'toggle',
  'settings'    => 'optional_custom_header_site_title',
  'label'       => __( 'Enable Custom Site Title', 'mortar-theme' ),
  'section'     => 'header',
  'default'     => false,
  'priority'    => 80,
) );

mortar_theme_Kirki::add_field( 'mortar_theme', array(
  'type'        => 'text',
  'settings'    => 'custom_header_site_title',
  'description' => 'Title Text',
  'section'     => 'header',
  'default'     => esc_attr__('Title', 'mortar-theme'),
  'priority'    => 90,
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_custom_header_site_title',
      'operator' 		=> '==',
      'value'    		=> true,
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

// Custom site title typography
mortar_theme_Kirki::add_field( 'mortar_theme', array(
  'type'        => 'typography',
  'settings'    => 'custom_header_site_title_typography',
  'label'       => __( 'Title Typography', 'mortar-theme' ),
  'section'     => 'header',
  'default'     => array(
    'font-family'    => 'inherit',
    'variant'        => 'normal 400',
    'font-size'      => 'inherit',
    'line-height'    => 'inherit',
    'letter-spacing' => 'normal',
    'text-transform' => 'initial',
    'color'          => 'inherit',
  ),
  'priority'    => 100,
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_custom_header_site_title',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
  ),
  'transport' => 'auto',
  'output' => array(
    'element' => array(
      'header .site-title',
    ),
  ),
) );


// Custom header site description
mortar_theme_Kirki::add_field( 'mortar_theme', array(
  'type'        => 'toggle',
  'settings'    => 'optional_custom_header_site_description',
  'label'       => __( 'Enable Custom Site Description', 'mortar-theme' ),
  'section'     => 'header',
  'default'     => false,
  'priority'    => 110,
) );

mortar_theme_Kirki::add_field( 'mortar_theme', array(
  'type'        => 'text',
  'settings'    => 'custom_header_site_description',
  'description' => 'Description Text',
  'section'     => 'header',
  'default'     => esc_attr__('Description', 'mortar-theme'),
  'priority'    => 120,
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_custom_header_site_description',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
  ),
  'transport'   => 'postMessage',
  'js_vars'     => array(
    array(
      'element'  => 'header .site-description .description-wrapper',
      'function' => 'html',
    ),
  ),
) );

// Custom site description typography
mortar_theme_Kirki::add_field( 'mortar_theme', array(
  'type'        => 'typography',
  'settings'    => 'custom_header_site_description_typography',
  'label'       => __( 'Description Typography', 'mortar-theme' ),
  'section'     => 'header',
  'default'     => array(
    'font-family'    => 'inherit',
    'variant'        => 'normal 400',
    'font-size'      => 'inherit',
    'line-height'    => 'inherit',
    'letter-spacing' => 'normal',
    'text-transform' => 'initial',
    'color'          => 'inherit',
  ),
  'priority'    => 130,
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_custom_header_site_description',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
  ),
  'transport' => 'auto',
  'output' => array(
    'element' => array(
      'header .site-description .description-wrapper',
    ),
  ),
) );