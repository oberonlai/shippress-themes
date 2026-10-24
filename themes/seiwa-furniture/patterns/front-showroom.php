<?php
/**
 * Title: Home: showroom photograph with two square tiles on its corners
 * Slug: seiwa-furniture/front-showroom
 * Categories: seiwa-furniture
 * Keywords: home
 * Viewport Width: 1440
 * Description: A centred parallax photograph with two square tiles overlapping its corners, and a centred text block under it.
 */
echo sw_group( 'sw-sec sw-band sw-showroom', // phpcs:ignore WordPress.Security.EscapeOutput
	sw_group( 'sw-wrap', sw_label( 'show_label', 'show_cap' ) ) .
	sw_group( 'sw-show',
		sw_group( 'sw-show__ph',
			sw_group( 'sp-parallax sw-show__main', sw_img( 'showroom-wide.webp', sw_ta( 'alt_P10' ) ) ) .
			sw_img( 'tile-sample-kit.webp', sw_ta( 'alt_P11' ), 'sw-tile sw-tile--a' ) .
			sw_img( 'tile-castor-fit.webp', sw_ta( 'alt_P12' ), 'sw-tile sw-tile--b' )
		) .
		sw_group( 'sw-show__tx', sw_p( 'sw-show__p', sw_t( 'show_p1' ) ) . sw_p( 'sw-show__p', sw_t( 'show_p2' ) ) . sw_p( 'sw-show__facts', sw_t( 'show_facts' ) ) . sw_more( 'show_cta', '/showroom/', 'sw-more--c' ) )
	),
'section' );
