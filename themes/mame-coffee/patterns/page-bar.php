<?php
/**
 * Title: Page: Bar menu
 * Slug: mame-coffee/page-bar
 * Categories: mame-coffee
 * Keywords: coffee, roastery, cafe
 * Viewport Width: 1440
 * Description: Bar page: side label, the seven-item price list, beans to take home, the head barista card.
 */
$t = 'mame_coffee_t';
echo mc_pagehead( '12-bar.webp', $t( 'visit_alt' ), '08-pour.webp', $t( 'pour_alt' ), $t( 'bar_title_page' ), $t( 'bar_intro' ) ) . "\n\n";
echo mc_open( 'mc-sec mc-inner mc-bar', 'section', 'full' ) . "\n" . mc_open( 'mc-wrap' ) . "\n";
echo mc_rule() . "\n\n";
echo mc_open( 'mc-bar__head' ) . "\n" . mc_p( 'mc-side', $t( 'bar_label' ) ) . "\n\n" . mc_title_row( $t( 'bar_title' ), '/cupping/', 'mc-bar__title' ) . "\n\n" . mc_p( 'mc-bar__note', $t( 'bar_note' ) ) . "\n" . mc_close() . "\n\n";
echo mc_open( 'mc-prices' ) . "\n";
for ( $i = 1; $i <= 7; $i++ ) {
	echo mc_prow( $t( "bar_{$i}_n" ), $t( "bar_{$i}_d" ), $t( "bar_{$i}_p" ) ) . "\n\n";
}
echo mc_close() . "\n\n" . mc_open( 'mc-srows' ) . "\n" . mc_srow( $t( 'bar_h1' ), $t( 'bar_b1' ) ) . "\n" . mc_close() . "\n";
echo mc_close() . "\n" . mc_close( 'section' ) . "\n\n";
echo mc_open( 'mc-sec mc-inner mc-beans', 'section', 'full' ) . "\n" . mc_open( 'mc-wrap' ) . "\n";
echo mc_rule() . "\n\n" . mc_open( 'mc-bar__head mc-bar__head--plain' ) . "\n" . mc_title_row( $t( 'beans_title' ), '/lots/', 'mc-bar__title' ) . "\n\n" . mc_p( 'mc-bar__note', $t( 'beans_note' ) ) . "\n" . mc_close() . "\n\n";
echo mc_open( 'mc-prices' ) . "\n";
for ( $i = 1; $i <= 4; $i++ ) {
	echo mc_prow( $t( "lots_{$i}_name" ), $t( "beans_{$i}_d" ), $t( "beans_{$i}_p" ) ) . "\n\n";
}
echo mc_close() . "\n\n" . mc_open( 'mc-srows' ) . "\n" . mc_srow( $t( 'bar_h2' ), $t( 'bar_b2' ) ) . "\n" . mc_close() . "\n";
echo mc_close() . "\n" . mc_close( 'section' ) . "\n\n";
echo mc_open( 'mc-sec mc-inner', 'section', 'full' ) . "\n" . mc_open( 'mc-wrap mc-grid mc-grid--4' ) . "\n";
echo mc_open( 'mc-card sp-reveal sp-reveal--up' ) . "\n" . mc_rule() . "\n\n" . mc_title_row( $t( 'lena_title' ), '/visit/' ) . "\n\n" . mc_p( 'mc-card__line', $t( 'lena_line' ) ) . "\n\n" . mc_panel( '16-lena.webp', $t( 'img_16' ) ) . "\n" . mc_close() . "\n\n";
echo mc_sect( $t( 'bar_h3' ), $t( 'bar_b3' ), 'mc-card--span3' ) . "\n";
echo mc_close() . "\n" . mc_close( 'section' ) . "\n\n";
echo mc_closing( $t( 'bar_close' ), '/cupping/', $t( 'bar_close_more' ) );
