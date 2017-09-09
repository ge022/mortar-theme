<?php

/*
 *  Add the Header Menu section
 */

// Header menu section
mortar_theme_Kirki::add_section( 'header_navbar', array(
  'title'          => __( 'Header Menu' ),
  'description'    => __( 'Customize the header menu here' ),
  'panel'          => 'nav_menus',
  'priority'       => 1000,
  'capability'     => 'edit_theme_options'
) );

// Optional custom padding
mortar_theme_Kirki::add_field( 'mortar_theme', array(
  'type'        => 'toggle',
  'settings'    => 'optional_header_navbar_padding',
  'label'       => __( 'Enable Custom Padding', 'mortar-theme' ),
  'section'     => 'header_navbar',
  'default'     => '0',
  'priority'    => 10,
) );

// Navbar padding-y
mortar_theme_Kirki::add_field( 'mortar_theme', array(
  'type'        => 'dimension',
  'settings'    => 'header_navbar_padding_y',
  'label'       => __( 'Menu Bar Top and Bottom Padding', 'mortar-theme' ),
  'section'     => 'header_navbar',
  'default'     => '0.5rem',
  'priority'    => 20,
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_header_navbar_padding',
      'operator' 		=> '==',
      'value'    		=> '1',
    ),
  ),
  'transport' => 'auto',
  'output' => array(
    array(
      'element'  => 'header .navbar',
      'property' => 'padding-top',
    ),
    array(
      'element'  => 'header .navbar',
      'property' => 'padding-bottom',
    ),
  ),
) );


// Navbar padding-x
mortar_theme_Kirki::add_field( 'mortar_theme', array(
  'type'        => 'dimension',
  'settings'    => 'header_navbar_padding_x',
  'label'       => __( 'Menu Bar Right and Left Padding', 'mortar-theme' ),
  'section'     => 'header_navbar',
  'default'     => '1rem',
  'priority'    => 30,
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_header_navbar_padding',
      'operator' 		=> '==',
      'value'    		=> '1',
    ),
  ),
  'transport' => 'auto',
  'output' => array(
    array(
      'element'  => 'header .navbar',
      'property' => 'padding-right',
    ),
    array(
      'element'  => 'header .navbar',
      'property' => 'padding-left',
    ),
  ),
) );


// Nav dropdown padding-y
mortar_theme_Kirki::add_field( 'mortar_theme', array(
  'type'        => 'dimension',
  'settings'    => 'header_nav_dropdown_padding_y',
  'label'       => __( 'Menu Dropdown Top and Bottom Padding', 'mortar-theme' ),
  'section'     => 'header_navbar',
  'default'     => '0.5rem',
  'priority'    => 40,
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_header_navbar_padding',
      'operator' 		=> '==',
      'value'    		=> '1',
    ),
  ),
  'transport' => 'auto',
  'output' => array(
    array(
      'element'  => 'header .dropdown-menu',
      'property' => 'padding-top',
    ),
    array(
      'element'  => 'header .dropdown-menu',
      'property' => 'padding-bottom',
    ),
  ),
) );

// Nav dropdown items padding-x
mortar_theme_Kirki::add_field( 'mortar_theme', array(
  'type'        => 'dimension',
  'settings'    => 'header_nav_dropdown_item_padding_y',
  'label'       => __( 'Menu Dropdown Item Left and Right Padding', 'mortar-theme' ),
  'section'     => 'header_navbar',
  'default'     => '1.5rem',
  'priority'    => 50,
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_header_navbar_padding',
      'operator' 		=> '==',
      'value'    		=> '1',
    ),
  ),
  'transport' => 'auto',
  'output' => array(
    array(
      'element'  => 'header .dropdown-menu .dropdown-item',
      'property' => 'padding-right',
    ),
    array(
      'element'  => 'header .dropdown-menu .dropdown-item',
      'property' => 'padding-left',
    ),
  ),
) );


// Optional custom typography
mortar_theme_Kirki::add_field( 'mortar_theme', array(
  'type'        => 'toggle',
  'settings'    => 'optional_header_navbar_typography',
  'label'       => __( 'Enable Custom Typography', 'mortar-theme' ),
  'section'     => 'header_navbar',
  'default'     => '0',
  'priority'    => 60,
) );

// Custom typography
mortar_theme_Kirki::add_field( 'mortar_theme', array(
  'type'        => 'typography',
  'settings'    => 'header_navbar_typography',
  'label'       => __( 'Menu Bar Typography', 'mortar-theme' ),
  'section'     => 'header_navbar',
  'default'     => array(
    'font-family'    => 'inherit',
    'variant'        => 'normal 400',
    'font-size'      => 'inherit',
    'line-height'    => 'inherit',
    'letter-spacing' => 'normal',
    'text-transform' => 'initial',
    'color'          => 'inherit',
  ),
  'priority'    => 70,
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_header_navbar_typography',
      'operator' 		=> '==',
      'value'    		=> '1',
    ),
  ),
  'transport' => 'auto',
  'output' => array(
    'element' => array(
      'header .navbar',
      '.navbar-dark .navbar-nav .nav-link',
      '.navbar-dark .navbar-nav .show > .nav-link',
      '.navbar-dark .navbar-nav .active > .nav-link',
      '.navbar-dark .navbar-nav .nav-link.show',
      '.navbar-dark .navbar-nav .nav-link.active',
      '.dropdown-item'
    ),
  ),
) );

