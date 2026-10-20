<?php
/**
 * Title: Breakfast: page head
 * Slug: minato-business-hotel/buyers-head
 * Categories: minato-business-hotel
 * Keywords: breakfast, morning
 * Viewport Width: 1440
 * Description: Title and paragraph beside a photograph of the breakfast room.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mb-head mb-head--photo","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull mb-head mb-head--photo"><!-- wp:group {"align":"wide","className":"mb-head__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide mb-head__grid"><!-- wp:group {"className":"mb-head__main","layout":{"type":"default"}} -->
<div class="wp-block-group mb-head__main"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( minato_business_hotel_t( 'home_buyers_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"mb-head__title"} -->
<h1 class="wp-block-heading mb-head__title"><?php echo wp_kses_post( minato_business_hotel_t( 'buyers_head_01' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mb-head__side","layout":{"type":"default"}} -->
<div class="wp-block-group mb-head__side"><!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( minato_business_hotel_t( 'buyers_head_02' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"alignwide mb-head__photo"} -->
<figure class="wp-block-image size-large alignwide mb-head__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/breakfast-room.webp' ) ); ?>" alt="<?php echo esc_attr( minato_business_hotel_t( 'buyers_head_03' ) ); ?>"/><figcaption class="wp-element-caption"><?php echo wp_kses_post( minato_business_hotel_t( 'buyers_head_04' ) ); ?></figcaption></figure>
<!-- /wp:image --></section>
<!-- /wp:group -->
