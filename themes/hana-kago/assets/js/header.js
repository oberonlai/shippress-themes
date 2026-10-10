/**
 * Hana Kago: the header (H8) lies transparent over the top of the page and turns into solid blush paper once the page
 * scrolls. Browsers with CSS scroll-driven animations do this in style.css alone; this script does it for the others
 * by adding `is-solid` to `.hk-header` after the first 40 pixels. Without it the header simply stays transparent at
 * the top and gets its paper background from the same CSS when there is no scroll timeline.
 */
( function () {
	var header = document.querySelector( '.hk-header' );
	if ( ! header || ( window.CSS && CSS.supports && CSS.supports( 'animation-timeline: scroll()' ) ) ) {
		return;
	}
	header.classList.add( 'is-scripted' );
	var ticking = false;
	function update() {
		ticking = false;
		header.classList.toggle( 'is-solid', window.scrollY > 40 );
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
