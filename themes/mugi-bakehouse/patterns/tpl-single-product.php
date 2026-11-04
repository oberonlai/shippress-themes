<?php
/**
 * Title: Template: single-product
 * Slug: mugi-bakehouse/tpl-single-product
 * Categories: mugi-bakehouse
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"mb-main","style":{"spacing":{"margin":{"top":"0"}}},"layout":{"type":"default"}} -->
<main class="wp-block-group mb-main" style="margin-top:0"><!-- wp:group {"align":"full","className":"mb-sec mb-product-page","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull mb-sec mb-product-page"><!-- wp:group {"className":"mb-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mb-wrap"><!-- wp:woocommerce/breadcrumbs {"align":"wide","className":"mb-crumbs"} /-->

<!-- wp:woocommerce/store-notices {"align":"wide"} /-->

<!-- wp:group {"align":"wide","className":"mb-product-main mb-grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide mb-product-main mb-grid"><!-- wp:group {"className":"mb-product-main__gallery","layout":{"type":"default"}} -->
<div class="wp-block-group mb-product-main__gallery"><!-- wp:woocommerce/product-image-gallery /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mb-product-main__summary","layout":{"type":"default"}} -->
<div class="wp-block-group mb-product-main__summary"><!-- wp:post-terms {"term":"product_cat","className":"mb-label"} /-->

<!-- wp:post-title {"level":1,"className":"mb-h1","__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfSingleProductTemplate":true,"className":"mb-product__price"} /-->

<!-- wp:post-excerpt {"excerptLength":100,"__woocommerceNamespace":"woocommerce/product-query/product-summary"} /-->

<!-- wp:woocommerce/add-to-cart-form /-->

<!-- wp:separator {"className":"mb-rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity mb-rule"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"className":"mb-sublabel"} -->
<p class="mb-sublabel"><?php echo wp_kses_post( mugi_bakehouse_t( 'k3474b7ae' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:woocommerce/product-details {"align":"wide","className":"mb-product-details"} -->
<div class="wp-block-woocommerce-product-details alignwide mb-product-details"></div>
<!-- /wp:woocommerce/product-details --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"mb-sec band mb-related","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull mb-sec band mb-related"><!-- wp:group {"className":"mb-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mb-wrap"><!-- wp:heading {"level":3,"className":"mb-sechead"} -->
<h3 class="wp-block-heading mb-sechead"><?php echo wp_kses_post( mugi_bakehouse_t( 'k88dd4c9d' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/product-collection {"queryId":1,"query":{"perPage":4,"pages":1,"offset":0,"postType":"product","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"collection":"woocommerce/product-collection/related","hideControls":["inherit"],"queryContextIncludes":["collection"],"align":"wide","className":"mb-products"} -->
<div class="wp-block-woocommerce-product-collection alignwide mb-products"><!-- wp:woocommerce/product-template -->
<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"single","isDescendentOfQueryLoop":true,"aspectRatio":"4/5","className":"mb-product__image"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"mb-product__title","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"className":"mb-product__price"} /-->
<!-- /wp:woocommerce/product-template -->
<!-- wp:woocommerce/product-collection-no-results -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( mugi_bakehouse_t( 'k5a36e530' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:woocommerce/product-collection-no-results --></div>
<!-- /wp:woocommerce/product-collection --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->