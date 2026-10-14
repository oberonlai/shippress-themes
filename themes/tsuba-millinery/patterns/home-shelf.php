<?php
/**
 * Title: Home: the hat shelf
 * Slug: tsuba-millinery/home-shelf
 * Categories: tsuba-millinery
 * Keywords: products, hats, shop, filters
 * Viewport Width: 1440
 * Description: Filter-first: find your shape by style, material and head size, then the hats as square cells with hairline dividers while WooCommerce is active; otherwise the static shelf.
 */

if ( class_exists( 'WooCommerce' ) ) :
	?>
<!-- wp:group {"tagName":"section","align":"full","className":"tm-section tm-section--shelf tm-section--box","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull tm-section tm-section--shelf tm-section--box"><!-- wp:group {"align":"wide","className":"tm-head-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tm-head-wrap"><!-- wp:group {"className":"tm-head tm-head--row","layout":{"type":"default"}} -->
<div class="wp-block-group tm-head tm-head--row"><!-- wp:group {"className":"tm-stack","layout":{"type":"default"}} -->
<div class="wp-block-group tm-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">The collection</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Eight hats, <em>one season’s work.</em></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"tm-links"} -->
<div class="wp-block-buttons tm-links"><!-- wp:button {"className":"is-style-arrow"} -->
<div class="wp-block-button is-style-arrow"><a class="wp-block-button__link wp-element-button" href="/shop/">All hats</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"tm-filters","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group alignwide tm-filters"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Find your shape</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"tm-filters__group","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group tm-filters__group"><!-- wp:paragraph -->
<p><span class="tm-filters__label">Shape</span> <a class="tm-chip" href="/product-category/cloche/">Cloche</a> <a class="tm-chip" href="/product-category/boater/">Boater</a> <a class="tm-chip" href="/product-category/bucket/">Bucket</a> <a class="tm-chip" href="/product-category/wide-brim/">Wide brim</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-filters__group","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group tm-filters__group"><!-- wp:paragraph -->
<p><span class="tm-filters__label">Material</span> <a class="tm-chip" href="/product-tag/felt/">Felt</a> <a class="tm-chip" href="/product-tag/straw/">Straw</a> <a class="tm-chip" href="/product-tag/cotton/">Cotton</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-filters__group","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group tm-filters__group"><!-- wp:paragraph -->
<p><span class="tm-filters__label">Head size</span> <a class="tm-chip" href="/fit-sizing/">Fit &amp; sizing</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:woocommerce/product-collection {"queryId":0,"query":{"perPage":8,"pages":1,"offset":0,"postType":"product","order":"asc","orderBy":"menu_order","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"queryContextIncludes":["collection"],"align":"wide","className":"tm-products tm-box","collection":"woocommerce/product-collection/product-catalog"} -->
<div class="wp-block-woocommerce-product-collection alignwide tm-products tm-box"><!-- wp:woocommerce/product-template -->
<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"single","isDescendentOfQueryLoop":true,"aspectRatio":"1","className":"tm-product__image"} -->
<!-- wp:woocommerce/product-sale-badge {"isDescendentOfQueryLoop":true,"align":"left"} /-->
<!-- /wp:woocommerce/product-image -->

<!-- wp:post-terms {"term":"product_cat","className":"tm-product__cat"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"tm-product__title","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"className":"tm-product__price"} /-->
<!-- /wp:woocommerce/product-template -->
</div>
<!-- /wp:woocommerce/product-collection --></section>
<!-- /wp:group -->
	<?php
else :
	?>
<!-- wp:pattern {"slug":"tsuba-millinery/shelf-static"} /-->
	<?php
endif;
