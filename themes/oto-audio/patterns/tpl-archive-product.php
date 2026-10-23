<?php
/**
 * Title: Template: archive-product
 * Slug: oto-audio/tpl-archive-product
 * Categories: oto-audio
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"oa-main","layout":{"type":"default"}} -->
<main class="wp-block-group oa-main"><!-- wp:pattern {"slug":"oto-audio/head-shop"} /-->

<!-- wp:group {"tagName":"section","align":"full","className":"oa-sec oa-sec--trio oa-sec--shopgrid","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull oa-sec oa-sec--trio oa-sec--shopgrid"><!-- wp:woocommerce/store-notices {"align":"wide"} /-->

<!-- wp:group {"align":"wide","className":"oa-shopbar","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide oa-shopbar"><!-- wp:html -->
<nav class="oa-cats" aria-label="<?php echo esc_attr( oto_audio_t( 'aaf1b98ad' ) ); ?>"><a href="/shop/"><?php echo wp_kses_post( oto_audio_t( 'kb1c94ca2' ) ); ?></a><a href="/product-category/headphones/"><?php echo wp_kses_post( oto_audio_t( 'kdcbedde0' ) ); ?></a><a href="/product-category/amplifiers/"><?php echo wp_kses_post( oto_audio_t( 'kc8872125' ) ); ?></a><a href="/product-category/dacs/"><?php echo wp_kses_post( oto_audio_t( 'k5e73d671' ) ); ?></a><a href="/product-category/speakers/"><?php echo wp_kses_post( oto_audio_t( 'kf656ccbd' ) ); ?></a></nav>
<!-- /wp:html -->

<!-- wp:woocommerce/product-results-count /-->

<!-- wp:woocommerce/catalog-sorting /--></div>
<!-- /wp:group -->

<!-- wp:woocommerce/product-collection {"queryId":10,"query":{"perPage":12,"pages":1,"offset":0,"postType":"product","order":"asc","orderBy":"menu_order","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":{},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"tagName":"div","displayLayout":{"type":"flex","columns":3,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"queryContextIncludes":["collection"],"align":"wide","className":"oa-trio oa-trio--woo oa-trio--shop"} -->
<div class="wp-block-woocommerce-product-collection alignwide oa-trio oa-trio--woo oa-trio--shop"><!-- wp:woocommerce/product-template -->
<!-- wp:group {"className":"oa-card__media","layout":{"type":"default"}} -->
<div class="wp-block-group oa-card__media"><!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"single","isDescendentOfQueryLoop":true,"aspectRatio":"3/4","className":"oa-card__photo"} /-->

<!-- wp:post-title {"level":3,"isLink":false,"className":"oa-card__chip","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"textAlign":"center","level":4,"isLink":true,"className":"oa-card__br","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:post-excerpt {"textAlign":"center","excerptLength":12,"className":"oa-card__line","__woocommerceNamespace":"woocommerce/product-collection/product-summary"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","className":"oa-card__price"} /-->

<!-- wp:woocommerce/product-button {"textAlign":"center","isDescendentOfQueryLoop":true,"className":"oa-card__btn"} /-->
<!-- /wp:woocommerce/product-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:woocommerce/product-collection-no-results -->
<!-- wp:paragraph {"className":"oa-note"} -->
<p class="oa-note"><?php echo wp_kses_post( oto_audio_t( 'k91d3561b' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:woocommerce/product-collection-no-results --></div>
<!-- /wp:woocommerce/product-collection --></section>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"oto-audio/shop-copy"} /--></main>
<!-- /wp:group -->