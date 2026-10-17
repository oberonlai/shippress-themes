<?php
/**
 * Title: The shop: story and promise
 * Slug: itomaki-yarn/about-main
 * Categories: itomaki-yarn
 * Keywords: yarn, wool, knitting
 * Viewport Width: 1440
 * Description: The story of the shop beside the knitting watercolour, then the four promises as poster numbers.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "iy-section iy-about", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull iy-section iy-about"><!-- wp:group {"align": "wide", "className": "iy-about__story", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide iy-about__story"><!-- wp:group {"className": "iy-about__text", "layout": {"type": "default"}} -->
<div class="wp-block-group iy-about__text"><!-- wp:paragraph {"className": "is-style-lead"} -->
<p class="is-style-lead"><?php echo esc_html( itomaki_yarn_t( 'about_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( itomaki_yarn_t( 'about_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "iy-about__img"} -->
<figure class="wp-block-image size-full iy-about__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hands.webp' ) ); ?>" alt="<?php echo esc_attr( itomaki_yarn_t( 'alt_counter' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"align": "wide", "className": "iy-promise", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide iy-promise"><!-- wp:heading {"className": "iy-sec__title"} -->
<h2 class="wp-block-heading iy-sec__title"><?php echo esc_html( itomaki_yarn_t( 'promise' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered": true, "className": "iy-promise__list"} -->
<ol class="wp-block-list iy-promise__list"><!-- wp:list-item -->
<li><?php echo esc_html( itomaki_yarn_t( 'pr1' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( itomaki_yarn_t( 'pr2' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( itomaki_yarn_t( 'pr3' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( itomaki_yarn_t( 'pr4' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
