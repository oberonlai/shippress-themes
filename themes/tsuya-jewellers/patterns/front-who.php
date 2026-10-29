<?php
/**
 * Title: Home: who the bench is for
 * Slug: tsuya-jewellers/front-who
 * Categories: tsuya-jewellers
 * Keywords: jeweller, jewellery, store
 * Viewport Width: 1440
 * Description: An offset pair of portrait photographs with an empty 16 per cent gutter at the left and a short text under the left one.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ts-who","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ts-who"><!-- wp:group {"className":"ts-pair sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ts-pair sp-stagger"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sp-reveal sp-reveal--up"} -->
<figure class="wp-block-image size-full sp-reveal sp-reveal--up"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p1-filing.webp' ) ); ?>" alt="<?php echo esc_attr( tsuya_jewellers_t( 'a9b0778b0' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sp-reveal sp-reveal--up"} -->
<figure class="wp-block-image size-full sp-reveal sp-reveal--up"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p2-palm.webp' ) ); ?>" alt="<?php echo esc_attr( tsuya_jewellers_t( 'a09c88e8f' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ts-who__text ts-text","layout":{"type":"default"}} -->
<div class="wp-block-group ts-who__text ts-text"><!-- wp:heading {"level":2,"className":"ts-label"} -->
<h2 class="wp-block-heading ts-label"><?php echo wp_kses_post( tsuya_jewellers_t( 'ka175651f' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tsuya_jewellers_t( 'ka716408d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tsuya_jewellers_t( 'k8762548e' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
