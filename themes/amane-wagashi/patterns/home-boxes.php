<?php
/**
 * Title: Home: boxes to order
 * Slug: amane-wagashi/home-boxes
 * Categories: amane-wagashi
 * Keywords: products, boxes, shop
 * Viewport Width: 1440
 * Description: Four boxes from the shop while WooCommerce is active; otherwise a short note to order by phone or email beside the synced shop details.
 */

if ( class_exists( 'WooCommerce' ) ) :
	?>
<!-- wp:group {"tagName":"section","align":"full","className":"am-section am-section--boxes am-section--paper","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull am-section am-section--boxes am-section--paper"><!-- wp:group {"align":"wide","className":"am-head-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide am-head-wrap"><!-- wp:group {"className":"am-head am-head--row","layout":{"type":"default"}} -->
<div class="wp-block-group am-head am-head--row"><!-- wp:group {"className":"am-stack","layout":{"type":"default"}} -->
<div class="wp-block-group am-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">To order</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Boxes for <em>the table and for gifts.</em></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"am-head__note"} -->
<p class="am-head__note"><a href="/shop/">Every box in the shop <span aria-hidden="true">&#8594;</span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:woocommerce/product-collection {"queryId":0,"query":{"perPage":4,"pages":1,"offset":0,"postType":"product","order":"asc","orderBy":"menu_order","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"queryContextIncludes":["collection"],"align":"wide","className":"am-products","collection":"woocommerce/product-collection/product-catalog"} -->
<div class="wp-block-woocommerce-product-collection alignwide am-products"><!-- wp:woocommerce/product-template -->
<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"single","isDescendentOfQueryLoop":true,"aspectRatio":"4/5","className":"am-product__image"} -->
<!-- wp:woocommerce/product-sale-badge {"isDescendentOfQueryLoop":true,"align":"left"} /-->
<!-- /wp:woocommerce/product-image -->

<!-- wp:post-terms {"term":"product_cat","className":"am-product__cat"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"am-product__title","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"className":"am-product__price"} /-->
<!-- /wp:woocommerce/product-template -->
</div>
<!-- /wp:woocommerce/product-collection --></section>
<!-- /wp:group -->
	<?php
else :
	?>
<!-- wp:pattern {"slug":"amane-wagashi/order-by-phone"} /-->
	<?php
endif;
