<?php
/**
 * Title: About: page head
 * Slug: minato-business-hotel/about-head
 * Categories: minato-business-hotel
 * Keywords: about
 * Viewport Width: 1440
 * Description: Label, title and a short paragraph beside a photograph of a bathroom.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mb-head mb-head--photo","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull mb-head mb-head--photo"><!-- wp:group {"align":"wide","className":"mb-head__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide mb-head__grid"><!-- wp:group {"className":"mb-head__main","layout":{"type":"default"}} -->
<div class="wp-block-group mb-head__main"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( minato_business_hotel_t( 'about_head_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"mb-head__title"} -->
<h1 class="wp-block-heading mb-head__title"><?php echo wp_kses_post( minato_business_hotel_t( 'about_head_02' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mb-head__side","layout":{"type":"default"}} -->
<div class="wp-block-group mb-head__side"><!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( minato_business_hotel_t( 'about_head_03' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"alignwide mb-head__photo"} -->
<figure class="wp-block-image size-large alignwide mb-head__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/bathroom.webp' ) ); ?>" alt="<?php echo esc_attr( minato_business_hotel_t( 'about_head_04' ) ); ?>"/><figcaption class="wp-element-caption"><?php echo wp_kses_post( minato_business_hotel_t( 'about_head_05' ) ); ?></figcaption></figure>
<!-- /wp:image --></section>
<!-- /wp:group -->
