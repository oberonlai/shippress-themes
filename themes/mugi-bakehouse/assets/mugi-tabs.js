/* Mugi Bakehouse: the OVEN / BENCH tabs swap the two frames of the hero photograph (no scroll listener). */
( function () {
	var hero = document.querySelector( '.mb-hero' );
	if ( ! hero ) {
		return;
	}
	var tabs = document.querySelectorAll( '[data-frame]' );
	function set( frame ) {
		hero.setAttribute( 'data-frame', frame );
		Array.prototype.forEach.call( tabs, function ( t ) {
			var on = t.getAttribute( 'data-frame' ) === frame;
			t.setAttribute( 'aria-pressed', on ? 'true' : 'false' );
			t.classList.toggle( 'is-active', on );
		} );
	}
	Array.prototype.forEach.call( tabs, function ( t ) {
		t.addEventListener( 'click', function () {
			set( t.getAttribute( 'data-frame' ) );
		} );
	} );
}() );
