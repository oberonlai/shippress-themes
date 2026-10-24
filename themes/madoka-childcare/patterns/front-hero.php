<?php
/**
 * Title: Home: torn-frame hero
 * Slug: madoka-childcare/front-hero
 * Categories: madoka-childcare
 * Description: Header-height torn photo frame with the headline on the pale right, a dotted link and the round badge on small screens.
 * Viewport Width: 1440
 */
$t = 'madoka_childcare_t';
?>
<?php
$h1  = implode( '<br>', array_map( 'esc_html', explode( "\n", $t( 'hero_h' ) ) ) );
$txt = '<!-- wp:heading {"level":1,"className":"mc-hero__h"} -->' . "\n" . '<h1 class="wp-block-heading mc-hero__h">' . $h1 . '</h1>' . "\n" . '<!-- /wp:heading -->'
	. "\n\n" . madoka_childcare_text( 'hero_p', 'mc-lead' )
	. "\n\n" . madoka_childcare_link( $t( 'hero_cta' ), '/the-care-day/' )
	. "\n\n" . madoka_childcare_badge( 'mc-badge--inline' );
echo madoka_childcare_group(
	madoka_childcare_group( madoka_childcare_photo( 'p01.webp', $t( 'alt_p01' ), 'mc-hero__img' ), 'mc-hero__frame sp-parallax' )
	. "\n\n" . madoka_childcare_group( $txt, 'mc-hero__text' ),
	'mc-hero',
	'section',
	'"align":"full"'
); // phpcs:ignore WordPress.Security.EscapeOutput
