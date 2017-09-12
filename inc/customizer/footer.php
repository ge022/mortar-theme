<?php

/*
 *	Add the Footer section
 */
mortar_theme_Kirki::add_section( 'footer', array(
  'title'          => __( 'Footer' ),
  'description'    => __( 'Customize the page footer here' ),
  'priority'       => 70,
  'capability'     => 'edit_theme_options'
) );

// Optional custom spacing
mortar_theme_Kirki::add_field( 'mortar_theme', array(
  'type'        => 'toggle',
  'settings'    => 'optional_footer_spacing',
  'label'       => __( 'Enable Custom Spacing', 'mortar-theme' ),
  'section'     => 'footer',
  'default'     => false,
  'priority'    => 10,
) );

// Footer padding-y
mortar_theme_Kirki::add_field( 'mortar_theme', array(
  'type'        => 'dimension',
  'settings'    => 'footer_padding_y',
  'label'       => __( 'Footer Top and Bottom Padding', 'mortar-theme' ),
  'description' => __( 'Use valid CSS units such as px, %, rem, or em.' ),
  'section'     => 'footer',
  'default'     => '1.5rem',
  'priority'    => 15,
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_footer_spacing',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
  ),
  'transport'   => 'auto',
  'output'      => array(
    array(
      'element'  => '.footer-top',
      'property' => 'padding-top',
    ),
    array(
      'element'  => '.footer-top',
      'property' => 'padding-bottom',
    ),
  ),
) );

// Custom home-link/contact-info margin
mortar_theme_Kirki::add_field( 'mortar_theme', array(
  'type'        => 'dimension',
  'settings'    => 'footer_home_contact_margin',
  'label'       => __( 'Home Link and Contact Info List Margin', 'mortar-theme' ),
  'description' => __( 'Use valid CSS units such as px, %, rem, or em.' ),
  'section'     => 'footer',
  'default'     => '2rem',
  'priority'    => 20,
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_footer_spacing',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
  ),
  'transport'   => 'auto',
  'output'      => array(
    array(
      'element'  => 'footer .contact-info',
      'property' => 'margin-top',
    ),
  ),
) );

// Custom contact item right margin
mortar_theme_Kirki::add_field( 'mortar_theme', array(
  'type'        => 'dimension',
  'settings'    => 'footer_home_contact_item_right_margin',
  'label'       => __( 'Contact Item Right Margin', 'mortar-theme' ),
  'description' => __( 'Use valid CSS units such as px, %, rem, or em.' ),
  'section'     => 'footer',
  'default'     => '0.5rem',
  'priority'    => 25,
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_footer_spacing',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
  ),
  'transport'   => 'auto',
  'output'      => array(
    array(
      'element'  => 'footer .contact-info .list-inline-item:not(:last-child)',
      'property' => 'margin-right',
    ),
  ),
) );

// Custom contact item bottom margin
mortar_theme_Kirki::add_field( 'mortar_theme', array(
  'type'        => 'dimension',
  'settings'    => 'footer_home_contact_item_bottom_margin',
  'label'       => __( 'Contact Item Bottom Margin', 'mortar-theme' ),
  'description' => __( 'Use valid CSS units such as px, %, rem, or em.' ),
  'section'     => 'footer',
  'default'     => '1rem',
  'priority'    => 30,
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_footer_spacing',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
  ),
  'transport'   => 'auto',
  'output'      => array(
    array(
      'element'  => 'footer .contact-info li',
      'property' => 'margin-bottom',
    ),
  ),
) );


// Optional custom colors
mortar_theme_Kirki::add_field( 'mortar_theme', array(
  'type'        => 'toggle',
  'settings'    => 'optional_footer_colors',
  'label'       => __( 'Enable Custom Colors', 'mortar-theme' ),
  'section'     => 'footer',
  'default'     => false,
  'priority'    => 40,
) );

// Custom footer background color
mortar_theme_Kirki::add_field( 'mortar_theme', array(
  'type'        => 'color',
  'settings'    => 'footer_background_color',
  'label'       => __( 'Footer Background Color', 'mortar-theme' ),
  'section'     => 'footer',
  'default'     => '#343a40',
  'priority'    => 45,
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_footer_colors',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
  ),
  'choices'     => array(
    'alpha' => true,
  ),
  'transport' => 'auto',
  'output' => array(
    'element' => array(
      'footer',
    ),
    'property' => 'background-color',
  ),
) );

// Custom footer link color
mortar_theme_Kirki::add_field( 'mortar_theme', array(
  'type'        => 'color',
  'settings'    => 'footer_link_color',
  'label'       => __( 'Link Color', 'mortar-theme' ),
  'section'     => 'footer',
  'default'     => '#fff',
  'priority'    => 50,
  'choices'     => array(
    'alpha' => true,
  ),
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_footer_colors',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
  ),
  'transport' => 'auto',
  'output' => array(
    'element' => array(
      '.footer-top a',
    ),
    'property' => 'color',
  ),
) );

// Custom footer link hover color
mortar_theme_Kirki::add_field( 'mortar_theme', array(
  'type'        => 'color',
  'settings'    => 'header_text_hover_color',
  'label'       => __( 'Link Hover Color', 'mortar-theme' ),
  'section'     => 'footer',
  'default'     => '#fff',
  'priority'    => 55,
  'choices'     => array(
    'alpha' => true,
  ),
  'active_callback'   => array(
    array(
      'setting'  		=> 'optional_footer_colors',
      'operator' 		=> '==',
      'value'    		=> true,
    ),
  ),
  'transport' => 'auto',
  'output' => array(
    'element' => array(
      '.footer-top a:hover',
    ),
    'property' => 'color',
  ),
) );