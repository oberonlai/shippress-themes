<?php
/**
 * Title: Tea shelf — four from the counter
 * Slug: yuzu-chaya/tea-shelf
 * Categories: yuzu-chaya, featured, columns
 * Keywords: products, tea, shop, shelf, featured
 * Viewport Width: 1440
 * Description: Four tea tiles in a bento row (two to a row on a phone), each with its picture, name, a handwritten note, price and brewing temperature, under a section title with a link to the shop.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"yc-section yc-shelf","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull yc-section yc-shelf" style="margin-top:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","className":"yc-section-head","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group alignwide yc-section-head"><!-- wp:heading -->
<h2 class="wp-block-heading">This week's <em>shelf</em></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yc-link"} -->
<p class="yc-link"><a href="/shop/">The whole shop →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"yc-bento yc-bento--quarters","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide yc-bento yc-bento--quarters" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:group {"className":"yc-tile yc-tea-card yc-lift yc-stretch yc-tile--sm","style":{"layout":{"columnSpan":3},"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"default"}} -->
<div class="wp-block-group yc-tile yc-tea-card yc-lift yc-stretch yc-tile--sm"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/product-asahi-sencha.svg' ) ); ?>" alt="Asahi Sencha: hand-drawn illustration" style="aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Sencha — 100 g</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><a href="/shop/">Asahi Sencha</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-note"} -->
<p class="is-style-note">The tea we drink first thing every morning.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"yc-tea-card__foot","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group yc-tea-card__foot"><!-- wp:paragraph {"className":"yc-price"} -->
<p class="yc-price">$16</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yc-small-print"} -->
<p class="yc-small-print">70°C · 1 min</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yc-tile yc-tile--pale yc-tea-card yc-lift yc-stretch yc-tile--sm","style":{"layout":{"columnSpan":3},"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"default"}} -->
<div class="wp-block-group yc-tile yc-tile--pale yc-tea-card yc-lift yc-stretch yc-tile--sm"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/product-twice-roasted-hojicha.svg' ) ); ?>" alt="Twice-Roasted Hojicha: hand-drawn illustration" style="aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Hojicha — 80 g</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><a href="/shop/">Twice-Roasted Hojicha</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-note"} -->
<p class="is-style-note">Our evening tea. Smells like the shop in October.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"yc-tea-card__foot","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group yc-tea-card__foot"><!-- wp:paragraph {"className":"yc-price"} -->
<p class="yc-price">$14</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yc-small-print"} -->
<p class="yc-small-print">95°C · 30 s</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yc-tile yc-tile--leaf yc-tea-card yc-lift yc-stretch yc-tile--sm","style":{"layout":{"columnSpan":3},"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"default"}} -->
<div class="wp-block-group yc-tile yc-tile--leaf yc-tea-card yc-lift yc-stretch yc-tile--sm"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/product-hikari-matcha.svg' ) ); ?>" alt="Hikari Ceremonial Matcha: hand-drawn illustration" style="aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Matcha — 30 g tin</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><a href="/shop/">Hikari Ceremonial Matcha</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-note"} -->
<p class="is-style-note">Creamy enough to drink without milk.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"yc-tea-card__foot","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group yc-tea-card__foot"><!-- wp:paragraph {"className":"yc-price"} -->
<p class="yc-price">$28</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yc-small-print"} -->
<p class="yc-small-print">80°C · whisk 15 s</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yc-tile yc-tile--pale yc-tea-card yc-lift yc-stretch yc-tile--sm","style":{"layout":{"columnSpan":3},"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"default"}} -->
<div class="wp-block-group yc-tile yc-tile--pale yc-tea-card yc-lift yc-stretch yc-tile--sm"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/product-yuzu-sencha.svg' ) ); ?>" alt="Yuzu Sencha: hand-drawn illustration" style="aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Sencha blend — 80 g</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><a href="/shop/">Yuzu Sencha</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-note"} -->
<p class="is-style-note">Once a year, until the peel runs out.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"yc-tea-card__foot","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group yc-tea-card__foot"><!-- wp:paragraph {"className":"yc-price"} -->
<p class="yc-price">$17</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yc-small-print"} -->
<p class="yc-small-print">75°C · 1 min</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
