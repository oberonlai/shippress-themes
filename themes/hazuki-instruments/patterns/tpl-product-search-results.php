<?php
/**
 * Title: Template: product-search-results
 * Slug: hazuki-instruments/tpl-product-search-results
 * Categories: hazuki-instruments
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"hz-main","style":{"spacing":{"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group hz-main" style="margin-top:0"><!-- wp:group {"tagName":"section","align":"full","className":"hz-section hz-section--opening hz-page-head hz-shop-head","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hz-section hz-section--opening hz-page-head hz-shop-head"><!-- wp:woocommerce/breadcrumbs {"align":"wide","className":"hz-crumbs"} /-->

<!-- wp:group {"align":"wide","className":"hz-opening","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hz-opening"><!-- wp:group {"className":"hz-opening__title","layout":{"type":"default"}} -->
<div class="wp-block-group hz-opening__title"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( hazuki_instruments_t( 'ka11767b6' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"search"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-opening__side","layout":{"type":"default"}} -->
<div class="wp-block-group hz-opening__side"><!-- wp:paragraph {"className":"is-style-fine"} -->
<p class="is-style-fine"><?php echo wp_kses_post( hazuki_instruments_t( 'kcc225034' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:woocommerce/product-categories {"hasCount":false,"hasEmpty":false,"isHierarchical":false,"className":"hz-shop-chips"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hz-section hz-section--flush-top","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hz-section hz-section--flush-top"><!-- wp:woocommerce/store-notices {"align":"wide"} /-->

<!-- wp:group {"align":"wide","className":"hz-shop-bar","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide hz-shop-bar"><!-- wp:woocommerce/product-results-count /-->

<!-- wp:woocommerce/catalog-sorting /--></div>
<!-- /wp:group -->

<!-- wp:woocommerce/product-collection {"queryId":0,"query":{"woocommerceAttributes":[],"woocommerceStockStatus":["instock","outofstock","onbackorder"],"taxQuery":{},"isProductCollectionBlock":true,"perPage":12,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"menu_order","author":"","search":"","exclude":[],"sticky":"","inherit":true},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"convertedFromProducts":false,"queryContextIncludes":["collection"],"align":"wide","className":"hz-products"} -->
<div class="wp-block-woocommerce-product-collection alignwide hz-products"><!-- wp:woocommerce/product-template -->
<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"aspectRatio":"4/3","className":"hz-product__image"} -->
<!-- wp:woocommerce/product-sale-badge {"isDescendentOfQueryLoop":true,"align":"left"} /-->
<!-- /wp:woocommerce/product-image -->

<!-- wp:post-terms {"term":"product_cat","className":"hz-product__cat"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"hz-product__title","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"className":"hz-product__price"} /-->

<!-- wp:woocommerce/product-button {"isDescendentOfQueryLoop":true,"className":"hz-product__button"} /-->
<!-- /wp:woocommerce/product-template -->

<!-- wp:query-pagination {"className":"hz-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":"<?php echo esc_attr( hazuki_instruments_t( 'add1f775e' ) ); ?>"} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":"<?php echo esc_attr( hazuki_instruments_t( 'a10ac3d04' ) ); ?>"} /-->
<!-- /wp:query-pagination -->

<!-- wp:woocommerce/product-collection-no-results -->
<!-- wp:group {"className":"hz-stack","layout":{"type":"default"}} -->
<div class="wp-block-group hz-stack"><!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( hazuki_instruments_t( 'kf93d030c' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php echo esc_attr( hazuki_instruments_t( 'a900e2cba' ) ); ?>","showLabel":false,"placeholder":"String, bow, tuner…","buttonText":"<?php echo esc_attr( hazuki_instruments_t( 'a13348442' ) ); ?>","query":{"post_type":"product"},"className":"hz-search-form"} /--></div>
<!-- /wp:group -->
<!-- /wp:woocommerce/product-collection-no-results --></div>
<!-- /wp:woocommerce/product-collection --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->