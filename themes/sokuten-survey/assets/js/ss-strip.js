/* Sokuten Survey: accordion strip. Opens one panel at a time and hands over every 3.5 s; static when motion is off. */
( function () {
	var strip = document.querySelector( '.ss-strip' );
	if ( ! strip ) {
		return;
	}
	var panels = [].slice.call( strip.querySelectorAll( '.ss-panel' ) );
	var wide = window.matchMedia( '(min-width: 768px)' );
	var calm = window.matchMedia( '(prefers-reduced-motion: reduce)' );
	if ( document.documentElement.classList.contains( 'sp-no-motion' ) || calm.matches || panels.length < 2 ) {
		return;
	}
	var cur = Math.max( 0, panels.findIndex( function ( p ) { return p.classList.contains( 'is-open' ); } ) );
	var paused = false;
	var seen = true;
	if ( 'IntersectionObserver' in window ) {
		new IntersectionObserver( function ( entries ) { seen = entries[ entries.length - 1 ].isIntersecting; } ).observe( strip );
	}
	function open( i ) {
		cur = i;
		panels.forEach( function ( p, k ) { p.classList.toggle( 'is-open', k === i ); } );
	}
	panels.forEach( function ( p, i ) {
		p.addEventListener( 'pointerenter', function ( e ) {
			if ( wide.matches && e.pointerType === 'mouse' ) { open( i ); }
		} );
		p.addEventListener( 'click', function ( e ) {
			var a = p.querySelector( '.ss-panel__caption a' );
			if ( ! wide.matches || ! a ) { return; }
			if ( ! p.classList.contains( 'is-open' ) ) { e.preventDefault(); open( i ); } else if ( ! e.target.closest( 'a' ) ) { window.location.href = a.href; }
		} );
	} );
	strip.addEventListener( 'pointerenter', function () { paused = true; } );
	strip.addEventListener( 'pointerleave', function () { paused = false; } );
	strip.addEventListener( 'focusin', function () { paused = true; } );
	strip.addEventListener( 'focusout', function () { paused = false; } );
	window.setInterval( function () {
		if ( paused || ! seen || document.hidden || ! wide.matches ) { return; }
		open( ( cur + 1 ) % panels.length );
	}, 3500 );
}() );
