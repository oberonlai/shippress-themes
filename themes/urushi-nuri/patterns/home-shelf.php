<?php
/**
 * Title: Home: the shelf panel
 * Slug: urushi-nuri/home-shelf
 * Categories: urushi-nuri
 * Keywords: urushi, lacquer, workshop
 * Viewport Width: 1440
 * Description: This season's lacquerware as a four-column grid inside a white app panel (WooCommerce products; pictures without it).
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "un-section un-shelf un-panel un-panel", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull un-section un-shelf un-panel un-panel"><!-- wp:group {"align": "wide", "className": "un-card", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide un-card"><!-- wp:group {"align": "wide", "className": "un-panel__head", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide un-panel__head"><!-- wp:paragraph {"className": "un-eyebrow"} -->
<p class="un-eyebrow"><?php echo esc_html( urushi_nuri_t( 'strip_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "un-sec__title"} -->
<h2 class="wp-block-heading un-sec__title"><?php echo esc_html( urushi_nuri_t( 'strip_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "un-panel__hint"} -->
<p class="un-panel__hint"><?php echo esc_html( urushi_nuri_t( 'strip_hint' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php if ( class_exists( 'WooCommerce' ) ) : ?>
<!-- wp:woocommerce/product-collection {"queryId": 3, "query": {"perPage": 8, "pages": 1, "offset": 0, "postType": "product", "order": "asc", "orderBy": "menu_order", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": false, "taxQuery": {}, "isProductCollectionBlock": true, "featured": false, "woocommerceOnSale": false, "woocommerceStockStatus": ["instock", "outofstock", "onbackorder"], "woocommerceAttributes": [], "woocommerceHandPickedProducts": []}, "tagName": "div", "displayLayout": {"type": "flex", "columns": 4, "shrinkColumns": true}, "dimensions": {"widthType": "fill"}, "queryContextIncludes": ["collection"], "align": "wide", "className": "un-grid"} -->
<div class="wp-block-woocommerce-product-collection alignwide un-grid"><!-- wp:woocommerce/product-template -->
<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"single","isDescendentOfQueryLoop":true,"aspectRatio":"1","className":"un-card__photo"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"un-card__name","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"className":"un-card__price"} /-->
<!-- /wp:woocommerce/product-template --></div>
<!-- /wp:woocommerce/product-collection -->
<?php else : ?>
<!-- wp:group {"align": "wide", "className": "un-grid un-grid--static", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide un-grid un-grid--static"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "un-grid__img"} -->
<figure class="wp-block-image size-full un-grid__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/p-owan.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "un-grid__img"} -->
<figure class="wp-block-image size-full un-grid__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/p-jubako.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "un-grid__img"} -->
<figure class="wp-block-image size-full un-grid__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/p-tray.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "un-grid__img"} -->
<figure class="wp-block-image size-full un-grid__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/p-natsume.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "un-grid__img"} -->
<figure class="wp-block-image size-full un-grid__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/p-sakazuki.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "un-grid__img"} -->
<figure class="wp-block-image size-full un-grid__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/p-plate.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
<?php endif; ?>

<!-- wp:buttons {"className": "un-more"} -->
<div class="wp-block-buttons un-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/shop/"><?php echo esc_html( urushi_nuri_t( 'all_tackle' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->


