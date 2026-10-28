<?php
/**
 * Title: Home: pour
 * Slug: mame-coffee/front-pour
 * Categories: mame-coffee
 * Keywords: coffee, roastery, cafe
 * Viewport Width: 1440
 * Description: A wide photograph over three of four columns with a narrow ruled column of short bold stanzas: how a cup is poured.
 */
$t = 'mame_coffee_t';
echo mc_open( 'mc-sec mc-pour', 'section', 'full' ) . "\n" . mc_open( 'mc-wrap mc-grid mc-grid--4' ) . "\n";
echo mc_img( '08-pour.webp', $t( 'pour_alt' ), 'mc-pour__photo sp-reveal sp-reveal--wipe' ) . "\n\n";
echo mc_open( 'mc-pour__col' ) . "\n" . mc_rule() . "\n\n" . mc_h( 3, 'mc-card__title', $t( 'pour_title' ) ) . "\n\n";
for ( $i = 1; $i <= 3; $i++ ) {
	echo mc_open( 'mc-stanza' ) . "\n" . mc_p( 'mc-stanza__k', $t( "pour_{$i}_k" ) ) . "\n\n" . mc_p( 'mc-stanza__t', $t( "pour_{$i}" ) ) . "\n" . mc_close() . "\n\n";
}
echo mc_more( '/bar/', $t( 'pour_more' ) ) . "\n" . mc_close() . "\n";
echo mc_close() . "\n" . mc_close( 'section' );
