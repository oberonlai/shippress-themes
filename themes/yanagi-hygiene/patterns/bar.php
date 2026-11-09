<?php
/**
 * Title: Sticky request bar
 * Slug: yanagi-hygiene/bar
 * Categories: yanagi-hygiene
 * Keywords: pest control, commercial, landing
 * Viewport Width: 1440
 * Description: Bottom bar with the pentagon request tab and one info tile; it pins to the bottom of the window from the sites section on.
 */
?>
<!-- wp:group {"align":"full","className":"yh-bar","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull yh-bar"><!-- wp:group {"className":"yh-bar__in","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group yh-bar__in"><?php echo yh_pent( 'm', 'yh-pent--bar' ); // phpcs:ignore WordPress.Security.EscapeOutput ?><!-- wp:group {"className":"yh-bar__tile","layout":{"type":"default"}} -->
<div class="wp-block-group yh-bar__tile"><!-- wp:paragraph {"className":"yh-bar__cap"} -->
<p class="yh-bar__cap"><?php echo esc_html( yh_t( 'bar_cap' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"yh-bar__txt"} -->
<p class="yh-bar__txt"><?php echo esc_html( yh_t( 'bar_desk' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
