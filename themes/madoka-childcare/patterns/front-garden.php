<?php
/**
 * Title: Home: garden parallax band
 * Slug: madoka-childcare/front-garden
 * Categories: madoka-childcare
 * Description: Full-bleed parallax garden photograph with torn edges and a light card carrying one parent's words.
 * Viewport Width: 1440
 */
$t = 'madoka_childcare_t';
?>
<?php
$card = madoka_childcare_para( esc_html( $t( 'gar_tab' ) ), 'mc-tab mc-tab--small' )
	. "\n\n" . madoka_childcare_text( 'gar_q', 'mc-quote' )
	. "\n\n" . madoka_childcare_text( 'gar_n', 'mc-garden__name' )
	. "\n\n" . madoka_childcare_link( $t( 'gar_cta' ), '/stories/' );
echo madoka_childcare_group(
	madoka_childcare_photo( 'p13.webp', $t( 'alt_p13' ), 'mc-garden__img' )
	. "\n\n" . madoka_childcare_group( madoka_childcare_group( $card, 'mc-garden__card' ), 'mc-wrap mc-garden__in' ),
	'mc-garden mc-garden-torn sp-parallax',
	'section',
	'"align":"full"'
); // phpcs:ignore WordPress.Security.EscapeOutput
