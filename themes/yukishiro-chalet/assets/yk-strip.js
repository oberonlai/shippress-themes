/* Package strip: season tabs, chevrons and the dot pager. No scroll listener; progressive enhancement only. */
( function () {
	var strip = document.querySelector( '.yk-strip' );
	if ( ! strip ) { return; }
	var tabs = document.querySelectorAll( '[data-yk-filter]' );
	var dots = document.querySelectorAll( '.yk-dots span' );
	var cards = strip.querySelectorAll( '.yk-card' );
	function visible() { return Array.prototype.filter.call( cards, function ( c ) { return c.offsetParent !== null; } ); }
	function mark() {
		var v = visible(), step = v.length > 1 ? v[ 1 ].offsetLeft - v[ 0 ].offsetLeft : 1, i = Math.round( strip.scrollLeft / step );
		Array.prototype.forEach.call( dots, function ( d, n ) { d.className = n === i ? 'is-active' : ''; d.style.display = n < v.length ? '' : 'none'; } );
	}
	Array.prototype.forEach.call( tabs, function ( t ) {
		t.addEventListener( 'click', function () {
			var f = t.getAttribute( 'data-yk-filter' );
			Array.prototype.forEach.call( tabs, function ( o ) { var on = o === t; o.classList.toggle( 'is-active', on ); o.setAttribute( 'aria-pressed', on ); } );
			Array.prototype.forEach.call( cards, function ( c ) { c.hidden = f !== 'all' && ! c.classList.contains( 'yk-card--' + f ); } );
			strip.scrollLeft = 0;
			mark();
		} );
	} );
	Array.prototype.forEach.call( document.querySelectorAll( '[data-yk-dir]' ), function ( b ) {
		b.addEventListener( 'click', function () {
			var v = visible(), step = v.length > 1 ? v[ 1 ].offsetLeft - v[ 0 ].offsetLeft : strip.clientWidth;
			strip.scrollBy( { left: step * Number( b.getAttribute( 'data-yk-dir' ) ), behavior: 'smooth' } );
		} );
	} );
	strip.addEventListener( 'scrollend', mark );
	strip.addEventListener( 'touchend', function () { setTimeout( mark, 400 ); } );
	mark();
} )();
