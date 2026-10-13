/**
 * Editor side of the "Shop details" block (hibiki-records/shop-info): a live preview rendered by the server,
 * a choice of what to show, and a link to Appearance → Shop details, the one place the details are edited.
 * Plain script, no build step.
 */
( function ( wp ) {
	var el = wp.element.createElement;
	var __ = wp.i18n.__;
	var be = wp.blockEditor;
	var c = wp.components;
	var settingsUrl = ( window.hibikiRecordsShop || {} ).settingsUrl;

	wp.blocks.registerBlockType( 'hibiki-records/shop-info', {
		edit: function ( props ) {
			return el(
				wp.element.Fragment,
				null,
				el(
					be.InspectorControls,
					null,
					el(
						c.PanelBody,
						{ title: __( 'Shop details', 'hibiki-records' ) },
						el( c.SelectControl, {
							label: __( 'Show', 'hibiki-records' ),
							value: props.attributes.show,
							options: [
								{ value: 'card', label: __( 'Address card (address, station, hours, closed day, phone)', 'hibiki-records' ) },
								{ value: 'state', label: __( 'Today\'s hours and the "Open now" chip', 'hibiki-records' ) },
								{ value: 'chip', label: __( 'The "Open now" chip only', 'hibiki-records' ) },
								{ value: 'today', label: __( 'Today in a few words (for the ticker)', 'hibiki-records' ) },
								{ value: 'opening', label: __( 'Today\'s opening line', 'hibiki-records' ) },
								{ value: 'week', label: __( 'The week, day by day', 'hibiki-records' ) },
								{ value: 'summary', label: __( 'Hours in one line and the closed day', 'hibiki-records' ) },
								{ value: 'phone-email', label: __( 'Phone and email', 'hibiki-records' ) },
							],
							onChange: function ( show ) {
								props.setAttributes( { show: show } );
							},
						} ),
						el( 'p', null, __( 'The hours, closed day, address, phone and email are kept in one place, so every page shows the same details.', 'hibiki-records' ) ),
						settingsUrl && el( c.ExternalLink, { href: settingsUrl }, __( 'Edit in Appearance → Shop details', 'hibiki-records' ) )
					)
				),
				el(
					'div',
					be.useBlockProps(),
					el( wp.serverSideRender, { block: 'hibiki-records/shop-info', attributes: props.attributes } )
				)
			);
		},
		save: function () {
			return null;
		},
	} );
} )( window.wp );
