<?php
/**
 * Title: Tea box — page head
 * Slug: yuzu-chaya/sub-intro
 * Categories: yuzu-chaya, featured, banner
 * Keywords: subscription, tea box, monthly, intro
 * Viewport Width: 1440
 * Description: The tea box page opening: a yuzu title tile with two buttons, the box flat-lay illustration and three small tiles with what comes inside.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"yc-page-head","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull yc-page-head" style="margin-top:0;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:group {"align":"wide","className":"yc-bento","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide yc-bento"><!-- wp:group {"className":"yc-tile yc-tile--yuzu yc-motif yc-motif--yuzu","style":{"layout":{"columnSpan":7},"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group yc-tile yc-tile--yuzu yc-motif yc-motif--yuzu"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Subscription</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">The monthly <em>tea box</em></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">Every month we pack what we are most excited about at the counter: teas of the season, a sweet from Teru and a letter. It arrives on the first Friday, and you can pause or stop with one email.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/tea-subscription/#plans">Choose a plan</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-arrow-link"} -->
<div class="wp-block-button is-style-arrow-link"><a class="wp-block-button__link wp-element-button" href="/shop/">Try one box first</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yc-tile yc-tile--image","style":{"layout":{"columnSpan":5}},"layout":{"type":"default"}} -->
<div class="wp-block-group yc-tile yc-tile--image"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/tea-box-flatlay.svg' ) ); ?>" alt="A bento-style tray from above: sencha and hojicha leaves, a yuzu, a pink sweet and a mound of matcha" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yc-tile yc-tile--leaf yc-tile--sm","style":{"layout":{"columnSpan":4},"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group yc-tile yc-tile--leaf yc-tile--sm"><!-- wp:paragraph {"className":"yc-big"} -->
<p class="yc-big">2</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yc-small-print"} -->
<p class="yc-small-print">teas of the season, 50 g each</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yc-tile yc-tile--pale yc-tile--sm","style":{"layout":{"columnSpan":4},"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group yc-tile yc-tile--pale yc-tile--sm"><!-- wp:paragraph {"className":"yc-big"} -->
<p class="yc-big">1</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yc-small-print"} -->
<p class="yc-small-print">sweet from the shop kitchen</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yc-tile yc-motif","style":{"layout":{"columnSpan":4},"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group yc-tile yc-motif"><!-- wp:paragraph {"className":"is-style-note"} -->
<p class="is-style-note">A letter from the counter, with how we brew this month's teas.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
