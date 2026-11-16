<?php
/**
 * Title: Home: shower band
 * Slug: hako-capsule/front-band
 * Categories: hako-capsule
 * Keywords: capsule hotel, pods, station
 * Viewport Width: 1440
 * Description: Full-bleed parallax photograph of the washroom row, 2.4:1, with a caption between two ink rules.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hk-bandwrap","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hk-bandwrap"><!-- wp:group {"className":"hk-bandphoto sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group hk-bandphoto sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hk-bandphoto__img"} -->
<figure class="wp-block-image size-full hk-bandphoto__img"><img src="<?php echo hako_capsule_img( 'p10-washroom-row.webp' ); ?>" alt="<?php echo hako_capsule_a( 'alt_p10' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hk-bandcap"} -->
<p class="hk-bandcap"><?php echo esc_html( hako_capsule_t( 'band_cap' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
