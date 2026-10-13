<?php
/**
 * Title: Home: the kettles
 * Slug: kurogane-ironware/home-shelf
 * Categories: kurogane-ironware
 * Keywords: products, kettles, shop
 * Viewport Width: 1440
 * Description: Four kettles from the shop while WooCommerce is active; otherwise a static shelf of four that link to the Contact page.
 */

if ( class_exists( 'WooCommerce' ) ) :
	?>
<!-- wp:group {"tagName":"section","align":"full","className":"kg-section kg-section--shelf","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kg-section kg-section--shelf"><!-- wp:group {"align":"wide","className":"kg-head-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kg-head-wrap"><!-- wp:group {"className":"kg-head kg-head--row","layout":{"type":"default"}} -->
<div class="wp-block-group kg-head kg-head--row"><!-- wp:group {"className":"kg-stack","layout":{"type":"default"}} -->
<div class="wp-block-group kg-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">The kettles</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Cast one at a time, <em>kept for a lifetime.</em></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"kg-links"} -->
<div class="wp-block-buttons kg-links"><!-- wp:button {"className":"is-style-arrow"} -->
<div class="wp-block-button is-style-arrow"><a class="wp-block-button__link wp-element-button" href="/shop/">All the kettles</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:woocommerce/product-collection {"queryId":0,"query":{"perPage":4,"pages":1,"offset":0,"postType":"product","order":"asc","orderBy":"menu_order","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"queryContextIncludes":["collection"],"align":"wide","className":"kg-products","collection":"woocommerce/product-collection/product-catalog"} -->
<div class="wp-block-woocommerce-product-collection alignwide kg-products"><!-- wp:woocommerce/product-template -->
<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"single","isDescendentOfQueryLoop":true,"aspectRatio":"4/5","className":"kg-product__image"} -->
<!-- wp:woocommerce/product-sale-badge {"isDescendentOfQueryLoop":true,"align":"left"} /-->
<!-- /wp:woocommerce/product-image -->

<!-- wp:post-terms {"term":"product_cat","className":"kg-product__cat"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"kg-product__title","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"className":"kg-product__price"} /-->
<!-- /wp:woocommerce/product-template -->
</div>
<!-- /wp:woocommerce/product-collection --></section>
<!-- /wp:group -->
	<?php
else :
	?>
<!-- wp:pattern {"slug":"kurogane-ironware/shelf-static"} /-->
	<?php
endif;
