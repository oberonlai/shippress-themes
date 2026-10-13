/**
 * Eda Bonsai: the sticky tree photograph follows the chapters (L13).
 *
 * Each chapter (article.eb-chapter, id ch-age …) has a photograph in the sticky stage
 * (.eb-stage__photo--age …). When a chapter crosses the middle of the window its photograph
 * becomes visible (class is-on; style.css cross-fades it, or swaps it at once under
 * prefers-reduced-motion) and its ring in the chapter index is marked. Without this script
 * the first photograph simply stays and the index links still jump to each chapter.
 */
( function () {
	'use strict';

	function init( root ) {
		var stage = root.querySelector( '.eb-stage' );
		var chapters = root.querySelectorAll( '.eb-chapter[id]' );
		if ( ! stage || ! chapters.length || ! ( 'IntersectionObserver' in window ) ) {
			return;
		}
		var photos = stage.querySelectorAll( '.eb-stage__photo' );
		var links = stage.querySelectorAll( '.eb-rings-index a' );

		function show( key ) {
			var name = 'eb-stage__photo--' + ( key || 'intro' );
			photos.forEach( function ( photo ) {
				photo.classList.toggle( 'is-on', photo.classList.contains( name ) );
			} );
			links.forEach( function ( link ) {
				var on = key && link.getAttribute( 'href' ) === '#ch-' + key;
				link.classList.toggle( 'is-on', !! on );
				if ( on ) {
					link.setAttribute( 'aria-current', 'step' );
				} else {
					link.removeAttribute( 'aria-current' );
				}
			} );
		}

		var observer = new IntersectionObserver(
			function ( entries ) {
				entries.forEach( function ( entry ) {
					if ( entry.isIntersecting ) {
						show( entry.target.id.replace( /^ch-/, '' ) );
					}
				} );
			},
			{ rootMargin: '-45% 0px -45% 0px' }
		);
		chapters.forEach( function ( chapter ) {
			observer.observe( chapter );
		} );
		root.classList.add( 'is-live' );
	}

	document.querySelectorAll( '.eb-chapters' ).forEach( init );
} )();
