<?php
/**
 * Title: Booking call: your first lesson starts in the yard
 * Slug: hokuto-driving-school/book-cta
 * Categories: hokuto-driving-school
 * Keywords: booking, call to action
 * Viewport Width: 1440
 * Description: A quiet closing call to book a first lesson, beside a photograph of the booking office.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hk-section hk-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hk-section hk-section--last"><!-- wp:group {"align":"wide","className":"hk-cta","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hk-cta"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"hk-cta__photo"} -->
<figure class="wp-block-image size-large hk-cta__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/booking-office.webp' ) ); ?>" alt="<?php echo esc_attr( hokuto_driving_school_t( 'book_cta_01' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hk-cta__text","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cta__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( hokuto_driving_school_t( 'book_cta_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"hk-cta__title"} -->
<h2 class="wp-block-heading hk-cta__title"><?php echo wp_kses_post( hokuto_driving_school_t( 'book_cta_03' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( hokuto_driving_school_t( 'book_cta_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo wp_kses_post( hokuto_driving_school_t( 'book_cta_02' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="tel:01632960418">01632 960 418</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
