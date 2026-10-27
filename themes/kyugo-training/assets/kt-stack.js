/* Kyugo Training: click/keyboard card stack ("A training day"). No scroll listener, no library. Without JS the cards stay a vertical list. */
( function () {
	'use strict';
	document.querySelectorAll( '.kt-stack' ).forEach( function ( stack ) {
		var cards = Array.prototype.slice.call( stack.querySelectorAll( '.kt-card' ) );
		if ( cards.length < 2 ) { return; }
		var i = 0;
		var pad = function ( n ) { return ( n < 10 ? '0' : '' ) + n; };
		var ctrl = document.createElement( 'div' );
		ctrl.className = 'kt-stack__ctrl';
		ctrl.innerHTML = '<button type="button" class="kt-stack__arrow kt-stack__arrow--prev" aria-label="Previous"></button>' +
			'<p class="kt-stack__count" aria-live="polite"><span class="kt-stack__now">01</span><span class="kt-stack__div"></span><span class="kt-stack__total">' + pad( cards.length ) + '</span></p>' +
			'<button type="button" class="kt-stack__arrow kt-stack__arrow--next" aria-label="Next"></button>';
		stack.insertBefore( ctrl, stack.firstChild );
		stack.classList.add( 'is-js' );
		var now = ctrl.querySelector( '.kt-stack__now' );
		function show( n ) {
			i = ( n + cards.length ) % cards.length;
			cards.forEach( function ( c, k ) {
				var on = k === i;
				c.classList.toggle( 'is-front', on );
				c.setAttribute( 'aria-hidden', on ? 'false' : 'true' );
			} );
			now.textContent = pad( i + 1 );
		}
		ctrl.querySelector( '.kt-stack__arrow--prev' ).addEventListener( 'click', function () { show( i - 1 ); } );
		ctrl.querySelector( '.kt-stack__arrow--next' ).addEventListener( 'click', function () { show( i + 1 ); } );
		stack.addEventListener( 'keydown', function ( e ) {
			if ( 'ArrowLeft' === e.key ) { show( i - 1 ); } else if ( 'ArrowRight' === e.key ) { show( i + 1 ); }
		} );
		show( 0 );
	} );
}() );
