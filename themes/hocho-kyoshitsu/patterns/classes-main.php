<?php
/**
 * Title: Classes: the class mosaic and fees
 * Slug: hocho-kyoshitsu/classes-main
 * Categories: hocho-kyoshitsu
 * Keywords: cooking school, washoku
 * Viewport Width: 1440
 * Description: A mosaic of class cards, then the synced fees card.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hk-section hk-classes", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hk-section hk-classes"><!-- wp:group {"align": "wide", "className": "hk-mosaic hk-mosaic--classes", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide hk-mosaic hk-mosaic--classes"><!-- wp:group {"className": "hk-card hk-card--class hk-card--wide", "layout": {"type": "default"}} -->
<div class="wp-block-group hk-card hk-card--class hk-card--wide"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hk-card__img"} -->
<figure class="wp-block-image size-full hk-card__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/class-knife.webp' ) ); ?>" alt="Pencil sketch of hands peeling daikon with an usuba knife"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "hk-card__title"} -->
<h3 class="wp-block-heading hk-card__title">Knife basics</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Holding the knife, the whetstone, katsuramuki and five sashimi cuts. Three hours.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "hk-card__price"} -->
<p class="hk-card__price">&#165;9,800</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "hk-card hk-card--class", "layout": {"type": "default"}} -->
<div class="wp-block-group hk-card hk-card--class"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hk-card__img"} -->
<figure class="wp-block-image size-full hk-card__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/class-dashi.webp' ) ); ?>" alt="Pencil sketch of a donabe with kombu and katsuobushi"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "hk-card__title"} -->
<h3 class="wp-block-heading hk-card__title">Dashi and soups</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Ichiban and niban dashi, a red miso and a clear soup with yuzu. Three hours.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "hk-card__price"} -->
<p class="hk-card__price">&#165;8,500</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "hk-card hk-card--class", "layout": {"type": "default"}} -->
<div class="wp-block-group hk-card hk-card--class"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hk-card__img"} -->
<figure class="wp-block-image size-full hk-card__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/bento.webp' ) ); ?>" alt="Pencil sketch of a lacquered bento with tamagoyaki, salmon and rice"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "hk-card__title"} -->
<h3 class="wp-block-heading hk-card__title">The bento box</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Tamagoyaki in the square pan, grilled salmon, quick pickles and packing the box. Three hours.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "hk-card__price"} -->
<p class="hk-card__price">&#165;8,800</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "hk-card hk-card--class hk-card--wide", "layout": {"type": "default"}} -->
<div class="wp-block-group hk-card hk-card--class hk-card--wide"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hk-card__img"} -->
<figure class="wp-block-image size-full hk-card__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/studio.webp' ) ); ?>" alt="Pencil sketch of the school kitchen with counters and hanging pans"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "hk-card__title"} -->
<h3 class="wp-block-heading hk-card__title">Four-week course</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>One evening a week, from the knife to a full ichijū sansai table.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "hk-card__price"} -->
<p class="hk-card__price">&#165;36,000</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align": "wide", "className": "hk-mosaic hk-mosaic--inner", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide hk-mosaic hk-mosaic--inner"><!-- wp:group {"className": "hk-card hk-card--blue", "layout": {"type": "default"}} -->
<div class="wp-block-group hk-card hk-card--blue"><!-- wp:paragraph {"className": "hk-eyebrow"} -->
<p class="hk-eyebrow">Fees</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "hk-sec__title"} -->
<h2 class="wp-block-heading hk-sec__title">Per person, ingredients included.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>The fees card is one synced pattern, so a change here changes it on the home page too.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "hk-card hk-card--fees", "layout": {"type": "default"}} -->
<div class="wp-block-group hk-card hk-card--fees"><!-- wp:pattern {"slug":"hocho-kyoshitsu/prices"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
