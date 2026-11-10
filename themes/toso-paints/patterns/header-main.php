<?php
/**
 * Title: Header: brand, menu and call buttons
 * Slug: toso-paints/header-main
 * Categories: toso-paints
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"tp-header","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull tp-header"><!-- wp:group {"className":"tp-header__left","layout":{"type":"default"}} -->
<div class="wp-block-group tp-header__left"><!-- wp:site-title {"level":0,"className":"tp-brand"} /-->

<!-- wp:navigation {"overlayMenu":"mobile","overlayBackgroundColor":"ground","overlayTextColor":"text","className":"tp-nav","layout":{"type":"flex","orientation":"vertical"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tp-header__right","layout":{"type":"default"}} -->
<div class="wp-block-group tp-header__right"><!-- wp:buttons {"className":"tp-btn-outline"} -->
<div class="wp-block-buttons tp-btn-outline"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="mailto:hello@tosopaints.example"><?php echo wp_kses_post( toso_paints_t( 'kb85c0c9d' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
