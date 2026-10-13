/**
 * Kage Gallery: the header has only the wordmark and a "Menu" button that opens the navigation full screen on a pale
 * wall (the core Navigation block's overlay, which already traps focus, closes on Escape and returns focus to the
 * button). This script moves the synced visit details from the header into that overlay, as a small column beside
 * the menu, and keeps the button's aria-expanded and aria-controls in step with the overlay.
 *
 * It also shows the Contact form (hidden without JavaScript, where the visit details do the job) and, on submit,
 * opens the visitor's email app with the message written out, addressed to the email in the synced visit details.
 * Nothing is sent to or stored on the site.
 *
 * @license GPL-2.0-or-later
 */
( function () {
	function menu( header ) {
		var nav = header.querySelector( '.wp-block-navigation' );
		if ( ! nav ) {
			return;
		}
		var open = nav.querySelector( '.wp-block-navigation__responsive-container-open' );
		var panel = nav.querySelector( '.wp-block-navigation__responsive-container' );
		var content = nav.querySelector( '.wp-block-navigation__responsive-container-content' );
		var info = header.querySelector( '.kgl-menu-info' );
		if ( info && content && ! content.contains( info ) ) {
			content.appendChild( info );
			info.classList.add( 'is-in-menu' );
		}
		if ( ! open || ! panel ) {
			return;
		}
		if ( panel.id ) {
			open.setAttribute( 'aria-controls', panel.id );
		}
		var update = function () {
			var isOpen = panel.classList.contains( 'is-menu-open' );
			open.setAttribute( 'aria-expanded', isOpen ? 'true' : 'false' );
			document.documentElement.classList.toggle( 'kgl-menu-open', isOpen );
		};
		update();
		new MutationObserver( update ).observe( panel, { attributes: true, attributeFilter: [ 'class' ] } );
	}
	function forms() {
		var mail = document.querySelector( 'a.kgl-mail[href^="mailto:"]' );
		var to = mail ? mail.getAttribute( 'href' ).replace( /^mailto:/, '' ).split( '?' )[ 0 ] : '';
		document.querySelectorAll( 'form.kgl-form[data-subject]' ).forEach( function ( form ) {
			if ( ! to ) {
				return;
			}
			form.hidden = false;
			form.addEventListener( 'submit', function ( e ) {
				e.preventDefault();
				if ( ! form.reportValidity() ) {
					return;
				}
				var v = function ( n ) {
					var el = form.elements[ n ];
					return el && el.value ? el.value.trim() : '';
				};
				var lines = [ 'Name: ' + v( 'name' ), 'Email: ' + v( 'email' ), 'About: ' + ( v( 'topic' ) || '-' ), '', v( 'message' ) ];
				var subject = ( v( 'topic' ) || form.getAttribute( 'data-subject' ) ) + ( v( 'name' ) ? ' from ' + v( 'name' ) : '' );
				window.location.href = 'mailto:' + to + '?subject=' + encodeURIComponent( subject ) + '&body=' + encodeURIComponent( lines.join( '\n' ) );
			} );
		} );
	}
	function init() {
		document.querySelectorAll( '.kgl-header' ).forEach( menu );
		forms();
	}
	if ( document.readyState === 'loading' ) {
		document.addEventListener( 'DOMContentLoaded', init );
	} else {
		init();
	}
}() );
