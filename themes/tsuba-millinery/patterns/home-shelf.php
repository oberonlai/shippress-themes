<?php
/**
 * Title: Home: find your shape
 * Slug: tsuba-millinery/home-shelf
 * Categories: tsuba-millinery
 * Keywords: products, hats, shop, filters
 * Viewport Width: 1440
 * Description: Filter-first: a vertical title in the margin, shape, material and head size as a ruled filter table, then the eight hats in a staggered three-column grid while WooCommerce is active; otherwise the static shelf.
 */
?>
<?php
if ( class_exists( 'WooCommerce' ) ) :
	?>
<!-- wp:group {"tagName":"section","align":"full","className":"tm-shape","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tm-shape"><!-- wp:group {"className":"tm-shape__rail","layout":{"type":"default"}} -->
<div class="wp-block-group tm-shape__rail"><!-- wp:heading {"level":2,"className":"tm-shape__title"} -->
<h2 class="wp-block-heading tm-shape__title">Find your shape</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"tm-shape__count"} -->
<p class="tm-shape__count">Eight hats · four shapes · three materials</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-shape__body","layout":{"type":"default"}} -->
<div class="wp-block-group tm-shape__body"><!-- wp:group {"className":"tm-filters tm-filters--table","layout":{"type":"default"}} -->
<div class="wp-block-group tm-filters tm-filters--table"><!-- wp:group {"className":"tm-filters__group","layout":{"type":"default"}} -->
<div class="wp-block-group tm-filters__group"><!-- wp:paragraph -->
<p><span class="tm-filters__label">Shape</span> <a class="tm-chip" href="/product-category/cloche/">Cloche</a> <a class="tm-chip" href="/product-category/boater/">Boater</a> <a class="tm-chip" href="/product-category/bucket/">Bucket</a> <a class="tm-chip" href="/product-category/wide-brim/">Wide brim</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-filters__group","layout":{"type":"default"}} -->
<div class="wp-block-group tm-filters__group"><!-- wp:paragraph -->
<p><span class="tm-filters__label">Material</span> <a class="tm-chip" href="/product-tag/felt/">Felt</a> <a class="tm-chip" href="/product-tag/straw/">Straw</a> <a class="tm-chip" href="/product-tag/cotton/">Cotton</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-filters__group","layout":{"type":"default"}} -->
<div class="wp-block-group tm-filters__group"><!-- wp:paragraph -->
<p><span class="tm-filters__label">Head size</span> <a class="tm-chip" href="/fit-sizing/">54 to 61 cm · Fit &amp; sizing</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:woocommerce/product-collection {"queryId":0,"query":{"perPage":8,"pages":1,"offset":0,"postType":"product","order":"asc","orderBy":"menu_order","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"tagName":"div","displayLayout":{"type":"flex","columns":3,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"queryContextIncludes":["collection"],"className":"tm-products tm-box tm-stagger","collection":"woocommerce/product-collection/product-catalog"} -->
<div class="wp-block-woocommerce-product-collection tm-products tm-box tm-stagger"><!-- wp:woocommerce/product-template -->
<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"single","isDescendentOfQueryLoop":true,"aspectRatio":"1","className":"tm-product__image"} -->
<!-- wp:woocommerce/product-sale-badge {"isDescendentOfQueryLoop":true,"align":"left"} /-->
<!-- /wp:woocommerce/product-image -->

<!-- wp:post-terms {"term":"product_cat","className":"tm-product__cat"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"tm-product__title","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"className":"tm-product__price"} /-->
<!-- /wp:woocommerce/product-template -->
</div>
<!-- /wp:woocommerce/product-collection -->

<!-- wp:buttons {"className":"tm-shape__more"} -->
<div class="wp-block-buttons tm-shape__more"><!-- wp:button {"className":"is-style-arrow"} -->
<div class="wp-block-button is-style-arrow"><a class="wp-block-button__link wp-element-button" href="/shop/">All hats</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
	<?php
else :
	?>
<!-- wp:pattern {"slug":"tsuba-millinery/shelf-static"} /-->
	<?php
endif;
