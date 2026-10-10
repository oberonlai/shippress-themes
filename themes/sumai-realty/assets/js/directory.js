/**
 * Sumai Realty: the listings directory, enhanced.
 *
 * Without this script the directory already works: the tabs are anchor links to the three panels (#buy, #rent,
 * #new-builds; style.css shows only the targeted one), and the area and size chips are links the server filters by
 * (inc/directory.php). With it:
 * - the tabs become an ARIA tablist: one panel shows at a time, Left/Right/Home/End move between tabs (automatic
 *   activation), each tab shows how many homes match, and the address keeps the open tab (#rent) for links and reloads;
 * - the chips filter the rows in place without a reload (the address keeps ?area=…&size=… so the result can be shared),
 *   mark the current chip with aria-current, and a polite live region says how many homes are shown.
 */
( function () {
	var PARAMS = [ 'area', 'size' ];

	function chipValue( link, param ) {
		var href = link.getAttribute( 'href' ) || '';
		var q = href.indexOf( '?' );
		if ( q < 0 ) {
			return null;
		}
		var query = href.slice( q + 1 ).split( '#' )[ 0 ];
		return new URLSearchParams( query ).get( param ) || 'all';
	}

	function setup( dir ) {
		var tabsBox = dir.querySelector( '.sr-tabs' );
		var panels = Array.prototype.slice.call( dir.querySelectorAll( '.sr-panel[id]' ) );
		if ( ! tabsBox || ! panels.length ) {
			return;
		}
		var tabs = Array.prototype.slice.call( tabsBox.querySelectorAll( 'a[href^="#"]' ) ).filter( function ( a ) {
			return panels.some( function ( p ) {
				return '#' + p.id === a.getAttribute( 'href' );
			} );
		} );
		var params = new URLSearchParams( window.location.search );
		var state = {};
		PARAMS.forEach( function ( k ) {
			state[ k ] = params.get( k ) || 'all';
		} );

		dir.classList.add( 'is-enhanced' );

		// Live region for the result count.
		var live = document.createElement( 'p' );
		live.className = 'sr-live';
		live.setAttribute( 'role', 'status' );
		live.setAttribute( 'aria-live', 'polite' );
		tabsBox.parentNode.insertBefore( live, tabsBox.nextSibling );

		// Tabs.
		tabsBox.setAttribute( 'role', 'tablist' );
		tabsBox.setAttribute( 'aria-label', 'Listings' );
		tabs.forEach( function ( tab, i ) {
			var panel = panels.filter( function ( p ) {
				return '#' + p.id === tab.getAttribute( 'href' );
			} )[ 0 ];
			tab.id = tab.id || 'sr-tab-' + panel.id;
			tab.setAttribute( 'role', 'tab' );
			tab.setAttribute( 'aria-controls', panel.id );
			panel.setAttribute( 'role', 'tabpanel' );
			panel.setAttribute( 'aria-labelledby', tab.id );
			panel.setAttribute( 'tabindex', '-1' );
			var count = document.createElement( 'span' );
			count.className = 'sr-tab-count';
			count.setAttribute( 'aria-hidden', 'true' );
			tab.appendChild( count );
			tab.addEventListener( 'click', function ( e ) {
				e.preventDefault();
				select( i, true );
			} );
			tab.addEventListener( 'keydown', function ( e ) {
				var next = null;
				if ( 'ArrowRight' === e.key || 'ArrowDown' === e.key ) {
					next = ( i + 1 ) % tabs.length;
				} else if ( 'ArrowLeft' === e.key || 'ArrowUp' === e.key ) {
					next = ( i - 1 + tabs.length ) % tabs.length;
				} else if ( 'Home' === e.key ) {
					next = 0;
				} else if ( 'End' === e.key ) {
					next = tabs.length - 1;
				} else if ( ' ' === e.key ) {
					next = i;
				}
				if ( null !== next ) {
					e.preventDefault();
					select( next, true );
					tabs[ next ].focus();
				}
			} );
		} );

		var current = 0;
		function panelOf( i ) {
			return document.getElementById( tabs[ i ].getAttribute( 'aria-controls' ) );
		}
		function select( i, fromUser ) {
			current = i;
			tabs.forEach( function ( tab, j ) {
				var on = j === i;
				tab.setAttribute( 'aria-selected', on ? 'true' : 'false' );
				tab.setAttribute( 'tabindex', on ? '0' : '-1' );
				panelOf( j ).hidden = ! on;
			} );
			if ( fromUser ) {
				writeUrl();
			}
			announce();
		}

		// Chips.
		var chipRows = Array.prototype.slice.call( dir.querySelectorAll( '.sr-chips' ) );
		chipRows.forEach( function ( row ) {
			var param = PARAMS.filter( function ( k ) {
				return row.classList.contains( 'sr-chips--' + k );
			} )[ 0 ];
			if ( ! param ) {
				return;
			}
			row.setAttribute( 'role', 'group' );
			var label = row.previousElementSibling;
			if ( label && label.classList.contains( 'sr-chips__label' ) ) {
				label.id = label.id || 'sr-chips-label-' + param;
				row.setAttribute( 'aria-labelledby', label.id );
			}
			row.querySelectorAll( 'a' ).forEach( function ( link ) {
				var value = chipValue( link, param );
				if ( null === value ) {
					return;
				}
				link.addEventListener( 'click', function ( e ) {
					e.preventDefault();
					state[ param ] = value;
					filter();
					writeUrl();
				} );
			} );
		} );

		function matches( row ) {
			return PARAMS.every( function ( k ) {
				return 'all' === state[ k ] || row.classList.contains( 'sr-' + k + '-' + state[ k ] );
			} );
		}
		function filter() {
			dir.querySelectorAll( '.sr-listing' ).forEach( function ( row ) {
				row.hidden = ! matches( row );
			} );
			chipRows.forEach( function ( row ) {
				var param = PARAMS.filter( function ( k ) {
					return row.classList.contains( 'sr-chips--' + k );
				} )[ 0 ];
				row.querySelectorAll( 'a' ).forEach( function ( link ) {
					if ( chipValue( link, param ) === state[ param ] ) {
						link.setAttribute( 'aria-current', 'true' );
					} else {
						link.removeAttribute( 'aria-current' );
					}
				} );
			} );
			tabs.forEach( function ( tab, j ) {
				tab.querySelector( '.sr-tab-count' ).textContent = shown( panelOf( j ) );
			} );
			announce();
		}
		function shown( panel ) {
			return panel.querySelectorAll( '.sr-listing:not([hidden])' ).length;
		}
		function announce() {
			var n = shown( panelOf( current ) );
			var name = tabs[ current ].firstChild ? tabs[ current ].firstChild.textContent.trim().toLowerCase() : '';
			live.textContent = ( 1 === n ? '1 home' : n + ' homes' ) + ' shown: ' + name + '.';
		}
		function writeUrl() {
			var q = new URLSearchParams( window.location.search );
			PARAMS.forEach( function ( k ) {
				if ( 'all' === state[ k ] ) {
					q.delete( k );
				} else {
					q.set( k, state[ k ] );
				}
			} );
			var s = q.toString();
			window.history.replaceState( null, '', window.location.pathname + ( s ? '?' + s : '' ) + tabs[ current ].getAttribute( 'href' ) );
		}
		function fromHash() {
			var hash = window.location.hash;
			for ( var i = 0; i < tabs.length; i++ ) {
				if ( tabs[ i ].getAttribute( 'href' ) === hash ) {
					return i;
				}
			}
			return -1;
		}

		filter();
		var start = fromHash();
		select( start < 0 ? 0 : start, false );
		window.addEventListener( 'hashchange', function () {
			var i = fromHash();
			if ( i >= 0 ) {
				select( i, false );
				dir.scrollIntoView( { block: 'start' } );
			}
		} );
	}

	function init() {
		document.querySelectorAll( '.sr-directory' ).forEach( setup );
	}
	if ( 'loading' === document.readyState ) {
		document.addEventListener( 'DOMContentLoaded', init );
	} else {
		init();
	}
} )();
