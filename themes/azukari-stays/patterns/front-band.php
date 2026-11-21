<?php
/**
 * Title: Home: between guests
 * Slug: azukari-stays/front-band
 * Categories: azukari-stays
 * Keywords: holiday let, property management, owners
 * Viewport Width: 1440
 * Description: Full-bleed photograph band with the parallax cover.
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( azukari_stays_img( 'p15-orchard-band.webp' ) ); ?>","dimRatio":0,"isUserOverlayColor":true,"minHeight":680,"minHeightUnit":"px","className":"az-band sp-parallax"} -->
<div class="wp-block-cover az-band sp-parallax" style="min-height:680px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( azukari_stays_t( 'alt_p15' ) ); ?>" src="<?php echo esc_url( azukari_stays_img( 'p15-orchard-band.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"className":"az-band__cap"} -->
<p class="az-band__cap"><?php echo esc_html( azukari_stays_t( 'band_cap' ) ); ?></p>
<!-- /wp:paragraph -->
</div></div>
<!-- /wp:cover -->
