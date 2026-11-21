<?php
/**
 * Title: Home: the lawn at dusk
 * Slug: yunagi-jazz/front-lawn
 * Categories: yunagi-jazz
 * Viewport Width: 1440
 * Description: Full-bleed parallax band of the lawn at blue hour with a one-line caption under it.
 */
?>
<!-- wp:group {"className":"yj-band-wrap","layout":{"type":"default"},"tagName":"section","anchor":"lawn"} -->
<section id="lawn" class="wp-block-group yj-band-wrap">
<!-- wp:group {"className":"yj-band sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group yj-band sp-parallax">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yj-band__img"} -->
<figure class="wp-block-image size-full yj-band__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p13-lawn-blue-hour.webp' ) ); ?>" alt="<?php echo esc_attr( yunagi_jazz_t( 'alt_p13' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"yj-cap"} -->
<p class="yj-cap"><?php echo esc_html( yunagi_jazz_t( 'lawn_cap' ) ); ?></p>
<!-- /wp:paragraph -->
</section>
<!-- /wp:group -->
