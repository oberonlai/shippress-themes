<?php
/**
 * Title: Header bar
 * Slug: kura-wine/head-bar
 * Categories: kura-wine
 * Keywords: wine, shop, merchant
 * Viewport Width: 1440
 * Description: Seal and wordmark at the left, centred menu, language and cart at the right.
 */
?>
<!-- wp:group {"className":"kw-header__bar","layout":{"type":"default"}} -->
<div class="wp-block-group kw-header__bar"><!-- wp:site-title {"level":0,"className":"kw-mark"} /-->

<!-- wp:navigation {"overlayMenu":"mobile","className":"kw-nav","layout":{"type":"flex","orientation":"horizontal","justifyContent":"center"}} /-->

<!-- wp:group {"className":"kw-header__end","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group kw-header__end"><!-- wp:paragraph {"className":"kw-lang"} -->
<p class="kw-lang"><?php echo esc_html( kura_wine_t( 'lang_label' ) ); ?></p>
<!-- /wp:paragraph -->
<?php if ( class_exists( 'WooCommerce' ) && WP_Block_Type_Registry::get_instance()->is_registered( 'woocommerce/mini-cart' ) ) : ?>

<!-- wp:woocommerce/mini-cart {"className":"kw-cart"} /-->
<?php endif; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
