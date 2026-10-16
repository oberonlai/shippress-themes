<?php
/**
 * Title: Home: the shelf panel
 * Slug: hanayui-kimono/home-shelf
 * Categories: hanayui-kimono
 * Keywords: kimono, rental, dressing
 * Viewport Width: 1440
 * Description: The rental plans and small things as a four-column grid (WooCommerce products; pictures without it).
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hy-section hy-shelf hy-panel hy-panel", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hy-section hy-shelf hy-panel hy-panel"><!-- wp:group {"align": "wide", "className": "hy-card", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide hy-card"><!-- wp:group {"align": "wide", "className": "hy-panel__head", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide hy-panel__head"><!-- wp:paragraph {"className": "hy-eyebrow"} -->
<p class="hy-eyebrow"><?php echo esc_html( hanayui_kimono_t( 'strip_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "hy-sec__title"} -->
<h2 class="wp-block-heading hy-sec__title"><?php echo esc_html( hanayui_kimono_t( 'strip_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "hy-panel__hint"} -->
<p class="hy-panel__hint"><?php echo esc_html( hanayui_kimono_t( 'strip_hint' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php if ( class_exists( 'WooCommerce' ) ) : ?>
<!-- wp:woocommerce/product-collection {"queryId": 3, "query": {"perPage": 8, "pages": 1, "offset": 0, "postType": "product", "order": "asc", "orderBy": "menu_order", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": false, "taxQuery": {}, "isProductCollectionBlock": true, "featured": false, "woocommerceOnSale": false, "woocommerceStockStatus": ["instock", "outofstock", "onbackorder"], "woocommerceAttributes": [], "woocommerceHandPickedProducts": []}, "tagName": "div", "displayLayout": {"type": "flex", "columns": 4, "shrinkColumns": true}, "dimensions": {"widthType": "fill"}, "queryContextIncludes": ["collection"], "align": "wide", "className": "hy-grid"} -->
<div class="wp-block-woocommerce-product-collection alignwide hy-grid"><!-- wp:woocommerce/product-template -->
<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"single","isDescendentOfQueryLoop":true,"aspectRatio":"1","className":"hy-card__photo"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"hy-card__name","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"className":"hy-card__price"} /-->
<!-- /wp:woocommerce/product-template --></div>
<!-- /wp:woocommerce/product-collection -->
<?php else : ?>
<!-- wp:group {"align": "wide", "className": "hy-grid hy-grid--static", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide hy-grid hy-grid--static"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hy-grid__img"} -->
<figure class="wp-block-image size-full hy-grid__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/p-houmongi.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hy-grid__img"} -->
<figure class="wp-block-image size-full hy-grid__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/p-yukata.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hy-grid__img"} -->
<figure class="wp-block-image size-full hy-grid__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/p-couple.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hy-grid__img"} -->
<figure class="wp-block-image size-full hy-grid__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/p-obi.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hy-grid__img"} -->
<figure class="wp-block-image size-full hy-grid__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/p-kanzashi.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hy-grid__img"} -->
<figure class="wp-block-image size-full hy-grid__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/p-kinchaku.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
<?php endif; ?>

<!-- wp:buttons {"className": "hy-more"} -->
<div class="wp-block-buttons hy-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/shop/"><?php echo esc_html( hanayui_kimono_t( 'all_tackle' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->


