/**
 * Amane Wagashi: the seasonal tray. The earlier / later links are plain anchors (#m-01, #m-12) that work without this
 * script; with it they move the tray by one card. Reduced motion: no smooth scrolling.
 */
( function () {
	var still = window.matchMedia && window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches;
	document.querySelectorAll( '.am-tray-nav__step' ).forEach( function ( link ) {
		link.addEventListener( 'click', function ( event ) {
			var section = link.closest( '.am-section' );
			var track = section && section.querySelector( '.am-tray__track' );
			var card = track && track.querySelector( '.am-tray__item' );
			if ( ! track || ! card ) {
				return;
			}
			event.preventDefault();
			var step = card.getBoundingClientRect().width + parseFloat( getComputedStyle( track ).columnGap || 0 );
			track.scrollBy( { left: step * Number( link.getAttribute( 'data-step' ) || 1 ), behavior: still ? 'auto' : 'smooth' } );
		} );
	} );
} )();
