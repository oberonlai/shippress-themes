/**
 * Editor side of the "Space details" block (engawa-works/space-info): a live preview rendered by the server,
 * a choice of what to show, and a link to Appearance → Space details, the one place the details are edited.
 * Plain script, no build step.
 */
( function ( wp ) {
	var el = wp.element.createElement;
	var __ = wp.i18n.__;
	var be = wp.blockEditor;
	var c = wp.components;
	var settingsUrl = ( window.engawaWorksSpace || {} ).settingsUrl;

	wp.blocks.registerBlockType( 'engawa-works/space-info', {
		edit: function ( props ) {
			return el(
				wp.element.Fragment,
				null,
				el(
					be.InspectorControls,
					null,
					el(
						c.PanelBody,
						{ title: __( 'Space details', 'engawa-works' ) },
						el( c.SelectControl, {
							label: __( 'Show', 'engawa-works' ),
							value: props.attributes.show,
							options: [
								{ value: 'card', label: __( 'Address card (address, station, hours, closed day, phone)', 'engawa-works' ) },
								{ value: 'state', label: __( 'Today\'s hours and the "Open now" chip', 'engawa-works' ) },
								{ value: 'chip', label: __( 'The "Open now" chip only', 'engawa-works' ) },
								{ value: 'today', label: __( 'Today in a few words (for the ticker)', 'engawa-works' ) },
								{ value: 'opening', label: __( 'Today\'s opening line', 'engawa-works' ) },
								{ value: 'week', label: __( 'The week, day by day', 'engawa-works' ) },
								{ value: 'summary', label: __( 'Hours in one line and the closed day', 'engawa-works' ) },
								{ value: 'phone-email', label: __( 'Phone and email', 'engawa-works' ) },
							],
							onChange: function ( show ) {
								props.setAttributes( { show: show } );
							},
						} ),
						el( 'p', null, __( 'The hours, closed day, address, phone and email are kept in one place, so every page shows the same details.', 'engawa-works' ) ),
						settingsUrl && el( c.ExternalLink, { href: settingsUrl }, __( 'Edit in Appearance → Space details', 'engawa-works' ) )
					)
				),
				el(
					'div',
					be.useBlockProps(),
					el( wp.serverSideRender, { block: 'engawa-works/space-info', attributes: props.attributes } )
				)
			);
		},
		save: function () {
			return null;
		},
	} );
} )( window.wp );
