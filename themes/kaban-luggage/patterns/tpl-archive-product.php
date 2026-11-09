<?php
/**
 * Title: Template: archive-product
 * Slug: kaban-luggage/tpl-archive-product
 * Categories: kaban-luggage
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"kl-main","layout":{"type":"constrained"}} -->
<main class="wp-block-group kl-main"><!-- wp:pattern {"slug":"kaban-luggage/tpl-head-shop"} /-->

<!-- wp:group {"tagName":"section","align":"full","className":"kl-sec kl-shopgrid","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kl-sec kl-shopgrid"><!-- wp:woocommerce/store-notices {"align":"wide"} /-->

<!-- wp:group {"align":"wide","className":"kl-shopbar","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kl-shopbar">

<!-- wp:woocommerce/product-results-count /-->

<!-- wp:woocommerce/catalog-sorting /--></div>
<!-- /wp:group -->

<!-- wp:woocommerce/product-collection {"queryId":10,"query":{"perPage":12,"pages":1,"offset":0,"postType":"product","order":"asc","orderBy":"menu_order","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":{},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"tagName":"div","displayLayout":{"type":"flex","columns":3,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"queryContextIncludes":["collection"],"align":"wide","className":"kl-grid"} -->
<div class="wp-block-woocommerce-product-collection alignwide kl-grid"><!-- wp:woocommerce/product-template -->
<!-- wp:post-terms {"term":"product_cat","className":"kl-pill"} /-->

<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"single","isDescendentOfQueryLoop":true,"aspectRatio":"4/5","className":"kl-card__photo"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"kl-card__name","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"className":"kl-card__price"} /-->
<!-- /wp:woocommerce/product-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:woocommerce/product-collection-no-results -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kaban_luggage_t( 'k5be125ad' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:woocommerce/product-collection-no-results --></div>
<!-- /wp:woocommerce/product-collection --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->