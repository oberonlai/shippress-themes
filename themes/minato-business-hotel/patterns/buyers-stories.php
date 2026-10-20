<?php
/**
 * Title: Breakfast: two guests in their words
 * Slug: minato-business-hotel/buyers-stories
 * Categories: minato-business-hotel
 * Keywords: stories, quotes
 * Viewport Width: 1440
 * Description: Two guest quotes beside a photograph of a guest working in the lounge.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mb-section mb-band","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull mb-section mb-band"><!-- wp:group {"align":"wide","className":"mb-split mb-split--top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide mb-split mb-split--top"><!-- wp:group {"className":"mb-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group mb-split__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( minato_business_hotel_t( 'buyers_stories_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( minato_business_hotel_t( 'buyers_stories_02' ) ); ?></p>
<!-- /wp:paragraph --><cite><?php echo wp_kses_post( minato_business_hotel_t( 'buyers_stories_03' ) ); ?></cite></blockquote>
<!-- /wp:quote -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( minato_business_hotel_t( 'buyers_stories_04' ) ); ?></p>
<!-- /wp:paragraph --><cite><?php echo wp_kses_post( minato_business_hotel_t( 'buyers_stories_05' ) ); ?></cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"mb-split__photo mb-split__photo--tall"} -->
<figure class="wp-block-image size-large mb-split__photo mb-split__photo--tall"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/lounge-work.webp' ) ); ?>" alt="<?php echo esc_attr( minato_business_hotel_t( 'buyers_stories_06' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
