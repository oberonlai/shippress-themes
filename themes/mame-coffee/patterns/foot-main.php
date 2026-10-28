<?php
/**
 * Title: Footer: four columns
 * Slug: mame-coffee/foot-main
 * Categories: mame-coffee
 * Inserter: false
 */
$t = 'mame_coffee_t';
echo mc_open( 'mc-foot-wrap' ) . "\n" . mc_open( 'mc-fgrid' ) . "\n";
echo mc_open( 'mc-fcol mc-fcol--name' ) . "\n" . mc_rule() . "\n\n" . mc_p( 'mc-fname', $t( 'foot_name' ) ) . "\n" . mc_close() . "\n\n";
echo mc_open( 'mc-fcol' ) . "\n" . mc_rule() . "\n\n" . mc_p( 'mc-ftext', $t( 'foot_address' ) ) . "\n" . mc_close() . "\n\n";
echo mc_open( 'mc-fcol' ) . "\n" . mc_rule() . "\n\n" . mc_p( 'mc-ft', $t( 'foot_bar_t' ) ) . "\n\n" . mc_p( 'mc-ftext', $t( 'foot_bar' ) ) . "\n\n" . mc_p( 'mc-ft', $t( 'foot_roast_t' ) ) . "\n\n" . mc_p( 'mc-ftext', $t( 'foot_roast' ) ) . "\n" . mc_close() . "\n\n";
echo mc_open( 'mc-fcol' ) . "\n" . mc_rule() . "\n\n" . mc_p( 'mc-ft', $t( 'foot_nav_t' ) ) . "\n\n" . mc_p( 'mc-fnav', $t( 'foot_links' ) ) . "\n" . mc_close() . "\n" . mc_close() . "\n\n";
echo mc_p( 'mc-fcopy', $t( 'foot_copy' ) ) . "\n" . mc_close();
