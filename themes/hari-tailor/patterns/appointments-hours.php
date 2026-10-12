<?php
/**
 * Title: Appointments: hours and atelier
 * Slug: hari-tailor/appointments-hours
 * Categories: hari-tailor
 * Keywords: tailor
 * Viewport Width: 1440
 * Description: The synced atelier details and appointment hours table beside a photograph.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ht-section ht-section--flush","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ht-section ht-section--flush"><!-- wp:group {"align":"wide","className":"ht-split ht-split--top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ht-split ht-split--top"><!-- wp:group {"className":"ht-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group ht-split__text"><!-- wp:group {"className":"ht-card","layout":{"type":"default"}} -->
<div class="wp-block-group ht-card"><!-- wp:pattern {"slug":"hari-tailor/atelier"} /--></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"ht-links"} -->
<div class="wp-block-buttons ht-links"><!-- wp:button {"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" href="mailto:fittings@hari-tailor.example?subject=First%20measure">Write to book</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="tel:0123555018">Telephone</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","className":"ht-split__photo ht-split__photo--tall"} -->
<figure class="wp-block-image size-large ht-split__photo ht-split__photo--tall"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/window-light.jpg' ) ); ?>" alt="A finished navy jacket on a stand by a window in the atelier corner"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
