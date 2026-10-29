<?php
/**
 * Title: Home: visit
 * Slug: tsuya-jewellers/front-visit
 * Categories: tsuya-jewellers
 * Keywords: jeweller, jewellery, store
 * Viewport Width: 1440
 * Description: Address and hours at the left, the front room photograph at the right.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ts-visit","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ts-visit"><!-- wp:group {"className":"ts-visit__text","layout":{"type":"default"}} -->
<div class="wp-block-group ts-visit__text"><!-- wp:heading {"level":2,"className":"ts-label"} -->
<h2 class="wp-block-heading ts-label"><?php echo wp_kses_post( tsuya_jewellers_t( 'k5e706a9b' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tsuya_jewellers_t( 'k523046c7' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tsuya_jewellers_t( 'k3004415d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tsuya_jewellers_t( 'kcf1d1eb3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "ts-link"} -->
<p class="ts-link"><a href="/visit/"><?php echo wp_kses_post( tsuya_jewellers_t( 'k5a8043a3' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ts-visit__photo sp-reveal sp-reveal--up"} -->
<figure class="wp-block-image size-full ts-visit__photo sp-reveal sp-reveal--up"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/v1-front-room.webp' ) ); ?>" alt="<?php echo esc_attr( tsuya_jewellers_t( 'af1b14d6f' ) ); ?>"/></figure>
<!-- /wp:image --></section>
<!-- /wp:group -->
