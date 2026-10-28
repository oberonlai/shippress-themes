<?php
/**
 * Title: Home: lots
 * Slug: mame-coffee/front-lots
 * Categories: mame-coffee
 * Keywords: coffee, roastery, cafe
 * Viewport Width: 1440
 * Description: Four lots on the bar as rule-topped columns: broken 3px rule, round outline arrow, grey bag panel with a chip, and Sweetness / Acidity / Body block bars.
 */
$t    = 'mame_coffee_t';
$lots = array(
	array( 1, '04-lot-kiamara.webp', 3, 5, 3, '€17' ),
	array( 2, '05-lot-altorocio.webp', 4, 3, 3, '€15' ),
	array( 3, '06-lot-harabura.webp', 5, 3, 2, '€16' ),
	array( 4, '07-lot-mirador.webp', 4, 2, 4, '€18' ),
);
echo mc_open( 'mc-sec mc-lots', 'section', 'full' ) . "\n" . mc_open( 'mc-wrap' ) . "\n";
echo mc_p( 'mc-label', $t( 'lots_label' ) ) . "\n\n";
echo mc_open( 'mc-grid mc-grid--4 sp-stagger' ) . "\n";
foreach ( $lots as $i => $l ) {
	$k = $l[0];
	echo mc_open( 'mc-card sp-reveal sp-reveal--up' ) . "\n";
	echo mc_rule() . "\n\n";
	echo mc_title_row( $t( "lots_{$k}_name" ), '/lots/' ) . "\n\n";
	echo mc_p( 'mc-card__line', $t( "lots_{$k}_line" ) ) . "\n\n";
	echo mc_panel( $l[1], $t( "lots_{$k}_alt" ), $t( "lots_{$k}_chip" ) ) . "\n\n";
	echo mc_open( 'mc-rate' ) . "\n" . mc_rating( $t( 'lots_sweet' ), $l[2] ) . "\n\n" . mc_rating( $t( 'lots_acid' ), $l[3] ) . "\n\n" . mc_rating( $t( 'lots_body' ), $l[4] ) . "\n" . mc_close() . "\n\n";
	echo mc_p( 'mc-card__text', $t( "lots_{$k}_text" ) ) . "\n\n";
	echo mc_p( 'mc-card__price', $l[5] . ' <small>' . $t( 'lots_per' ) . '</small>' ) . "\n";
	echo mc_close() . "\n\n";
}
echo mc_close() . "\n\n";
echo mc_open( 'mc-foot' ) . "\n" . mc_more( '/lots/', $t( 'lots_more' ) ) . "\n" . mc_close() . "\n";
echo mc_close() . "\n" . mc_close( 'section' );
