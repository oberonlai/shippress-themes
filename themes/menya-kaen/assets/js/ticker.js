/**
 * Menya Kaen: the footer ticker (F5 marquee).
 *
 * Each `.mk-ticker` holds one paragraph (`.mk-ticker__track`) that you edit in the Site Editor. This script puts it on
 * a belt with enough copies to fill the screen twice (the copies are aria-hidden, so screen readers read the text
 * once), and style.css slides the belt by half its width, which loops without a jump. It moves only when the visitor
 * has not asked for reduced motion; it stops while pointed at or focused, and a "Pause ticker" button (aria-pressed)
 * stops it for the rest of the visit. Without this script the text simply stands still.
 */
( function () {
	var KEY = 'mk-ticker-paused';

	function belt( ticker ) {
		var track = ticker.querySelector( '.mk-ticker__track' );
		if ( ! track || ticker.querySelector( '.mk-ticker__belt' ) ) {
			return;
		}
		var row = document.createElement( 'div' );
		row.className = 'mk-ticker__belt';
		track.parentNode.insertBefore( row, track );
		row.appendChild( track );
		var copies = Math.max( 1, Math.ceil( ( window.innerWidth * 1.25 ) / Math.max( 1, track.offsetWidth ) ) );
		for ( var i = 1; i < copies * 2; i++ ) {
			var copy = track.cloneNode( true );
			copy.setAttribute( 'aria-hidden', 'true' );
			copy.classList.add( 'is-copy' );
			row.appendChild( copy );
		}
		ticker.style.setProperty( '--mk-ticker-time', Math.round( copies * track.offsetWidth / 60 ) + 's' );
		ticker.classList.add( 'is-moving' );
	}

	function init() {
		var tickers = document.querySelectorAll( '.mk-ticker' );
		if ( ! tickers.length ) {
			return;
		}
		tickers.forEach( belt );

		var root = document.documentElement;
		var paused = false;
		try {
			paused = window.sessionStorage.getItem( KEY ) === '1';
		} catch ( e ) {}
		var button = document.createElement( 'button' );
		button.type = 'button';
		button.className = 'mk-ticker-pause';
		button.textContent = 'Pause ticker';
		var set = function ( on ) {
			root.classList.toggle( KEY, on );
			button.setAttribute( 'aria-pressed', on ? 'true' : 'false' );
			try {
				window.sessionStorage.setItem( KEY, on ? '1' : '0' );
			} catch ( e ) {}
		};
		button.addEventListener( 'click', function () {
			set( ! root.classList.contains( KEY ) );
		} );
		set( paused );
		tickers[ tickers.length - 1 ].insertAdjacentElement( 'afterend', button );
	}

	if ( document.readyState === 'loading' ) {
		document.addEventListener( 'DOMContentLoaded', init );
	} else {
		init();
	}
} )();
