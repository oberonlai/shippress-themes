<?php
/**
 * Title: Home: delivery ledger beside a sticky photograph
 * Slug: seiwa-furniture/front-ledger
 * Categories: seiwa-furniture
 * Keywords: home
 * Viewport Width: 1440
 * Description: A sticky factory photograph on the left; the label, a paragraph and six hairline ledger rows with counted numbers on the right.
 */
$sw_rows = '';
for ( $i = 1; $i <= 6; $i++ ) {
	$sw_rows .= sw_group( 'sw-lrow',
		sw_p( 'sw-lnum sp-reveal sp-count', sw_t( "led{$i}_n" ) ) .
		sw_group( 'sw-lmeas', sw_p( 'sw-lmeas__m', sw_t( "led{$i}_m" ) ) . sw_p( 'sw-lmeas__n', sw_t( "led{$i}_note" ) ) ) .
		sw_p( 'sw-lyear', sw_t( "led{$i}_y" ) )
	);
}
echo sw_group( 'sw-sec sw-ledger', // phpcs:ignore WordPress.Security.EscapeOutput
	sw_group( 'sw-wrap sw-ledger__in',
		sw_group( 'sw-ledger__fig', sw_img( 'ledger-factory-floor.webp', sw_ta( 'alt_P9' ) ) ) .
		sw_group( 'sw-ledger__tx', sw_label( 'led_label', 'led_cap' ) . sw_p( 'sw-ledger__p', sw_t( 'led_intro' ) ) . sw_group( 'sw-ledger__rows', $sw_rows ) )
	),
'section' );
