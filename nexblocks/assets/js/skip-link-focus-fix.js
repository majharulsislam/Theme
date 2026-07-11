/**
 * Skip-link focus fix for IE and older browsers.
 * Ensures the skip link target receives focus for keyboard users.
 */
( function () {
	var isWebkit = /WebKit/.test( navigator.userAgent );
	if ( ! isWebkit ) return;

	var links = document.querySelectorAll( '.skip-link' );

	links.forEach( function ( link ) {
		link.addEventListener( 'click', function () {
			var id     = link.getAttribute( 'href' ).slice( 1 );
			var target = document.getElementById( id );
			if ( target ) {
				target.setAttribute( 'tabindex', '-1' );
				target.focus();
			}
		} );
	} );
} )();
