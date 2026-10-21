( function () {
	var part = document.querySelector( '.mm-head-part' );
	if ( ! part ) { return; }
	var update = function () { part.classList.toggle( 'is-solid', window.scrollY > 40 ); };
	update();
	window.addEventListener( 'scroll', update, { passive: true } );
}() );
