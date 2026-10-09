<?php
/**
 * Title: Contact — finding the shop
 * Slug: yuzu-chaya/contact-access
 * Categories: yuzu-chaya, media
 * Keywords: map, directions, access, station
 * Viewport Width: 1440
 * Description: The hand-drawn map tile beside a matcha-pale tile with four numbered steps from the station.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"yc-section yc-access","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull yc-section yc-access" style="margin-top:0;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","className":"yc-bento","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide yc-bento"><!-- wp:group {"className":"yc-tile yc-tile--image","style":{"layout":{"columnSpan":8}},"layout":{"type":"default"}} -->
<div class="wp-block-group yc-tile yc-tile--image"><!-- wp:image {"aspectRatio":"16/10","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/area-map.svg' ) ); ?>" alt="A hand-drawn map: the river, the station and the shop marked with a yuzu" style="aspect-ratio:16/10;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yc-tile yc-tile--leaf","style":{"layout":{"columnSpan":4},"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group yc-tile yc-tile--leaf"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Finding us</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">From the <em>station</em></h3>
<!-- /wp:heading -->

<!-- wp:list {"ordered":true,"className":"is-style-steps"} -->
<ol class="wp-block-list is-style-steps"><!-- wp:list-item -->
<li>Leave by the north exit and turn left along the river.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Walk five minutes, past the bridge with the green railings.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Turn right at the bakery onto Kihada-dori.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Look for the yellow door and the smell of roasting tea.</li>
<!-- /wp:list-item --></ol>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
