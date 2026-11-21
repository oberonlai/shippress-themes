<?php
/**
 * Title: Home: ask about a date
 * Slug: enkai-rooms/front-ask
 * Categories: enkai-rooms
 * Keywords: ask, enquiry, contact
 * Viewport Width: 1440
 * Description: The one repeated call to action on a dark ground, with a name-card photograph beside it.
 */
?>
<!-- wp:group {"align":"full","className":"er-ask er-dark","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull er-ask er-dark" id="ask"><!-- wp:group {"className":"er-ask__in","layout":{"type":"default"}} -->
<div class="wp-block-group er-ask__in"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"er-ask__img"} -->
<figure class="wp-block-image size-large er-ask__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p14-name-card.webp' ) ); ?>" alt="<?php echo esc_attr( enkai_rooms_t( 'a3d1bdc6a' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"er-ask__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group er-ask__text sp-reveal sp-reveal--up"><!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( enkai_rooms_t( 'k580016cb' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( enkai_rooms_t( 'kfcc55c59' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"er-ask__btn"} -->
<div class="wp-block-buttons er-ask__btn"><!-- wp:button {"className":"er-btn"} -->
<div class="wp-block-button er-btn"><a class="wp-block-button__link wp-element-button" href="/ask-about-a-date/"><?php echo wp_kses_post( enkai_rooms_t( 'k580016cb' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"er-ask__contact"} -->
<p class="er-ask__contact"><a href="mailto:rooms@enkai-rooms.example"><?php echo wp_kses_post( enkai_rooms_t( 'k212f85e3' ) ); ?></a> · +00 31 555 0186<br><?php echo wp_kses_post( enkai_rooms_t( 'k2d018b3a' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
