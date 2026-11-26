<?php
/**
 * Title: Home: parallax slab band
 * Slug: kaoru-cocoa/front-slab
 * Categories: kaoru-cocoa
 * Keywords: band, parallax, photo
 * Viewport Width: 1440
 * Description: A full-width photograph of the marble slab that drifts at its own speed; one white card with a hairline border sits docked lower-left.
 */
?>
<!-- wp:group {"align":"full","anchor":"slab","className":"kc-slab sp-parallax","layout":{"type":"default"}} -->
<div id="slab" class="wp-block-group alignfull kc-slab sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-slab__img"} -->
<figure class="wp-block-image size-full kc-slab__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/band-marble.webp' ) ); ?>" alt="<?php echo esc_attr( kaoru_cocoa_t( 'aa6298ead' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kc-slab__card","layout":{"type":"default"}} -->
<div class="wp-block-group kc-slab__card"><!-- wp:heading {"level":3,"className":"kc-slab__title"} -->
<h3 class="wp-block-heading kc-slab__title"><?php echo wp_kses_post( kaoru_cocoa_t( 'ke0aa7cdd' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-slab__text"} -->
<p class="kc-slab__text"><?php echo wp_kses_post( kaoru_cocoa_t( 'kc48a36a0' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
