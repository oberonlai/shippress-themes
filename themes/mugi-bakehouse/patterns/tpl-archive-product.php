<?php
/**
 * Title: Template: archive-product
 * Slug: mugi-bakehouse/tpl-archive-product
 * Categories: mugi-bakehouse
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"mb-main","style":{"spacing":{"margin":{"top":"0"}}},"layout":{"type":"default"}} -->
<main class="wp-block-group mb-main" style="margin-top:0"><!-- wp:group {"align":"full","className":"mb-pagehead","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull mb-pagehead"><!-- wp:group {"className":"mb-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mb-wrap"><!-- wp:paragraph {"className":"mb-label"} -->
<p class="mb-label"><?php echo wp_kses_post( mugi_bakehouse_t( 'k5591d5d1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"archive","showPrefix":false,"level":1,"className":"mb-h1"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"mb-sec mb-shop","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull mb-sec mb-shop"><!-- wp:group {"className":"mb-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mb-wrap"><!-- wp:woocommerce/store-notices {"align":"wide"} /-->

<!-- wp:woocommerce/product-collection {"queryId":0,"query":{"perPage":12,"pages":1,"offset":0,"postType":"product","order":"asc","orderBy":"menu_order","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":{},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"queryContextIncludes":["collection"],"align":"wide","className":"mb-products"} -->
<div class="wp-block-woocommerce-product-collection alignwide mb-products"><!-- wp:woocommerce/product-template -->
<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"single","isDescendentOfQueryLoop":true,"aspectRatio":"4/5","className":"mb-product__image"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"mb-product__title","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"className":"mb-product__price"} /-->
<!-- /wp:woocommerce/product-template -->
<!-- wp:query-pagination {"className":"mb-pager"} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->
<!-- wp:woocommerce/product-collection-no-results -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( mugi_bakehouse_t( 'k5a36e530' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:woocommerce/product-collection-no-results --></div>
<!-- /wp:woocommerce/product-collection --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->