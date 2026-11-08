/* Lesson strip: arrow buttons scroll one slide; progress line follows the slide in view (IntersectionObserver, no scroll listener). */
( function () {
	document.querySelectorAll( '.hf-lesson' ).forEach( function ( band ) {
		var strip = band.querySelector( '.hf-strip' );
		if ( ! strip ) { return; }
		var slides = strip.querySelectorAll( '.hf-slide' );
		var segs = band.querySelectorAll( '.hf-progress i' );
		function step() {
			var a = slides[0], b = slides[1];
			return b ? b.offsetLeft - a.offsetLeft : a.offsetWidth;
		}
		band.querySelectorAll( '.hf-arrow' ).forEach( function ( btn ) {
			btn.addEventListener( 'click', function () {
				strip.scrollBy( { left: ( btn.dataset.dir === 'prev' ? -1 : 1 ) * step(), behavior: 'smooth' } );
			} );
		} );
		if ( 'IntersectionObserver' in window ) {
			var io = new IntersectionObserver( function ( entries ) {
				entries.forEach( function ( e ) {
					if ( e.isIntersecting ) {
						var i = Array.prototype.indexOf.call( slides, e.target );
						segs.forEach( function ( s, k ) { s.classList.toggle( 'is-on', k === i ); } );
					}
				} );
			}, { root: strip, threshold: 0.6 } );
			slides.forEach( function ( s ) { io.observe( s ); } );
		}
	} );
}() );
