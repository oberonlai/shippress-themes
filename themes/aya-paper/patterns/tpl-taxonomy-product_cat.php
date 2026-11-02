<?php
/**
 * Title: Template: taxonomy-product_cat
 * Slug: aya-paper/tpl-taxonomy-product_cat
 * Categories: aya-paper
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"ap-main ap-shop","layout":{"type":"default"}} -->
<main class="wp-block-group ap-main ap-shop">
<!-- wp:woocommerce/breadcrumbs {"className":"ap-crumbs"} /-->

<!-- wp:group {"className":"ap-pagehead","layout":{"type":"default"}} -->
<div class="wp-block-group ap-pagehead">
<!-- wp:query-title {"type":"archive","showPrefix":false,"level":1} /-->

<!-- wp:paragraph {"className":"ap-lead"} -->
<p class="ap-lead"><?php echo wp_kses_post( aya_paper_t( 'k8c673688' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"aya-paper/shop-frame"} /-->

<!-- wp:pattern {"slug":"aya-paper/shop-cats"} /-->

<!-- wp:group {"tagName":"section","align":"full","className":"ap-sec ap-shopgrid","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ap-sec ap-shopgrid">
<!-- wp:woocommerce/store-notices /-->

<!-- wp:group {"className":"ap-shop-bar","layout":{"type":"default"}} -->
<div class="wp-block-group ap-shop-bar">
<!-- wp:woocommerce/product-results-count /-->

<!-- wp:woocommerce/catalog-sorting /-->
</div>
<!-- /wp:group -->

<!-- wp:woocommerce/product-collection {"queryId":0,"query":{"perPage":12,"pages":1,"offset":0,"postType":"product","order":"asc","orderBy":"menu_order","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":{},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"tagName":"div","displayLayout":{"type":"flex","columns":3,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"queryContextIncludes":["collection"],"align":"wide","className":"ap-products"} -->
<div class="wp-block-woocommerce-product-collection alignwide ap-products"><!-- wp:woocommerce/product-template -->
<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"single","isDescendentOfQueryLoop":true,"aspectRatio":"4/5","className":"ap-product__image"} /-->

<!-- wp:post-terms {"term":"product_cat","className":"ap-chip"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"ap-product__title","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"className":"ap-product__price"} /-->

<!-- wp:woocommerce/product-button {"isDescendentOfQueryLoop":true,"className":"ap-product__cart"} /-->
<!-- /wp:woocommerce/product-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:woocommerce/product-collection-no-results -->
<!-- wp:paragraph {"className":"ap-lead"} -->
<p class="ap-lead"><?php echo wp_kses_post( aya_paper_t( 'k44c4bb35' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:woocommerce/product-collection-no-results --></div>
<!-- /wp:woocommerce/product-collection -->
</section>
<!-- /wp:group -->
</main>
<!-- /wp:group -->