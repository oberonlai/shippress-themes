<?php
/**
 * Title: Home: client story
 * Slug: shirota-laundry/front-story
 * Categories: shirota-laundry
 * Keywords: laundry, linen, hotel, clinic
 * Viewport Width: 1440
 * Description: Quote and story on the left, a tall oval portrait on the right.
 */
?>
<!-- wp:group {"className":"sl-sec sl-sec--story","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull sl-sec sl-sec--story"><!-- wp:group {"className":"sl-story","layout":{"type":"default"}} -->
<div class="wp-block-group sl-story"><!-- wp:group {"className":"sl-story__t sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sl-story__t sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"sl-eyebrow"} -->
<p class="sl-eyebrow"><?php echo wp_kses_post( shirota_laundry_t( 'k98bfc473' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( shirota_laundry_t( 'kd9a1ab5a' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sl-story__quote"} -->
<p class="sl-story__quote"><?php echo wp_kses_post( shirota_laundry_t( 'k2f370e17' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sl-story__who"} -->
<p class="sl-story__who"><?php echo wp_kses_post( shirota_laundry_t( 'kb76153c4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( shirota_laundry_t( 'ke98cc175' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"sl-pills"} -->
<div class="wp-block-buttons sl-pills"><!-- wp:button {"className":"sl-pill sl-pill--ink"} -->
<div class="wp-block-button sl-pill sl-pill--ink"><a class="wp-block-button__link wp-element-button" href="/stories/"><?php echo wp_kses_post( shirota_laundry_t( 'kdad58d65' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sl-oval sl-oval--story","layout":{"type":"default"}} -->
<div class="wp-block-group sl-oval sl-oval--story"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/client-portrait.webp' ) ); ?>" alt="<?php echo esc_attr( shirota_laundry_t( 'addaf2347' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
