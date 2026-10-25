<?php
/**
 * Title: Template: archive-product
 * Slug: tsubaki-flowers/tpl-archive-product
 * Categories: tsubaki-flowers
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"tf-main tf-main--inner","layout":{"type":"default"}} -->
<main class="wp-block-group tf-main tf-main--inner"><!-- wp:group {"className":"tf-shop-head","layout":{"type":"default"}} -->
<div class="wp-block-group tf-shop-head"><!-- wp:heading {"level":1,"className":"tf-h1"} -->
<h1 class="wp-block-heading tf-h1"><?php echo wp_kses_post( tsubaki_flowers_t( 'k9f82518d' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tf-lead"} -->
<p class="tf-lead"><?php echo wp_kses_post( tsubaki_flowers_t( 'k18809c8a' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:woocommerce/store-notices /--></div>
<!-- /wp:group -->

<!-- wp:woocommerce/product-collection {"queryId":0,"query":{"perPage":12,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"menu_order","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":{},"isProductCollectionBlock":true,"woocommerceAttributes":[],"woocommerceStockStatus":["instock","outofstock","onbackorder"]},"tagName":"div","displayLayout":{"type":"flex","columns":3,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"queryContextIncludes":["collection"],"align":"full","className":"tf-products"} -->
<div class="wp-block-woocommerce-product-collection alignfull tf-products"><!-- wp:woocommerce/product-template -->
<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"thumbnail","isDescendentOfQueryLoop":true} /-->

<!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center"} /-->

<!-- wp:woocommerce/product-button {"isDescendentOfQueryLoop":true,"textAlign":"center"} /-->
<!-- /wp:woocommerce/product-template --></div>
<!-- /wp:woocommerce/product-collection --></main>
<!-- /wp:group -->