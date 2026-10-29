<?php
/**
 * Title: Template: single-product
 * Slug: tsuya-jewellers/tpl-single-product
 * Categories: tsuya-jewellers
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"ts-main","layout":{"type":"default"}} -->
<main class="wp-block-group ts-main"><!-- wp:group {"className":"ts-product","layout":{"type":"default"}} -->
<div class="wp-block-group ts-product"><!-- wp:woocommerce/breadcrumbs /-->

<!-- wp:woocommerce/store-notices /-->

<!-- wp:group {"className":"ts-product__main","layout":{"type":"default"}} -->
<div class="wp-block-group ts-product__main"><!-- wp:woocommerce/product-image-gallery /-->

<!-- wp:group {"className":"ts-product__summary","layout":{"type":"default"}} -->
<div class="wp-block-group ts-product__summary"><!-- wp:post-title {"level":1,"className":"ts-product__title","__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfSingleProductTemplate":true,"className":"ts-price"} /-->

<!-- wp:post-excerpt {"excerptLength":100,"__woocommerceNamespace":"woocommerce/product-query/product-summary"} /-->

<!-- wp:woocommerce/add-to-cart-form /-->

<!-- wp:paragraph {"className":"ts-link"} -->
<p class="ts-link"><?php echo wp_kses_post( tsuya_jewellers_t( 'k0039b362' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:woocommerce/product-details /--></div>
<!-- /wp:group --></main>
<!-- /wp:group -->