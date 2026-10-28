<?php
/**
 * Title: Footer
 * Slug: yoru-bar/foot-main
 * Categories: yoru-bar
 * Keywords: bar, footer
 * Viewport Width: 1440
 * Description: Centred tan moon ring and wordmark, one row of links over a hairline, address, hours and the age line.
 */
?>
<!-- wp:group {"className":"yb-foot__inner","layout":{"type":"default"}} -->
<div class="wp-block-group yb-foot__inner"><!-- wp:html -->
<?php echo yoru_bar_moon( 80, 'ft', 'yb-moon yb-foot__moon' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<!-- /wp:html -->

<!-- wp:site-title {"level":0,"className":"yb-foot__mark"} /-->

<!-- wp:navigation {"overlayMenu":"never","className":"yb-foot__nav","layout":{"type":"flex","justifyContent":"center"}} /-->

<!-- wp:paragraph {"className":"yb-foot__address"} -->
<p class="yb-foot__address"><?php echo esc_html( yoru_bar_t( 'foot_address' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yb-foot__legal"} -->
<p class="yb-foot__legal"><?php echo esc_html( yoru_bar_t( 'foot_legal' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
