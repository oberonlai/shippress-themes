<?php
/**
 * Title: Home: booking
 * Slug: kensa-laboratory/front-book
 * Categories: kensa-laboratory
 * Keywords: materials testing, laboratory, concrete
 * Viewport Width: 1440
 * Description: Mist band with the single booking call to action, address and receiving hours.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kl-sec kl-book","layout":{"type":"constrained"},"anchor":"book"} -->
<section id="book" class="wp-block-group alignfull kl-sec kl-book"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html( kensa_laboratory_t( 'book_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kl-prose"} -->
<p class="kl-prose"><?php echo esc_html( kensa_laboratory_t( 'book_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"kl-cta"} -->
<div class="wp-block-button kl-cta"><a class="wp-block-button__link wp-element-button" href="/book/"><?php echo esc_html( kensa_laboratory_t( 'cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"kl-addr"} -->
<p class="kl-addr"><?php echo esc_html( kensa_laboratory_t( 'book_a1' ) ); ?><br><?php echo esc_html( kensa_laboratory_t( 'book_a2' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
