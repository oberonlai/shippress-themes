<?php
/**
 * Title: Home: the product grid
 * Slug: tsuki-silver/home-grid
 * Categories: tsuki-silver
 * Keywords: products, grid, shop
 * Viewport Width: 1440
 * Description: The pieces on pale stone in a rhythmic grid: eight WooCommerce products while WooCommerce is active, otherwise the synced tray (photographs, prices and an editable badge).
 */

if ( class_exists( 'WooCommerce' ) ) :
	?>
<!-- wp:group {"tagName":"section","align":"full","className":"tk-section tk-section--grid","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull tk-section tk-section--grid"><!-- wp:woocommerce/product-collection {"queryId":0,"query":{"perPage":8,"pages":1,"offset":0,"postType":"product","order":"asc","orderBy":"menu_order","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"queryContextIncludes":["collection"],"align":"wide","className":"tk-products tk-grid-rhythm","collection":"woocommerce/product-collection/product-catalog"} -->
<div class="wp-block-woocommerce-product-collection alignwide tk-products tk-grid-rhythm"><!-- wp:woocommerce/product-template -->
<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"single","isDescendentOfQueryLoop":true,"aspectRatio":"1","className":"tk-product__image"} -->
<!-- wp:woocommerce/product-sale-badge {"isDescendentOfQueryLoop":true,"align":"left"} /-->
<!-- /wp:woocommerce/product-image -->

<!-- wp:post-terms {"term":"product_cat","className":"tk-product__cat"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"tk-product__title","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"className":"tk-product__price"} /-->
<!-- /wp:woocommerce/product-template -->
</div>
<!-- /wp:woocommerce/product-collection --></section>
<!-- /wp:group -->
	<?php
else :
	?>
<!-- wp:group {"tagName":"section","align":"full","className":"tk-section tk-section--grid","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull tk-section tk-section--grid"><!-- wp:pattern {"slug":"tsuki-silver/shelf-info"} /--></section>
<!-- /wp:group -->
	<?php
endif;
