<?php
/**
 * Title: Shop: all products
 * Slug: amime-takezaiku/shop-main
 * Categories: amime-takezaiku
 * Keywords: bamboo, baskets, workshop
 * Viewport Width: 1440
 * Description: Every product in a grid (WooCommerce), or product photos without it.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tk-section tk-shopgrid", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tk-section tk-shopgrid"><?php if ( class_exists( 'WooCommerce' ) ) : ?>
<!-- wp:woocommerce/product-collection {"queryId": 4, "query": {"perPage": 12, "pages": 1, "offset": 0, "postType": "product", "order": "asc", "orderBy": "menu_order", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": false, "taxQuery": {}, "isProductCollectionBlock": true, "featured": false, "woocommerceOnSale": false, "woocommerceStockStatus": ["instock", "outofstock", "onbackorder"], "woocommerceAttributes": [], "woocommerceHandPickedProducts": []}, "tagName": "div", "displayLayout": {"type": "flex", "columns": 4, "shrinkColumns": true}, "dimensions": {"widthType": "fill"}, "queryContextIncludes": ["collection"], "align": "wide", "className": "tk-grid"} -->
<div class="wp-block-woocommerce-product-collection alignwide tk-grid"><!-- wp:woocommerce/product-template -->
<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"single","isDescendentOfQueryLoop":true,"aspectRatio":"1","className":"tk-card__photo"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"tk-card__name","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"className":"tk-card__price"} /-->
<!-- /wp:woocommerce/product-template --></div>
<!-- /wp:woocommerce/product-collection -->
<?php else : ?>
<!-- wp:group {"align": "wide", "className": "tk-grid tk-grid--static", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide tk-grid tk-grid--static"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tk-grid__img"} -->
<figure class="wp-block-image size-full tk-grid__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/p-zaru.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tk-grid__img"} -->
<figure class="wp-block-image size-full tk-grid__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/p-bento.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tk-grid__img"} -->
<figure class="wp-block-image size-full tk-grid__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/p-tote.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tk-grid__img"} -->
<figure class="wp-block-image size-full tk-grid__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/p-fruit.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
<?php endif; ?></section>
<!-- /wp:group -->
