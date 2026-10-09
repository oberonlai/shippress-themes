<?php
/**
 * Title: Hero — tea for a sunny table
 * Slug: yuzu-chaya/hero
 * Categories: yuzu-chaya, featured, banner
 * Keywords: hero, tea shop, bento, yuzu, sencha
 * Viewport Width: 1440
 * Description: The opening bento: a big yuzu tile with the title, a line about the shop and two buttons, the yuzu-and-cup illustration with a sticker, and three small tiles (farms, the sencha temperature, free shipping).
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"yc-hero","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull yc-hero" style="margin-top:0;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"align":"wide","className":"yc-bento","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide yc-bento"><!-- wp:group {"className":"yc-tile yc-tile--yuzu yc-hero__copy yc-motif","style":{"layout":{"columnSpan":7,"rowSpan":2},"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group yc-tile yc-tile--yuzu yc-hero__copy yc-motif"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Kiiro Chaya — Shizuoka</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"yc-hero__title"} -->
<h1 class="wp-block-heading yc-hero__title">Tea for a <em>sunny</em> table.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">Loose-leaf sencha, hojicha and matcha from three family farms on the hill, cups to drink them from, and a small sweet for the afternoon. Packed by hand the day you order.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/shop/">Shop the teas</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-arrow-link"} -->
<div class="wp-block-button is-style-arrow-link"><a class="wp-block-button__link wp-element-button" href="/brewing-guide/">How to brew</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yc-tile yc-tile--image yc-hero__image yc-float","style":{"layout":{"columnSpan":5,"rowSpan":2}},"layout":{"type":"default"}} -->
<div class="wp-block-group yc-tile yc-tile--image yc-hero__image yc-float"><!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-yuzu-cup.svg' ) ); ?>" alt="A big yuzu with a leaf beside a green cup of steaming tea and a slice of yuzu" style="aspect-ratio:4/5;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"is-style-temp yc-hero__sticker"} -->
<p class="is-style-temp yc-hero__sticker">New!<small>autumn hojicha</small></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yc-tile yc-tile--leaf yc-tile--sm yc-motif","style":{"layout":{"columnSpan":4},"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group yc-tile yc-tile--leaf yc-tile--sm yc-motif"><!-- wp:paragraph {"className":"yc-big"} -->
<p class="yc-big">3</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yc-small-print"} -->
<p class="yc-small-print">family farms on the hills above the river, all within an hour of the shop.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yc-tile yc-tile--sm yc-lift","style":{"layout":{"columnSpan":4},"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group yc-tile yc-tile--sm yc-lift"><!-- wp:paragraph {"className":"is-style-temp"} -->
<p class="is-style-temp">70°<small>for sencha</small></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yc-small-print"} -->
<p class="yc-small-print">Most green tea likes it gentler than you think.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yc-tile yc-tile--ink yc-motif yc-motif--steam yc-motif--bottom","style":{"layout":{"columnSpan":4},"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group yc-tile yc-tile--ink yc-motif yc-motif--steam yc-motif--bottom"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Free shipping</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-note"} -->
<p class="is-style-note">On orders over $40, packed the same day and sent within two.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
