<?php
/**
 * Title: Header: Apply now button
 * Slug: hanamizuki-dental/head-cta
 * Categories: hanamizuki-dental
 * Keywords: dental, dentist, clinic
 * Viewport Width: 1440
 * Inserter: no
 * Description: The service status line and the Book a consultation button in the header.
 */
?>
<!-- wp:group {"className":"hd-head__cta","layout":{"type":"default"}} -->
<div class="wp-block-group hd-head__cta"><!-- wp:paragraph {"className":"hd-head__status"} -->
<p class="hd-head__status"><?php echo esc_html( hanamizuki_dental_t( 'head_status' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className": "hd-book"} -->
<div class="wp-block-button hd-book"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo esc_html( hanamizuki_dental_t( 'book' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
