<?php
/**
 * Title: Template: single-product
 * Slug: kaban-luggage/tpl-single-product
 * Categories: kaban-luggage
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"kl-main","layout":{"type":"constrained"}} -->
<main class="wp-block-group kl-main"><!-- wp:group {"tagName":"section","align":"full","className":"kl-sec kl-product","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kl-sec kl-product"><!-- wp:woocommerce/breadcrumbs {"align":"wide","className":"kl-crumbs"} /-->

<!-- wp:woocommerce/store-notices {"align":"wide"} /-->

<!-- wp:group {"align":"full","className":"kl-product__stage","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull kl-product__stage"><!-- wp:group {"align":"wide","className":"kl-product__main","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kl-product__main"><!-- wp:group {"className":"kl-product__gallery","layout":{"type":"default"}} -->
<div class="wp-block-group kl-product__gallery"><!-- wp:woocommerce/product-image-gallery /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kl-product__summary","layout":{"type":"default"}} -->
<div class="wp-block-group kl-product__summary"><!-- wp:post-terms {"term":"product_cat","className":"kl-label kl-label--terms"} /-->

<!-- wp:post-title {"level":1,"className":"kl-h kl-h--product","__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfSingleProductTemplate":true,"className":"kl-product__price"} /-->

<!-- wp:post-excerpt {"className":"kl-product__excerpt","__woocommerceNamespace":"woocommerce/product-query/product-summary","excerptLength":100} /-->

<!-- wp:woocommerce/add-to-cart-form {"className":"kl-add-to-cart"} /-->

<!-- wp:paragraph {"className":"kl-note-line"} -->
<p class="kl-note-line"><?php echo wp_kses_post( kaban_luggage_t( 'k0f027f62' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:woocommerce/product-meta -->
<div class="wp-block-woocommerce-product-meta"><!-- wp:group {"className":"kl-product__meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group kl-product__meta"><!-- wp:woocommerce/product-sku /-->

<!-- wp:post-terms {"term":"product_tag","separator":", "} /--></div>
<!-- /wp:group --></div>
<!-- /wp:woocommerce/product-meta --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"kl-product__care","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kl-product__care"></div>
<!-- /wp:group -->

<!-- wp:woocommerce/product-details {"align":"wide","className":"kl-product__details"} -->
<div class="wp-block-woocommerce-product-details alignwide kl-product__details"></div>
<!-- /wp:woocommerce/product-details --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kl-sec kl-related","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kl-sec kl-related"><!-- wp:group {"align":"wide","className":"kl-head","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kl-head"></div>
<!-- /wp:group -->

<!-- wp:woocommerce/product-collection {"queryId":14,"query":{"perPage":4,"pages":1,"offset":0,"postType":"product","order":"asc","orderBy":"menu_order","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"queryContextIncludes":["collection"],"align":"wide","className":"kl-lineup","collection":"woocommerce/product-collection/related","hideControls":["inherit"]} -->
<div class="wp-block-woocommerce-product-collection alignwide kl-lineup"><!-- wp:woocommerce/product-template -->
<!-- wp:post-terms {"term":"product_cat","className":"kl-pill"} /-->

<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"single","isDescendentOfQueryLoop":true,"aspectRatio":"4/5","className":"kl-card__photo"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"kl-card__name","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"className":"kl-card__price"} /-->
<!-- /wp:woocommerce/product-template --></div>
<!-- /wp:woocommerce/product-collection --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->