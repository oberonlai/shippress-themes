<?php
/**
 * Title: Header: Apply now button
 * Slug: kakehashi-association/head-cta
 * Categories: kakehashi-association
 * Keywords: community association, nonprofit, volunteers
 * Viewport Width: 1440
 * Inserter: no
 * Description: The service status line and the Book a consultation button in the header.
 */
?>
<!-- wp:group {"className":"kh-head__cta","layout":{"type":"default"}} -->
<div class="wp-block-group kh-head__cta"><!-- wp:paragraph {"className":"kh-head__status"} -->
<p class="kh-head__status"><?php echo esc_html( kakehashi_association_t( 'head_status' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className": "kh-book"} -->
<div class="wp-block-button kh-book"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo esc_html( kakehashi_association_t( 'book' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
