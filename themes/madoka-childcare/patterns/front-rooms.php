<?php
/**
 * Title: Home: three rooms
 * Slug: madoka-childcare/front-rooms
 * Categories: madoka-childcare
 * Description: Three equal cards, each with a photograph, a white room-name tab, a meta line and a sentence.
 * Viewport Width: 1440
 */
$t = 'madoka_childcare_t';
?>
<?php
$cards = '';
foreach ( array( 1 => array( 'p10.webp', 'alt_p10' ), 2 => array( 'p11.webp', 'alt_p11' ), 3 => array( 'p12.webp', 'alt_p12' ) ) as $n => $p ) {
	$cards .= madoka_childcare_group(
		madoka_childcare_group( madoka_childcare_photo( $p[0], $t( $p[1] ), 'mc-room__img' ) . "\n\n" . madoka_childcare_para( esc_html( $t( "room{$n}_n" ) ), 'mc-tab mc-tab--room' ), 'mc-room__ph' )
		. "\n\n" . madoka_childcare_text( "room{$n}_m", 'mc-meta' )
		. "\n\n" . madoka_childcare_text( "room{$n}_x" ),
		'mc-room sp-reveal sp-reveal--up'
	) . "\n\n";
}
echo madoka_childcare_group(
	madoka_childcare_group(
		madoka_childcare_heading( $t( 'rooms_h' ), 2, 'mc-stripe--white sp-reveal sp-reveal--wipe' )
		. "\n\n" . madoka_childcare_group( $cards, 'mc-rooms__row sp-stagger' )
		. "\n\n" . madoka_childcare_link( $t( 'rooms_cta' ), '/rooms/' ),
		'mc-wrap'
	),
	'mc-sec mc-sec--l mc-rooms',
	'section',
	'"align":"full"'
); // phpcs:ignore WordPress.Security.EscapeOutput
