/**
 * Nijimi Tenugui: the unfolding cloth on the home page (L13). One illustration stays in place while the chapters
 * scroll beside it; as each chapter reaches the middle of the screen this sets data-step="1|2|3" on `.nt-fold`, and
 * style.css shows the matching picture (folded, opened, hung). Without this script the folded cloth simply stays.
 */
( function () {
	var fold = document.querySelector( '.nt-fold' );
	if ( ! fold || ! ( 'IntersectionObserver' in window ) ) {
		return;
	}
	var observer = new IntersectionObserver(
		function ( entries ) {
			entries.forEach( function ( entry ) {
				var match = entry.isIntersecting && entry.target.className.match( /nt-fold__step--(\d)/ );
				if ( match ) {
					fold.setAttribute( 'data-step', match[ 1 ] );
				}
			} );
		},
		{ rootMargin: '-45% 0px -45% 0px' }
	);
	fold.querySelectorAll( '.nt-fold__step' ).forEach( function ( step ) {
		observer.observe( step );
	} );
	fold.classList.add( 'is-live' );
}() );
