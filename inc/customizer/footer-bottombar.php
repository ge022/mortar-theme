<?php

/*
 *  Add the Footer Menu section
 */
mortar_theme_Kirki::add_section( 'footer_bottombar', array(
  'title'          => __( 'Footer Menu' ),
  'description'    => __( 'Customize the footer menu here' ),
  'panel'          => 'nav_menus',
  'priority'       => 1010,
  'capability'     => 'edit_theme_options'
) );


// Optional custom spacing
mortar_theme_Kirki::add_field( 'mortar_theme', array(
  'type'        => 'toggle',
  'settings'    => 'optional_footer_bottombar_spacing',
  'label'       => __( 'Enable Custom Spacing', 'mortar-theme' ),
  'section'     => 'footer_bottombar',
  'default'     => false,
  'priority'    => 10,
) );

// Navbar padding-y
mortar_theme_Kirki::add_field( 'mortar_theme', array(
  'type'        => 'dimension',
  'settings'    => 'footer_bottombar_padding_y',
  'label'       => __( 'Menu Bar Top and Bottom Padding', 'mortar-theme' ),
  'section'     => 'footer_bottombar',
  'default'     => '0px',
  'priority'    => 15,
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_footer_bottombar_spacing',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
  ),
  'transport' => 'auto',
  'output' => array(
    array(
      'element'  => 'footer .bottom-bar',
      'property' => 'padding-top',
    ),
    array(
      'element'  => 'footer .bottom-bar',
      'property' => 'padding-bottom',
    ),
  ),
) );

// Optional custom typography
mortar_theme_Kirki::add_field( 'mortar_theme', array(
  'type'        => 'toggle',
  'settings'    => 'optional_footer_bottombar_typography',
  'label'       => __( 'Enable Custom Typography', 'mortar-theme' ),
  'section'     => 'footer_bottombar',
  'default'     => false,
  'priority'    => 30,
) );

// Custom typography
mortar_theme_Kirki::add_field( 'mortar_theme', array(
  'type'        => 'typography',
  'settings'    => 'footer_bottombar_typography',
  'label'       => __( 'Footer Menu Typography', 'mortar-theme' ),
  'section'     => 'footer_bottombar',
  'default'     => array(
    'font-size'      => 'inherit',
    'letter-spacing' => 'initial',
  ),
  'priority'    => 35,
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_footer_bottombar_typography',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
  ),
  'transport' => 'auto',
  'output' => array(
    'element' => array(
      'footer .bottom-bar'
    ),
  ),
) );

// Optional custom colors
mortar_theme_Kirki::add_field( 'mortar_theme', array(
  'type'        => 'toggle',
  'settings'    => 'optional_footer_bottombar_colors',
  'label'       => __( 'Enable Custom Colors', 'mortar-theme' ),
  'section'     => 'footer_bottombar',
  'default'     => false,
  'priority'    => 50,
) );


// Custom bottombar background color
mortar_theme_Kirki::add_field( 'mortar_theme', array(
  'type'        => 'color',
  'settings'    => 'footer_bottombar_background_color',
  'label'       => __( 'Navigation Bar Background Color', 'mortar-theme' ),
  'section'     => 'footer_bottombar',
  'default'     => '#868e96',
  'priority'    => 55,
  'choices'     => array(
    'alpha' => true,
  ),
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_footer_bottombar_colors',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
  ),
  'transport' => 'auto',
  'output' => array(
    'element' => array(
      'footer .bottom-bar',
    ),
    'property' => 'background-color',
  ),
) );

// Custom nav link color
mortar_theme_Kirki::add_field( 'mortar_theme', array(
  'type'        => 'color',
  'settings'    => 'footer_bottombar_link_color',
  'label'       => __( 'Link Color', 'mortar-theme' ),
  'section'     => 'footer_bottombar',
  'default'     => '#fff',
  'priority'    => 60,
  'choices'     => array(
    'alpha' => true,
  ),
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_footer_bottombar_colors',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
  ),
  'transport' => 'auto',
  'output' => array(
    'element' => array(
      'footer .bottom-bar a'
    ),
    'property' => 'color',
  ),
) );

// Custom nav link active/hover color
mortar_theme_Kirki::add_field( 'mortar_theme', array(
  'type'        => 'color',
  'settings'    => 'footer_bottombar_link_hover_color',
  'label'       => __( 'Link Hover Color', 'mortar-theme' ),
  'section'     => 'footer_bottombar',
  'default'     => '#fff',
  'priority'    => 70,
  'choices'     => array(
    'alpha' => true,
  ),
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_footer_bottombar_colors',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
  ),
  'transport' => 'auto',
  'output' => array(
    'element' => array(
      'footer .bottom-bar a:hover'
    ),
    'property' => 'color',
  ),
) );
