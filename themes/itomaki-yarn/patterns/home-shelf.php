<?php
/**
 * Title: Home: the shelf panel
 * Slug: itomaki-yarn/home-shelf
 * Categories: itomaki-yarn
 * Keywords: yarn, wool, knitting
 * Viewport Width: 1440
 * Description: Yarn and tools as a four-column grid (WooCommerce products; pictures without it).
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "iy-section iy-shelf iy-panel iy-panel", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull iy-section iy-shelf iy-panel iy-panel"><!-- wp:group {"align": "wide", "className": "iy-card", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide iy-card"><!-- wp:group {"align": "wide", "className": "iy-panel__head", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide iy-panel__head"><!-- wp:paragraph {"className": "iy-eyebrow"} -->
<p class="iy-eyebrow"><?php echo esc_html( itomaki_yarn_t( 'strip_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "iy-sec__title"} -->
<h2 class="wp-block-heading iy-sec__title"><?php echo esc_html( itomaki_yarn_t( 'strip_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "iy-panel__hint"} -->
<p class="iy-panel__hint"><?php echo esc_html( itomaki_yarn_t( 'strip_hint' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php if ( class_exists( 'WooCommerce' ) ) : ?>
<!-- wp:woocommerce/product-collection {"queryId": 3, "query": {"perPage": 8, "pages": 1, "offset": 0, "postType": "product", "order": "asc", "orderBy": "menu_order", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": false, "taxQuery": {}, "isProductCollectionBlock": true, "featured": false, "woocommerceOnSale": false, "woocommerceStockStatus": ["instock", "outofstock", "onbackorder"], "woocommerceAttributes": [], "woocommerceHandPickedProducts": []}, "tagName": "div", "displayLayout": {"type": "flex", "columns": 4, "shrinkColumns": true}, "dimensions": {"widthType": "fill"}, "queryContextIncludes": ["collection"], "align": "wide", "className": "iy-grid"} -->
<div class="wp-block-woocommerce-product-collection alignwide iy-grid"><!-- wp:woocommerce/product-template -->
<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"single","isDescendentOfQueryLoop":true,"aspectRatio":"1","className":"iy-card__photo"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"iy-card__name","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"className":"iy-card__price"} /-->
<!-- /wp:woocommerce/product-template --></div>
<!-- /wp:woocommerce/product-collection -->
<?php else : ?>
<!-- wp:group {"align": "wide", "className": "iy-grid iy-grid--static", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide iy-grid iy-grid--static"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "iy-grid__img"} -->
<figure class="wp-block-image size-full iy-grid__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/p-madder.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "iy-grid__img"} -->
<figure class="wp-block-image size-full iy-grid__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/p-cream.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "iy-grid__img"} -->
<figure class="wp-block-image size-full iy-grid__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/p-indigo.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "iy-grid__img"} -->
<figure class="wp-block-image size-full iy-grid__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/p-mohair.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "iy-grid__img"} -->
<figure class="wp-block-image size-full iy-grid__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/p-speckle.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "iy-grid__img"} -->
<figure class="wp-block-image size-full iy-grid__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/p-needles.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
<?php endif; ?>

<!-- wp:buttons {"className": "iy-more"} -->
<div class="wp-block-buttons iy-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/shop/"><?php echo esc_html( itomaki_yarn_t( 'all_tackle' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->


