/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 *
 * .css('opacity',1) for overriding 'postMessage' opacity transition
 */

( function( $ ) {

  // Site title and description.
  wp.customize( 'blogname', function( value ) {
    value.bind( function( to ) {
      $( '.site-title' ).text( to ).css('opacity',1);
    } );
  } );
  wp.customize( 'blogdescription', function( value ) {
    value.bind( function( to ) {
      $( '.site-description' ).text( to ).css('opacity',1);
    } );
  } );


	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( newval ) {
			if ( 'blank' === newval ) {
				$( '.site-title, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title, .site-description' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
				$( '.site-title a, .site-description' ).css( {
					'color': newval
				} );
			}
		} );
	} );
} )( jQuery );
