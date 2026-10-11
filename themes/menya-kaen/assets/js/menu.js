/**
 * Menya Kaen: on small screens the vertical navigation on the right edge collapses into a menu button that opens the core
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
		document.querySelectorAll( '.mk-top .wp-block-navigation' ).forEach( sync );
	}
	if ( document.readyState === 'loading' ) {
		document.addEventListener( 'DOMContentLoaded', init );
	} else {
		init();
	}
} )();
