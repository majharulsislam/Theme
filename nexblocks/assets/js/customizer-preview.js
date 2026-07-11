/**
 * Customizer live preview bindings.
 */
( function ( $ ) {
	'use strict';

	var api = wp.customize;

	/* Color custom properties */
	var colorMap = {
		color_primary:   '--nexblocks-color-primary',
		color_secondary: '--nexblocks-color-secondary',
		color_accent:    '--nexblocks-color-accent',
		color_text:      '--nexblocks-color-text',
		color_heading:   '--nexblocks-color-heading',
		color_bg:        '--nexblocks-color-bg',
	};

	Object.keys( colorMap ).forEach( function ( setting ) {
		api( setting, function ( value ) {
			value.bind( function ( newval ) {
				document.documentElement.style.setProperty( colorMap[ setting ], newval );
			} );
		} );
	} );

	/* Font family */
	api( 'font_body', function ( value ) {
		value.bind( function ( newval ) {
			document.documentElement.style.setProperty( '--nexblocks-font-body', "'" + newval + "', system-ui, sans-serif" );
		} );
	} );

	api( 'font_heading', function ( value ) {
		value.bind( function ( newval ) {
			document.documentElement.style.setProperty( '--nexblocks-font-heading', "'" + newval + "', system-ui, sans-serif" );
		} );
	} );

	/* Font size */
	api( 'font_size_base', function ( value ) {
		value.bind( function ( newval ) {
			document.documentElement.style.setProperty( '--nexblocks-font-size', newval + 'px' );
		} );
	} );

	/* Container width */
	api( 'container_width', function ( value ) {
		value.bind( function ( newval ) {
			document.documentElement.style.setProperty( '--nexblocks-container-width', newval + 'px' );
		} );
	} );

	/* Sticky header */
	api( 'sticky_header', function ( value ) {
		value.bind( function ( newval ) {
			var header = document.getElementById( 'masthead' );
			if ( header ) {
				header.classList.toggle( 'is-sticky', newval );
			}
		} );
	} );

	/* Footer copyright */
	api( 'footer_copyright', function ( value ) {
		value.bind( function ( newval ) {
			var el = document.querySelector( '.footer-copyright' );
			if ( el ) el.innerHTML = newval;
		} );
	} );

} )( jQuery );
