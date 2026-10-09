<?php
/**
 * Title: Shop — the tea list (orders by email)
 * Slug: yuzu-chaya/shop-catalogue
 * Categories: yuzu-chaya, featured, columns
 * Keywords: shop, catalogue, products, order, tea list
 * Viewport Width: 1440
 * Description: The shop page without an online store: a page head, every tea, pot and sweet as a tile with its price, and how to order by email. With WooCommerce active the shop page shows the store instead.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"yc-page-head","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull yc-page-head" style="margin-top:0;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:group {"align":"wide","className":"yc-bento","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide yc-bento"><!-- wp:group {"className":"yc-tile yc-tile--pale","style":{"layout":{"columnSpan":8},"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group yc-tile yc-tile--pale"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Loose-leaf tea, teaware &amp; sweets</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">The <em>shop</em></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">Everything on the counter this month. Write to us with what you would like and your address: we reply with the total and pack it the same day.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yc-tile yc-tile--yuzu yc-motif yc-motif--yuzu","style":{"layout":{"columnSpan":4},"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left","verticalAlignment":"space-between"}} -->
<div class="wp-block-group yc-tile yc-tile--yuzu yc-motif yc-motif--yuzu"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Order by email</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-note"} -->
<p class="is-style-note"><a href="mailto:hello@kiirochaya.example">hello@kiirochaya.example</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yc-small-print"} -->
<p class="yc-small-print">Free shipping over $40. Brewing notes in every parcel.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"yc-section yc-catalogue","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull yc-section yc-catalogue" style="margin-top:0;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","className":"yc-bento yc-bento--quarters","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide yc-bento yc-bento--quarters"><!-- wp:group {"className":"yc-tile yc-tea-card yc-tile--sm","style":{"layout":{"columnSpan":3},"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"default"}} -->
<div class="wp-block-group yc-tile yc-tea-card yc-tile--sm"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/product-asahi-sencha.svg' ) ); ?>" alt="Asahi Sencha: hand-drawn illustration" style="aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Sencha — 100 g</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Asahi Sencha</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yc-small-print"} -->
<p class="yc-small-print">Our everyday sencha: bright, grassy and sweet, from the first spring picking on the Hatano family's hill. 100 g bag.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"yc-tea-card__foot","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group yc-tea-card__foot"><!-- wp:paragraph {"className":"yc-price"} -->
<p class="yc-price">$16</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-note"} -->
<p class="is-style-note">70°C · 1 min</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yc-tile yc-tile--pale yc-tea-card yc-tile--sm","style":{"layout":{"columnSpan":3},"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"default"}} -->
<div class="wp-block-group yc-tile yc-tile--pale yc-tea-card yc-tile--sm"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/product-hillside-fukamushi.svg' ) ); ?>" alt="Hillside Fukamushi Sencha: hand-drawn illustration" style="aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Sencha — 100 g</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Hillside Fukamushi Sencha</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yc-small-print"} -->
<p class="yc-small-print">Deep-steamed sencha from the steep upper terraces: thick, emerald and soft, with almost no bitterness. 100 g tin.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"yc-tea-card__foot","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group yc-tea-card__foot"><!-- wp:paragraph {"className":"yc-price"} -->
<p class="yc-price">$18</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-note"} -->
<p class="is-style-note">75°C · 45 s</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yc-tile yc-tile--leaf yc-tea-card yc-tile--sm","style":{"layout":{"columnSpan":3},"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"default"}} -->
<div class="wp-block-group yc-tile yc-tile--leaf yc-tea-card yc-tile--sm"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/product-twice-roasted-hojicha.svg' ) ); ?>" alt="Twice-Roasted Hojicha: hand-drawn illustration" style="aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Hojicha — 80 g</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Twice-Roasted Hojicha</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yc-small-print"} -->
<p class="yc-small-print">Autumn bancha roasted twice in our own pan: toasty, caramel-sweet and gentle enough for after dinner. 80 g bag.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"yc-tea-card__foot","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group yc-tea-card__foot"><!-- wp:paragraph {"className":"yc-price"} -->
<p class="yc-price">$14</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-note"} -->
<p class="is-style-note">95°C · 30 s</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yc-tile yc-tile--pale yc-tea-card yc-tile--sm","style":{"layout":{"columnSpan":3},"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"default"}} -->
<div class="wp-block-group yc-tile yc-tile--pale yc-tea-card yc-tile--sm"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/product-hikari-matcha.svg' ) ); ?>" alt="Hikari Ceremonial Matcha: hand-drawn illustration" style="aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Matcha — 30 g tin</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Hikari Ceremonial Matcha</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yc-small-print"} -->
<p class="yc-small-print">Stone-ground matcha from shaded spring leaves: vivid green, creamy and sweet enough to drink without milk. 30 g tin.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"yc-tea-card__foot","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group yc-tea-card__foot"><!-- wp:paragraph {"className":"yc-price"} -->
<p class="yc-price">$28</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-note"} -->
<p class="is-style-note">80°C · whisk 15 s</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yc-tile yc-tea-card yc-tile--sm","style":{"layout":{"columnSpan":3},"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"default"}} -->
<div class="wp-block-group yc-tile yc-tea-card yc-tile--sm"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/product-yuzu-sencha.svg' ) ); ?>" alt="Yuzu Sencha: hand-drawn illustration" style="aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Sencha blend — 80 g</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Yuzu Sencha</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yc-small-print"} -->
<p class="yc-small-print">Asahi sencha with sun-dried yuzu peel from the trees behind the shop. Bright, citrusy, gone by spring. 80 g bag.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"yc-tea-card__foot","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group yc-tea-card__foot"><!-- wp:paragraph {"className":"yc-price"} -->
<p class="yc-price">$17</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-note"} -->
<p class="is-style-note">75°C · 1 min</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yc-tile yc-tile--pale yc-tea-card yc-tile--sm","style":{"layout":{"columnSpan":3},"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"default"}} -->
<div class="wp-block-group yc-tile yc-tile--pale yc-tea-card yc-tile--sm"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/product-genmaicha-with-matcha.svg' ) ); ?>" alt="Genmaicha with Matcha: hand-drawn illustration" style="aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Genmaicha — 120 g</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Genmaicha with Matcha</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yc-small-print"} -->
<p class="yc-small-print">Sencha, toasted rice and a dusting of matcha: nutty, savoury and very easy to love. Also wonderful cold. 120 g bag.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"yc-tea-card__foot","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group yc-tea-card__foot"><!-- wp:paragraph {"className":"yc-price"} -->
<p class="yc-price">$10</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-note"} -->
<p class="is-style-note">90°C · 40 s</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yc-tile yc-tile--leaf yc-tea-card yc-tile--sm","style":{"layout":{"columnSpan":3},"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"default"}} -->
<div class="wp-block-group yc-tile yc-tile--leaf yc-tea-card yc-tile--sm"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/product-kihada-kyusu.svg' ) ); ?>" alt="Kihada Kyusu Teapot: hand-drawn illustration" style="aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Teaware — 300 ml</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Kihada Kyusu Teapot</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yc-small-print"} -->
<p class="yc-small-print">A side-handled teapot in our kihada yellow glaze, with a fine clay mesh filter. Holds 300 ml, two or three cups.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"yc-tea-card__foot","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group yc-tea-card__foot"><!-- wp:paragraph {"className":"yc-price"} -->
<p class="yc-price">$64</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-note"} -->
<p class="is-style-note">Two to three cups</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yc-tile yc-tile--pale yc-tea-card yc-tile--sm","style":{"layout":{"columnSpan":3},"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"default"}} -->
<div class="wp-block-group yc-tile yc-tile--pale yc-tea-card yc-tile--sm"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/product-yunomi-pair.svg' ) ); ?>" alt="Pair of Yunomi Cups: hand-drawn illustration" style="aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Teaware — set of two</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Pair of Yunomi Cups</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yc-small-print"} -->
<p class="yc-small-print">Two tall everyday tea cups, one yuzu yellow and one matcha green, with a hand-combed wave around the middle.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"yc-tea-card__foot","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group yc-tea-card__foot"><!-- wp:paragraph {"className":"yc-price"} -->
<p class="yc-price">$38</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-note"} -->
<p class="is-style-note">150 ml each</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yc-tile yc-tea-card yc-tile--sm","style":{"layout":{"columnSpan":3},"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"default"}} -->
<div class="wp-block-group yc-tile yc-tea-card yc-tile--sm"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/product-chasen-set.svg' ) ); ?>" alt="Matcha Bowl & Whisk Set: hand-drawn illustration" style="aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Teaware — set</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Matcha Bowl & Whisk Set</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yc-small-print"} -->
<p class="yc-small-print">A wide pale-green matcha bowl, an 80-prong bamboo whisk and a bamboo scoop: everything you need to start.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"yc-tea-card__foot","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group yc-tea-card__foot"><!-- wp:paragraph {"className":"yc-price"} -->
<p class="yc-price">$52</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-note"} -->
<p class="is-style-note">Bowl, whisk, scoop</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yc-tile yc-tile--pale yc-tea-card yc-tile--sm","style":{"layout":{"columnSpan":3},"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"default"}} -->
<div class="wp-block-group yc-tile yc-tile--pale yc-tea-card yc-tile--sm"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/product-yuzu-monaka.svg' ) ); ?>" alt="Yuzu Monaka, Box of Six: hand-drawn illustration" style="aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Wagashi — box of six</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Yuzu Monaka, Box of Six</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yc-small-print"} -->
<p class="yc-small-print">Crisp rice-wafer shells filled with white bean paste and candied yuzu peel. Made by Teru on Thursdays.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"yc-tea-card__foot","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group yc-tea-card__foot"><!-- wp:paragraph {"className":"yc-price"} -->
<p class="yc-price">$22</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-note"} -->
<p class="is-style-note">Best within 10 days</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yc-tile yc-tile--leaf yc-tea-card yc-tile--sm","style":{"layout":{"columnSpan":3},"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"default"}} -->
<div class="wp-block-group yc-tile yc-tile--leaf yc-tea-card yc-tile--sm"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/product-seasonal-wagashi.svg' ) ); ?>" alt="Seasonal Wagashi Box: hand-drawn illustration" style="aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Wagashi — box of four</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Seasonal Wagashi Box</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yc-small-print"} -->
<p class="yc-small-print">Four soft nerikiri sweets shaped for the season, from pale blossom to yuzu, in a black lacquer-look box.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"yc-tea-card__foot","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group yc-tea-card__foot"><!-- wp:paragraph {"className":"yc-price"} -->
<p class="yc-price">$30</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-note"} -->
<p class="is-style-note">Best within 3 days</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yc-tile yc-tile--pale yc-tea-card yc-tile--sm","style":{"layout":{"columnSpan":3},"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"default"}} -->
<div class="wp-block-group yc-tile yc-tile--pale yc-tea-card yc-tile--sm"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/product-monthly-tea-box.svg' ) ); ?>" alt="Monthly Tea Box: hand-drawn illustration" style="aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Tea box — monthly</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Monthly Tea Box</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yc-small-print"} -->
<p class="yc-small-print">Two seasonal teas, a wagashi and a letter from the counter, sent on the first Friday of each month.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"yc-tea-card__foot","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group yc-tea-card__foot"><!-- wp:paragraph {"className":"yc-price"} -->
<p class="yc-price">$34</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-note"} -->
<p class="is-style-note">Two teas, one sweet</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
