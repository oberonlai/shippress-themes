<?php
/**
 * Title: Header: top bar
 * Slug: enogu-supply/header-main
 * Categories: enogu-supply
 * Inserter: no
 * Viewport Width: 1440
 * Description: Promo strip and the single top bar with the wordmark and the menu.
 */
?>
<!-- wp:group {"className":"en-header","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull en-header">
<!-- wp:group {"className":"en-strip","layout":{"type":"default"}} -->
<div class="wp-block-group en-strip">
<!-- wp:paragraph {"className":"en-strip__t"} -->
<p class="en-strip__t"><?php echo esc_html( enogu_supply_t( 'strip' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"en-strip__m"} -->
<p class="en-strip__m"><?php echo esc_html( enogu_supply_t( 'strip_m' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"en-bar","align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull en-bar">
<!-- wp:group {"className":"en-brand","layout":{"type":"default"}} -->
<div class="wp-block-group en-brand">
<!-- wp:site-title {"level":0,"className":"en-brand__title"} /-->
</div>
<!-- /wp:group -->

<!-- wp:navigation {"overlayMenu":"mobile","className":"en-nav","layout":{"type":"flex","orientation":"horizontal"}} /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
