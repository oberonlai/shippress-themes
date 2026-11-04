<?php
/**
 * Title: Home: the counter (full-bleed photograph, parallax)
 * Slug: mugi-bakehouse/front-counter
 * Categories: mugi-bakehouse
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"mb-counter","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull mb-counter"><!-- wp:group {"className":"mb-counter__img sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group mb-counter__img sp-parallax"><!-- wp:image {"aspectRatio":"21/9","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/s4-counter.webp' ) ); ?>" alt="<?php echo esc_attr( mugi_bakehouse_t( 'a4f28a582' ) ); ?>" style="aspect-ratio:21/9;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mb-counter__cap","layout":{"type":"default"}} -->
<div class="wp-block-group mb-counter__cap"><!-- wp:group {"className":"mb-wrap mb-counter__row","layout":{"type":"default"}} -->
<div class="wp-block-group mb-wrap mb-counter__row"><!-- wp:heading {"level":3,"className":"mb-counter__h"} -->
<h3 class="wp-block-heading mb-counter__h"><?php echo wp_kses_post( mugi_bakehouse_t( 'k0e7aa9f5' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"mb-counter__p"} -->
<p class="mb-counter__p"><?php echo wp_kses_post( mugi_bakehouse_t( 'k6a1a748e' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
