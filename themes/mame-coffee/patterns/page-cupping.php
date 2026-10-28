<?php
/**
 * Title: Page: Cupping & classes
 * Slug: mame-coffee/page-cupping
 * Categories: mame-coffee
 * Keywords: coffee, roastery, cafe
 * Viewport Width: 1440
 * Description: Cupping page: a wide and a narrow class card, hairline price rows.
 */
$t = 'mame_coffee_t';
echo mc_pagehead( '12-bar.webp', $t( 'visit_alt' ), '11-cupping.webp', $t( 'ppl_wide_alt' ), $t( 'cupping_title' ), $t( 'cupping_intro' ) ) . "\n\n";
echo mc_open( 'mc-sec mc-inner', 'section', 'full' ) . "\n" . mc_open( 'mc-wrap' ) . "\n" . mc_open( 'mc-grid mc-grid--4 sp-stagger' ) . "\n";
echo mc_open( 'mc-card mc-card--wide sp-reveal sp-reveal--up' ) . "\n" . mc_rule() . "\n\n" . mc_title_row( $t( 'cup_a_title' ), '/visit/' ) . "\n\n" . mc_p( 'mc-card__line', $t( 'cup_a_line' ) ) . "\n\n" . mc_panel( '08-pour.webp', $t( 'pour_alt' ), '', 'mc-panel--wide' ) . "\n\n" . mc_p( 'mc-prose', $t( 'cupping_b1' ) ) . "\n" . mc_close() . "\n\n";
echo mc_open( 'mc-card mc-card--wide sp-reveal sp-reveal--up' ) . "\n" . mc_rule() . "\n\n" . mc_title_row( $t( 'cup_b_title' ), '/visit/' ) . "\n\n" . mc_p( 'mc-card__line', $t( 'cup_b_line' ) ) . "\n\n";
echo mc_open( 'mc-panel mc-panel--wide mc-panel--text' ) . "\n" . mc_p( 'mc-chip', $t( 'cup_b_chip' ) ) . "\n\n";
for ( $i = 1; $i <= 3; $i++ ) {
	echo mc_open( 'mc-stanza' ) . "\n" . mc_p( 'mc-stanza__k', $t( "pour_{$i}_k" ) ) . "\n\n" . mc_p( 'mc-stanza__t', $t( "pour_{$i}" ) ) . "\n" . mc_close() . "\n\n";
}
echo mc_close() . "\n\n" . mc_p( 'mc-prose', $t( 'cupping_b2' ) ) . "\n" . mc_close() . "\n";
echo mc_close() . "\n\n";
echo mc_rule() . "\n\n" . mc_open( 'mc-bar__head mc-bar__head--plain' ) . "\n" . mc_h( 3, 'mc-card__title', $t( 'cup_prices' ) ) . "\n" . mc_close() . "\n\n";
echo mc_open( 'mc-prices' ) . "\n" . mc_prow( $t( 'cup_a_title' ), $t( 'cup_a_d' ), '€12' ) . "\n\n" . mc_prow( $t( 'cup_b_title' ), $t( 'cup_b_d' ), '€45' ) . "\n" . mc_close() . "\n\n";
echo mc_open( 'mc-srows' ) . "\n" . mc_srow( $t( 'cupping_h3' ), $t( 'cupping_b3' ) ) . "\n" . mc_close() . "\n";
echo mc_close() . "\n" . mc_close( 'section' ) . "\n\n";
echo mc_closing( $t( 'cupping_close' ), '/visit/', $t( 'cupping_close_more' ) );
