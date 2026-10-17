<?php
/**
 * Title: Home: the shelf as an asymmetric masonry
 * Slug: shirokuro-camera/home-shelf
 * Categories: shirokuro-camera
 * Keywords: film cameras, lenses, film
 * Viewport Width: 1440
 * Description: The cameras on a mikan orange band with a clay sprocket texture, in uneven masonry columns of tall and wide cards (WooCommerce products; pictures without it).
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sc-section sc-shelf", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sc-section sc-shelf"><!-- wp:group {"align": "wide", "className": "sc-shelf__inner", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide sc-shelf__inner"><!-- wp:group {"align": "wide", "className": "sc-panel__head", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide sc-panel__head"><!-- wp:paragraph {"className": "sc-eyebrow"} -->
<p class="sc-eyebrow"><?php echo esc_html( shirokuro_camera_t( 'strip_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "sc-sec__title"} -->
<h2 class="wp-block-heading sc-sec__title"><?php echo esc_html( shirokuro_camera_t( 'strip_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sc-panel__hint"} -->
<p class="sc-panel__hint"><?php echo esc_html( shirokuro_camera_t( 'strip_hint' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php if ( class_exists( 'WooCommerce' ) ) : ?>
<!-- wp:woocommerce/product-collection {"queryId": 3, "query": {"perPage": 8, "pages": 1, "offset": 0, "postType": "product", "order": "asc", "orderBy": "menu_order", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": false, "taxQuery": {}, "isProductCollectionBlock": true, "featured": false, "woocommerceOnSale": false, "woocommerceStockStatus": ["instock", "outofstock", "onbackorder"], "woocommerceAttributes": [], "woocommerceHandPickedProducts": []}, "tagName": "div", "displayLayout": {"type": "flex", "columns": 4, "shrinkColumns": true}, "dimensions": {"widthType": "fill"}, "queryContextIncludes": ["collection"], "align": "wide", "className": "sc-grid sc-masonry"} -->
<div class="wp-block-woocommerce-product-collection alignwide sc-grid sc-masonry"><!-- wp:woocommerce/product-template -->
<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"single","isDescendentOfQueryLoop":true,"aspectRatio":"1","className":"sc-card__photo"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"sc-card__name","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"className":"sc-card__price"} /-->
<!-- /wp:woocommerce/product-template --></div>
<!-- /wp:woocommerce/product-collection -->
<?php else : ?>
<!-- wp:group {"align": "wide", "className": "sc-grid sc-grid--static sc-masonry", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide sc-grid sc-grid--static sc-masonry"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sc-grid__img"} -->
<figure class="wp-block-image size-full sc-grid__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/p-rangefinder.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sc-grid__img"} -->
<figure class="wp-block-image size-full sc-grid__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/p-tlr.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sc-grid__img"} -->
<figure class="wp-block-image size-full sc-grid__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/p-halfframe.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sc-grid__img"} -->
<figure class="wp-block-image size-full sc-grid__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/p-lens.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sc-grid__img"} -->
<figure class="wp-block-image size-full sc-grid__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/p-film.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sc-grid__img"} -->
<figure class="wp-block-image size-full sc-grid__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/p-meter.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
<?php endif; ?>

<!-- wp:buttons {"className": "sc-more"} -->
<div class="wp-block-buttons sc-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/shop/"><?php echo esc_html( shirokuro_camera_t( 'all_tackle' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->


