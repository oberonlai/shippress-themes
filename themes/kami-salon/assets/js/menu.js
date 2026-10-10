/**
 * Kami Salon: on small screens the floating pill's navigation collapses into a menu button that opens the core
 * Navigation block's full-screen overlay (which already traps focus, closes on Escape and returns focus to the button).
 * This keeps the button's aria-expanded and aria-controls in step with the overlay, so screen readers hear whether the
 * menu is open.
 */
( function () {
	function sync( nav ) {
		var open = nav.querySelector( '.wp-block-navigation__responsive-container-open' );
		var panel = nav.querySelector( '.wp-block-navigation__responsive-container' );
		if ( ! open || ! panel ) {
			return;
		}
		if ( panel.id ) {
			open.setAttribute( 'aria-controls', panel.id );
		}
		var update = function () {
			open.setAttribute( 'aria-expanded', panel.classList.contains( 'is-menu-open' ) ? 'true' : 'false' );
		};
		update();
		new MutationObserver( update ).observe( panel, { attributes: true, attributeFilter: [ 'class' ] } );
	}
	function init() {
		document.querySelectorAll( '.ks-header .wp-block-navigation' ).forEach( sync );
	}
	if ( document.readyState === 'loading' ) {
		document.addEventListener( 'DOMContentLoaded', init );
	} else {
		init();
	}
} )();
