/**
 * Editor side of the "Hut details" block (kumotori-hut/hut-info): a live preview rendered by the server,
 * a choice of what to show, and a link to Appearance → Hut details, the one place the details are edited.
 * Plain script, no build step.
 */
( function ( wp ) {
	var el = wp.element.createElement;
	var __ = wp.i18n.__;
	var be = wp.blockEditor;
	var c = wp.components;
	var settingsUrl = ( window.kumotoriHutDesk || {} ).settingsUrl;

	wp.blocks.registerBlockType( 'kumotori-hut/hut-info', {
		edit: function ( props ) {
			return el(
				wp.element.Fragment,
				null,
				el(
					be.InspectorControls,
					null,
					el(
						c.PanelBody,
						{ title: __( 'Hut details', 'kumotori-hut' ) },
						el( c.SelectControl, {
							label: __( 'Show', 'kumotori-hut' ),
							value: props.attributes.show,
							options: [
								{ value: 'card', label: __( 'Address card (address, station, hours, closed day, phone)', 'kumotori-hut' ) },
								{ value: 'state', label: __( 'Today\'s hours and the "Open now" chip', 'kumotori-hut' ) },
								{ value: 'opening', label: __( 'Today\'s reception line', 'kumotori-hut' ) },
								{ value: 'week', label: __( 'The week, day by day', 'kumotori-hut' ) },
								{ value: 'summary', label: __( 'Hours in one line and the closed day', 'kumotori-hut' ) },
								{ value: 'phone-email', label: __( 'Phone and email', 'kumotori-hut' ) },
							],
							onChange: function ( show ) {
								props.setAttributes( { show: show } );
							},
						} ),
						el( 'p', null, __( 'The hours, closed day, address, phone and email are kept in one place, so every page shows the same details.', 'kumotori-hut' ) ),
						settingsUrl && el( c.ExternalLink, { href: settingsUrl }, __( 'Edit in Appearance → Hut details', 'kumotori-hut' ) )
					)
				),
				el(
					'div',
					be.useBlockProps(),
					el( wp.serverSideRender, { block: 'kumotori-hut/hut-info', attributes: props.attributes } )
				)
			);
		},
		save: function () {
			return null;
		},
	} );
} )( window.wp );
