<?php
/**
 * Title: Home: framed hero
 * Slug: kyugo-training/home-hero
 * Categories: kyugo-training
 * Keywords: first aid, training, workplace
 * Viewport Width: 1440
 * Description: Three-photo crossfade stage with an olive corner wash and a three-line statement.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kt-hero","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kt-hero"><!-- wp:group {"className":"kt-hero__stage","layout":{"type":"default"}} -->
<div class="wp-block-group kt-hero__stage"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kt-slide kt-slide--1"} -->
<figure class="wp-block-image size-full kt-slide kt-slide--1"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p01.webp' ) ); ?>" alt="<?php echo esc_attr( kyugo_training_t( 'alt_p01' ) ); ?>" loading="eager" fetchpriority="high"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<div class="kt-slides" aria-hidden="true"><img class="kt-slide--2" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p02.webp' ) ); ?>" alt="" loading="eager"/><img class="kt-slide--3" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p03.webp' ) ); ?>" alt="" loading="eager"/></div>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group kt-hero__text"><!-- wp:paragraph {"className":"kt-hero__kicker"} -->
<p class="kt-hero__kicker"><?php echo esc_html( kyugo_training_t( 'hero_kicker' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kt-hero__title"} -->
<h1 class="wp-block-heading kt-hero__title"><?php echo kyugo_training_lines( 'hero_title' ); // phpcs:ignore ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
