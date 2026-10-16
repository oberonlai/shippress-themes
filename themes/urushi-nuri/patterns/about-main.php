<?php
/**
 * Title: The shop: story and promise
 * Slug: urushi-nuri/about-main
 * Categories: urushi-nuri
 * Keywords: urushi, lacquer, workshop
 * Viewport Width: 1440
 * Description: The story of the shop beside the bright counter photo, then the four promises as a horizontal strip.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "un-section un-about", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull un-section un-about"><!-- wp:group {"align": "wide", "className": "un-about__story", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide un-about__story"><!-- wp:group {"className": "un-about__text", "layout": {"type": "default"}} -->
<div class="wp-block-group un-about__text"><!-- wp:paragraph {"className": "is-style-lead"} -->
<p class="is-style-lead"><?php echo esc_html( urushi_nuri_t( 'about_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( urushi_nuri_t( 'about_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "un-about__img"} -->
<figure class="wp-block-image size-full un-about__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/bench.webp' ) ); ?>" alt="<?php echo esc_attr( urushi_nuri_t( 'alt_counter' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"align": "wide", "className": "un-promise", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide un-promise"><!-- wp:heading {"className": "un-sec__title"} -->
<h2 class="wp-block-heading un-sec__title"><?php echo esc_html( urushi_nuri_t( 'promise' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered": true, "className": "un-promise__list"} -->
<ol class="wp-block-list un-promise__list"><!-- wp:list-item -->
<li><?php echo esc_html( urushi_nuri_t( 'pr1' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( urushi_nuri_t( 'pr2' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( urushi_nuri_t( 'pr3' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( urushi_nuri_t( 'pr4' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
