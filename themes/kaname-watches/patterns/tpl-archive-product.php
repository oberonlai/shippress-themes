<?php
/**
 * Title: Template: archive-product
 * Slug: kaname-watches/tpl-archive-product
 * Categories: kaname-watches
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"kw-main","layout":{"type":"constrained"}} -->
<main class="wp-block-group kw-main"><!-- wp:pattern {"slug":"kaname-watches/win-shop"} /-->

<!-- wp:group {"tagName":"section","align":"full","className":"kw-sec kw-shopsec","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kw-sec kw-shopsec"><!-- wp:woocommerce/store-notices {"align":"wide"} /-->

<!-- wp:group {"align":"wide","className":"kw-shopbar","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kw-shopbar"><!-- wp:woocommerce/product-results-count /-->

<!-- wp:woocommerce/catalog-sorting /--></div>
<!-- /wp:group -->

<!-- wp:woocommerce/product-collection {"queryId":22,"query":{"perPage":12,"pages":1,"offset":0,"postType":"product","order":"asc","orderBy":"menu_order","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":{},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"tagName":"div","displayLayout":{"type":"flex","columns":3,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"queryContextIncludes":["collection"],"align":"wide","className":"kw-wcgrid"} -->
<div class="wp-block-woocommerce-product-collection alignwide kw-wcgrid"><!-- wp:woocommerce/product-template -->
<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"single","isDescendentOfQueryLoop":true,"aspectRatio":"1/1","className":"kw-card__photo"} /-->

<!-- wp:post-terms {"term":"product_cat","className":"kw-card__tab"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"kw-card__name","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"className":"kw-card__price"} /-->
<!-- /wp:woocommerce/product-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:woocommerce/product-collection-no-results -->
<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo wp_kses_post( kaname_watches_t( 'kafca42f7' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:woocommerce/product-collection-no-results --></div>
<!-- /wp:woocommerce/product-collection --></section>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"kaname-watches/tiles-shop"} /--></main>
<!-- /wp:group -->