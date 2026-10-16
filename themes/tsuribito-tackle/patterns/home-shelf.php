<?php
/**
 * Title: Home: the shelf as a sideways strip
 * Slug: tsuribito-tackle/home-shelf
 * Categories: tsuribito-tackle
 * Keywords: fishing, tackle, shop
 * Viewport Width: 1440
 * Description: This week's tackle as one horizontal strip that scrolls sideways (WooCommerce products; photos without it).
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tt-section tt-shelf", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tt-section tt-shelf"><!-- wp:group {"align": "wide", "className": "tt-strip__head", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide tt-strip__head"><!-- wp:paragraph {"className": "tt-eyebrow"} -->
<p class="tt-eyebrow"><?php echo esc_html( tsuribito_tackle_t( 'strip_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "tt-sec__title"} -->
<h2 class="wp-block-heading tt-sec__title"><?php echo esc_html( tsuribito_tackle_t( 'strip_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "tt-strip__hint"} -->
<p class="tt-strip__hint"><?php echo esc_html( tsuribito_tackle_t( 'strip_hint' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php if ( class_exists( 'WooCommerce' ) ) : ?>
<!-- wp:woocommerce/product-collection {"queryId": 3, "query": {"perPage": 8, "pages": 1, "offset": 0, "postType": "product", "order": "asc", "orderBy": "menu_order", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": false, "taxQuery": {}, "isProductCollectionBlock": true, "featured": false, "woocommerceOnSale": false, "woocommerceStockStatus": ["instock", "outofstock", "onbackorder"], "woocommerceAttributes": [], "woocommerceHandPickedProducts": []}, "tagName": "div", "displayLayout": {"type": "flex", "columns": 4, "shrinkColumns": true}, "dimensions": {"widthType": "fill"}, "queryContextIncludes": ["collection"], "align": "wide", "className": "tt-rail"} -->
<div class="wp-block-woocommerce-product-collection alignwide tt-rail"><!-- wp:woocommerce/product-template -->
<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"single","isDescendentOfQueryLoop":true,"aspectRatio":"1","className":"tt-card__photo"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"tt-card__name","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"className":"tt-card__price"} /-->
<!-- /wp:woocommerce/product-template --></div>
<!-- /wp:woocommerce/product-collection -->
<?php else : ?>
<!-- wp:group {"align": "wide", "className": "tt-rail tt-rail--static", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide tt-rail tt-rail--static"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tt-rail__img"} -->
<figure class="wp-block-image size-full tt-rail__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/p-reel.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tt-rail__img"} -->
<figure class="wp-block-image size-full tt-rail__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/p-rod.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tt-rail__img"} -->
<figure class="wp-block-image size-full tt-rail__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/p-lures.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tt-rail__img"} -->
<figure class="wp-block-image size-full tt-rail__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/p-floats.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tt-rail__img"} -->
<figure class="wp-block-image size-full tt-rail__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/p-box.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tt-rail__img"} -->
<figure class="wp-block-image size-full tt-rail__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/p-line.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
<?php endif; ?>

<!-- wp:buttons {"className": "tt-more"} -->
<div class="wp-block-buttons tt-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/shop/"><?php echo esc_html( tsuribito_tackle_t( 'all_tackle' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
