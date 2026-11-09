<?php
/**
 * Title: Home: hero
 * Slug: kaban-luggage/front-hero
 * Categories: kaban-luggage
 * Keywords: luggage, shop, travel
 * Viewport Width: 1440
 * Description: Dark low-key macro with a radial vignette, a blur-zoom resolve on load, a small label and wordmark and a peeking strip of stocked cases.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kl-hero sp-parallax","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kl-hero sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sp-parallax__layer kl-hero__layer"} -->
<figure class="wp-block-image size-full sp-parallax__layer kl-hero__layer"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h1.webp' ) ); ?>" alt="<?php echo esc_attr( kaban_luggage_t( 'a4172e26c' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kl-hero__copy","layout":{"type":"default"}} -->
<div class="wp-block-group kl-hero__copy"><!-- wp:paragraph {"className":"kl-label"} -->
<p class="kl-label"><?php echo wp_kses_post( kaban_luggage_t( 'ka1e71705' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kl-wordmark"} -->
<h1 class="wp-block-heading kl-wordmark"><?php echo wp_kses_post( kaban_luggage_t( 'k44c04178' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kl-hero__line"} -->
<p class="kl-hero__line"><?php echo wp_kses_post( kaban_luggage_t( 'k29b9baa7' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kl-strip","layout":{"type":"default"}} -->
<div class="wp-block-group kl-strip"><!-- wp:group {"className":"kl-tile","layout":{"type":"default"}} -->
<div class="wp-block-group kl-tile"><!-- wp:image {"sizeSlug":"full","linkDestination":"custom","className":"kl-tile__img"} -->
<figure class="wp-block-image size-full kl-tile__img"><a href="<?php echo esc_url( kaban_luggage_product_url( 'ridge-cabin-55' ) ); ?>"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p1.webp' ) ); ?>" alt="<?php echo esc_attr( kaban_luggage_t( 'a11744186' ) ); ?>"/></a></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"kl-tile__name"} -->
<p class="kl-tile__name"><a href="<?php echo esc_url( kaban_luggage_product_url( 'ridge-cabin-55' ) ); ?>"><?php echo wp_kses_post( kaban_luggage_t( 'k51c3e54b' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kl-tile__spec"} -->
<p class="kl-tile__spec"><?php echo wp_kses_post( kaban_luggage_t( 'k3266d6ae' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kl-tile","layout":{"type":"default"}} -->
<div class="wp-block-group kl-tile"><!-- wp:image {"sizeSlug":"full","linkDestination":"custom","className":"kl-tile__img"} -->
<figure class="wp-block-image size-full kl-tile__img"><a href="<?php echo esc_url( kaban_luggage_product_url( 'lumen-cabin-55' ) ); ?>"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p2.webp' ) ); ?>" alt="<?php echo esc_attr( kaban_luggage_t( 'a6941f5bd' ) ); ?>"/></a></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"kl-tile__name"} -->
<p class="kl-tile__name"><a href="<?php echo esc_url( kaban_luggage_product_url( 'lumen-cabin-55' ) ); ?>"><?php echo wp_kses_post( kaban_luggage_t( 'kb734b314' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kl-tile__spec"} -->
<p class="kl-tile__spec"><?php echo wp_kses_post( kaban_luggage_t( 'kb48c3a57' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kl-tile","layout":{"type":"default"}} -->
<div class="wp-block-group kl-tile"><!-- wp:image {"sizeSlug":"full","linkDestination":"custom","className":"kl-tile__img"} -->
<figure class="wp-block-image size-full kl-tile__img"><a href="<?php echo esc_url( kaban_luggage_product_url( 'lumen-check-69' ) ); ?>"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p3.webp' ) ); ?>" alt="<?php echo esc_attr( kaban_luggage_t( 'a87b64ea9' ) ); ?>"/></a></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"kl-tile__name"} -->
<p class="kl-tile__name"><a href="<?php echo esc_url( kaban_luggage_product_url( 'lumen-check-69' ) ); ?>"><?php echo wp_kses_post( kaban_luggage_t( 'k3cb57213' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kl-tile__spec"} -->
<p class="kl-tile__spec"><?php echo wp_kses_post( kaban_luggage_t( 'ka6843599' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kl-tile kl-tile--more","layout":{"type":"default"}} -->
<div class="wp-block-group kl-tile kl-tile--more"><!-- wp:paragraph {"className":"kl-tile__all"} -->
<p class="kl-tile__all"><a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>"><?php echo wp_kses_post( kaban_luggage_t( 'k52eda37a' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
