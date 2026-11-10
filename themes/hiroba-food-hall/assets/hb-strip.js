/* Window strip: previous/next buttons scroll the strip only (the anchors stay as the no-JS fallback). */
document.addEventListener( 'click', function ( e ) {
	var a = e.target.closest ? e.target.closest( '.hb-win-btn a' ) : null;
	var strip = document.querySelector( '.hb-strip' );
	if ( ! a || ! strip ) { return; }
	e.preventDefault();
	var next = a.parentNode.parentNode.lastElementChild === a.parentNode;
	var step = strip.firstElementChild ? strip.firstElementChild.getBoundingClientRect().width + 8 : strip.clientWidth;
	strip.scrollBy( { left: next ? step : -step, behavior: window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches ? 'auto' : 'smooth' } );
} );
