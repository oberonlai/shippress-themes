<?php
/**
 * Title: Header: Book a seat button
 * Slug: kamisori-barber/head-cta
 * Categories: kamisori-barber
 * Keywords: barber, barbershop, shave
 * Viewport Width: 1440
 * Inserter: no
 * Description: The Reserve a seat button at the right end of the header.
 */
?>
<!-- wp:buttons {"className": "kb-head__cta"} -->
<div class="wp-block-buttons kb-head__cta"><!-- wp:button {"className": "kb-book"} -->
<div class="wp-block-button kb-book"><a class="wp-block-button__link wp-element-button" href="/booking/"><?php echo esc_html( kamisori_barber_t( 'book' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
