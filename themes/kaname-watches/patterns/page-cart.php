<?php
/**
 * Title: Cart
 * Slug: kaname-watches/page-cart
 * Categories: kaname-watches
 * Keywords: watch, shop
 * Viewport Width: 1440
 * Description: Cart page: title bar on a kuro-cha strip and a short note (the WooCommerce cart takes over when the plugin is active).
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kw-hero kw-hero--cart","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kw-hero kw-hero--cart"><!-- wp:group {"className":"kw-bar-cap kw-bar-cap--kuro","layout":{"type":"default"}} -->
<div class="wp-block-group kw-bar-cap kw-bar-cap--kuro"><!-- wp:heading {"level":1,"className":"kw-bar-cap__name"} -->
<h1 class="wp-block-heading kw-bar-cap__name"><?php echo wp_kses_post( kaname_watches_t( 'k0ea7f052' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kw-bar-cap__line"} -->
<p class="kw-bar-cap__line"><?php echo wp_kses_post( kaname_watches_t( 'kc6cce174' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kw-sec kw-intro","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kw-sec kw-intro"><!-- wp:paragraph {"className":"kw-lead kw-lead--center"} -->
<p class="kw-lead kw-lead--center"><?php echo wp_kses_post( kaname_watches_t( 'ka2263340' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kw-center","layout":{"type":"default"}} -->
<div class="wp-block-group kw-center"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/shop/"><?php echo wp_kses_post( kaname_watches_t( 'ked9bce26' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
