<?php
/**
 * Title: Home: hero
 * Slug: fumoto-hostel/front-hero
 * Categories: fumoto-hostel
 * Keywords: hostel, travel, rooms
 * Viewport Width: 1440
 * Description: Two-line headline on white above a tilted pebble window of the reception.
 */
?>
<!-- wp:group {"className":"fh-hero","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull fh-hero"><!-- wp:group {"className":"fh-hero__in","layout":{"type":"default"}} -->
<div class="wp-block-group fh-hero__in"><!-- wp:heading {"level":1,"className":"fh-hero__h"} -->
<h1 class="wp-block-heading fh-hero__h"><?php echo wp_kses_post( fumoto_hostel_t( 'k8d7c1415' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"fh-hero__lead"} -->
<p class="fh-hero__lead"><?php echo wp_kses_post( fumoto_hostel_t( 'kaa73ba11' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"fh-link"} -->
<p class="fh-link"><a href="/rooms/"><?php echo wp_kses_post( fumoto_hostel_t( 'k9c01afe2' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"fh-hero__window","layout":{"type":"default"}} -->
<div class="wp-block-group fh-hero__window"><!-- wp:group {"className":"fh-pebble fh-pebble--a","layout":{"type":"default"}} -->
<div class="wp-block-group fh-pebble fh-pebble--a"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sp-parallax"} -->
<figure class="wp-block-image size-full sp-parallax"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-reception.webp' ) ); ?>" alt="<?php echo esc_attr( fumoto_hostel_t( 'ae9e8a904' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"fh-card","layout":{"type":"default"}} -->
<div class="wp-block-group fh-card"><!-- wp:group {"className":"fh-card__thumb fh-pebble fh-pebble--d","layout":{"type":"default"}} -->
<div class="wp-block-group fh-card__thumb fh-pebble fh-pebble--d"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/keys-detail.webp' ) ); ?>" alt="<?php echo esc_attr( fumoto_hostel_t( 'ac5785a7f' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"fh-card__txt","layout":{"type":"default"}} -->
<div class="wp-block-group fh-card__txt"><!-- wp:paragraph {"className":"fh-card__a"} -->
<p class="fh-card__a"><?php echo wp_kses_post( fumoto_hostel_t( 'k6a2d873d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"fh-card__b"} -->
<p class="fh-card__b"><?php echo wp_kses_post( fumoto_hostel_t( 'kfcf5f9e8' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
