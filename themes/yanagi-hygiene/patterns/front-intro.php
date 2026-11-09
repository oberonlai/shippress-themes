<?php
/**
 * Title: Home: treatment year
 * Slug: yanagi-hygiene/front-intro
 * Categories: yanagi-hygiene
 * Keywords: pest control, commercial, landing
 * Viewport Width: 1440
 * Description: Pale wash band with a bowl-shaped lower edge, the year in two paragraphs and an endless strip of site types.
 */
?>
<?php
$tiles = '';
for ( $i = 1; $i <= 8; $i++ ) {
	$tiles .= '<li class="yh-tile"><b>' . esc_html( yh_t( "tile{$i}_a" ) ) . '</b><span>' . esc_html( yh_t( "tile{$i}_b" ) ) . '</span></li>';
}
?>
<!-- wp:group {"anchor":"year","align":"full","className":"yh-sec yh-intro","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull yh-sec yh-intro" id="year"><!-- wp:group {"className":"yh-in","layout":{"type":"default"}} -->
<div class="wp-block-group yh-in"><?php echo yh_lock( yh_t( 'year_t' ), yh_t( 'year_s' ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<!-- wp:group {"className":"yh-col","layout":{"type":"default"}} -->
<div class="wp-block-group yh-col"><!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( yh_t( 'year_p1' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( yh_t( 'year_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:group {"align":"full","className":"yh-marquee sp-marquee","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull yh-marquee sp-marquee"><!-- wp:html -->
<ul class="yh-track"><?php echo $tiles; // phpcs:ignore WordPress.Security.EscapeOutput ?></ul>
<!-- /wp:html --><!-- wp:html -->
<ul class="yh-track" aria-hidden="true"><?php echo $tiles; // phpcs:ignore WordPress.Security.EscapeOutput ?></ul>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
