/**
 * Yohaku Studio: work filter. The All / Graphic / Advertising / Web pills hide the project cards of other
 * disciplines. Without this script every project shows and the pills are plain links.
 *
 * @license GPL-2.0-or-later
 */
( function () {
	document.querySelectorAll( '.yh-work--filter' ).forEach( function ( work ) {
		var mosaic = work.querySelector( '.yh-mosaic' );
		var cards = Array.prototype.slice.call( work.querySelectorAll( '.yh-card' ) );
		var links = Array.prototype.slice.call( work.querySelectorAll( '.yh-pills a[href^="#"]' ) );
		function choose( key, focus ) {
			cards.forEach( function ( card ) {
				card.hidden = 'all' !== key && ! card.classList.contains( 'yh-f-' + key );
			} );
			if ( mosaic ) { mosaic.classList.toggle( 'is-filtered', 'all' !== key ); }
			links.forEach( function ( l ) {
				var on = l.getAttribute( 'href' ) === '#' + key;
				l.classList.toggle( 'is-on', on );
				l.setAttribute( 'aria-pressed', on ? 'true' : 'false' );
				if ( on && focus ) { l.focus(); }
			} );
		}
		links.forEach( function ( link ) {
			link.setAttribute( 'role', 'button' );
			link.addEventListener( 'click', function ( e ) {
				e.preventDefault();
				var key = link.getAttribute( 'href' ).slice( 1 );
				choose( key );
				if ( window.history && window.history.replaceState ) { window.history.replaceState( null, '', 'all' === key ? window.location.pathname : '#' + key ); }
			} );
			link.addEventListener( 'keydown', function ( e ) {
				if ( ' ' === e.key ) { e.preventDefault(); link.click(); }
			} );
		} );
		var start = window.location.hash.slice( 1 );
		choose( links.some( function ( l ) { return l.getAttribute( 'href' ) === '#' + start; } ) ? start : 'all' );
	} );
}() );
