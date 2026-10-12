/**
 * Nameshi Leather: directory filter. Item and leather pills hide the cells that do not match; one choice per row,
 * "All" clears the row. Cells are the static stitched cells (classes nm-i-<item> nm-l-<leather>) or the shop's product
 * cells (data-item / data-leather on the line under the price). Without this script every piece shows.
 *
 * @license GPL-2.0-or-later
 */
( function () {
	function keys( cell ) {
		var out = [];
		cell.classList.forEach( function ( c ) {
			if ( /^nm-[il]-/.test( c ) ) { out.push( c.slice( 3 ) ); }
		} );
		var meta = cell.querySelector( '.nm-cellmeta' );
		if ( meta ) {
			if ( meta.dataset.item ) { out.push( 'i-' + meta.dataset.item ); }
			if ( meta.dataset.leather ) { out.push( 'l-' + meta.dataset.leather ); }
		}
		return out;
	}
	document.querySelectorAll( '.nm-dir' ).forEach( function ( dir ) {
		var rows = Array.prototype.slice.call( dir.querySelectorAll( 'p.nm-pills' ) );
		var cells = Array.prototype.slice.call( dir.querySelectorAll( '.nm-cell, li.wc-block-product' ) );
		var count = dir.querySelector( '.nm-dir__count' );
		var tail = count ? count.textContent.replace( /^\d+\s+pieces?/, '' ) : '';
		var chosen = rows.map( function () { return ''; } );
		var map = cells.map( keys );
		function apply() {
			var shown = 0;
			cells.forEach( function ( cell, n ) {
				var ok = chosen.every( function ( key ) { return ! key || -1 !== map[ n ].indexOf( key ); } );
				cell.hidden = ! ok;
				if ( ok ) { shown++; }
			} );
			if ( count ) { count.textContent = shown + ( 1 === shown ? ' piece' : ' pieces' ) + tail; }
		}
		rows.forEach( function ( row, i ) {
			var links = Array.prototype.slice.call( row.querySelectorAll( 'a[href^="#"]' ) );
			links.forEach( function ( link ) {
				var key = link.getAttribute( 'href' ).slice( 1 );
				var all = 0 === key.indexOf( 'all-' );
				link.setAttribute( 'role', 'button' );
				link.setAttribute( 'aria-pressed', all ? 'true' : 'false' );
				link.classList.toggle( 'is-on', all );
				link.addEventListener( 'click', function ( e ) {
					e.preventDefault();
					chosen[ i ] = all ? '' : key;
					links.forEach( function ( l ) { var on = l === link; l.classList.toggle( 'is-on', on ); l.setAttribute( 'aria-pressed', on ? 'true' : 'false' ); } );
					apply();
				} );
			} );
		} );
		dir.classList.add( 'is-filterable' );
	} );
}() );
