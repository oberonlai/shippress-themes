<?php
/**
 * Title: Home: book a room (telephone, email and the desk)
 * Slug: minato-business-hotel/front-book
 * Categories: minato-business-hotel
 * Keywords: booking, contact
 * Viewport Width: 1440
 * Description: A closing section with a photograph of the lobby and the ways to book: telephone, email and the desk, with the cancellation terms. No form.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mb-section mb-book mb-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull mb-section mb-book mb-section--last"><!-- wp:group {"align":"wide","className":"mb-book__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide mb-book__grid"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"mb-book__photo"} -->
<figure class="wp-block-image size-large mb-book__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/lobby-front-desk.webp' ) ); ?>" alt="<?php echo esc_attr( minato_business_hotel_t( 'front_book_alt' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"mb-book__text","layout":{"type":"default"}} -->
<div class="wp-block-group mb-book__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( minato_business_hotel_t( 'front_book_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( minato_business_hotel_t( 'front_book_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( minato_business_hotel_t( 'front_book_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"mb-book__list"} -->
<ul class="wp-block-list mb-book__list"><!-- wp:list-item -->
<li><?php echo wp_kses_post( minato_business_hotel_t( 'front_book_01' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( minato_business_hotel_t( 'front_book_02' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( minato_business_hotel_t( 'front_book_03' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo wp_kses_post( minato_business_hotel_t( 'call_cta_02' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
