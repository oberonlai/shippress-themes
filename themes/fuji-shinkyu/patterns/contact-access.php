<?php
/**
 * Title: Contact — access and map
 * Slug: fuji-shinkyu/contact-access
 * Categories: fuji-shinkyu, contact
 * Keywords: map, access, directions, address, station
 * Viewport Width: 1440
 * Description: A soft-framed line map beside walking directions from the station as points on a fine line.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"fs-section fs-band","backgroundColor":"mist","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull fs-section fs-band has-mist-background-color has-background" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","className":"fs-grid","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide fs-grid"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-soft-frame fs-access__map","style":{"layout":{"columnSpan":7,"columnStart":1}}} -->
<figure class="wp-block-image size-full is-style-soft-frame fs-access__map"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/area-map.svg' ) ); ?>" alt="A simple map of fine lines: the station, the shopping street and a ringed point for the clinic" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"fs-access__text fs-reveal","style":{"layout":{"columnSpan":4,"columnStart":9},"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group fs-access__text fs-reveal"><!-- wp:paragraph {"className":"is-style-point-label"} -->
<p class="is-style-point-label">Finding us</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Seven minutes <em>from the station</em></h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-points"} -->
<ul class="wp-block-list is-style-points"><!-- wp:list-item -->
<li>Leave the station by the east exit and walk towards the shrine</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Turn right at the second lantern, onto Fujidana-koji</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Look up for the wisteria; the door is beside the tea shop</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Second floor, by the stairs or the lift at the back</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:paragraph {"className":"fs-muted","fontSize":"small"} -->
<p class="fs-muted has-small-font-size">No parking at the clinic; there is a coin park on the next corner.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
