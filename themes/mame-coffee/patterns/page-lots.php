<?php
/**
 * Title: Page: Lots
 * Slug: mame-coffee/page-lots
 * Categories: mame-coffee
 * Keywords: coffee, roastery, cafe
 * Viewport Width: 1440
 * Description: Lots page: four full rule columns with rating bars, past lots as hairline rows, a parallax cupping photograph.
 */
$t = 'mame_coffee_t';
$lots = array(
	array( 1, '04-lot-kiamara.webp', 3, 5, 3, '€17' ),
	array( 2, '05-lot-altorocio.webp', 4, 3, 3, '€15' ),
	array( 3, '06-lot-harabura.webp', 5, 3, 2, '€16' ),
	array( 4, '07-lot-mirador.webp', 4, 2, 4, '€18' ),
);
echo mc_pagehead( '01-hall.webp', $t( 'hero_alt_bg' ), '15-cooling.webp', $t( 'img_15' ), $t( 'lots_title' ), $t( 'lots_intro' ) ) . "\n\n";
echo mc_open( 'mc-sec mc-inner', 'section', 'full' ) . "\n" . mc_open( 'mc-wrap' ) . "\n";
echo mc_p( 'mc-label', $t( 'lots_label' ) ) . "\n\n";
echo mc_open( 'mc-grid mc-grid--4 sp-stagger' ) . "\n";
foreach ( $lots as $l ) {
	$k = $l[0];
	echo mc_open( 'mc-card sp-reveal sp-reveal--up' ) . "\n" . mc_rule() . "\n\n" . mc_title_row( $t( "lots_{$k}_name" ), '/origins/' ) . "\n\n" . mc_p( 'mc-card__line', $t( "lots_{$k}_line" ) ) . "\n\n" . mc_panel( $l[1], $t( "lots_{$k}_alt" ), $t( "lots_{$k}_chip" ) ) . "\n\n";
	echo mc_open( 'mc-rate' ) . "\n" . mc_rating( $t( 'lots_sweet' ), $l[2] ) . "\n\n" . mc_rating( $t( 'lots_acid' ), $l[3] ) . "\n\n" . mc_rating( $t( 'lots_body' ), $l[4] ) . "\n" . mc_close() . "\n\n";
	echo mc_p( 'mc-card__text', $t( "lots_{$k}_text" ) ) . "\n\n" . mc_p( 'mc-card__price', $l[5] . ' <small>' . $t( 'lots_per' ) . '</small>' ) . "\n\n" . mc_p( 'mc-card__meta', $t( "lots_{$k}_roast" ) ) . "\n" . mc_close() . "\n\n";
}
echo mc_close() . "\n\n" . mc_open( 'mc-srows' ) . "\n" . mc_srow( $t( 'lots_h1' ), $t( 'lots_b1' ) ) . "\n" . mc_close() . "\n";
echo mc_close() . "\n" . mc_close( 'section' ) . "\n\n";
echo mc_band( '11-cupping.webp', $t( 'img_11' ), $t( 'lots_band' ) ) . "\n\n";
echo mc_open( 'mc-sec mc-inner mc-past', 'section', 'full' ) . "\n" . mc_open( 'mc-wrap mc-side-grid' ) . "\n";
echo mc_p( 'mc-side', $t( 'past_label' ) ) . "\n\n" . mc_open( 'mc-side-main' ) . "\n";
echo mc_open( 'mc-srows' ) . "\n" . mc_srow( $t( 'lots_h2' ), $t( 'lots_b2' ) ) . "\n" . mc_close() . "\n\n";
echo mc_open( 'mc-prices' ) . "\n";
for ( $i = 1; $i <= 6; $i++ ) {
	echo mc_prow( $t( "past_{$i}_n" ), $t( "past_{$i}_d" ), $t( "past_{$i}_p" ) ) . "\n\n";
}
echo mc_close() . "\n\n";
echo mc_open( 'mc-srows' ) . "\n" . mc_srow( $t( 'lots_h3' ), $t( 'lots_b3' ) ) . "\n" . mc_close() . "\n";
echo mc_close() . "\n" . mc_close() . "\n" . mc_close( 'section' ) . "\n\n";
echo mc_closing( $t( 'lots_close' ), '/bar/', $t( 'lots_close_more' ) );
