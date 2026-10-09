<?php
/**
 * Title: Visit — hours and the way to the shop
 * Slug: yuzu-chaya/visit-cta
 * Categories: yuzu-chaya, call-to-action
 * Keywords: visit, hours, map, address, contact
 * Viewport Width: 1440
 * Description: A map tile beside an ink tile with the opening hours, the address and a button to the contact page.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"yc-section yc-visit","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull yc-section yc-visit" style="margin-top:0;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","className":"yc-bento","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide yc-bento"><!-- wp:group {"className":"yc-tile yc-tile--image","style":{"layout":{"columnSpan":7}},"layout":{"type":"default"}} -->
<div class="wp-block-group yc-tile yc-tile--image"><!-- wp:image {"aspectRatio":"16/10","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/area-map.svg' ) ); ?>" alt="A hand-drawn map: the river, the station and the shop marked with a yuzu" style="aspect-ratio:16/10;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yc-tile yc-tile--ink yc-motif yc-motif--steam","style":{"layout":{"columnSpan":5},"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group yc-tile yc-tile--ink yc-motif yc-motif--steam"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Come by the counter</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Tea is better <em>in person</em></h3>
<!-- /wp:heading -->

<!-- wp:table {"className":"is-style-info"} -->
<figure class="wp-block-table is-style-info"><table class="has-fixed-layout"><tbody><tr><td>Thursday — Monday</td><td>10:00 — 18:00</td></tr><tr><td>Tasting at the counter</td><td>Free, every afternoon</td></tr><tr><td>Address</td><td>2-8 Kihada-dori, Aoi-ku, Shizuoka</td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact/">How to find us</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
