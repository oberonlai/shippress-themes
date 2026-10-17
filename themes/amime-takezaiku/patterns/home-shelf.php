<?php
/**
 * Title: Home: the shelf as a horizontal strip
 * Slug: amime-takezaiku/home-shelf
 * Categories: amime-takezaiku
 * Keywords: bamboo, baskets, workshop
 * Viewport Width: 1440
 * Description: The baskets on a kariyasu yellow band with a hexagon weave texture, as one shelf that scrolls sideways (WooCommerce products; pictures without it).
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tk-section tk-shelf", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tk-section tk-shelf"><!-- wp:group {"align": "wide", "className": "tk-shelf__inner", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide tk-shelf__inner"><!-- wp:group {"align": "wide", "className": "tk-panel__head", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide tk-panel__head"><!-- wp:paragraph {"className": "tk-eyebrow"} -->
<p class="tk-eyebrow"><?php echo esc_html( amime_takezaiku_t( 'strip_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "tk-sec__title"} -->
<h2 class="wp-block-heading tk-sec__title"><?php echo esc_html( amime_takezaiku_t( 'strip_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "tk-panel__hint"} -->
<p class="tk-panel__hint"><?php echo esc_html( amime_takezaiku_t( 'strip_hint' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php if ( class_exists( 'WooCommerce' ) ) : ?>
<!-- wp:woocommerce/product-collection {"queryId": 3, "query": {"perPage": 8, "pages": 1, "offset": 0, "postType": "product", "order": "asc", "orderBy": "menu_order", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": false, "taxQuery": {}, "isProductCollectionBlock": true, "featured": false, "woocommerceOnSale": false, "woocommerceStockStatus": ["instock", "outofstock", "onbackorder"], "woocommerceAttributes": [], "woocommerceHandPickedProducts": []}, "tagName": "div", "displayLayout": {"type": "flex", "columns": 4, "shrinkColumns": true}, "dimensions": {"widthType": "fill"}, "queryContextIncludes": ["collection"], "align": "wide", "className": "tk-grid tk-hscroll"} -->
<div class="wp-block-woocommerce-product-collection alignwide tk-grid tk-hscroll"><!-- wp:woocommerce/product-template -->
<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"single","isDescendentOfQueryLoop":true,"aspectRatio":"1","className":"tk-card__photo"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"tk-card__name","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"className":"tk-card__price"} /-->
<!-- /wp:woocommerce/product-template --></div>
<!-- /wp:woocommerce/product-collection -->
<?php else : ?>
<!-- wp:group {"align": "wide", "className": "tk-grid tk-grid--static tk-hscroll", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide tk-grid tk-grid--static tk-hscroll"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tk-grid__img"} -->
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
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tk-grid__img"} -->
<figure class="wp-block-image size-full tk-grid__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/p-bread.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tk-grid__img"} -->
<figure class="wp-block-image size-full tk-grid__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/p-kagome.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
<?php endif; ?>

<!-- wp:buttons {"className": "tk-more"} -->
<div class="wp-block-buttons tk-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/shop/"><?php echo esc_html( amime_takezaiku_t( 'all_tackle' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->


