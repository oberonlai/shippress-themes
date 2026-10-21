<?php
/**
 * Title: Shop page header band
 * Slug: yamabiko-outdoor-supply/page-band-shop
 * Categories: yamabiko-outdoor-supply
 * Keywords: outdoor, camping, gear, shop
 * Viewport Width: 1440
 * Inserter: no
 */
$yb = get_theme_file_uri( 'assets/images/' );
?>
<!-- wp:group {"tagName":"section","align":"full","className":"yb-band yb-band--page","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull yb-band yb-band--page"><!-- wp:group {"className":"yb-band__box","layout":{"type":"default"}} -->
<div class="wp-block-group yb-band__box"><!-- wp:image {"sizeSlug":"full","className":"yb-band__photo sp-parallax"} -->
<figure class="wp-block-image size-full yb-band__photo sp-parallax"><img src="<?php echo esc_url( $yb . 'p01-hero.webp' ); ?>" alt="Two hikers packing a small grey tent on a pale granite plateau at dawn"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<nav class="yb-band__links" aria-label="In this page"><a class="yb-entry" href="/product-category/shelter/"><b>Shelter</b></a><a class="yb-entry" href="/product-category/carry/"><b>Carry</b></a><a class="yb-entry" href="/product-category/layers-sleep/"><b>Layers &amp; sleep</b></a></nav><div class="yb-band__title"><p class="yb-band__label">Catalogue</p><h1>Shop</h1></div>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:html -->
<nav class="yb-index" aria-label="On this page"><a href="/product-category/shelter/" class="is-active" aria-current="location"><i></i>Shelter</a><a href="/product-category/carry/"><i></i>Carry</a><a href="/product-category/layers-sleep/"><i></i>Layers</a><a href="/shop/"><i></i>All</a></nav>
<!-- /wp:html -->
