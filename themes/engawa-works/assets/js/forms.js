/**
 * Engawa Works: the Tour booking and Contact forms. Shows a form (it stays hidden without JavaScript, where the space
 * details do the job) and, on submit, opens the visitor's email app with the request written out, addressed to the
 * email in Appearance > Space details. Nothing is sent to or stored on the site.
 *
 * @license GPL-2.0-or-later
 */
( function () {
	var mail = document.querySelector( '.ew-card a.ew-mail[href^="mailto:"], .ew-reach a.ew-mail[href^="mailto:"]' );
	var to = mail ? mail.getAttribute( 'href' ).replace( /^mailto:/, '' ).split( '?' )[ 0 ] : '';
	document.querySelectorAll( 'form.ew-form' ).forEach( function ( form ) {
		if ( ! to ) { return; }
		form.hidden = false;
		var fallback = form.closest( '.ew-write' ) ? form.closest( '.ew-write' ).querySelector( '.ew-form__fallback' ) : null;
		if ( fallback ) { fallback.classList.add( 'is-quiet' ); }
		form.addEventListener( 'submit', function ( e ) {
			e.preventDefault();
			if ( ! form.reportValidity() ) { return; }
			var v = function ( n ) { var el = form.elements[ n ]; return el && el.value ? el.value.trim() : ''; };
			var lines = [ 'Name: ' + v( 'name' ), 'Email: ' + v( 'email' ) ];
			[ [ 'day', 'Preferred day' ], [ 'time', 'Time' ], [ 'plan', 'Interested in' ], [ 'topic', 'About' ] ].forEach( function ( f ) {
				if ( form.elements[ f[ 0 ] ] ) { lines.push( f[ 1 ] + ': ' + ( v( f[ 0 ] ) || '-' ) ); }
			} );
			lines.push( '', v( 'message' ) );
			var subject = ( v( 'topic' ) || form.getAttribute( 'data-subject' ) || 'A note' ) + ( v( 'name' ) ? ' from ' + v( 'name' ) : '' );
			window.location.href = 'mailto:' + to + '?subject=' + encodeURIComponent( subject ) + '&body=' + encodeURIComponent( lines.join( '\n' ) );
		} );
	} );
}() );
