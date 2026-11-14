<?php
/**
 * Title: Header: brand, menu and call buttons
 * Slug: shiosai-resort/header-main
 * Categories: shiosai-resort
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"ss-header","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull ss-header"><!-- wp:group {"className":"ss-header__in","layout":{"type":"default"}} -->
<div class="wp-block-group ss-header__in"><!-- wp:navigation {"overlayMenu":"mobile","overlayBackgroundColor":"white","overlayTextColor":"text","className":"ss-nav","layout":{"type":"flex","orientation":"horizontal"}} /-->

<!-- wp:paragraph {"className":"ss-header__brand"} -->
<p class="ss-header__brand"><a href="/"><?php echo wp_kses_post( shiosai_resort_t( 'k01eebbb8' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ss-header__cells","layout":{"type":"default"}} -->
<div class="wp-block-group ss-header__cells"><!-- wp:paragraph {"className":"ss-cell-h ss-cell-h--pale"} -->
<p class="ss-cell-h ss-cell-h--pale"><?php echo wp_kses_post( shiosai_resort_t( 'k35818b85' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ss-cell-h ss-cell-h--ink"} -->
<p class="ss-cell-h ss-cell-h--ink"><a href="/check-dates/"><?php echo wp_kses_post( shiosai_resort_t( 'k4fa0c21a' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
