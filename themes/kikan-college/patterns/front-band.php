<?php
/**
 * Title: Home: the hall at dusk
 * Slug: kikan-college/front-band
 * Categories: kikan-college
 * Viewport Width: 1440
 * Description: Framed rounded parallax band with a quote plate.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-band-wrap","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-band-wrap">
<!-- wp:group {"className":"kc-band","layout":{"type":"default"}} -->
<div class="wp-block-group kc-band">
<!-- wp:group {"className":"kc-band__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group kc-band__photo sp-parallax">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-band__img"} -->
<figure class="wp-block-image size-full kc-band__img"><img src="<?php echo kikan_college_img( 'band-hall.webp' ); ?>" alt="<?php echo kikan_college_a( 'alt_band' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-band__plate","layout":{"type":"default"}} -->
<div class="wp-block-group kc-band__plate">
<!-- wp:paragraph {"className":"kc-band__q"} -->
<p class="kc-band__q"><?php echo esc_html( kikan_college_t( 'band_q' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-band__by"} -->
<p class="kc-band__by"><?php echo esc_html( kikan_college_t( 'band_by' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
