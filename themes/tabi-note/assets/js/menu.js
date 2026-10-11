/**
 * Tabi Note: keeps the phone menu button's aria-expanded and aria-controls in step with the core Navigation overlay
 * (which already traps focus, closes on Escape and returns focus to the button), so screen readers hear whether the menu is open.
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
		document.querySelectorAll( '.tn-header .wp-block-navigation' ).forEach( sync );
	}
	if ( document.readyState === 'loading' ) {
		document.addEventListener( 'DOMContentLoaded', init );
	} else {
		init();
	}
} )();
