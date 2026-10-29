<?php
/**
 * Title: Template: archive-product
 * Slug: tsuya-jewellers/tpl-archive-product
 * Categories: tsuya-jewellers
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"ts-main","layout":{"type":"default"}} -->
<main class="wp-block-group ts-main"><!-- wp:pattern {"slug":"tsuya-jewellers/head-pieces"} /-->

<!-- wp:group {"className":"ts-body ts-wide ts-shop","layout":{"type":"default"}} -->
<div class="wp-block-group ts-body ts-wide ts-shop"><!-- wp:html -->
<p class="ts-filters"><a href="/shop/"><?php echo wp_kses_post( tsuya_jewellers_t( 'kb1c94ca2' ) ); ?></a> · <a href="/product-category/rings/"><?php echo wp_kses_post( tsuya_jewellers_t( 'k727163e4' ) ); ?></a> · <a href="/product-category/chains/"><?php echo wp_kses_post( tsuya_jewellers_t( 'k6cbe70a2' ) ); ?></a> · <a href="/product-category/studs/"><?php echo wp_kses_post( tsuya_jewellers_t( 'k3bbf0169' ) ); ?></a> · <a href="/product-category/pendants/"><?php echo wp_kses_post( tsuya_jewellers_t( 'k03d78748' ) ); ?></a></p>
<!-- /wp:html -->

<!-- wp:woocommerce/store-notices /-->

<!-- wp:woocommerce/product-collection {"queryId":10,"query":{"perPage":12,"pages":1,"offset":0,"postType":"product","order":"asc","orderBy":"menu_order","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":{},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"queryContextIncludes":["collection"],"align":"wide","className":"ts-shop"} -->
<div class="wp-block-woocommerce-product-collection alignwide"><!-- wp:woocommerce/product-template -->
<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"single","isDescendentOfQueryLoop":true,"aspectRatio":"3/4"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true} /-->
<!-- /wp:woocommerce/product-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:woocommerce/product-collection --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"tsuya-jewellers/text-pieces"} /--></main>
<!-- /wp:group -->