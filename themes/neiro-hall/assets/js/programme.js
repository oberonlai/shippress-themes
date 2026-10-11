/**
 * Neiro Hall: genre and month filters for the ticket-stub programme.
 *
 * The filters are built from the stubs themselves (the genre line and the month on each stub), so editing a stub in
 * the block editor is all it takes. Without this script no filter bar is drawn and every concert shows.
 */
( function () {
	var t = window.neiroHallFilters || { genre: 'Genre', month: 'Month', allGenres: 'All genres', allMonths: 'All months', showing: 'Showing %1$s of %2$s concerts' };
	var text = function ( el ) { return el ? el.textContent.trim() : ''; };

	document.querySelectorAll( '.nh-programme' ).forEach( function ( prog, n ) {
		var stubs = Array.prototype.slice.call( prog.querySelectorAll( '.nh-stub' ) );
		if ( stubs.length < 2 ) {
			return;
		}
		var data = stubs.map( function ( s ) {
			return { el: s, genre: text( s.querySelector( '.nh-stub__genre' ) ), month: text( s.querySelector( '.nh-stub__month' ) ) };
		} );
		var state = { genre: '', month: '' };
		var bar = document.createElement( 'div' );
		bar.className = 'nh-filters';
		var live = document.createElement( 'p' );
		live.className = 'nh-filters__count';
		live.setAttribute( 'aria-live', 'polite' );

		function group( key, label, all ) {
			var values = [];
			data.forEach( function ( d ) {
				if ( d[ key ] && values.indexOf( d[ key ] ) < 0 ) {
					values.push( d[ key ] );
				}
			} );
			var g = document.createElement( 'div' );
			g.className = 'nh-filters__group';
			g.setAttribute( 'role', 'group' );
			g.setAttribute( 'aria-labelledby', 'nh-f-' + key + '-' + n );
			var l = document.createElement( 'span' );
			l.className = 'nh-filters__label';
			l.id = 'nh-f-' + key + '-' + n;
			l.textContent = label;
			g.appendChild( l );
			[ '' ].concat( values ).forEach( function ( v ) {
				var b = document.createElement( 'button' );
				b.type = 'button';
				b.className = 'nh-pill';
				b.textContent = v || all;
				b.setAttribute( 'aria-pressed', v === state[ key ] ? 'true' : 'false' );
				b.addEventListener( 'click', function () {
					state[ key ] = v;
					g.querySelectorAll( 'button' ).forEach( function ( o ) {
						o.setAttribute( 'aria-pressed', o === b ? 'true' : 'false' );
					} );
					apply();
				} );
				g.appendChild( b );
			} );
			return g;
		}

		function apply() {
			var shown = 0;
			data.forEach( function ( d ) {
				var ok = ( ! state.genre || d.genre === state.genre ) && ( ! state.month || d.month === state.month );
				d.el.hidden = ! ok;
				shown += ok ? 1 : 0;
			} );
			live.textContent = t.showing.replace( '%1$s', shown ).replace( '%2$s', data.length );
		}

		bar.appendChild( group( 'genre', t.genre, t.allGenres ) );
		bar.appendChild( group( 'month', t.month, t.allMonths ) );
		bar.appendChild( live );
		prog.insertBefore( bar, prog.firstChild );
		apply();
	} );
}() );
