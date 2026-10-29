<?php
/**
 * Title: Template: single-product
 * Slug: ueki-gardens/tpl-single-product
 * Categories: ueki-gardens
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"uk-main","style":{"spacing":{"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group uk-main" style="margin-top:0"><!-- wp:group {"tagName":"section","align":"full","className":"uk-section uk-product-page","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull uk-section uk-product-page"><!-- wp:woocommerce/breadcrumbs {"align":"wide","className":"uk-crumbs"} /-->

<!-- wp:woocommerce/store-notices {"align":"wide"} /-->

<!-- wp:group {"align":"wide","className":"uk-split uk-split--top uk-product-main","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide uk-split uk-split--top uk-product-main"><!-- wp:group {"className":"uk-product-main__gallery","layout":{"type":"default"}} -->
<div class="wp-block-group uk-product-main__gallery"><!-- wp:woocommerce/product-image-gallery /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"uk-product-main__summary uk-stack","layout":{"type":"default"}} -->
<div class="wp-block-group uk-product-main__summary uk-stack"><!-- wp:post-terms {"term":"product_cat","className":"uk-product__cat"} /-->

<!-- wp:post-title {"level":1,"className":"uk-product-main__title","__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfSingleProductTemplate":true,"className":"uk-product-main__price"} /-->

<!-- wp:post-excerpt {"className":"uk-product-main__excerpt","__woocommerceNamespace":"woocommerce/product-query/product-summary","excerptLength":100} /-->

<!-- wp:woocommerce/add-to-cart-form {"className":"uk-add-to-cart"} /-->

<!-- wp:list {"className":"is-style-ruled uk-product-promise"} -->
<ul class="wp-block-list is-style-ruled uk-product-promise"><!-- wp:list-item -->
<li><?php echo wp_kses_post( ueki_gardens_t( 'k35fd3162' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( ueki_gardens_t( 'k08aa14bc' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( ueki_gardens_t( 'kf8c2e84a' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:woocommerce/product-meta -->
<div class="wp-block-woocommerce-product-meta"><!-- wp:group {"className":"uk-product-meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group uk-product-meta"><!-- wp:woocommerce/product-sku /-->

<!-- wp:post-terms {"term":"product_tag","prefix":"Tagged: ","separator":", "} /--></div>
<!-- /wp:group --></div>
<!-- /wp:woocommerce/product-meta --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:woocommerce/product-details {"align":"wide","className":"uk-product-details"} -->
<div class="wp-block-woocommerce-product-details alignwide uk-product-details"></div>
<!-- /wp:woocommerce/product-details --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"uk-section uk-section--paper","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull uk-section uk-section--paper"><!-- wp:group {"align":"wide","className":"uk-head","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide uk-head"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( ueki_gardens_t( 'k93384ff1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( ueki_gardens_t( 'k74ff27c5' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:woocommerce/product-collection {"queryId":1,"query":{"perPage":4,"pages":1,"offset":0,"postType":"product","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"collection":"woocommerce/product-collection/related","hideControls":["inherit"],"queryContextIncludes":["collection"],"align":"wide","className":"uk-products"} -->
<div class="wp-block-woocommerce-product-collection alignwide uk-products"><!-- wp:woocommerce/product-template -->
<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"aspectRatio":"4/5","className":"uk-product__image"} /-->

<!-- wp:post-terms {"term":"product_cat","className":"uk-product__cat"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"uk-product__title","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"className":"uk-product__price"} /-->
<!-- /wp:woocommerce/product-template --></div>
<!-- /wp:woocommerce/product-collection --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->