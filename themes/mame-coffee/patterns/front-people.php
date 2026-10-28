<?php
/**
 * Title: Home: people
 * Slug: mame-coffee/front-people
 * Categories: mame-coffee
 * Keywords: coffee, roastery, cafe
 * Viewport Width: 1440
 * Description: Rotated side label, a wide and a narrow rule card (who roasts) and hairline schedule rows.
 */
$t = 'mame_coffee_t';
echo mc_open( 'mc-sec mc-people', 'section', 'full' ) . "\n" . mc_open( 'mc-wrap mc-side-grid' ) . "\n";
echo mc_p( 'mc-side', $t( 'ppl_label' ) ) . "\n\n";
echo mc_open( 'mc-side-main' ) . "\n";
echo mc_open( 'mc-grid mc-grid--3 sp-stagger' ) . "\n";
echo mc_open( 'mc-card mc-card--wide sp-reveal sp-reveal--up' ) . "\n" . mc_rule() . "\n\n" . mc_title_row( $t( 'ppl_wide_title' ), '/roastery/' ) . "\n\n" . mc_p( 'mc-card__line', $t( 'ppl_wide_line' ) ) . "\n\n" . mc_panel( '11-cupping.webp', $t( 'ppl_wide_alt' ), '', 'mc-panel--wide' ) . "\n" . mc_close() . "\n\n";
echo mc_open( 'mc-card sp-reveal sp-reveal--up' ) . "\n" . mc_rule() . "\n\n" . mc_title_row( $t( 'ppl_narrow_title' ), '/people/' ) . "\n\n" . mc_p( 'mc-card__line', $t( 'ppl_narrow_line' ) ) . "\n\n" . mc_panel( '10-ines.webp', $t( 'ppl_narrow_alt' ) ) . "\n" . mc_close() . "\n";
echo mc_close() . "\n\n";
echo mc_p( 'mc-para', $t( 'ppl_wide_text' ) ) . "\n\n";
echo mc_open( 'mc-rows' ) . "\n";
for ( $i = 1; $i <= 4; $i++ ) {
	echo mc_open( 'mc-row' ) . "\n" . mc_p( 'mc-row__a', $t( "ppl_r{$i}_when" ) ) . "\n\n" . mc_p( 'mc-row__b', $t( "ppl_r{$i}_who" ) ) . "\n\n" . mc_p( 'mc-row__c', $t( "ppl_r{$i}_what" ) ) . "\n" . mc_close() . "\n\n";
}
echo mc_close() . "\n";
echo mc_close() . "\n";
echo mc_close() . "\n" . mc_close( 'section' );
