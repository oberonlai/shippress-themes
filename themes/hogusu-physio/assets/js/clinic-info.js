/**
 * Editor side of the "Clinic details" block (hogusu-physio/clinic-info): a live preview rendered by the server,
 * a choice of what to show, and a link to Appearance → Clinic details, the one place the details are edited.
 * Plain script, no build step.
 */
( function ( wp ) {
	var el = wp.element.createElement;
	var __ = wp.i18n.__;
	var be = wp.blockEditor;
	var c = wp.components;
	var settingsUrl = ( window.hogusuPhysioClinic || {} ).settingsUrl;

	wp.blocks.registerBlockType( 'hogusu-physio/clinic-info', {
		edit: function ( props ) {
			return el(
				wp.element.Fragment,
				null,
				el(
					be.InspectorControls,
					null,
					el(
						c.PanelBody,
						{ title: __( 'Clinic details', 'hogusu-physio' ) },
						el( c.SelectControl, {
							label: __( 'Show', 'hogusu-physio' ),
							value: props.attributes.show,
							options: [
								{ value: 'hours', label: __( 'Opening hours table', 'hogusu-physio' ) },
								{ value: 'today', label: __( 'Today\'s hours', 'hogusu-physio' ) },
								{ value: 'today-short', label: __( 'Today\'s hours (short)', 'hogusu-physio' ) },
								{ value: 'call', label: __( '"Call" link with the phone number', 'hogusu-physio' ) },
								{ value: 'call-button', label: __( '"Call" button with the phone number', 'hogusu-physio' ) },
								{ value: 'address', label: __( 'Address', 'hogusu-physio' ) },
								{ value: 'phone', label: __( 'Phone number', 'hogusu-physio' ) },
								{ value: 'emergency', label: __( 'Out-of-hours emergency care', 'hogusu-physio' ) },
								{ value: 'phone-email', label: __( 'Phone and email', 'hogusu-physio' ) },
							],
							onChange: function ( show ) {
								props.setAttributes( { show: show } );
							},
						} ),
						el( 'p', null, __( 'The hours, phone, email, address and out-of-hours emergency contact are kept in one place, so every page shows the same details.', 'hogusu-physio' ) ),
						settingsUrl && el( c.ExternalLink, { href: settingsUrl }, __( 'Edit in Appearance → Clinic details', 'hogusu-physio' ) )
					)
				),
				el(
					'div',
					be.useBlockProps(),
					el( wp.serverSideRender, { block: 'hogusu-physio/clinic-info', attributes: props.attributes } )
				)
			);
		},
		save: function () {
			return null;
		},
	} );
} )( window.wp );
