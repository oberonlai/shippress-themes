<?php
/**
 * Title: Home: the hour
 * Slug: kikin-advisors/front-hour
 * Categories: kikin-advisors
 * Keywords: pension, adviser, employer briefing
 * Viewport Width: 1440
 * Description: Badge-only left column with a vertical headline, the 60 numeral and three ruled rows with illustrations, alternating sides.
 */
?>
<!-- wp:group {"align":"full","anchor":"hour","className":"kk-sec kk-hour","layout":{"type":"default"}} -->
<div id="hour" class="wp-block-group alignfull kk-sec kk-hour"><!-- wp:group {"align":"wide","className":"kk-split","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kk-split"><!-- wp:group {"className":"kk-split__side","layout":{"type":"default"}} -->
<div class="wp-block-group kk-split__side"><?php echo kikin_advisors_badge( kikin_advisors_t( 'hour_badge' ), kikin_advisors_t( 'hour_badge_sub' ) ); ?>

<?php echo kikin_advisors_vhead( kikin_advisors_t( 'hour_head' ) ); ?></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kk-split__main","layout":{"type":"default"}} -->
<div class="wp-block-group kk-split__main"><!-- wp:paragraph {"className":"kk-hour__num sp-reveal sp-reveal--up sp-count"} -->
<p class="kk-hour__num sp-reveal sp-reveal--up sp-count"><?php echo esc_html( kikin_advisors_t( 'hour_num' ) ); ?><span class="kk-hour__unit"><?php echo esc_html( kikin_advisors_t( 'hour_unit' ) ); ?></span></p>
<!-- /wp:paragraph -->
<?php
foreach ( array( 'a' => 'k07.webp', 'b' => 'k08.webp', 'c' => 'k09.webp' ) as $k => $file ) {
	$mirror = 'b' === $k ? ' kk-hrow--flip' : '';
	echo "\n" . '<!-- wp:group {"className":"kk-hrow' . $mirror . ' sp-reveal sp-reveal--up","layout":{"type":"default"}} -->' . "\n"
		. '<div class="wp-block-group kk-hrow' . $mirror . ' sp-reveal sp-reveal--up"><!-- wp:group {"className":"kk-hrow__text","layout":{"type":"default"}} -->' . "\n"
		. '<div class="wp-block-group kk-hrow__text"><!-- wp:paragraph {"className":"kk-hrow__label"} -->' . "\n" . '<p class="kk-hrow__label">' . kikin_advisors_e( 'hour_' . $k . '_l' ) . '</p>' . "\n" . '<!-- /wp:paragraph -->' . "\n\n"
		. '<!-- wp:heading {"level":3,"className":"kk-hrow__title"} -->' . "\n" . '<h3 class="wp-block-heading kk-hrow__title">' . kikin_advisors_e( 'hour_' . $k . '_t' ) . '</h3>' . "\n" . '<!-- /wp:heading -->' . "\n\n"
		. '<!-- wp:paragraph -->' . "\n" . '<p>' . kikin_advisors_e( 'hour_' . $k . '_d' ) . '</p>' . "\n" . '<!-- /wp:paragraph --></div>' . "\n"
		. '<!-- /wp:group -->' . "\n\n"
		. kikin_advisors_figure( $file, kikin_advisors_t( 'alt_' . ( 'a' === $k ? 'k07' : ( 'b' === $k ? 'k08' : 'k09' ) ) ), 'kk-hrow__fig' ) . '</div>' . "\n"
		. '<!-- /wp:group -->' . "\n";
}
?>
<!-- wp:paragraph {"className":"kk-more"} -->
<p class="kk-more"><a href="/briefing/"><?php echo esc_html( kikin_advisors_t( 'hour_more' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
