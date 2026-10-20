<?php
/**
 * Title: Shop: all products
 * Slug: hibi-wear/shop-main
 * Categories: hibi-wear
 * Keywords: clothing, shop, apparel
 * Viewport Width: 1440
 * Description: Every product in a grid (WooCommerce), or the line-up photos without it.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hw-sec hw-shopgrid","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hw-sec hw-shopgrid"><?php if ( class_exists( 'WooCommerce' ) ) : ?>
<!-- wp:woocommerce/product-collection {"queryId":4,"query":{"perPage":12,"pages":1,"offset":0,"postType":"product","order":"asc","orderBy":"menu_order","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"tagName":"div","displayLayout":{"type":"flex","columns":3,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"queryContextIncludes":["collection"],"align":"wide","className":"hw-grid"} -->
<div class="wp-block-woocommerce-product-collection alignwide hw-grid"><!-- wp:woocommerce/product-template -->
<!-- wp:post-terms {"term":"product_cat","className":"hw-pill"} /-->

<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"single","isDescendentOfQueryLoop":true,"aspectRatio":"4/5","className":"hw-card__photo"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"hw-card__name","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"className":"hw-card__price"} /-->
<!-- /wp:woocommerce/product-template --></div>
<!-- /wp:woocommerce/product-collection -->
<?php else : ?>
<!-- wp:group {"align":"wide","className":"hw-lineup","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hw-lineup"><!-- wp:group {"className":"hw-card","layout":{"type":"default"}} -->
<div class="wp-block-group hw-card"><!-- wp:paragraph {"className":"hw-pill"} -->
<p class="hw-pill"><?php echo esc_html( hibi_wear_t( 'cat_tops' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"custom","className":"hw-card__photo"} -->
<figure class="wp-block-image size-full hw-card__photo"><a href="/shop/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p1-crew-tee.webp' ) ); ?>" alt="<?php echo esc_attr( hibi_wear_t( 'alt_p1' ) ); ?>"/></a></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"hw-card__name"} -->
<p class="hw-card__name"><?php echo esc_html( hibi_wear_t( 'p1_name' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hw-card__price"} -->
<p class="hw-card__price">$38</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hw-card","layout":{"type":"default"}} -->
<div class="wp-block-group hw-card"><!-- wp:paragraph {"className":"hw-pill"} -->
<p class="hw-pill"><?php echo esc_html( hibi_wear_t( 'cat_shirts' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"custom","className":"hw-card__photo"} -->
<figure class="wp-block-image size-full hw-card__photo"><a href="/shop/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p4-oxford.webp' ) ); ?>" alt="<?php echo esc_attr( hibi_wear_t( 'alt_p4' ) ); ?>"/></a></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"hw-card__name"} -->
<p class="hw-card__name"><?php echo esc_html( hibi_wear_t( 'p4_name' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hw-card__price"} -->
<p class="hw-card__price">$78</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hw-card","layout":{"type":"default"}} -->
<div class="wp-block-group hw-card"><!-- wp:paragraph {"className":"hw-pill"} -->
<p class="hw-pill"><?php echo esc_html( hibi_wear_t( 'cat_bottoms' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"custom","className":"hw-card__photo"} -->
<figure class="wp-block-image size-full hw-card__photo"><a href="/shop/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p7-trouser.webp' ) ); ?>" alt="<?php echo esc_attr( hibi_wear_t( 'alt_p7' ) ); ?>"/></a></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"hw-card__name"} -->
<p class="hw-card__name"><?php echo esc_html( hibi_wear_t( 'p7_name' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hw-card__price"} -->
<p class="hw-card__price">$88</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hw-card","layout":{"type":"default"}} -->
<div class="wp-block-group hw-card"><!-- wp:paragraph {"className":"hw-pill"} -->
<p class="hw-pill"><?php echo esc_html( hibi_wear_t( 'cat_knitwear' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"custom","className":"hw-card__photo"} -->
<figure class="wp-block-image size-full hw-card__photo"><a href="/shop/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p8-cardigan.webp' ) ); ?>" alt="<?php echo esc_attr( hibi_wear_t( 'alt_p8' ) ); ?>"/></a></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"hw-card__name"} -->
<p class="hw-card__name"><?php echo esc_html( hibi_wear_t( 'p8_name' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hw-card__price"} -->
<p class="hw-card__price">$128</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:group {"align":"wide","className":"hw-shopnote","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hw-shopnote"><!-- wp:paragraph {"className":"hw-lead"} -->
<p class="hw-lead"><?php echo esc_html( hibi_wear_t( 'shop_empty' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<?php endif; ?></section>
<!-- /wp:group -->
