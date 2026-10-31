<?php
/**
 * Title: Header: brand, menu and call buttons
 * Slug: mimamori-college/header-main
 * Categories: mimamori-college
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"mc-header","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull mc-header"><!-- wp:group {"className":"mc-header__top","layout":{"type":"default"}} -->
<div class="wp-block-group mc-header__top"><!-- wp:group {"className":"mc-brand","layout":{"type":"default"}} -->
<div class="wp-block-group mc-brand"><!-- wp:site-title {"level":0,"className":"mc-brand__title"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mc-header__info","layout":{"type":"default"}} -->
<div class="wp-block-group mc-header__info"><!-- wp:paragraph {"className":"mc-header__hours"} -->
<p class="mc-header__hours"><?php echo wp_kses_post( mimamori_college_t( 'k4eb9410a' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mc-dotlink mc-header__pros"} -->
<p class="mc-dotlink mc-header__pros"><a href="/contact/"><?php echo wp_kses_post( mimamori_college_t( 'kd2a7eb63' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:navigation {"overlayMenu":"mobile","className":"mc-nav","layout":{"type":"flex","orientation":"horizontal","justifyContent":"space-between"}} /--></div>
<!-- /wp:group -->
