<?php
/**
 * Title: Template: single-product
 * Slug: shiki-linen/tpl-single-product
 * Categories: shiki-linen
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"sl-main","layout":{"type":"default"}} -->
<main class="wp-block-group sl-main"><!-- wp:group {"className":"sl-product","layout":{"type":"default"}} -->
<div class="wp-block-group sl-product"><!-- wp:woocommerce/breadcrumbs {"className":"sl-crumbs"} /-->

<!-- wp:woocommerce/store-notices /-->

<!-- wp:group {"className":"sl-product__main","layout":{"type":"default"}} -->
<div class="wp-block-group sl-product__main"><!-- wp:group {"className":"sl-product__gallery","layout":{"type":"default"}} -->
<div class="wp-block-group sl-product__gallery"><!-- wp:woocommerce/product-image-gallery /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sl-product__summary","layout":{"type":"default"}} -->
<div class="wp-block-group sl-product__summary"><!-- wp:post-title {"level":1,"__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfSingleProductTemplate":true} /-->

<!-- wp:post-excerpt {"__woocommerceNamespace":"woocommerce/product-query/product-summary","excerptLength":100} /-->

<!-- wp:woocommerce/add-to-cart-form /-->

<!-- wp:paragraph {"className":"sl-fine"} -->
<p class="sl-fine"><?php echo wp_kses_post( shiki_linen_t( 'kbab2677e' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:woocommerce/product-meta -->
<div class="wp-block-woocommerce-product-meta"><!-- wp:group {"className":"sl-product__meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group sl-product__meta"><!-- wp:woocommerce/product-sku /-->

<!-- wp:post-terms {"term":"product_tag","separator":", "} /--></div>
<!-- /wp:group --></div>
<!-- /wp:woocommerce/product-meta --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:woocommerce/product-details {"className":"sl-product__details"} -->
<div class="wp-block-woocommerce-product-details sl-product__details"></div>
<!-- /wp:woocommerce/product-details -->

<!-- wp:heading {"level":2,"className":"sl-h2"} -->
<h2 class="wp-block-heading sl-h2"><?php echo wp_kses_post( shiki_linen_t( 'ke06b0af8' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:woocommerce/product-collection {"queryId":14,"query":{"perPage":4,"pages":1,"offset":0,"postType":"product","order":"asc","orderBy":"menu_order","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"queryContextIncludes":["collection"],"align":"wide","className":"sl-grid","collection":"woocommerce/product-collection/related","hideControls":["inherit"]} -->
<div class="wp-block-woocommerce-product-collection alignwide sl-grid"><!-- wp:woocommerce/product-template -->
<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"single","isDescendentOfQueryLoop":true,"aspectRatio":"7/10","className":"sl-card__photo"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"sl-card__name","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"className":"sl-card__price"} /-->
<!-- /wp:woocommerce/product-template --></div>
<!-- /wp:woocommerce/product-collection --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->