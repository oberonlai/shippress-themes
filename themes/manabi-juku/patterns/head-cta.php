<?php
/**
 * Title: Header: Book a free trial lesson button
 * Slug: manabi-juku/head-cta
 * Categories: manabi-juku
 * Keywords: school, tutoring, courses
 * Viewport Width: 1440
 * Inserter: no
 * Description: The Book a free trial lesson button in the header, before the menu button.
 */
?>
<!-- wp:buttons {"className": "mj-head__cta"} -->
<div class="wp-block-buttons mj-head__cta"><!-- wp:button {"className": "mj-book"} -->
<div class="wp-block-button mj-book"><a class="wp-block-button__link wp-element-button" href="/trial/"><?php echo esc_html( manabi_juku_t( 'book' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
