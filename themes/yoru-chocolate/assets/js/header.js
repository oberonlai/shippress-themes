/**
 * Yoru Chocolate: the header (H3) is a fixed dark side rail on wide screens and a slim top bar on smaller ones; both
 * are pure CSS. This script only marks the page once the reader has scrolled, so the top bar can take a hairline.
 */
( function () {
	var header = document.querySelector( '.yc-header' );
	if ( ! header ) {
		return;
	}
	var ticking = false;
	function update() {
		ticking = false;
		header.classList.toggle( 'is-scrolled', window.scrollY > 8 );
	}
	window.addEventListener(
		'scroll',
		function () {
			if ( ! ticking ) {
				ticking = true;
				window.requestAnimationFrame( update );
			}
		},
		{ passive: true }
	);
	update();
}() );
