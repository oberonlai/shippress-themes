<?php
/**
 * Title: Header: logo blob and top bar
 * Slug: madoka-childcare/header-main
 * Categories: madoka-childcare
 * Description: Walnut logo blob stuck to the top-left corner, the menu at the right and the fixed round badge.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"className":"mc-bar","layout":{"type":"default"}} -->
<div class="wp-block-group mc-bar"><!-- wp:paragraph {"className":"mc-logo"} -->
<p class="mc-logo"><a href="/"><small><?php echo esc_html( madoka_childcare_t( 'logo_small' ) ); ?></small><span><?php echo esc_html( madoka_childcare_t( 'logo_a' ) ); ?></span><span><?php echo esc_html( madoka_childcare_t( 'logo_b' ) ); ?></span></a></p>
<!-- /wp:paragraph -->

<!-- wp:navigation {"overlayMenu":"mobile","className":"mc-nav","layout":{"type":"flex","justifyContent":"right"}} /-->

<?php echo madoka_childcare_badge( 'mc-badge--fixed' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:group -->
