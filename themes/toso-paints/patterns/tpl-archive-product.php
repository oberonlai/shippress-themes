<?php
/**
 * Title: Template: archive-product
 * Slug: toso-paints/tpl-archive-product
 * Categories: toso-paints
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"tp-main","layout":{"type":"default"}} -->
<main class="wp-block-group tp-main"><!-- wp:group {"align":"full","className":"tp-sec tp-page tp-shop","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull tp-sec tp-page tp-shop"><!-- wp:woocommerce/breadcrumbs {"align":"wide","className":"tp-crumbs"} /-->

<!-- wp:query-title {"type":"archive","showPrefix":false,"level":1,"className":"tp-page__title"} /-->

<!-- wp:term-description /-->

<!-- wp:woocommerce/store-notices {"align":"wide"} /-->

<!-- wp:group {"align":"wide","className":"tp-shop__bar","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide tp-shop__bar"><!-- wp:woocommerce/product-results-count /-->

<!-- wp:woocommerce/catalog-sorting /--></div>
<!-- /wp:group -->

<!-- wp:woocommerce/product-collection {"queryId":0,"query":{"woocommerceAttributes":[],"woocommerceStockStatus":["instock","outofstock","onbackorder"],"taxQuery":{},"isProductCollectionBlock":true,"perPage":12,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"menu_order","author":"","search":"","exclude":[],"sticky":"","inherit":true},"tagName":"div","displayLayout":{"type":"flex","columns":3,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"convertedFromProducts":false,"queryContextIncludes":["collection"],"align":"wide","className":"tp-products"} -->
<div class="wp-block-woocommerce-product-collection alignwide tp-products"><!-- wp:woocommerce/product-template -->
<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"aspectRatio":"1/1","className":"tp-product__image"} /-->

<!-- wp:post-terms {"term":"product_cat","className":"tp-product__cat"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"tp-product__title","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"className":"tp-product__price"} /-->

<!-- wp:woocommerce/product-button {"isDescendentOfQueryLoop":true,"className":"tp-product__button"} /-->
<!-- /wp:woocommerce/product-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":"<?php echo esc_attr( toso_paints_t( 'add1f775e' ) ); ?>"} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":"<?php echo esc_attr( toso_paints_t( 'a10ac3d04' ) ); ?>"} /-->
<!-- /wp:query-pagination -->

<!-- wp:woocommerce/product-collection-no-results -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( toso_paints_t( 'kecb59f97' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:woocommerce/product-collection-no-results --></div>
<!-- /wp:woocommerce/product-collection --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->