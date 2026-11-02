<?php
/**
 * Title: Template: single-product
 * Slug: aya-paper/tpl-single-product
 * Categories: aya-paper
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"ap-main ap-shop","layout":{"type":"default"}} -->
<main class="wp-block-group ap-main ap-shop">
<!-- wp:group {"tagName":"section","align":"full","className":"ap-sec ap-product-page","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ap-sec ap-product-page">
<!-- wp:woocommerce/breadcrumbs {"className":"ap-crumbs"} /-->

<!-- wp:woocommerce/store-notices /-->

<!-- wp:group {"className":"ap-product-main","layout":{"type":"default"}} -->
<div class="wp-block-group ap-product-main">
<!-- wp:group {"className":"ap-product-main__gallery ap-frame ap-frame--line","layout":{"type":"default"}} -->
<div class="wp-block-group ap-product-main__gallery ap-frame ap-frame--line">
<!-- wp:woocommerce/product-image-gallery /-->


</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-product-main__summary","layout":{"type":"default"}} -->
<div class="wp-block-group ap-product-main__summary">
<!-- wp:post-terms {"term":"product_cat","className":"ap-chip"} /-->

<!-- wp:post-title {"level":1,"className":"ap-product-main__title","__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfSingleProductTemplate":true,"className":"ap-product-main__price"} /-->

<!-- wp:post-excerpt {"className":"ap-product-main__excerpt","__woocommerceNamespace":"woocommerce/product-query/product-summary","excerptLength":100} /-->

<!-- wp:woocommerce/add-to-cart-form {"className":"ap-add-to-cart"} /-->

<!-- wp:paragraph {"className":"ap-product-note"} -->
<p class="ap-product-note"><?php echo wp_kses_post( aya_paper_t( 'k33ae99ea' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:woocommerce/product-meta -->
<div class="wp-block-woocommerce-product-meta"><!-- wp:group {"className":"ap-product-meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group ap-product-meta"><!-- wp:woocommerce/product-sku /-->

<!-- wp:post-terms {"term":"product_tag","prefix":"Tagged: ","separator":", "} /--></div>
<!-- /wp:group --></div>
<!-- /wp:woocommerce/product-meta -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"ap-sec ap-product-desc","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ap-sec ap-product-desc">
<!-- wp:woocommerce/product-details {"className":"ap-product-details"} -->
<div class="wp-block-woocommerce-product-details ap-product-details"></div>
<!-- /wp:woocommerce/product-details -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"ap-sec ap-shopgrid","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ap-sec ap-shopgrid">
<!-- wp:heading {"className":"ap-head"} -->
<h2 class="wp-block-heading ap-head"><?php echo wp_kses_post( aya_paper_t( 'k05eaaa66' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:woocommerce/product-collection {"queryId":1,"query":{"perPage":3,"pages":1,"offset":0,"postType":"product","order":"asc","orderBy":"menu_order","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"tagName":"div","displayLayout":{"type":"flex","columns":3,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"queryContextIncludes":["collection"],"collection":"woocommerce/product-collection/related","hideControls":["inherit"],"align":"wide","className":"ap-products"} -->
<div class="wp-block-woocommerce-product-collection alignwide ap-products"><!-- wp:woocommerce/product-template -->
<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"single","isDescendentOfQueryLoop":true,"aspectRatio":"4/5","className":"ap-product__image"} /-->

<!-- wp:post-terms {"term":"product_cat","className":"ap-chip"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"ap-product__title","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"className":"ap-product__price"} /-->

<!-- wp:woocommerce/product-button {"isDescendentOfQueryLoop":true,"className":"ap-product__cart"} /-->
<!-- /wp:woocommerce/product-template --></div>
<!-- /wp:woocommerce/product-collection -->
</section>
<!-- /wp:group -->
</main>
<!-- /wp:group -->