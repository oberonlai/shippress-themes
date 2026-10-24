<?php
/**
 * Title: Home: product cards running off the right edge
 * Slug: seiwa-furniture/front-products
 * Categories: seiwa-furniture
 * Keywords: home
 * Viewport Width: 1440
 * Description: Three outlined white cards on a mist band, each running to the right edge with a photograph flush in the right half and a line drawing on the top edge.
 */
echo sw_group( 'sw-sec sw-band sw-products', // phpcs:ignore WordPress.Security.EscapeOutput
	sw_group( 'sw-wrap', sw_label( 'prod_label', 'prod_cap' ) ) .
	sw_group( 'sw-cards sp-stagger',
		sw_card( 'card1', 'svc-seating.webp', sw_ta( 'alt_P6' ), 'line-chair.svg', '/products/' ) .
		sw_card( 'card2', 'svc-desking.webp', sw_ta( 'alt_P7' ), 'line-desk.svg', '/products/' ) .
		sw_card( 'card3', 'svc-acoustic.webp', sw_ta( 'alt_P8' ), 'line-panel.svg', '/products/' )
	),
'section' );
