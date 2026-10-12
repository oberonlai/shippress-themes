/**
 * Yuge Sento: the Visit page message form. Shows the form (it stays hidden without JavaScript, where the bath details
 * do the job) and, on submit, opens the visitor's email app with the message written out, addressed to the email in
 * Appearance > Bath details. Nothing is sent to or stored on the site.
 *
 * @license GPL-2.0-or-later
 */
( function () {
	var mail = document.querySelector( '.yg-card a.yg-mail[href^="mailto:"], .yg-reach a.yg-mail[href^="mailto:"]' );
	var to = mail ? mail.getAttribute( 'href' ).replace( /^mailto:/, '' ).split( '?' )[ 0 ] : '';
	document.querySelectorAll( 'form.yg-form' ).forEach( function ( form ) {
		if ( ! to ) { return; }
		form.hidden = false;
		var fallback = document.querySelector( '.yg-form__fallback' );
		if ( fallback ) { fallback.classList.add( 'is-quiet' ); }
		form.addEventListener( 'submit', function ( e ) {
			e.preventDefault();
			if ( ! form.reportValidity() ) { return; }
			var v = function ( n ) { var el = form.elements[ n ]; return el && el.value ? el.value.trim() : ''; };
			var lines = [
				'Name: ' + v( 'name' ),
				'Email: ' + v( 'email' ),
				'About: ' + ( v( 'topic' ) || '-' ),
				'',
				v( 'message' )
			];
			var subject = ( v( 'topic' ) || 'A note to the bathhouse' ) + ( v( 'name' ) ? ' from ' + v( 'name' ) : '' );
			window.location.href = 'mailto:' + to + '?subject=' + encodeURIComponent( subject ) + '&body=' + encodeURIComponent( lines.join( '\n' ) );
		} );
	} );
}() );
