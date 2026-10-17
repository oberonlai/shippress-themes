<?php
/**
 * Title: Home: the shelf panel
 * Slug: karan-geta/home-shelf
 * Categories: karan-geta
 * Keywords: geta, sandals, workshop
 * Viewport Width: 1440
 * Description: The rental plans and small things as a four-column grid (WooCommerce products; pictures without it).
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kg-section kg-shelf kg-panel kg-panel", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kg-section kg-shelf kg-panel kg-panel"><!-- wp:group {"align": "wide", "className": "kg-card", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide kg-card"><!-- wp:group {"align": "wide", "className": "kg-panel__head", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide kg-panel__head"><!-- wp:paragraph {"className": "kg-eyebrow"} -->
<p class="kg-eyebrow"><?php echo esc_html( karan_geta_t( 'strip_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "kg-sec__title"} -->
<h2 class="wp-block-heading kg-sec__title"><?php echo esc_html( karan_geta_t( 'strip_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kg-panel__hint"} -->
<p class="kg-panel__hint"><?php echo esc_html( karan_geta_t( 'strip_hint' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php if ( class_exists( 'WooCommerce' ) ) : ?>
<!-- wp:woocommerce/product-collection {"queryId": 3, "query": {"perPage": 8, "pages": 1, "offset": 0, "postType": "product", "order": "asc", "orderBy": "menu_order", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": false, "taxQuery": {}, "isProductCollectionBlock": true, "featured": false, "woocommerceOnSale": false, "woocommerceStockStatus": ["instock", "outofstock", "onbackorder"], "woocommerceAttributes": [], "woocommerceHandPickedProducts": []}, "tagName": "div", "displayLayout": {"type": "flex", "columns": 4, "shrinkColumns": true}, "dimensions": {"widthType": "fill"}, "queryContextIncludes": ["collection"], "align": "wide", "className": "kg-grid"} -->
<div class="wp-block-woocommerce-product-collection alignwide kg-grid"><!-- wp:woocommerce/product-template -->
<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"single","isDescendentOfQueryLoop":true,"aspectRatio":"1","className":"kg-card__photo"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"kg-card__name","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"className":"kg-card__price"} /-->
<!-- /wp:woocommerce/product-template --></div>
<!-- /wp:woocommerce/product-collection -->
<?php else : ?>
<!-- wp:group {"align": "wide", "className": "kg-grid kg-grid--static", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide kg-grid kg-grid--static"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kg-grid__img"} -->
<figure class="wp-block-image size-full kg-grid__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/p-classic.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kg-grid__img"} -->
<figure class="wp-block-image size-full kg-grid__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/p-ukon.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kg-grid__img"} -->
<figure class="wp-block-image size-full kg-grid__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/p-tengu.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kg-grid__img"} -->
<figure class="wp-block-image size-full kg-grid__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/p-lacquer.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kg-grid__img"} -->
<figure class="wp-block-image size-full kg-grid__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/p-kids.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kg-grid__img"} -->
<figure class="wp-block-image size-full kg-grid__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/p-zori.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
<?php endif; ?>

<!-- wp:buttons {"className": "kg-more"} -->
<div class="wp-block-buttons kg-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/shop/"><?php echo esc_html( karan_geta_t( 'all_tackle' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->


