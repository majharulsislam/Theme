/**
 * NexBlocks Main JS
 *
 * Handles: navigation toggle, sticky header, dropdown keyboard nav.
 */

( function () {
	'use strict';

	/* ---------------------------------------------------------------
	 * Mobile menu toggle
	 * --------------------------------------------------------------- */
	function initMobileMenu() {
		const toggles = document.querySelectorAll( '.menu-toggle' );

		toggles.forEach( function ( toggle ) {
			const nav = toggle.closest( '.main-navigation' );
			if ( ! nav ) return;

			toggle.addEventListener( 'click', function () {
				const expanded = toggle.getAttribute( 'aria-expanded' ) === 'true';
				toggle.setAttribute( 'aria-expanded', String( ! expanded ) );
				nav.classList.toggle( 'toggled' );
			} );
		} );
	}

	/* ---------------------------------------------------------------
	 * Dropdown keyboard navigation
	 * --------------------------------------------------------------- */
	function initDropdowns() {
		const dropdownToggles = document.querySelectorAll( '.dropdown-toggle' );

		dropdownToggles.forEach( function ( btn ) {
			btn.addEventListener( 'click', function ( e ) {
				e.preventDefault();
				const parent   = btn.closest( 'li' );
				const expanded = btn.getAttribute( 'aria-expanded' ) === 'true';

				// Close all siblings.
				const siblings = parent.parentElement.querySelectorAll( 'li' );
				siblings.forEach( function ( sib ) {
					if ( sib !== parent ) {
						sib.classList.remove( 'dropdown-open' );
						const sibBtn = sib.querySelector( '.dropdown-toggle' );
						const sibLink = sib.querySelector( 'a[aria-expanded]' );
						if ( sibBtn ) sibBtn.setAttribute( 'aria-expanded', 'false' );
						if ( sibLink ) sibLink.setAttribute( 'aria-expanded', 'false' );
					}
				} );

				parent.classList.toggle( 'dropdown-open', ! expanded );
				btn.setAttribute( 'aria-expanded', String( ! expanded ) );

				const parentLink = parent.querySelector( 'a[aria-haspopup]' );
				if ( parentLink ) {
					parentLink.setAttribute( 'aria-expanded', String( ! expanded ) );
				}
			} );
		} );

		// Close dropdowns on outside click.
		document.addEventListener( 'click', function ( e ) {
			if ( ! e.target.closest( '.main-navigation' ) ) {
				document.querySelectorAll( '.dropdown-open' ).forEach( function ( el ) {
					el.classList.remove( 'dropdown-open' );
					const btn  = el.querySelector( '.dropdown-toggle' );
					const link = el.querySelector( 'a[aria-expanded]' );
					if ( btn )  btn.setAttribute( 'aria-expanded', 'false' );
					if ( link ) link.setAttribute( 'aria-expanded', 'false' );
				} );
			}
		} );

		// Close on Escape.
		document.addEventListener( 'keydown', function ( e ) {
			if ( 'Escape' === e.key ) {
				document.querySelectorAll( '.dropdown-open' ).forEach( function ( el ) {
					el.classList.remove( 'dropdown-open' );
					const btn  = el.querySelector( '.dropdown-toggle' );
					const link = el.querySelector( 'a[aria-expanded]' );
					if ( btn )  { btn.setAttribute( 'aria-expanded', 'false' ); btn.focus(); }
					if ( link ) link.setAttribute( 'aria-expanded', 'false' );
				} );
			}
		} );
	}

	/* ---------------------------------------------------------------
	 * Sticky header
	 * --------------------------------------------------------------- */
	function initStickyHeader() {
		const header = document.getElementById( 'masthead' );
		if ( ! header ) return;

		if ( ! header.classList.contains( 'is-sticky' ) ) return;

		let lastScroll = 0;

		function onScroll() {
			const current = window.pageYOffset;

			if ( current > 80 ) {
				header.classList.add( 'is-scrolled' );
			} else {
				header.classList.remove( 'is-scrolled' );
			}

			// Hide header on scroll down, show on scroll up.
			if ( current > lastScroll && current > 400 ) {
				header.classList.add( 'is-hidden' );
			} else {
				header.classList.remove( 'is-hidden' );
			}

			lastScroll = current <= 0 ? 0 : current;
		}

		window.addEventListener( 'scroll', onScroll, { passive: true } );
	}

	/* ---------------------------------------------------------------
	 * Search overlay toggle
	 * --------------------------------------------------------------- */
	function initSearchOverlay() {
		const openBtns  = document.querySelectorAll( '.search-toggle' );
		const overlay   = document.getElementById( 'search-overlay' );
		const closeBtn  = document.getElementById( 'search-overlay-close' );

		if ( ! overlay ) return;

		function openOverlay() {
			overlay.setAttribute( 'aria-hidden', 'false' );
			overlay.classList.add( 'is-active' );
			const input = overlay.querySelector( 'input[type="search"]' );
			if ( input ) input.focus();
		}

		function closeOverlay() {
			overlay.setAttribute( 'aria-hidden', 'true' );
			overlay.classList.remove( 'is-active' );
		}

		openBtns.forEach( function ( btn ) {
			btn.addEventListener( 'click', openOverlay );
		} );

		if ( closeBtn ) closeBtn.addEventListener( 'click', closeOverlay );

		document.addEventListener( 'keydown', function ( e ) {
			if ( 'Escape' === e.key && overlay.classList.contains( 'is-active' ) ) {
				closeOverlay();
			}
		} );
	}

	/* ---------------------------------------------------------------
	 * Back-to-top button
	 * --------------------------------------------------------------- */
	function initBackToTop() {
		const btn = document.getElementById( 'back-to-top' );
		if ( ! btn ) return;

		window.addEventListener( 'scroll', function () {
			if ( window.pageYOffset > 600 ) {
				btn.classList.add( 'is-visible' );
			} else {
				btn.classList.remove( 'is-visible' );
			}
		}, { passive: true } );

		btn.addEventListener( 'click', function () {
			window.scrollTo( { top: 0, behavior: 'smooth' } );
		} );
	}

	/* ---------------------------------------------------------------
	 * Smooth scroll for anchor links
	 * --------------------------------------------------------------- */
	function initSmoothScroll() {
		document.querySelectorAll( 'a[href^="#"]' ).forEach( function ( anchor ) {
			anchor.addEventListener( 'click', function ( e ) {
				const id     = anchor.getAttribute( 'href' ).slice( 1 );
				const target = id ? document.getElementById( id ) : null;
				if ( target ) {
					e.preventDefault();
					target.scrollIntoView( { behavior: 'smooth' } );
					target.setAttribute( 'tabindex', '-1' );
					target.focus( { preventScroll: true } );
				}
			} );
		} );
	}

	/* ---------------------------------------------------------------
	 * Init
	 * --------------------------------------------------------------- */
	document.addEventListener( 'DOMContentLoaded', function () {
		initMobileMenu();
		initDropdowns();
		initStickyHeader();
		initSearchOverlay();
		initBackToTop();
		initSmoothScroll();
	} );

} )();
