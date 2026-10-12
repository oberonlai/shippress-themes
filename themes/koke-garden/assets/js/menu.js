/**
 * Koke Garden: the header has only the wordmark and a "Menu" button that opens the navigation full screen on pale moss
 * paper (the core Navigation block's overlay, which already traps focus, closes on Escape and returns focus to the
 * button). This script moves the synced studio details from the header into that overlay, as a small column beside
 * the menu, and keeps the button's aria-expanded and aria-controls in step with the overlay.
 */
( function () {
	function sync( header ) {
		var nav = header.querySelector( '.wp-block-navigation' );
		if ( ! nav ) {
			return;
		}
		var open = nav.querySelector( '.wp-block-navigation__responsive-container-open' );
		var panel = nav.querySelector( '.wp-block-navigation__responsive-container' );
		var content = nav.querySelector( '.wp-block-navigation__responsive-container-content' );
		var info = header.querySelector( '.kg-menu-info' );
		if ( info && content && ! content.contains( info ) ) {
			content.appendChild( info );
			info.classList.add( 'is-in-menu' );
		}
		if ( ! open || ! panel ) {
			return;
		}
		if ( panel.id ) {
			open.setAttribute( 'aria-controls', panel.id );
		}
		var update = function () {
			var isOpen = panel.classList.contains( 'is-menu-open' );
			open.setAttribute( 'aria-expanded', isOpen ? 'true' : 'false' );
			document.documentElement.classList.toggle( 'kg-menu-open', isOpen );
		};
		update();
		new MutationObserver( update ).observe( panel, { attributes: true, attributeFilter: [ 'class' ] } );
	}
	function init() {
		document.querySelectorAll( '.kg-header' ).forEach( sync );
	}
	if ( document.readyState === 'loading' ) {
		document.addEventListener( 'DOMContentLoaded', init );
	} else {
		init();
	}
} )();
