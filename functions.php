<?php


if ( ! function_exists( 'mortar_setup' ) ) :
/*
 *	Sets up theme defaults and registers support for various WordPress features.
 */
function mortar_setup()  {
  
  // Add theme support for Automatic Feed Links
  add_theme_support( 'automatic-feed-links' );
  
  // Add theme support for Post Formats
  add_theme_support( 'post-formats', array( 'status', 'quote', 'gallery', 'image', 'video', 'audio', 'link', 'aside', 'chat' ) );
  
  // Add theme support for Featured Images
  add_theme_support( 'post-thumbnails' );
  
  
  // Add theme support for HTML5 Semantic Markup
  add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
  
  // Add theme support for document Title tag
  add_theme_support( 'title-tag' );
  
  // Add theme support for selective refresh for widgets.
  add_theme_support( 'customize-selective-refresh-widgets' );
  
  // Add support for core custom logo.
  add_theme_support( 'custom-logo', array(
    'flex-width'  => true,
    'flex-height' => true,
    'header-text' => array( 'site-title', 'site-description' ),
  ) );
  
  // TODO: Add support for custom headers
  
}
endif;
add_action( 'after_setup_theme', 'mortar_setup' );


/*
 *	Set the content width in pixels, based on the theme's design and stylesheet.
 *
 *	Priority 0 to make it available to lower priority callbacks.
 *
 *	@global int $content_width
 */
function mortar_content_width() {
  $GLOBALS['content_width'] = apply_filters( 'mortar_content_width', 1140 );
}
add_action( 'after_setup_theme', 'mortar_content_width', 0 );

/*
 *	Enqueue scripts and styles.
 */
function mortar_enqueue_scripts() {
  // Add custom fonts, used in the main stylesheet.
  wp_enqueue_style( 'fontawesome', get_theme_file_uri('/assets/css/font-awesome.min.css'), array(), null );
  
  // Theme stylesheet.
  wp_enqueue_style( 'custom-style', get_stylesheet_uri() );
  
  // JQuery Easing
  wp_deregister_script('jquery-easing');
  wp_enqueue_script( 'jquery-easing', get_theme_file_uri( '/assets/js/jquery.easing.js' ), array( 'jquery' ), null, true );
  
  // Popper.js
  wp_enqueue_script( 'popper-js', get_theme_file_uri( '/assets/js/popper.min.js' ), array(), null, true );
  
  // Bootstrap
  wp_enqueue_script( 'bootstrap', get_theme_file_uri( '/assets/js/bootstrap.min.js' ), array( 'jquery', 'popper-js' ), null, true );
  
  // Custom JS
  wp_enqueue_script( 'custom-js', get_theme_file_uri( '/assets/js/index.min.js' ), array( 'jquery', 'popper-js' ), null, true );
  
}

add_action( 'wp_enqueue_scripts', 'mortar_enqueue_scripts' );



/*
 *	Check if the calling template requires a header or footer.
 */
function header_enabled()
{
  $header_enabled = apply_filters( 'header_enabled', true );
  return $header_enabled;
}

function footer_enabled()
{
  $footer_enabled = apply_filters( 'footer_enabled', true );
  return $footer_enabled;
}


if ( ! function_exists( 'mortar_edit_link' ) ) :
  /*
   *	Returns an accessibility-friendly link to edit a post or page.
   */
  function mortar_edit_link() {
    edit_post_link(
      sprintf(
      /*	translators: %s: Name of current post */
        __( 'Edit<span class="screen-reader-text"> "%s"</span>', 'mortar-theme' ),
        get_the_title()
      ),
      '<span class="edit-link">',
      '</span>'
    );
  }
endif;



/*
 *	Register menus
 */

// Register Custom Navigation Walker
require_once('class-wp-bootstrap-navwalker.php');

function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ),
      'social-menu-bottombar' => __( 'Footer Social Menu' )
    )
  );
}

add_action( 'init', 'register_my_menus' );



/*
 *	Use latest font-awesome icons
 */
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


/*
 *	Recommend the Kirki plugin
 */
//require get_template_directory() . '/inc/include-kirki.php';
include_once __DIR__ . '/inc/kirki-develop/kirki.php';

// Kirki fallback
require_once get_template_directory() . '/inc/class-mortar-theme-kirki.php';

/*
 *	Customizer additions
 */
require get_template_directory() . '/inc/customizer.php';

/*
 *	Load Jetpack compatibility file
 */
//require get_template_directory() . '/inc/jetpack.php';


/*
 *	Override custom_logo's url to the one set in the Theme Customizer
 */
function custom_logo_src ( $html ) {
  $html = preg_replace('/src="(.*?)"/','src="' . get_theme_mod( 'custom_header_logo' ) . '"', $html);
  return $html;
}