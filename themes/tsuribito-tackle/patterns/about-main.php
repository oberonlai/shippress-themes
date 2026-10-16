<?php
/**
 * Title: The shop: story and promise
 * Slug: tsuribito-tackle/about-main
 * Categories: tsuribito-tackle
 * Keywords: fishing, tackle, shop
 * Viewport Width: 1440
 * Description: The story of the shop beside the bright counter photo, then the four promises as a horizontal strip.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tt-section tt-about", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tt-section tt-about"><!-- wp:group {"align": "wide", "className": "tt-about__story", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide tt-about__story"><!-- wp:group {"className": "tt-about__text", "layout": {"type": "default"}} -->
<div class="wp-block-group tt-about__text"><!-- wp:paragraph {"className": "is-style-lead"} -->
<p class="is-style-lead"><?php echo esc_html( tsuribito_tackle_t( 'about_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( tsuribito_tackle_t( 'about_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tt-about__img"} -->
<figure class="wp-block-image size-full tt-about__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/shop-counter.webp' ) ); ?>" alt="<?php echo esc_attr( tsuribito_tackle_t( 'alt_counter' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"align": "wide", "className": "tt-promise", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide tt-promise"><!-- wp:heading {"className": "tt-sec__title"} -->
<h2 class="wp-block-heading tt-sec__title"><?php echo esc_html( tsuribito_tackle_t( 'promise' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered": true, "className": "tt-promise__list"} -->
<ol class="wp-block-list tt-promise__list"><!-- wp:list-item -->
<li><?php echo esc_html( tsuribito_tackle_t( 'pr1' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( tsuribito_tackle_t( 'pr2' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( tsuribito_tackle_t( 'pr3' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( tsuribito_tackle_t( 'pr4' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
