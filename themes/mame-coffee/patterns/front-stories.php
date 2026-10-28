<?php
/**
 * Title: Home: stories
 * Slug: mame-coffee/front-stories
 * Categories: mame-coffee
 * Keywords: coffee, roastery, cafe
 * Viewport Width: 1440
 * Description: One wide and two narrow journal cards with the rule, title, round arrow, photograph and a two-line excerpt.
 */
$t     = 'mame_coffee_t';
$cards = array(
	array( 1, '14-trip.webp', '/a-week-at-hara-bura/', ' mc-card--wide', ' mc-panel--wide' ),
	array( 2, '13-green.webp', '/sorting-by-hand/', '', '' ),
	array( 3, '15-cooling.webp', '/day-5-to-day-28/', '', '' ),
);
echo mc_open( 'mc-sec mc-stories', 'section', 'full' ) . "\n" . mc_open( 'mc-wrap' ) . "\n";
echo mc_open( 'mc-grid mc-grid--4 sp-stagger' ) . "\n";
foreach ( $cards as $c ) {
	$k = $c[0];
	echo mc_open( 'mc-card' . $c[3] . ' sp-reveal sp-reveal--up' ) . "\n" . mc_rule() . "\n\n" . mc_title_row( $t( "sto_title_{$k}" ), $c[2] ) . "\n\n" . mc_p( 'mc-card__line', $t( "sto_line_{$k}" ) ) . "\n\n" . mc_panel( $c[1], $t( "sto_alt_{$k}" ), '', trim( $c[4] ) ) . "\n\n" . mc_p( 'mc-card__text', $t( "sto_text_{$k}" ) ) . "\n" . mc_close() . "\n\n";
}
echo mc_close() . "\n\n";
echo mc_open( 'mc-foot' ) . "\n" . mc_more( '/journal/', $t( 'sto_more' ) ) . "\n" . mc_close() . "\n";
echo mc_close() . "\n" . mc_close( 'section' );
