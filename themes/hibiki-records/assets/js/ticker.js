/**
 * Hibiki Records: the footer's "now playing" ticker. Without JavaScript, and for visitors who ask for reduced
 * motion, the items stay a still, one-line list (scrollable sideways). Otherwise the line drifts slowly to the left
 * very slowly (about 14 px a second, never faster than one loop a minute), pauses while it is hovered or focused, and gets a Pause / Play button.
 *
 * @license GPL-2.0-or-later
 */
( function () {
	var reduce = window.matchMedia && window.matchMedia( '(prefers-reduced-motion: reduce)' );
	document.querySelectorAll( '.hb-ticker' ).forEach( function ( box ) {
		var win = box.querySelector( '.hb-ticker__window' );
		if ( ! win || ( reduce && reduce.matches ) ) {
			return;
		}
		var track = document.createElement( 'div' );
		track.className = 'hb-ticker__track';
		while ( win.firstChild ) {
			track.appendChild( win.firstChild );
		}
		win.appendChild( track );
		var copy = track.cloneNode( true );
		copy.setAttribute( 'aria-hidden', 'true' );
		copy.querySelectorAll( 'a, button' ).forEach( function ( el ) {
			el.setAttribute( 'tabindex', '-1' );
		} );
		win.appendChild( copy );
		var width = track.getBoundingClientRect().width || 1200;
		box.style.setProperty( '--hb-ticker-time', Math.max( 60, Math.round( width / 14 ) ) + 's' );

		var button = document.createElement( 'button' );
		button.type = 'button';
		button.className = 'hb-ticker__toggle';
		button.setAttribute( 'aria-pressed', 'false' );
		button.textContent = 'Pause';
		button.addEventListener( 'click', function () {
			var paused = box.classList.toggle( 'is-paused' );
			button.setAttribute( 'aria-pressed', paused ? 'true' : 'false' );
			button.textContent = paused ? 'Play' : 'Pause';
		} );
		box.appendChild( button );
		box.classList.add( 'is-moving' );

		if ( reduce && reduce.addEventListener ) {
			reduce.addEventListener( 'change', function () {
				box.classList.toggle( 'is-paused', reduce.matches );
			} );
		}
	} );
}() );
