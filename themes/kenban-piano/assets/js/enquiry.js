/**
 * Kenban Piano School: first-lesson enquiry form. Shows the form (it stays hidden without JavaScript, where the school details
 * do the job) and, on submit, opens the visitor's email app with the enquiry written out, addressed to the
 * school email from the synced school details. Nothing is sent to or stored on the site.
 *
 * @license GPL-2.0-or-later
 */
( function () {
	var mail = document.querySelector( '.kb-school__mail a[href^="mailto:"]' );
	var to = mail ? mail.getAttribute( 'href' ).replace( /^mailto:/, '' ).split( '?' )[ 0 ] : '';
	document.querySelectorAll( 'form.kb-form' ).forEach( function ( form ) {
		if ( ! to ) { return; }
		form.hidden = false;
		var fallback = document.querySelector( '.kb-form__fallback' );
		if ( fallback ) { fallback.classList.add( 'is-quiet' ); }
		form.addEventListener( 'submit', function ( e ) {
			e.preventDefault();
			if ( ! form.reportValidity() ) { return; }
			var v = function ( n ) { var el = form.elements[ n ]; return el && el.value ? el.value.trim() : ''; };
			var lines = [
				'Name: ' + v( 'name' ),
				'Email: ' + v( 'email' ),
				'Lesson for: ' + ( v( 'for' ) || '-' ),
				'Preferred Saturday: ' + ( v( 'date' ) || '-' ),
				'',
				v( 'message' )
			];
			var subject = 'First lesson enquiry' + ( v( 'name' ) ? ' from ' + v( 'name' ) : '' );
			window.location.href = 'mailto:' + to + '?subject=' + encodeURIComponent( subject ) + '&body=' + encodeURIComponent( lines.join( '\n' ) );
		} );
	} );
}() );
