<?php
/**
 * Title: Water band: full-bleed photo that drifts
 * Slug: sazanami-hotel/band
 * Categories: sazanami-hotel
 * Viewport Width: 1440
 * Description: A full-bleed photograph of still water with parallax, and one short line in a solid plate below it.
 */
?>
<!-- wp:group {"tagName":"section","className":"sz-band","layout":{"type":"default"}} -->
<section class="wp-block-group sz-band"><!-- wp:group {"className":"sz-band__ph sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group sz-band__ph sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo sazanami_hotel_img( 'band-still-water.webp' ); ?>" alt="<?php echo sazanami_hotel_a( 'alt_p08' ); ?>"/></figure>
<!-- /wp:image -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-band__plate","layout":{"type":"default"}} -->
<div class="wp-block-group sz-band__plate"><!-- wp:paragraph {"className":"sz-band__line"} -->
<p class="sz-band__line"><?php echo esc_html( sazanami_hotel_t( 'band_line' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

</section>
<!-- /wp:group -->

