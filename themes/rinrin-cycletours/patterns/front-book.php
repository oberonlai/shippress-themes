<?php
/**
 * Title: Home: one way to book
 * Slug: rinrin-cycletours/front-book
 * Categories: rinrin-cycletours
 * Viewport Width: 1440
 * Description: Single conversion block on white: label, heading, one paragraph and one filled evergreen Book a departure pill.
 */
?>
<!-- wp:group {"className":"rc-book","tagName":"section","anchor":"book","align":"full","layout":{"type":"default"}} -->
<section id="book" class="wp-block-group alignfull rc-book"><!-- wp:paragraph {"className":"rc-label"} -->
<p class="rc-label"><?php echo esc_html( rinrin_cycletours_t( 'book_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"rc-book__h"} -->
<h2 class="wp-block-heading rc-book__h"><?php echo esc_html( rinrin_cycletours_t( 'book_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"rc-book__p"} -->
<p class="rc-book__p"><?php echo esc_html( rinrin_cycletours_t( 'book_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"rc-pill rc-pill--fill"} -->
<div class="wp-block-button rc-pill rc-pill--fill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/book/' ) ); ?>"><?php echo esc_html( rinrin_cycletours_t( 'book_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
