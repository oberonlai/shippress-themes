<?php
/**
 * Title: Header: brand, menu and call buttons
 * Slug: kaname-watches/header-main
 * Categories: kaname-watches
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"div","align":"full","className":"kw-header","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull kw-header"><!-- wp:group {"align":"wide","className":"kw-bar","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kw-bar"><!-- wp:navigation {"overlayMenu":"mobile","className":"kw-nav","layout":{"type":"flex","flexWrap":"nowrap"}} /-->

<!-- wp:group {"className":"kw-brand","layout":{"type":"default"}} -->
<div class="wp-block-group kw-brand"><!-- wp:paragraph {"className":"kw-brand__mark"} -->
<p class="kw-brand__mark"><a href="/"><?php echo wp_kses_post( kaname_watches_t( 'k6bdfebc5' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kw-brand__sub"} -->
<p class="kw-brand__sub"><?php echo wp_kses_post( kaname_watches_t( 'k227df0f4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kw-cart"} -->
<p class="kw-cart"><a href="/cart/"><?php echo wp_kses_post( kaname_watches_t( 'k0ea7f052' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
