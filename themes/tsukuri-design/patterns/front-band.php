<?php
/**
 * Title: Home: model shop band
 * Slug: tsukuri-design/front-band
 * Categories: tsukuri-design
 * Viewport Width: 1440
 * Description: Full-bleed model shop photograph that drifts slower than the page, with one small tag on the ground below it.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"td-band","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull td-band"><!-- wp:group {"align":"full","className":"td-band__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull td-band__photo sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"td-ph"} -->
<figure class="wp-block-image size-full td-ph"><img src="<?php echo tsukuri_design_img( 'p05-model-shop.webp' ); ?>" alt="<?php echo tsukuri_design_a( 'alt_p05' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"td-tag"} -->
<p class="td-tag"><?php echo esc_html( tsukuri_design_t( 'band_tag' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
