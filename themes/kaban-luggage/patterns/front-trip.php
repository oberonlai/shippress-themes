<?php
/**
 * Title: Home: trip scene
 * Slug: kaban-luggage/front-trip
 * Categories: kaban-luggage
 * Keywords: luggage, shop, travel
 * Viewport Width: 1440
 * Description: Dark night-platform scene with three vertical lines that appear one after another.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kl-trip sp-parallax","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kl-trip sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sp-parallax__layer kl-trip__layer"} -->
<figure class="wp-block-image size-full sp-parallax__layer kl-trip__layer"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h2.webp' ) ); ?>" alt="<?php echo esc_attr( kaban_luggage_t( 'a06a3491b' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kl-trip__fore","layout":{"type":"default"}} -->
<div class="wp-block-group kl-trip__fore"><!-- wp:group {"className":"kl-lines sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kl-lines sp-stagger"><!-- wp:paragraph {"className":"kl-line sp-reveal sp-reveal--up"} -->
<p class="kl-line sp-reveal sp-reveal--up"><?php echo wp_kses_post( kaban_luggage_t( 'k9728aa35' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kl-line sp-reveal sp-reveal--up"} -->
<p class="kl-line sp-reveal sp-reveal--up"><?php echo wp_kses_post( kaban_luggage_t( 'kbc11f748' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kl-line sp-reveal sp-reveal--up"} -->
<p class="kl-line sp-reveal sp-reveal--up"><?php echo wp_kses_post( kaban_luggage_t( 'k67095ff9' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kl-trip__sub"} -->
<p class="kl-trip__sub"><?php echo wp_kses_post( kaban_luggage_t( 'kbd7dda63' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
