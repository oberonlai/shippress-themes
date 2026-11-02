<?php
/**
 * Title: Template: product-search-results
 * Slug: shiki-linen/tpl-product-search-results
 * Categories: shiki-linen
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"sl-main","layout":{"type":"default"}} -->
<main class="wp-block-group sl-main"><!-- wp:group {"className":"sl-page","layout":{"type":"default"}} -->
<div class="wp-block-group sl-page"><!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php echo wp_kses_post( shiki_linen_t( 'k9f82518d' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sl-lead"} -->
<p class="sl-lead"><?php echo wp_kses_post( shiki_linen_t( 'k833ac82f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:woocommerce/store-notices /-->

<!-- wp:group {"className":"sl-shopbar","layout":{"type":"default"}} -->
<div class="wp-block-group sl-shopbar"><!-- wp:woocommerce/product-results-count /-->

<!-- wp:woocommerce/catalog-sorting /--></div>
<!-- /wp:group -->

<!-- wp:woocommerce/product-collection {"queryId":10,"query":{"perPage":12,"pages":1,"offset":0,"postType":"product","order":"asc","orderBy":"menu_order","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":{},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"tagName":"div","displayLayout":{"type":"flex","columns":3,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"queryContextIncludes":["collection"],"align":"wide","className":"sl-grid"} -->
<div class="wp-block-woocommerce-product-collection alignwide sl-grid"><!-- wp:woocommerce/product-template -->
<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"single","isDescendentOfQueryLoop":true,"aspectRatio":"7/10","className":"sl-card__photo"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"sl-card__name","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"className":"sl-card__price"} /-->
<!-- /wp:woocommerce/product-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:woocommerce/product-collection-no-results -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( shiki_linen_t( 'k7f4dd4d4' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:woocommerce/product-collection-no-results --></div>
<!-- /wp:woocommerce/product-collection --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->