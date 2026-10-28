<?php
/**
 * Title: Home: bar
 * Slug: mame-coffee/front-bar
 * Categories: mame-coffee
 * Keywords: coffee, roastery, cafe
 * Viewport Width: 1440
 * Description: A full-width rule and header row with a rotated side label, then the bar price list in hairline rows.
 */
$t = 'mame_coffee_t';
echo mc_open( 'mc-sec mc-bar', 'section', 'full' ) . "\n" . mc_open( 'mc-wrap' ) . "\n";
echo mc_rule() . "\n\n";
echo mc_open( 'mc-bar__head' ) . "\n" . mc_p( 'mc-side', $t( 'bar_label' ) ) . "\n\n" . mc_title_row( $t( 'bar_title' ), '/bar/', 'mc-bar__title' ) . "\n\n" . mc_p( 'mc-bar__note', $t( 'bar_note' ) ) . "\n" . mc_close() . "\n\n";
echo mc_open( 'mc-prices' ) . "\n";
for ( $i = 1; $i <= 7; $i++ ) {
	echo mc_open( 'mc-price' ) . "\n" . mc_p( 'mc-price__n', $t( "bar_{$i}_n" ) ) . "\n\n" . mc_p( 'mc-price__d', $t( "bar_{$i}_d" ) ) . "\n\n" . mc_p( 'mc-price__p', $t( "bar_{$i}_p" ) ) . "\n" . mc_close() . "\n\n";
}
echo mc_close() . "\n";
echo mc_close() . "\n" . mc_close( 'section' );
