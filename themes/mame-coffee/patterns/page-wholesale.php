<?php
/**
 * Title: Page: Wholesale
 * Slug: mame-coffee/page-wholesale
 * Categories: mame-coffee
 * Keywords: coffee, roastery, cafe
 * Viewport Width: 1440
 * Description: Wholesale page: a bag panel beside a wide ruled column, terms as hairline rows, two ruled columns.
 */
$t = 'mame_coffee_t';
echo mc_pagehead( '12-bar.webp', $t( 'visit_alt' ), '17-cup.webp', $t( 'img_17' ), $t( 'wholesale_title' ), $t( 'wholesale_intro' ), true ) . "\n\n";
echo mc_open( 'mc-sec mc-inner', 'section', 'full' ) . "\n" . mc_open( 'mc-wrap mc-grid mc-grid--4 sp-stagger' ) . "\n";
echo mc_open( 'mc-card sp-reveal sp-reveal--up' ) . "\n" . mc_rule() . "\n\n" . mc_title_row( $t( 'lots_1_name' ), '/lots/' ) . "\n\n" . mc_p( 'mc-card__line', $t( 'wh_line' ) ) . "\n\n" . mc_panel( '04-lot-kiamara.webp', $t( 'lots_1_alt' ), $t( 'wh_chip' ) ) . "\n" . mc_close() . "\n\n";
echo mc_sect( $t( 'wholesale_h1' ), $t( 'wholesale_b1' ), 'mc-card--span3 sp-reveal sp-reveal--up' ) . "\n";
echo mc_close() . "\n" . mc_close( 'section' ) . "\n\n";
echo mc_open( 'mc-sec mc-inner', 'section', 'full' ) . "\n" . mc_open( 'mc-wrap mc-side-grid' ) . "\n";
echo mc_p( 'mc-side', $t( 'wh_label' ) ) . "\n\n" . mc_open( 'mc-side-main' ) . "\n" . mc_open( 'mc-rows mc-rows--terms' ) . "\n";
for ( $i = 1; $i <= 6; $i++ ) {
	echo mc_open( 'mc-row' ) . "\n" . mc_p( 'mc-row__a', $t( "wh_{$i}_k" ) ) . "\n\n" . mc_p( 'mc-row__b', $t( "wh_{$i}_v" ) ) . "\n\n" . mc_p( 'mc-row__c', $t( "wh_{$i}_d" ) ) . "\n" . mc_close() . "\n\n";
}
echo mc_close() . "\n";
echo mc_close() . "\n" . mc_close() . "\n" . mc_close( 'section' ) . "\n\n";
echo mc_open( 'mc-sec mc-inner', 'section', 'full' ) . "\n" . mc_open( 'mc-wrap mc-grid mc-grid--4' ) . "\n";
echo mc_sect( $t( 'wholesale_h2' ), $t( 'wholesale_b2' ), 'mc-card--wide' ) . "\n\n" . mc_sect( $t( 'wholesale_h3' ), $t( 'wholesale_b3' ), 'mc-card--wide' ) . "\n";
echo mc_close() . "\n" . mc_close( 'section' ) . "\n\n";
echo mc_closing( $t( 'wholesale_close' ), '/visit/', $t( 'wholesale_close_more' ) );
