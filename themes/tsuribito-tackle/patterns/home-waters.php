<?php
/**
 * Title: Home: three waters
 * Slug: tsuribito-tackle/home-waters
 * Categories: tsuribito-tackle
 * Keywords: fishing, tackle, shop
 * Viewport Width: 1440
 * Description: Harbour, river mouth and rocks as three panels in one horizontal strip.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tt-section tt-waters", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tt-section tt-waters"><!-- wp:group {"align": "wide", "className": "tt-strip__head", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide tt-strip__head"><!-- wp:paragraph {"className": "tt-eyebrow"} -->
<p class="tt-eyebrow"><?php echo esc_html( tsuribito_tackle_t( 'cat_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "tt-sec__title"} -->
<h2 class="wp-block-heading tt-sec__title"><?php echo esc_html( tsuribito_tackle_t( 'cat_title' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"align": "wide", "className": "tt-waters__row", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide tt-waters__row"><!-- wp:group {"className": "tt-water", "layout": {"type": "default"}} -->
<div class="wp-block-group tt-water"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tt-water__img"} -->
<figure class="wp-block-image size-full tt-water__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/j-knots.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className": "tt-water__no"} -->
<p class="tt-water__no">01</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 3, "className": "tt-water__title"} -->
<h3 class="wp-block-heading tt-water__title"><?php echo esc_html( tsuribito_tackle_t( 'c1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "tt-water__text"} -->
<p class="tt-water__text"><?php echo esc_html( tsuribito_tackle_t( 'c1_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "tt-water", "layout": {"type": "default"}} -->
<div class="wp-block-group tt-water"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tt-water__img"} -->
<figure class="wp-block-image size-full tt-water__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/j-river.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className": "tt-water__no"} -->
<p class="tt-water__no">02</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 3, "className": "tt-water__title"} -->
<h3 class="wp-block-heading tt-water__title"><?php echo esc_html( tsuribito_tackle_t( 'c2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "tt-water__text"} -->
<p class="tt-water__text"><?php echo esc_html( tsuribito_tackle_t( 'c2_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "tt-water", "layout": {"type": "default"}} -->
<div class="wp-block-group tt-water"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tt-water__img"} -->
<figure class="wp-block-image size-full tt-water__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/j-tide.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className": "tt-water__no"} -->
<p class="tt-water__no">03</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 3, "className": "tt-water__title"} -->
<h3 class="wp-block-heading tt-water__title"><?php echo esc_html( tsuribito_tackle_t( 'c3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "tt-water__text"} -->
<p class="tt-water__text"><?php echo esc_html( tsuribito_tackle_t( 'c3_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
