<?php
/**
 * Title: Home: visit
 * Slug: kaban-luggage/front-visit
 * Categories: kaban-luggage
 * Keywords: luggage, shop, travel
 * Viewport Width: 1440
 * Description: Dark closing block: shop interior flush left, address, hours and a contact link.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kl-visit","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kl-visit"><!-- wp:group {"className":"kl-visit__photo sp-reveal sp-reveal--mask","layout":{"type":"default"}} -->
<div class="wp-block-group kl-visit__photo sp-reveal sp-reveal--mask"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kl-visit__img"} -->
<figure class="wp-block-image size-full kl-visit__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/v1.webp' ) ); ?>" alt="<?php echo esc_attr( kaban_luggage_t( 'ad7070561' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kl-visit__text","layout":{"type":"default"}} -->
<div class="wp-block-group kl-visit__text"><!-- wp:heading {"level":2,"className":"kl-visit__head"} -->
<h2 class="wp-block-heading kl-visit__head"><?php echo wp_kses_post( kaban_luggage_t( 'kf0929274' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kl-visit__addr"} -->
<p class="kl-visit__addr"><?php echo wp_kses_post( kaban_luggage_t( 'k1f0b26ec' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kl-visit__hours"} -->
<p class="kl-visit__hours"><?php echo wp_kses_post( kaban_luggage_t( 'kcfe2c9e6' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kl-visit__hours"} -->
<p class="kl-visit__hours"><?php echo wp_kses_post( kaban_luggage_t( 'ka275b401' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kl-visit__p"} -->
<p class="kl-visit__p"><?php echo wp_kses_post( kaban_luggage_t( 'ke245504b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kl-more kl-more--dark"} -->
<p class="kl-more kl-more--dark"><a href="/contact/"><?php echo wp_kses_post( kaban_luggage_t( 'kcfd1b2e7' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
