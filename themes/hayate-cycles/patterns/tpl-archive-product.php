<?php
/**
 * Title: Template: archive-product
 * Slug: hayate-cycles/tpl-archive-product
 * Categories: hayate-cycles
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"hc-main","layout":{"type":"constrained"}} -->
<main class="wp-block-group hc-main"><!-- wp:group {"align":"full","className":"hc-pagehead","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hc-pagehead"><!-- wp:heading {"level":1,"className":"hc-pagehead__title"} -->
<h1 class="wp-block-heading hc-pagehead__title"><?php echo wp_kses_post( hayate_cycles_t( 'k9f82518d' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"hc-pagebody","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hc-pagebody"><!-- wp:woocommerce/store-notices /-->

<!-- wp:woocommerce/product-results-count /-->

<!-- wp:woocommerce/catalog-sorting /-->

<!-- wp:woocommerce/product-collection {"queryId":10,"query":{"perPage":12,"pages":1,"offset":0,"postType":"product","order":"asc","orderBy":"menu_order","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":{},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"tagName":"div","displayLayout":{"type":"flex","columns":3,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"queryContextIncludes":["collection"],"className":"hc-grid"} -->
<div class="wp-block-woocommerce-product-collection hc-grid"><!-- wp:woocommerce/product-template -->
<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"single","isDescendentOfQueryLoop":true,"aspectRatio":"4/5","className":"hc-product__img"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"hc-product__name","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"className":"hc-product__price"} /-->
<!-- /wp:woocommerce/product-template --></div>
<!-- /wp:woocommerce/product-collection --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->