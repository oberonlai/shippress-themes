<?php
/**
 * Title: Page: Origins
 * Slug: mame-coffee/page-origins
 * Categories: mame-coffee
 * Keywords: coffee, roastery, cafe
 * Viewport Width: 1440
 * Description: Origins page: four producer columns with bag panels and hairline spec rows, two ruled regional columns.
 */
$t = 'mame_coffee_t';
$lots = array(
	array( 1, '04-lot-kiamara.webp', array( 3, 5, 3 ) ),
	array( 2, '05-lot-altorocio.webp', array( 4, 3, 3 ) ),
	array( 3, '06-lot-harabura.webp', array( 5, 3, 2 ) ),
	array( 4, '07-lot-mirador.webp', array( 4, 2, 4 ) ),
);
echo mc_pagehead( '03-origin.webp', $t( 'stmt_alt' ), '14-trip.webp', $t( 'img_14' ), $t( 'origins_title' ), $t( 'origins_intro' ) ) . "\n\n";
echo mc_open( 'mc-sec mc-inner', 'section', 'full' ) . "\n" . mc_open( 'mc-wrap mc-side-grid' ) . "\n";
echo mc_p( 'mc-side', $t( 'origins_label' ) ) . "\n\n" . mc_open( 'mc-side-main' ) . "\n" . mc_open( 'mc-srows mc-srows--first' ) . "\n" . mc_srow( $t( 'origins_h1' ), $t( 'origins_b1' ) ) . "\n" . mc_close() . "\n";
echo mc_close() . "\n" . mc_close() . "\n" . mc_close( 'section' ) . "\n\n";
echo mc_open( 'mc-sec mc-inner', 'section', 'full' ) . "\n" . mc_open( 'mc-wrap' ) . "\n" . mc_open( 'mc-grid mc-grid--4 sp-stagger' ) . "\n";
foreach ( $lots as $l ) {
	$k = $l[0];
	echo mc_open( 'mc-card sp-reveal sp-reveal--up' ) . "\n" . mc_rule() . "\n\n" . mc_title_row( $t( "lots_{$k}_name" ), '/lots/' ) . "\n\n" . mc_p( 'mc-card__line', $t( "origin_{$k}_line" ) ) . "\n\n" . mc_panel( $l[1], $t( "lots_{$k}_alt" ), $t( "lots_{$k}_chip" ) ) . "\n\n";
	echo mc_open( 'mc-specs' ) . "\n" . mc_spec( $t( 'spec_country' ), $t( "origin_{$k}_country" ) ) . "\n\n" . mc_spec( $t( 'spec_region' ), $t( "origin_{$k}_region" ) ) . "\n\n" . mc_spec( $t( 'spec_alt' ), $t( "origin_{$k}_alt" ) ) . "\n\n" . mc_spec( $t( 'spec_process' ), $t( "origin_{$k}_process" ) ) . "\n\n" . mc_spec( $t( 'spec_roast' ), $t( "origin_{$k}_roast" ) ) . "\n\n" . mc_spec( $t( 'spec_cup' ), implode( ' / ', $l[2] ) ) . "\n" . mc_close() . "\n" . mc_close() . "\n\n";
}
echo mc_close() . "\n\n" . mc_open( 'mc-grid mc-grid--4 mc-grid--after' ) . "\n";
echo mc_sect( $t( 'origins_h2' ), $t( 'origins_b2' ), 'mc-card--wide' ) . "\n\n" . mc_sect( $t( 'origins_h3' ), $t( 'origins_b3' ), 'mc-card--wide' ) . "\n" . mc_close() . "\n";
echo mc_close() . "\n" . mc_close( 'section' ) . "\n\n";
echo mc_closing( $t( 'origins_close' ), '/lots/', $t( 'origins_close_more' ) );
