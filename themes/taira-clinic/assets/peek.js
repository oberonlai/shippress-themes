( function () {
	document.addEventListener( 'click', function ( e ) {
		var b = e.target.closest ? e.target.closest( '[data-tc-peek]' ) : null;
		if ( ! b ) { return; }
		var row = b.closest( '.tc-peek' ).querySelector( '.tc-peek__row' );
		if ( ! row ) { return; }
		var dir = parseInt( b.getAttribute( 'data-tc-peek' ), 10 ) || 1;
		var card = row.querySelector( '.tc-card' );
		var step = card ? card.getBoundingClientRect().width + 24 : 380;
		var reduce = window.matchMedia && window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches;
		row.scrollBy( { left: dir * step, behavior: reduce ? 'auto' : 'smooth' } );
	} );
}() );
