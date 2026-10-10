/**
 * Wagu Mono: the home page's chapters (L13). The drawing plates lie on top of each other beside the chapters (on
 * phones: above them, stuck to the top of the screen), and the plate that belongs to the chapter being read shows.
 * Plates and chapters are matched by their order. Without this script, or with only one plate, the first plate
 * simply stays beside the chapters (style.css).
 */
( function () {
	var groups = document.querySelectorAll( '.wm-chapters' );
	if ( ! groups.length || ! ( 'IntersectionObserver' in window ) ) {
		return;
	}
	Array.prototype.forEach.call( groups, function ( group ) {
		var wrap = group.querySelector( '.wm-plates' );
		var plates = wrap ? wrap.querySelectorAll( ':scope > .wm-plate' ) : [];
		var chapters = group.querySelectorAll( '.wm-chapter' );
		if ( plates.length < 2 || ! chapters.length ) {
			return;
		}
		var current = -1;
		function show( index ) {
			index = Math.min( index, plates.length - 1 );
			if ( index === current ) {
				return;
			}
			current = index;
			Array.prototype.forEach.call( plates, function ( plate, i ) {
				plate.classList.toggle( 'is-active', i === index );
				plate.setAttribute( 'aria-hidden', i === index ? 'false' : 'true' );
			} );
		}
		wrap.classList.add( 'is-live' );
		show( 0 );
		// A chapter counts as "being read" while it crosses a thin band a little above the middle of the screen
		// (on phones, below the plate that covers the top half).
		var observer = new IntersectionObserver(
			function ( entries ) {
				entries.forEach( function ( entry ) {
					if ( entry.isIntersecting ) {
						show( Array.prototype.indexOf.call( chapters, entry.target ) );
					}
				} );
			},
			{ rootMargin: window.matchMedia( '(max-width: 899px)' ).matches ? '-55% 0px -40% 0px' : '-40% 0px -55% 0px' }
		);
		Array.prototype.forEach.call( chapters, function ( chapter ) {
			observer.observe( chapter );
		} );
	} );
}() );
