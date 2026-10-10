/**
 * Editor side of the "Clinic details" block (hakuba-dental/clinic-info): a live preview rendered by the server,
 * a choice of what to show, and a link to Appearance → Clinic details, the one place the details are edited.
 * Plain script, no build step.
 */
( function ( wp ) {
	var el = wp.element.createElement;
	var __ = wp.i18n.__;
	var be = wp.blockEditor;
	var c = wp.components;
	var settingsUrl = ( window.hakubaDentalClinic || {} ).settingsUrl;

	wp.blocks.registerBlockType( 'hakuba-dental/clinic-info', {
		edit: function ( props ) {
			return el(
				wp.element.Fragment,
				null,
				el(
					be.InspectorControls,
					null,
					el(
						c.PanelBody,
						{ title: __( 'Clinic details', 'hakuba-dental' ) },
						el( c.SelectControl, {
							label: __( 'Show', 'hakuba-dental' ),
							value: props.attributes.show,
							options: [
								{ value: 'hours', label: __( 'Opening hours table', 'hakuba-dental' ) },
								{ value: 'today', label: __( 'Today\'s hours', 'hakuba-dental' ) },
								{ value: 'today-short', label: __( 'Today\'s hours (short)', 'hakuba-dental' ) },
								{ value: 'call', label: __( '"Call" link with the phone number', 'hakuba-dental' ) },
								{ value: 'call-button', label: __( '"Call" button with the phone number', 'hakuba-dental' ) },
								{ value: 'address', label: __( 'Address', 'hakuba-dental' ) },
								{ value: 'phone-email', label: __( 'Phone and email', 'hakuba-dental' ) },
							],
							onChange: function ( show ) {
								props.setAttributes( { show: show } );
							},
						} ),
						el( 'p', null, __( 'The hours, phone, email and address are kept in one place, so every page shows the same details.', 'hakuba-dental' ) ),
						settingsUrl && el( c.ExternalLink, { href: settingsUrl }, __( 'Edit in Appearance → Clinic details', 'hakuba-dental' ) )
					)
				),
				el(
					'div',
					be.useBlockProps(),
					el( wp.serverSideRender, { block: 'hakuba-dental/clinic-info', attributes: props.attributes } )
				)
			);
		},
		save: function () {
			return null;
		},
	} );
} )( window.wp );
