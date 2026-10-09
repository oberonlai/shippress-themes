<?php
/**
 * Title: Tea box — the monthly subscription
 * Slug: yuzu-chaya/subscription-teaser
 * Categories: yuzu-chaya, featured, call-to-action
 * Keywords: subscription, tea box, monthly, gift
 * Viewport Width: 1440
 * Description: A matcha tile introducing the monthly tea box with its price and a button, beside the flat-lay illustration of a box.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"yc-section yc-sub-teaser","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull yc-section yc-sub-teaser" style="margin-top:0;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","className":"yc-bento","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide yc-bento"><!-- wp:group {"className":"yc-tile yc-tile--matcha yc-motif","style":{"layout":{"columnSpan":5},"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group yc-tile yc-tile--matcha yc-motif"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">The monthly tea box</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">A box of tea, <em>every</em> month</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Two teas of the season, a sweet from Teru and a letter from the counter, on the first Friday of every month. Pause or stop with one email.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"bottom"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"yc-big"} -->
<p class="yc-big">$34</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-note"} -->
<p class="is-style-note">a month, shipping free</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/tea-subscription/">See the tea box</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yc-tile yc-tile--image","style":{"layout":{"columnSpan":7}},"layout":{"type":"default"}} -->
<div class="wp-block-group yc-tile yc-tile--image"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/tea-box-flatlay.svg' ) ); ?>" alt="A bento-style tray from above: sencha and hojicha leaves, a yuzu, a pink sweet and a mound of matcha" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
