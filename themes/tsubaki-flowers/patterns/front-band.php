<?php
/**
 * Title: Home: market band
 * Slug: tsubaki-flowers/front-band
 * Categories: tsubaki-flowers
 * Keywords: florist, flowers, shop
 * Viewport Width: 1440
 * Description: Full-bleed market photograph with parallax and a small caption below.
 */
?>
<!-- wp:group {"align":"full","className":"tf-band sp-parallax","layout":{"type":"default"},"style":{"spacing":{}},"metadata":{"name":"Photo band"}} -->
<div class="wp-block-group alignfull tf-band sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h7-market-dawn.webp' ) ); ?>" alt="<?php echo esc_attr( tsubaki_flowers_t( 'aab85249e' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --><!-- wp:group {"align":"full","className":"tf-band-cap","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull tf-band-cap"><!-- wp:paragraph {"className":"tf-tags tf-tags--cap"} -->
<p class="tf-tags tf-tags--cap"><?php echo wp_kses_post( tsubaki_flowers_t( 'k8e219269' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
