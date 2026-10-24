<?php
/**
 * Title: Home: welcome
 * Slug: madoka-childcare/front-welcome
 * Categories: madoka-childcare
 * Description: Stripe heading, three short paragraphs and two offset photographs over flat blobs.
 * Viewport Width: 1440
 */
$t = 'madoka_childcare_t';
?>
<?php
$text = madoka_childcare_heading( $t( 'wel_h' ), 2, 'mc-stripe--white sp-reveal sp-reveal--wipe' )
	. "\n\n" . madoka_childcare_text( 'wel_p1' ) . "\n\n" . madoka_childcare_text( 'wel_p2' ) . "\n\n" . madoka_childcare_text( 'wel_p3' )
	. "\n\n" . madoka_childcare_link( $t( 'wel_cta' ), '/about/' );
$pics = madoka_childcare_photo( 'p03.webp', $t( 'alt_p03' ), 'mc-welcome__b sp-reveal sp-reveal--zoom mc-pop' )
	. "\n\n" . madoka_childcare_photo( 'p02.webp', $t( 'alt_p02' ), 'mc-welcome__a sp-reveal sp-reveal--zoom mc-pop' )
	. "\n\n" . madoka_childcare_group( '', 'mc-blob mc-blob--band' )
	. "\n\n" . madoka_childcare_group( '', 'mc-blob mc-blob--walnut' );
echo madoka_childcare_group(
	madoka_childcare_group( madoka_childcare_group( $text, 'mc-welcome__t' ) . "\n\n" . madoka_childcare_group( $pics, 'mc-welcome__p sp-stagger' ), 'mc-wrap mc-welcome__grid' ),
	'mc-sec mc-sec--l mc-welcome',
	'section',
	'"align":"full"'
); // phpcs:ignore WordPress.Security.EscapeOutput
