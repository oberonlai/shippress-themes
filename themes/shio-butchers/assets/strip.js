/* Shio Butchers: hero strip controls. Chevrons and dots scroll the strip; an IntersectionObserver (root = the strip)
   marks the active dot. No scroll listeners. Without JS the dots are plain anchors. */
( function () {
	'use strict';
	var strip = document.querySelector( '.sb-stage__scroller' );
	if ( ! strip ) { return; }
	var photos = Array.prototype.slice.call( strip.querySelectorAll( '.sb-slide' ) );
	var dots = Array.prototype.slice.call( document.querySelectorAll( '.sb-pager a' ) );
	var pad = function () { return parseFloat( getComputedStyle( strip ).scrollPaddingLeft ) || 0; };
	var go = function ( i ) {
		i = Math.max( 0, Math.min( photos.length - 1, i ) );
		strip.scrollTo( { left: photos[ i ].offsetLeft - pad(), behavior: 'smooth' } );
	};
	var current = function () {
		var best = 0, dist = Infinity, x = strip.scrollLeft + pad();
		photos.forEach( function ( p, i ) { var d = Math.abs( p.offsetLeft - x ); if ( d < dist ) { dist = d; best = i; } } );
		return best;
	};
	dots.forEach( function ( a, i ) { a.addEventListener( 'click', function ( e ) { e.preventDefault(); go( i ); } ); } );
	var prev = document.querySelector( '.sb-chev--prev' ), next = document.querySelector( '.sb-chev--next' );
	if ( prev ) { prev.addEventListener( 'click', function () { go( current() - 1 ); } ); }
	if ( next ) { next.addEventListener( 'click', function () { go( current() + 1 ); } ); }
	if ( 'IntersectionObserver' in window ) {
		var io = new IntersectionObserver( function () {
			var i = current();
			dots.forEach( function ( d, j ) { d.classList.toggle( 'is-active', i === j ); if ( i === j ) { d.setAttribute( 'aria-current', 'true' ); } else { d.removeAttribute( 'aria-current' ); } } );
		}, { root: strip, threshold: [ 0.2, 0.6, 1 ] } );
		photos.forEach( function ( p ) { io.observe( p ); } );
	}
}() );
