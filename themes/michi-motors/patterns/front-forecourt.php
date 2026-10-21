<?php
/**
 * Title: Home: forecourt
 * Slug: michi-motors/front-forecourt
 * Categories: michi-motors
 * Keywords: car dealership, cars, showroom
 * Viewport Width: 1440
 * Description: Feature car and a four-row ledger on a mist ground (WooCommerce featured products when active).
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mm-sec mm-sec--mist mm-forecourt","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull mm-sec mm-sec--mist mm-forecourt"><!-- wp:group {"align":"wide","anchor":"forecourt","className":"mm-forecourt__head","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide mm-forecourt__head" id="forecourt"><!-- wp:group {"className":"mm-head","layout":{"type":"default"}} -->
<div class="wp-block-group mm-head"><!-- wp:paragraph {"className":"mm-label"} -->
<p class="mm-label"><?php echo esc_html( michi_motors_t( 'front_forecourt_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"mm-h"} -->
<h2 class="wp-block-heading mm-h"><?php echo michi_motors_lines( 'front_forecourt_2' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"mm-lead"} -->
<p class="mm-lead"><?php echo esc_html( michi_motors_t( 'front_forecourt_3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<?php if ( class_exists( 'WooCommerce' ) ) : ?>
<!-- wp:woocommerce/product-collection {"queryId":30,"query":{"perPage":5,"pages":1,"offset":0,"postType":"product","order":"asc","orderBy":"menu_order","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"featured":true,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"tagName":"div","displayLayout":{"type":"flex","columns":1,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"queryContextIncludes":["collection"],"align":"wide","className":"mm-fc-woo"} -->
<div class="wp-block-woocommerce-product-collection alignwide mm-fc-woo"><!-- wp:woocommerce/product-template -->
<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"single","isDescendentOfQueryLoop":true,"aspectRatio":"3/2","className":"mm-card__photo"} /-->

<!-- wp:post-terms {"term":"product_cat","className":"mm-card__cat"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"mm-card__name","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"className":"mm-card__price"} /-->
<!-- /wp:woocommerce/product-template --></div>
<!-- /wp:woocommerce/product-collection -->

<!-- wp:group {"align":"wide","className":"mm-endcta","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide mm-endcta"><!-- wp:paragraph {"className":"mm-more"} -->
<p class="mm-more"><a href="/new-cars/"><?php echo esc_html( michi_motors_t( 'front_forecourt_4' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<?php else : ?>
<!-- wp:group {"align":"wide","className":"mm-grid mm-forecourt__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide mm-grid mm-forecourt__grid"><!-- wp:group {"className":"mm-feature","layout":{"type":"default"}} -->
<div class="wp-block-group mm-feature"><!-- wp:image {"sizeSlug":"full","linkDestination":"custom","className":"mm-feature__img"} -->
<figure class="wp-block-image size-full mm-feature__img"><a href="<?php echo esc_url( michi_motors_car_url( 'arden-tourer-hybrid' ) ); ?>"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/v1-arden.webp' ) ); ?>" alt="<?php echo esc_attr( michi_motors_t( 'front_forecourt_5' ) ); ?>"/></a></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"mm-feature__line","layout":{"type":"default"}} -->
<div class="wp-block-group mm-feature__line"><!-- wp:paragraph {"className":"mm-feature__name"} -->
<p class="mm-feature__name"><a href="<?php echo esc_url( michi_motors_car_url( 'arden-tourer-hybrid' ) ); ?>"><?php echo esc_html( michi_motors_t( 'front_forecourt_6' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mm-feature__meta"} -->
<p class="mm-feature__meta"><?php echo esc_html( michi_motors_t( 'front_forecourt_7' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mm-feature__price"} -->
<p class="mm-feature__price">$36,900</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mm-ledger","layout":{"type":"default"}} -->
<div class="wp-block-group mm-ledger"><!-- wp:group {"className":"mm-row","layout":{"type":"default"}} -->
<div class="wp-block-group mm-row"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mm-row__img"} -->
<figure class="wp-block-image size-full mm-row__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/v2-corvel.webp' ) ); ?>" alt="<?php echo esc_attr( michi_motors_t( 'front_forecourt_8' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"mm-row__text","layout":{"type":"default"}} -->
<div class="wp-block-group mm-row__text"><!-- wp:paragraph {"className":"mm-row__name"} -->
<p class="mm-row__name"><a href="<?php echo esc_url( michi_motors_car_url( 'corvel-compact-se' ) ); ?>"><?php echo esc_html( michi_motors_t( 'front_forecourt_9' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mm-row__meta"} -->
<p class="mm-row__meta"><?php echo esc_html( michi_motors_t( 'front_forecourt_10' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"mm-row__price"} -->
<p class="mm-row__price">$21,450</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mm-row","layout":{"type":"default"}} -->
<div class="wp-block-group mm-row"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mm-row__img"} -->
<figure class="wp-block-image size-full mm-row__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/v3-halden.webp' ) ); ?>" alt="<?php echo esc_attr( michi_motors_t( 'front_forecourt_11' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"mm-row__text","layout":{"type":"default"}} -->
<div class="wp-block-group mm-row__text"><!-- wp:paragraph {"className":"mm-row__name"} -->
<p class="mm-row__name"><a href="<?php echo esc_url( michi_motors_car_url( 'halden-4-awd' ) ); ?>"><?php echo esc_html( michi_motors_t( 'front_forecourt_12' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mm-row__meta"} -->
<p class="mm-row__meta"><?php echo esc_html( michi_motors_t( 'front_forecourt_13' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"mm-row__price"} -->
<p class="mm-row__price">$28,900</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mm-row","layout":{"type":"default"}} -->
<div class="wp-block-group mm-row"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mm-row__img"} -->
<figure class="wp-block-image size-full mm-row__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/v4-lumen.webp' ) ); ?>" alt="<?php echo esc_attr( michi_motors_t( 'front_forecourt_14' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"mm-row__text","layout":{"type":"default"}} -->
<div class="wp-block-group mm-row__text"><!-- wp:paragraph {"className":"mm-row__name"} -->
<p class="mm-row__name"><a href="<?php echo esc_url( michi_motors_car_url( 'lumen-e-hatch' ) ); ?>"><?php echo esc_html( michi_motors_t( 'front_forecourt_15' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mm-row__meta"} -->
<p class="mm-row__meta"><?php echo esc_html( michi_motors_t( 'front_forecourt_16' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"mm-row__price"} -->
<p class="mm-row__price">$27,800</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mm-row","layout":{"type":"default"}} -->
<div class="wp-block-group mm-row"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mm-row__img"} -->
<figure class="wp-block-image size-full mm-row__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/v5-norvik.webp' ) ); ?>" alt="<?php echo esc_attr( michi_motors_t( 'front_forecourt_17' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"mm-row__text","layout":{"type":"default"}} -->
<div class="wp-block-group mm-row__text"><!-- wp:paragraph {"className":"mm-row__name"} -->
<p class="mm-row__name"><a href="<?php echo esc_url( michi_motors_car_url( 'norvik-sedan-lx' ) ); ?>"><?php echo esc_html( michi_motors_t( 'front_forecourt_18' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mm-row__meta"} -->
<p class="mm-row__meta"><?php echo esc_html( michi_motors_t( 'front_forecourt_19' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"mm-row__price"} -->
<p class="mm-row__price">$19,750</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"mm-more"} -->
<p class="mm-more"><a href="/new-cars/"><?php echo esc_html( michi_motors_t( 'front_forecourt_4' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<?php endif; ?></section>
<!-- /wp:group -->
