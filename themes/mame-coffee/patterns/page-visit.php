<?php
/**
 * Title: Page: Visit
 * Slug: mame-coffee/page-visit
 * Categories: mame-coffee
 * Keywords: coffee, roastery, cafe
 * Viewport Width: 1440
 * Description: Visit page: side label, address, hours and contact as hairline rows, the head barista card, three ruled columns.
 */
$t = 'mame_coffee_t';
echo mc_pagehead( '01-hall.webp', $t( 'hero_alt_bg' ), '12-bar.webp', $t( 'visit_alt' ), $t( 'visit_title' ), $t( 'visit_intro' ) ) . "\n\n";
echo mc_open( 'mc-sec mc-inner', 'section', 'full' ) . "\n" . mc_open( 'mc-wrap mc-side-grid' ) . "\n";
echo mc_p( 'mc-side', $t( 'visit_label' ) ) . "\n\n" . mc_open( 'mc-side-main' ) . "\n" . mc_open( 'mc-grid mc-grid--3' ) . "\n";
echo mc_open( 'mc-card mc-card--wide' ) . "\n" . mc_rule() . "\n\n" . mc_open( 'mc-specs mc-specs--visit' ) . "\n";
foreach ( array( 'a', 'b', 'c', 'd', 'e', 'f' ) as $k ) {
	echo mc_spec( $t( "visit_row_{$k}_t" ), $t( "visit_row_{$k}" ) ) . "\n\n";
}
echo mc_close() . "\n" . mc_close() . "\n\n";
echo mc_open( 'mc-card sp-reveal sp-reveal--up' ) . "\n" . mc_rule() . "\n\n" . mc_title_row( $t( 'lena_ask_title' ), '/bar/' ) . "\n\n" . mc_p( 'mc-card__line', $t( 'lena_line' ) ) . "\n\n" . mc_panel( '16-lena.webp', $t( 'img_16' ) ) . "\n" . mc_close() . "\n";
echo mc_close() . "\n\n" . mc_open( 'mc-srows' ) . "\n";
foreach ( array( 1, 2, 3 ) as $i ) {
	echo mc_srow( $t( "visit_h{$i}" ), $t( "visit_b{$i}" ) ) . "\n\n";
}
echo mc_close() . "\n";
echo mc_close() . "\n" . mc_close() . "\n" . mc_close( 'section' ) . "\n\n";
echo mc_closing( $t( 'visit_close' ), '/bar/', $t( 'visit_close_more' ) );
