/**
 * Editor side of the "Bath details" block (yuge-sento/bath-info): a live preview rendered by the server,
 * a choice of what to show, and a link to Appearance → Bath details, the one place the details are edited.
 * Plain script, no build step.
 */
( function ( wp ) {
	var el = wp.element.createElement;
	var __ = wp.i18n.__;
	var be = wp.blockEditor;
	var c = wp.components;
	var settingsUrl = ( window.yugeSentoBath || {} ).settingsUrl;

	wp.blocks.registerBlockType( 'yuge-sento/bath-info', {
		edit: function ( props ) {
			return el(
				wp.element.Fragment,
				null,
				el(
					be.InspectorControls,
					null,
					el(
						c.PanelBody,
						{ title: __( 'Bath details', 'yuge-sento' ) },
						el( c.SelectControl, {
							label: __( 'Show', 'yuge-sento' ),
							value: props.attributes.show,
							options: [
								{ value: 'card', label: __( 'Address card (address, station, hours, closed day, phone)', 'yuge-sento' ) },
								{ value: 'state', label: __( 'Today\'s hours and the "Open now" chip', 'yuge-sento' ) },
								{ value: 'opening', label: __( 'This evening\'s opening line', 'yuge-sento' ) },
								{ value: 'week', label: __( 'The week, day by day', 'yuge-sento' ) },
								{ value: 'summary', label: __( 'Hours in one line and the closed day', 'yuge-sento' ) },
								{ value: 'phone-email', label: __( 'Phone and email', 'yuge-sento' ) },
							],
							onChange: function ( show ) {
								props.setAttributes( { show: show } );
							},
						} ),
						el( 'p', null, __( 'The hours, closed day, address, phone and email are kept in one place, so every page shows the same details.', 'yuge-sento' ) ),
						settingsUrl && el( c.ExternalLink, { href: settingsUrl }, __( 'Edit in Appearance → Bath details', 'yuge-sento' ) )
					)
				),
				el(
					'div',
					be.useBlockProps(),
					el( wp.serverSideRender, { block: 'yuge-sento/bath-info', attributes: props.attributes } )
				)
			);
		},
		save: function () {
			return null;
		},
	} );
} )( window.wp );
