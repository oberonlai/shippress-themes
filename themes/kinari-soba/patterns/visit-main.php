<?php
/**
 * Title: Visit: map, hours and writing to us
 * Slug: kinari-soba/visit-main
 * Categories: kinari-soba
 * Keywords: soba, buckwheat, noodles
 * Viewport Width: 1440
 * Description: The watercolour street map beside the synced hours, and a short note on groups and writing to us (a mailto button, no form backend).
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ks-section ks-band ks-band--flush ks-band--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ks-section ks-band ks-band--flush ks-band--last"><!-- wp:group {"align":"wide","className":"ks-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ks-wrap"><!-- wp:group {"className":"ks-visit","layout":{"type":"default"}} -->
<div class="wp-block-group ks-visit"><!-- wp:group {"className":"ks-visit__map","layout":{"type":"default"}} -->
<div class="wp-block-group ks-visit__map"><!-- wp:image {"sizeSlug":"large","className":"ks-visit__art"} -->
<figure class="wp-block-image size-large ks-visit__art"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/map-street.svg' ) ); ?>" alt="A watercolour street map of the riverside: the soba house is marked just past the bridge"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"ks-quiet"} -->
<p class="ks-quiet">From the station, walk to the river and cross the Mizuhashi bridge; we are the second door on the left.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-visit__card","layout":{"type":"default"}} -->
<div class="wp-block-group ks-visit__card"><!-- wp:paragraph {"className":"ks-mark"} -->
<p class="ks-mark">Hours</p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"kinari-soba/hours"} /-->

<!-- wp:paragraph {"className":"ks-mark"} -->
<p class="ks-mark">Write to us</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>We do not take bookings for lunch. For six or more, or for the evening counter, write a day ahead and tell us how many and what time.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"ks-links"} -->
<div class="wp-block-buttons ks-links"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="mailto:hello@kinari-soba.example?subject=A%20table%20at%20Kinari%20Soba">Write an email</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
