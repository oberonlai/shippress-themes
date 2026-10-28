<?php
/**
 * Title: Page: Roastery
 * Slug: mame-coffee/page-roastery
 * Categories: mame-coffee
 * Keywords: coffee, roastery, cafe
 * Viewport Width: 1440
 * Description: Roastery page: a parallax drum photograph, one wide ruled text column and two photo columns.
 */
$t = 'mame_coffee_t';
echo mc_pagehead( '01-hall.webp', $t( 'hero_alt_bg' ), '11-cupping.webp', $t( 'img_11' ), $t( 'roastery_title' ), $t( 'roastery_intro' ) ) . "\n\n";
echo mc_band( '02-drop.webp', $t( 'hero_alt_frame' ), $t( 'roastery_band' ), 'mc-band--drop' ) . "\n\n";
echo mc_open( 'mc-sec mc-inner', 'section', 'full' ) . "\n" . mc_open( 'mc-wrap' ) . "\n";
echo mc_open( 'mc-grid mc-grid--4 sp-stagger' ) . "\n";
echo mc_sect( $t( 'roastery_h1' ), $t( 'roastery_b1' ), 'mc-card--wide sp-reveal sp-reveal--up' ) . "\n\n";
foreach ( array( array( 2, '13-green.webp', 'img_13' ), array( 3, '15-cooling.webp', 'img_15' ) ) as $c ) {
	echo mc_open( 'mc-card sp-reveal sp-reveal--up' ) . "\n" . mc_rule() . "\n\n" . mc_h( 3, 'mc-qh', $t( "roastery_h{$c[0]}" ) ) . "\n\n" . mc_panel( $c[1], $t( $c[2] ) ) . "\n\n" . mc_p( 'mc-prose', $t( "roastery_b{$c[0]}" ) ) . "\n" . mc_close() . "\n\n";
}
echo mc_close() . "\n";
echo mc_close() . "\n" . mc_close( 'section' ) . "\n\n";
echo mc_closing( $t( 'roastery_close' ), '/people/', $t( 'roastery_close_more' ) );
