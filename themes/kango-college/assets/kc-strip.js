/* Next button for the quote strip: click only, no scroll listener. */
document.querySelectorAll( '.kc-voices__strip-wrap' ).forEach( function ( wrap ) {
	var strip = wrap.querySelector( '.kc-strip' ), btn = wrap.querySelector( '.kc-next' );
	if ( ! strip || ! btn ) { return; }
	btn.addEventListener( 'click', function () {
		var step = strip.querySelector( '.kc-q' ).offsetWidth + 32;
		var end = strip.scrollLeft + strip.clientWidth >= strip.scrollWidth - 4;
		strip.scrollTo( { left: end ? 0 : strip.scrollLeft + step, behavior: 'smooth' } );
	} );
} );
