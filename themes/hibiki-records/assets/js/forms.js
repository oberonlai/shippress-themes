/**
 * Hibiki Records: the Listening booth and Contact forms. Shows a form (it stays hidden without JavaScript, where the shop
 * details do the job) and, on submit, opens the visitor's email app with the request written out, addressed to the
 * email in Appearance > Shop details. Nothing is sent to or stored on the site.
 *
 * @license GPL-2.0-or-later
 */
( function () {
	var mail = document.querySelector( 'a.hb-mail[href^="mailto:"]' );
	var to = mail ? mail.getAttribute( 'href' ).replace( /^mailto:/, '' ).split( '?' )[ 0 ] : '';
	document.querySelectorAll( 'form.hb-form[data-subject]' ).forEach( function ( form ) {
		if ( ! to ) { return; }
		form.hidden = false;
		var fallback = form.closest( '.hb-write' ) ? form.closest( '.hb-write' ).querySelector( '.hb-form__fallback' ) : null;
		if ( fallback ) { fallback.classList.add( 'is-quiet' ); }
		form.addEventListener( 'submit', function ( e ) {
			e.preventDefault();
			if ( ! form.reportValidity() ) { return; }
			var v = function ( n ) { var el = form.elements[ n ]; return el && el.value ? el.value.trim() : ''; };
			var lines = [ 'Name: ' + v( 'name' ), 'Email: ' + v( 'email' ) ];
			[ [ 'date', 'Preferred date' ], [ 'slot', 'Time slot' ], [ 'people', 'People' ], [ 'records', 'Records to hear' ], [ 'topic', 'About' ] ].forEach( function ( f ) {
				if ( form.elements[ f[ 0 ] ] ) { lines.push( f[ 1 ] + ': ' + ( v( f[ 0 ] ) || '-' ) ); }
			} );
			lines.push( '', v( 'message' ) );
			var subject = ( v( 'topic' ) || form.getAttribute( 'data-subject' ) || 'A note' ) + ( v( 'name' ) ? ' from ' + v( 'name' ) : '' );
			window.location.href = 'mailto:' + to + '?subject=' + encodeURIComponent( subject ) + '&body=' + encodeURIComponent( lines.join( '\n' ) );
		} );
	} );
}() );
