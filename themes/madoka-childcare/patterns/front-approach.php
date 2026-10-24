<?php
/**
 * Title: Home: approach
 * Slug: madoka-childcare/front-approach
 * Categories: madoka-childcare
 * Description: One photograph at the left, stripe heading and two paragraphs at the right.
 * Viewport Width: 1440
 */
$t = 'madoka_childcare_t';
?>
<?php
$text = madoka_childcare_heading( $t( 'app_h' ), 2, 'mc-stripe--white sp-reveal sp-reveal--wipe' )
	. "\n\n" . madoka_childcare_text( 'app_p1' ) . "\n\n" . madoka_childcare_text( 'app_p2' )
	. "\n\n" . madoka_childcare_link( $t( 'app_cta' ), '/rooms/' );
echo madoka_childcare_group(
	madoka_childcare_group( madoka_childcare_photo( 'p04.webp', $t( 'alt_p04' ), 'mc-approach__img' ) . "\n\n" . madoka_childcare_group( $text, 'mc-approach__t' ), 'mc-wrap mc-approach__grid' ),
	'mc-sec mc-sec--s mc-approach',
	'section',
	'"align":"full"'
); // phpcs:ignore WordPress.Security.EscapeOutput
