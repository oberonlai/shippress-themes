<?php
/**
 * Title: Home: pouring
 * Slug: kura-wine/front-pouring
 * Categories: kura-wine
 * Keywords: wine, shop, merchant
 * Viewport Width: 1440
 * Description: Large 3:4 photo on the left, a label and sentence on the right and a 2 by 2 grid of the featured bottles.
 */
?>
<?php
$bottles = array(
	array( 1, 'P1', '/shop/' ),
	array( 3, 'P3', '/shop/' ),
	array( 5, 'P5', '/shop/' ),
	array( 6, 'P6', '/shop/' ),
);
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kw-sec kw-pouring","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kw-sec kw-pouring"><!-- wp:group {"className":"kw-wrap kw-pouring__grid","layout":{"type":"default"}} -->
<div class="wp-block-group kw-wrap kw-pouring__grid"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kw-ph kw-ph--k10 kw-pouring__big sp-reveal sp-reveal--mask"} -->
<figure class="wp-block-image size-full kw-ph kw-ph--k10 kw-pouring__big sp-reveal sp-reveal--mask"><img src="<?php echo esc_url( kura_wine_img( 'K10' ) ); ?>" alt="<?php echo esc_attr( kura_wine_t( 'alt_K10' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kw-ph kw-ph--p2 kw-pouring__small sp-reveal sp-reveal--mask"} -->
<figure class="wp-block-image size-full kw-ph kw-ph--p2 kw-pouring__small sp-reveal sp-reveal--mask"><img src="<?php echo esc_url( kura_wine_img( 'P2' ) ); ?>" alt="<?php echo esc_attr( kura_wine_t( 'alt_P2' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kw-pouring__body","layout":{"type":"default"}} -->
<div class="wp-block-group kw-pouring__body"><!-- wp:paragraph {"className":"kw-label"} -->
<p class="kw-label"><?php echo esc_html( kura_wine_t( 'po_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kw-pouring__text"} -->
<p class="kw-pouring__text"><?php echo esc_html( kura_wine_t( 'po_text' ) ); ?></p>
<!-- /wp:paragraph -->

<?php if ( class_exists( 'WooCommerce' ) ) : ?>
<!-- wp:woocommerce/product-collection {"queryId":3,"query":{"perPage":4,"pages":1,"offset":0,"postType":"product","order":"asc","orderBy":"menu_order","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"featured":true,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"tagName":"div","displayLayout":{"type":"flex","columns":2,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"queryContextIncludes":["collection"],"className":"kw-bottles"} -->
<div class="wp-block-woocommerce-product-collection kw-bottles"><!-- wp:woocommerce/product-template -->
<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"single","isDescendentOfQueryLoop":true,"aspectRatio":"4/5","className":"kw-card__photo"} /-->

<!-- wp:post-terms {"term":"product_cat","className":"kw-card__region"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"kw-card__name","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:post-excerpt {"excerptLength":10,"className":"kw-card__grower"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"className":"kw-card__price"} /-->
<!-- /wp:woocommerce/product-template --></div>
<!-- /wp:woocommerce/product-collection -->
<?php else : ?>
<!-- wp:group {"className":"kw-bottles kw-bottles--static","layout":{"type":"default"}} -->
<div class="wp-block-group kw-bottles kw-bottles--static"><?php foreach ( $bottles as $b ) : ?>
<!-- wp:group {"className":"kw-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kw-card sp-reveal sp-reveal--up"><?php echo kura_wine_image( $b[1], 'kw-card__photo' ); ?>

<!-- wp:paragraph {"className":"kw-card__region"} -->
<p class="kw-card__region"><?php echo esc_html( kura_wine_t( 'p' . $b[0] . '_region' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kw-card__name"} -->
<p class="kw-card__name"><a href="<?php echo esc_url( home_url( $b[2] ) ); ?>"><?php echo esc_html( kura_wine_t( 'p' . $b[0] . '_name' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kw-card__grower"} -->
<p class="kw-card__grower"><?php echo esc_html( kura_wine_t( 'p' . $b[0] . '_grower' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kw-card__price"} -->
<p class="kw-card__price"><?php echo esc_html( kura_wine_t( 'p' . $b[0] . '_price' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php endforeach; ?></div>
<!-- /wp:group -->
<?php endif; ?>

<?php echo kura_wine_more( 'po_more', '/shop/' ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
