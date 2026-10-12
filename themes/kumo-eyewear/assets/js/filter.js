/**
 * Kumo Eyewear: frame directory filter. Shape / material / fit pills hide the cells that do not match; one choice per
 * row, "All" clears the row. Without this script every frame shows and the pills do nothing.
 *
 * @license GPL-2.0-or-later
 */
( function () {
	document.querySelectorAll( '.ku-dir' ).forEach( function ( dir ) {
		var rows = Array.prototype.slice.call( dir.querySelectorAll( 'p.ku-pills' ) );
		var cells = Array.prototype.slice.call( dir.querySelectorAll( '.ku-frame' ) );
		var count = dir.querySelector( '.ku-dir__count' );
		var base = count ? count.textContent.replace( /^\d+\s+frames?/, '' ) : '';
		var chosen = rows.map( function () { return ''; } );
		function apply() {
			var shown = 0;
			cells.forEach( function ( cell ) {
				var ok = chosen.every( function ( key ) { return ! key || cell.classList.contains( 'ku-f-' + key ); } );
				cell.hidden = ! ok;
				if ( ok ) { shown++; }
			} );
			if ( count ) { count.textContent = shown + ( 1 === shown ? ' frame' : ' frames' ) + base; }
		}
		rows.forEach( function ( row, i ) {
			var links = Array.prototype.slice.call( row.querySelectorAll( 'a[href^="#"]' ) );
			links.forEach( function ( link ) {
				var key = link.getAttribute( 'href' ).slice( 1 );
				link.setAttribute( 'role', 'button' );
				link.setAttribute( 'aria-pressed', 0 === key.indexOf( 'all-' ) ? 'true' : 'false' );
				if ( 0 === key.indexOf( 'all-' ) ) { link.classList.add( 'is-on' ); }
				link.addEventListener( 'click', function ( e ) {
					e.preventDefault();
					chosen[ i ] = 0 === key.indexOf( 'all-' ) ? '' : key;
					links.forEach( function ( l ) { var on = l === link; l.classList.toggle( 'is-on', on ); l.setAttribute( 'aria-pressed', on ? 'true' : 'false' ); } );
					apply();
				} );
			} );
		} );
	} );
}() );
