<?php
/**
 * Title: Home: first screen
 * Slug: seiwa-furniture/front-kv
 * Categories: seiwa-furniture
 * Keywords: home
 * Viewport Width: 1440
 * Description: White top half with the headline; a wide photograph straddling the fold and a tall portrait with an elliptical corner bleeding off the right edge, over flat pale panels, with two line drawings on the photo corners.
 */
echo sw_group( 'sw-kv', // phpcs:ignore WordPress.Security.EscapeOutput
	sw_group( 'sw-kv__shape sw-kv__shape--trap', '' ) .
	sw_group( 'sw-kv__shape sw-kv__shape--pill', '' ) .
	sw_group( 'sw-kv__shape sw-kv__shape--block', '' ) .
	sw_group( 'sw-kv__text', sw_h( 1, 'sw-kv__h', sw_t( 'kv_h1a' ) . '<br>' . sw_t( 'kv_h1b' ) ) . sw_p( 'sw-kv__sub', sw_t( 'kv_sub' ) ) ) .
	sw_group( 'sp-parallax sw-kv__wide', sw_img( 'kv-chair-line.webp', sw_ta( 'alt_P1' ) ) ) .
	sw_group( 'sp-parallax sw-kv__tall', sw_img( 'kv-swatch-hand.webp', sw_ta( 'alt_P2' ) ) ) .
	sw_group( 'sw-kv__shape sw-kv__shape--glass', '' ) .
	sw_img( 'line-swatch-tape.svg', '', 'sw-kv__ln sw-kv__ln1' ) .
	sw_img( 'line-chair-elevation.svg', '', 'sw-kv__ln sw-kv__ln2' ),
'section' );
