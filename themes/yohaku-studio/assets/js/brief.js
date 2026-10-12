/**
 * Yohaku Studio: brief form. Shows the form (it stays hidden without JavaScript, where the email link and the
 * checklist do the job) and, on submit, opens the visitor's email app with the brief written out, addressed to the
 * studio email from the synced studio details. Nothing is sent to or stored on the site.
 *
 * @license GPL-2.0-or-later
 */
( function () {
	var mail = document.querySelector( '.yh-studio__mail a[href^="mailto:"]' );
	var to = mail ? mail.getAttribute( 'href' ).replace( /^mailto:/, '' ).split( '?' )[ 0 ] : '';
	document.querySelectorAll( 'form.yh-brief' ).forEach( function ( form ) {
		if ( ! to ) { return; }
		form.hidden = false;
		var fallback = document.querySelector( '.yh-brief__fallback' );
		if ( fallback ) { fallback.classList.add( 'is-quiet' ); }
		form.addEventListener( 'submit', function ( e ) {
			e.preventDefault();
			if ( ! form.reportValidity() ) { return; }
			var v = function ( n ) { var el = form.elements[ n ]; return el && el.value ? el.value.trim() : ''; };
			var needs = Array.prototype.slice.call( form.querySelectorAll( 'input[name="discipline"]:checked' ) ).map( function ( c ) { return c.value; } );
			var lines = [
				'Name: ' + v( 'name' ),
				'Email: ' + v( 'email' ),
				'Company: ' + ( v( 'company' ) || '-' ),
				'Needs: ' + ( needs.join( ', ' ) || '-' ),
				'Budget: ' + ( v( 'budget' ) || '-' ),
				'Timeline: ' + ( v( 'timeline' ) || '-' ),
				'',
				v( 'message' )
			];
			var subject = 'New brief' + ( v( 'company' ) ? ' from ' + v( 'company' ) : ( v( 'name' ) ? ' from ' + v( 'name' ) : '' ) );
			window.location.href = 'mailto:' + to + '?subject=' + encodeURIComponent( subject ) + '&body=' + encodeURIComponent( lines.join( '\n' ) );
		} );
	} );
}() );
