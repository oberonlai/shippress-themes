<?php
/**
 * Title: Visit — map, hours and directions
 * Slug: kissaten-counter/visit-hours
 * Categories: kissaten-counter, contact
 * Keywords: hours, map, address, location, visit, directions
 * Viewport Width: 1440
 * Description: A hand-drawn map in a rounded frame beside an opening-hours table, the address and short directions from the station.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-visit","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kc-visit" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60","top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"56%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:56%"><!-- wp:image {"aspectRatio":"16/10","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"kc-visit__map"} -->
<figure class="wp-block-image size-full kc-visit__map"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/map.svg' ) ); ?>" alt="Hand-drawn map: six minutes on foot from the station's west exit to the cafe" style="aspect-ratio:16/10;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"44%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:44%"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow">Visit</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size">Down the lane, <em>past the bakery.</em></h2>
<!-- /wp:heading -->

<!-- wp:table {"className":"is-style-hours"} -->
<figure class="wp-block-table is-style-hours"><table><tbody><tr><td>Monday</td><td>7:30 – 18:00</td></tr><tr><td>Tuesday</td><td>7:30 – 18:00</td></tr><tr><td>Wednesday</td><td>Closed</td></tr><tr><td>Thursday</td><td>7:30 – 18:00</td></tr><tr><td>Friday</td><td>7:30 – 18:00</td></tr><tr><td>Saturday</td><td>8:00 – 19:00</td></tr><tr><td>Sunday</td><td>8:00 – 19:00</td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:paragraph {"className":"kc-muted","fontSize":"small"} -->
<p class="kc-muted has-small-font-size">3-12-4 Yanaka Lane. Leave the station by the west exit, walk past the little park and turn left at the bakery. Look for the lamp above a wooden door.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
