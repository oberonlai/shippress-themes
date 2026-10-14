<?php
/**
 * Title: Home: a box of twelve
 * Slug: yoru-chocolate/home-shelf
 * Categories: yoru-chocolate
 * Keywords: products, bonbons, shop
 * Viewport Width: 1440
 * Description: Product-first: the bonbons and tablets as a box of square cells with hairline dividers while WooCommerce is active; otherwise the static box.
 */

if ( class_exists( 'WooCommerce' ) ) :
	?>
<!-- wp:group {"tagName":"section","align":"full","className":"yc-section yc-section--shelf yc-section--box","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull yc-section yc-section--shelf yc-section--box"><!-- wp:group {"align":"wide","className":"yc-head-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide yc-head-wrap"><!-- wp:group {"className":"yc-head yc-head--row","layout":{"type":"default"}} -->
<div class="wp-block-group yc-head yc-head--row"><!-- wp:group {"className":"yc-stack","layout":{"type":"default"}} -->
<div class="wp-block-group yc-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">The box</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Twelve squares, <em>one night’s work.</em></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"yc-links"} -->
<div class="wp-block-buttons yc-links"><!-- wp:button {"className":"is-style-arrow"} -->
<div class="wp-block-button is-style-arrow"><a class="wp-block-button__link wp-element-button" href="/shop/">The whole shop</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:woocommerce/product-collection {"queryId":0,"query":{"perPage":8,"pages":1,"offset":0,"postType":"product","order":"asc","orderBy":"menu_order","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"queryContextIncludes":["collection"],"align":"wide","className":"yc-products yc-box","collection":"woocommerce/product-collection/product-catalog"} -->
<div class="wp-block-woocommerce-product-collection alignwide yc-products yc-box"><!-- wp:woocommerce/product-template -->
<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"single","isDescendentOfQueryLoop":true,"aspectRatio":"1","className":"yc-product__image"} -->
<!-- wp:woocommerce/product-sale-badge {"isDescendentOfQueryLoop":true,"align":"left"} /-->
<!-- /wp:woocommerce/product-image -->

<!-- wp:post-terms {"term":"product_cat","className":"yc-product__cat"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"yc-product__title","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"className":"yc-product__price"} /-->
<!-- /wp:woocommerce/product-template -->
</div>
<!-- /wp:woocommerce/product-collection --></section>
<!-- /wp:group -->
	<?php
else :
	?>
<!-- wp:pattern {"slug":"yoru-chocolate/shelf-static"} /-->
	<?php
endif;
