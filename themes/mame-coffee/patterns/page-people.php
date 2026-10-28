<?php
/**
 * Title: Page: People
 * Slug: mame-coffee/page-people
 * Categories: mame-coffee
 * Keywords: coffee, roastery, cafe
 * Viewport Width: 1440
 * Description: People page: side label, a wide and a narrow person card, hairline rows for the rest of the team.
 */
$t = 'mame_coffee_t';
echo mc_pagehead( '11-cupping.webp', $t( 'img_11' ), '10-ines.webp', $t( 'ppl_narrow_alt' ), $t( 'people_title' ), $t( 'people_intro' ) ) . "\n\n";
echo mc_open( 'mc-sec mc-inner', 'section', 'full' ) . "\n" . mc_open( 'mc-wrap mc-side-grid' ) . "\n";
echo mc_p( 'mc-side', $t( 'people_label' ) ) . "\n\n" . mc_open( 'mc-side-main' ) . "\n";
echo mc_open( 'mc-grid mc-grid--3 sp-stagger' ) . "\n";
echo mc_open( 'mc-card mc-card--wide sp-reveal sp-reveal--up' ) . "\n" . mc_rule() . "\n\n" . mc_title_row( $t( 'tomas_title' ), '/origins/' ) . "\n\n" . mc_p( 'mc-card__line', $t( 'tomas_line' ) ) . "\n\n" . mc_panel( '14-trip.webp', $t( 'img_14' ), '', 'mc-panel--wide' ) . "\n" . mc_close() . "\n\n";
echo mc_open( 'mc-card sp-reveal sp-reveal--up' ) . "\n" . mc_rule() . "\n\n" . mc_title_row( $t( 'lena_title' ), '/bar/' ) . "\n\n" . mc_p( 'mc-card__line', $t( 'lena_line' ) ) . "\n\n" . mc_panel( '16-lena.webp', $t( 'img_16' ) ) . "\n" . mc_close() . "\n";
echo mc_close() . "\n\n" . mc_open( 'mc-srows' ) . "\n" . mc_srow( $t( 'people_h1' ), $t( 'people_b1' ) ) . "\n" . mc_close() . "\n\n";
echo mc_open( 'mc-rows mc-rows--team' ) . "\n";
for ( $i = 1; $i <= 5; $i++ ) {
	echo mc_open( 'mc-row' ) . "\n" . mc_p( 'mc-row__a', $t( "team_{$i}_role" ) ) . "\n\n" . mc_p( 'mc-row__b', $t( "team_{$i}_n" ) ) . "\n\n" . mc_p( 'mc-row__c', $t( "team_{$i}_d" ) ) . "\n" . mc_close() . "\n\n";
}
echo mc_close() . "\n\n" . mc_open( 'mc-srows' ) . "\n" . mc_srow( $t( 'people_h2' ), $t( 'people_b2' ) ) . "\n\n" . mc_srow( $t( 'people_h3' ), $t( 'people_b3' ) ) . "\n" . mc_close() . "\n";
echo mc_close() . "\n" . mc_close() . "\n" . mc_close( 'section' ) . "\n\n";
echo mc_closing( $t( 'people_close' ), '/visit/', $t( 'people_close_more' ) );
