/* Tochi Academy: "This term — pick up" slider. Click and timer only (no scroll listener). Without JS the first slide shows. */
( function () {
	/* Decorative duplicates are hidden from AT here: aria-hidden or data-* on group markup would fail block validation. */
	document.querySelectorAll( '.ta-ticker__run + .ta-ticker__run, .ta-ticker2__run + .ta-ticker2__run, .ta-kv__disc, .ta-kv__glow' ).forEach( function ( e ) { e.setAttribute( 'aria-hidden', 'true' ); } );
	var root = document.querySelector( '.ta-kv__slider' );
	if ( ! root ) { return; }
	var slides = Array.prototype.slice.call( root.querySelectorAll( '.ta-slide' ) );
	var dots = Array.prototype.slice.call( root.querySelectorAll( '.ta-dot-btn' ) );
	var pause = root.querySelector( '.ta-pause' );
	var prev = root.querySelector( '.ta-arrow--prev' );
	var next = root.querySelector( '.ta-arrow--next' );
	var i = 0, timer = null, still = document.documentElement.classList.contains( 'sp-no-motion' ), paused = still;
	function show( n ) {
		i = ( n + slides.length ) % slides.length;
		slides.forEach( function ( s, k ) { s.classList.toggle( 'is-active', k === i ); s.setAttribute( 'aria-hidden', k === i ? 'false' : 'true' ); } );
		dots.forEach( function ( d, k ) { d.classList.toggle( 'is-active', k === i ); d.setAttribute( 'aria-current', k === i ? 'true' : 'false' ); } );
	}
	function run() { stop(); if ( ! paused ) { timer = window.setInterval( function () { show( i + 1 ); }, 6000 ); } }
	function stop() { if ( timer ) { window.clearInterval( timer ); timer = null; } }
	root.classList.add( 'is-ready' );
	show( 0 );
	if ( prev ) { prev.addEventListener( 'click', function () { show( i - 1 ); run(); } ); }
	if ( next ) { next.addEventListener( 'click', function () { show( i + 1 ); run(); } ); }
	dots.forEach( function ( d, k ) { d.addEventListener( 'click', function () { show( k ); run(); } ); } );
	if ( pause ) {
		pause.setAttribute( 'aria-pressed', paused ? 'true' : 'false' );
		pause.addEventListener( 'click', function () { paused = ! paused; pause.setAttribute( 'aria-pressed', paused ? 'true' : 'false' ); pause.classList.toggle( 'is-paused', paused ); run(); } );
	}
	run();
} )();
