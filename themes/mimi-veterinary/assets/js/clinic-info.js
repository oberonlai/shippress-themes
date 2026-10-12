/**
 * Editor side of the "Clinic details" block (mimi-veterinary/clinic-info): a live preview rendered by the server,
 * a choice of what to show, and a link to Appearance → Clinic details, the one place the details are edited.
 * Plain script, no build step.
 */
( function ( wp ) {
	var el = wp.element.createElement;
	var __ = wp.i18n.__;
	var be = wp.blockEditor;
	var c = wp.components;
	var settingsUrl = ( window.mimiVeterinaryClinic || {} ).settingsUrl;

	wp.blocks.registerBlockType( 'mimi-veterinary/clinic-info', {
		edit: function ( props ) {
			return el(
				wp.element.Fragment,
				null,
				el(
					be.InspectorControls,
					null,
					el(
						c.PanelBody,
						{ title: __( 'Clinic details', 'mimi-veterinary' ) },
						el( c.SelectControl, {
							label: __( 'Show', 'mimi-veterinary' ),
							value: props.attributes.show,
							options: [
								{ value: 'hours', label: __( 'Opening hours table', 'mimi-veterinary' ) },
								{ value: 'today', label: __( 'Today\'s hours', 'mimi-veterinary' ) },
								{ value: 'today-short', label: __( 'Today\'s hours (short)', 'mimi-veterinary' ) },
								{ value: 'call', label: __( '"Call" link with the phone number', 'mimi-veterinary' ) },
								{ value: 'call-button', label: __( '"Call" button with the phone number', 'mimi-veterinary' ) },
								{ value: 'address', label: __( 'Address', 'mimi-veterinary' ) },
								{ value: 'phone', label: __( 'Phone number', 'mimi-veterinary' ) },
								{ value: 'emergency', label: __( 'Night emergency partner', 'mimi-veterinary' ) },
								{ value: 'phone-email', label: __( 'Phone and email', 'mimi-veterinary' ) },
							],
							onChange: function ( show ) {
								props.setAttributes( { show: show } );
							},
						} ),
						el( 'p', null, __( 'The hours, phone, email, address and emergency partner are kept in one place, so every page shows the same details.', 'mimi-veterinary' ) ),
						settingsUrl && el( c.ExternalLink, { href: settingsUrl }, __( 'Edit in Appearance → Clinic details', 'mimi-veterinary' ) )
					)
				),
				el(
					'div',
					be.useBlockProps(),
					el( wp.serverSideRender, { block: 'mimi-veterinary/clinic-info', attributes: props.attributes } )
				)
			);
		},
		save: function () {
			return null;
		},
	} );
} )( window.wp );
