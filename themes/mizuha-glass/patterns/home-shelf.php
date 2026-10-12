<?php
/**
 * Title: Home: the glass
 * Slug: mizuha-glass/home-shelf
 * Categories: mizuha-glass
 * Keywords: products, glass, shop
 * Viewport Width: 1440
 * Description: Four pieces from the shop while WooCommerce is active; otherwise a static shelf of four pieces that link to the Contact page.
 */

if ( class_exists( 'WooCommerce' ) ) :
	?>
<!-- wp:group {"tagName":"section","align":"full","className":"mz-section mz-section--shelf","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull mz-section mz-section--shelf"><!-- wp:group {"align":"wide","className":"mz-head-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide mz-head-wrap"><!-- wp:group {"className":"mz-head mz-head--row","layout":{"type":"default"}} -->
<div class="wp-block-group mz-head mz-head--row"><!-- wp:group {"className":"mz-stack","layout":{"type":"default"}} -->
<div class="wp-block-group mz-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">The glass</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Made in small batches, <em>never twice the same.</em></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"mz-links"} -->
<div class="wp-block-buttons mz-links"><!-- wp:button {"className":"is-style-arrow"} -->
<div class="wp-block-button is-style-arrow"><a class="wp-block-button__link wp-element-button" href="/shop/">All the glass</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:woocommerce/product-collection {"queryId":0,"query":{"perPage":4,"pages":1,"offset":0,"postType":"product","order":"asc","orderBy":"menu_order","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"queryContextIncludes":["collection"],"align":"wide","className":"mz-products","collection":"woocommerce/product-collection/product-catalog"} -->
<div class="wp-block-woocommerce-product-collection alignwide mz-products"><!-- wp:woocommerce/product-template -->
<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"single","isDescendentOfQueryLoop":true,"aspectRatio":"4/5","className":"mz-product__image"} -->
<!-- wp:woocommerce/product-sale-badge {"isDescendentOfQueryLoop":true,"align":"left"} /-->
<!-- /wp:woocommerce/product-image -->

<!-- wp:post-terms {"term":"product_cat","className":"mz-product__cat"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"mz-product__title","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"className":"mz-product__price"} /-->
<!-- /wp:woocommerce/product-template -->
</div>
<!-- /wp:woocommerce/product-collection --></section>
<!-- /wp:group -->
	<?php
else :
	?>
<!-- wp:pattern {"slug":"mizuha-glass/shelf-static"} /-->
	<?php
endif;
