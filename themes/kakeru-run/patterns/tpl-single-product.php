<?php
/**
 * Title: Template: single-product
 * Slug: kakeru-run/tpl-single-product
 * Categories: kakeru-run
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"kr-main","layout":{"type":"default"}} -->
<main class="wp-block-group kr-main"><!-- wp:woocommerce/store-notices {"align":"wide"} /-->

<!-- wp:group {"align":"full","className":"kr-row kr-info kr-product-main","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kr-row kr-info kr-product-main"><!-- wp:group {"className":"kr-rail kr-rail--l kr-rail--slash kr-rail--fill","layout":{"type":"default"}} -->
<div class="wp-block-group kr-rail kr-rail--l kr-rail--slash kr-rail--fill"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-cell kr-pgallery kr-s2","layout":{"type":"default"}} -->
<div class="wp-block-group kr-cell kr-pgallery kr-s2"><!-- wp:woocommerce/product-image-gallery /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-cell kr-cell--pad kr-cell--text","layout":{"type":"default"}} -->
<div class="wp-block-group kr-cell kr-cell--pad kr-cell--text"><!-- wp:woocommerce/breadcrumbs /-->

<!-- wp:post-title {"level":1,"className":"kr-h2 kr-h2--display","__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfSingleProductTemplate":true,"className":"kr-pprice"} /-->

<!-- wp:post-excerpt {"className":"kr-spec","__woocommerceNamespace":"woocommerce/product-query/product-summary","excerptLength":100} /-->

<!-- wp:woocommerce/add-to-cart-form {"className":"kr-addcart"} /-->

<!-- wp:woocommerce/product-meta -->
<div class="wp-block-woocommerce-product-meta"><!-- wp:woocommerce/product-sku /-->

<!-- wp:post-terms {"term":"product_tag","prefix":"Lasts: ","separator":", "} /--></div>
<!-- /wp:woocommerce/product-meta --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-rail kr-rail--r","layout":{"type":"default"}} -->
<div class="wp-block-group kr-rail kr-rail--r"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"kr-row kr-head","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kr-row kr-head"><!-- wp:group {"className":"kr-rail kr-rail--l","layout":{"type":"default"}} -->
<div class="wp-block-group kr-rail kr-rail--l"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-cell kr-cell--pad kr-s3","layout":{"type":"default"}} -->
<div class="wp-block-group kr-cell kr-cell--pad kr-s3"><!-- wp:woocommerce/product-details {"className":"kr-pdetails"} -->
<div class="wp-block-woocommerce-product-details kr-pdetails"></div>
<!-- /wp:woocommerce/product-details -->

<!-- wp:paragraph {"className":"kr-spec"} -->
<p class="kr-spec"><?php echo wp_kses_post( kakeru_run_t( 'k603adc2f' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-rail kr-rail--r","layout":{"type":"default"}} -->
<div class="wp-block-group kr-rail kr-rail--r"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"kr-row kr-head","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kr-row kr-head"><!-- wp:group {"className":"kr-rail kr-rail--l","layout":{"type":"default"}} -->
<div class="wp-block-group kr-rail kr-rail--l"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-cell kr-cell--pad kr-s3","layout":{"type":"default"}} -->
<div class="wp-block-group kr-cell kr-cell--pad kr-s3"><!-- wp:paragraph {"className":"kr-label"} -->
<p class="kr-label"><?php echo wp_kses_post( kakeru_run_t( 'kd7c27ca4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"kr-h2"} -->
<h2 class="wp-block-heading kr-h2"><?php echo wp_kses_post( kakeru_run_t( 'kbd090f63' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-rail kr-rail--r","layout":{"type":"default"}} -->
<div class="wp-block-group kr-rail kr-rail--r"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:woocommerce/product-collection {"queryId":1,"query":{"perPage":3,"pages":1,"offset":0,"postType":"product","order":"asc","orderBy":"menu_order","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"tagName":"div","displayLayout":{"type":"flex","columns":3,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"collection":"woocommerce/product-collection/related","hideControls":["inherit"],"queryContextIncludes":["collection"],"align":"full","className":"kr-products"} -->
<div class="wp-block-woocommerce-product-collection alignfull kr-products"><!-- wp:woocommerce/product-template -->
<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"single","isDescendentOfQueryLoop":true,"aspectRatio":"1","className":"kr-pcard__img"} /-->

<!-- wp:group {"className":"kr-pcard__cap","layout":{"type":"default"}} -->
<div class="wp-block-group kr-pcard__cap"><!-- wp:post-title {"level":3,"isLink":true,"className":"kr-pcard__name","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"className":"kr-pcard__price"} /--></div>
<!-- /wp:group -->
<!-- /wp:woocommerce/product-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:woocommerce/product-collection-no-results -->
<!-- wp:paragraph {"className":"kr-nores"} -->
<p class="kr-nores"><?php echo wp_kses_post( kakeru_run_t( 'kd56054cb' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:woocommerce/product-collection-no-results -->
</div>
<!-- /wp:woocommerce/product-collection --></main>
<!-- /wp:group -->