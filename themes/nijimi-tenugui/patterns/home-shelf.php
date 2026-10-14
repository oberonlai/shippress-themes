<?php
/**
 * Title: Home: the cloths
 * Slug: nijimi-tenugui/home-shelf
 * Categories: nijimi-tenugui
 * Keywords: products, tenugui, shop
 * Viewport Width: 1440
 * Description: Four cloths from the shop while WooCommerce is active; otherwise a static shelf of four that link to the Contact page.
 */

if ( class_exists( 'WooCommerce' ) ) :
	?>
<!-- wp:group {"tagName":"section","align":"full","className":"nt-section nt-section--shelf","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull nt-section nt-section--shelf"><!-- wp:group {"align":"wide","className":"nt-head-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide nt-head-wrap"><!-- wp:group {"className":"nt-head nt-head--row","layout":{"type":"default"}} -->
<div class="wp-block-group nt-head nt-head--row"><!-- wp:group {"className":"nt-stack","layout":{"type":"default"}} -->
<div class="wp-block-group nt-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">The cloths</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Eight patterns, <em>poured this season.</em></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"nt-links"} -->
<div class="wp-block-buttons nt-links"><!-- wp:button {"className":"is-style-arrow"} -->
<div class="wp-block-button is-style-arrow"><a class="wp-block-button__link wp-element-button" href="/shop/">All the cloths</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:woocommerce/product-collection {"queryId":0,"query":{"perPage":4,"pages":1,"offset":0,"postType":"product","order":"asc","orderBy":"menu_order","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"queryContextIncludes":["collection"],"align":"wide","className":"nt-products"} -->
<div class="wp-block-woocommerce-product-collection alignwide nt-products"><!-- wp:woocommerce/product-template -->
<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"single","isDescendentOfQueryLoop":true,"aspectRatio":"1","className":"nt-product__image"} -->
<!-- wp:woocommerce/product-sale-badge {"isDescendentOfQueryLoop":true,"align":"left"} /-->
<!-- /wp:woocommerce/product-image -->

<!-- wp:post-terms {"term":"product_cat","className":"nt-product__cat"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"nt-product__title","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"className":"nt-product__price"} /-->
<!-- /wp:woocommerce/product-template -->
</div>
<!-- /wp:woocommerce/product-collection --></section>
<!-- /wp:group -->
	<?php
else :
	?>
<!-- wp:pattern {"slug":"nijimi-tenugui/shelf-static"} /-->
	<?php
endif;
