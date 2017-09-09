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


// Optional custom padding
mortar_theme_Kirki::add_field( 'mortar_theme', array(
  'type'        => 'toggle',
  'settings'    => 'optional_footer_bottombar_padding',
  'label'       => __( 'Enable Custom Padding', 'mortar-theme' ),
  'section'     => 'footer_bottombar',
  'default'     => '0',
  'priority'    => 10,
) );

// Navbar padding-y
mortar_theme_Kirki::add_field( 'mortar_theme', array(
  'type'        => 'dimension',
  'settings'    => 'footer_bottombar_padding_y',
  'label'       => __( 'Menu Bar Top and Bottom Padding', 'mortar-theme' ),
  'section'     => 'footer_bottombar',
  'default'     => '0',
  'priority'    => 20,
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_footer_bottombar_padding',
      'operator' 		=> '==',
      'value'    		=> '1',
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
  'settings'    => 'optional_footer_menu_typography',
  'label'       => __( 'Enable Custom Typography', 'mortar-theme' ),
  'section'     => 'footer_bottombar',
  'default'     => '0',
  'priority'    => 30,
) );

// Custom typography
mortar_theme_Kirki::add_field( 'mortar_theme', array(
  'type'        => 'typography',
  'settings'    => 'footer_menu_typography',
  'label'       => __( 'Footer Menu Typography', 'mortar-theme' ),
  'section'     => 'footer_bottombar',
  'default'     => array(
    'font-size'      => 'inherit',
    'letter-spacing' => 'initial',
    'color'          => 'inherit',
  ),
  'priority'    => 40,
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_footer_menu_typography',
      'operator' 		=> '==',
      'value'    		=> '1',
    ),
  ),
  'transport' => 'auto',
  'output' => array(
    'element' => array(
//      'footer .bottom-bar ul',
      'footer .bottom-bar a'
    ),
  ),
) );