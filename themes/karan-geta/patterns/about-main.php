<?php
/**
 * Title: The shop: story and promise
 * Slug: karan-geta/about-main
 * Categories: karan-geta
 * Keywords: geta, sandals, workshop
 * Viewport Width: 1440
 * Description: The story of the shop beside the shop-front print, then the four promises as a horizontal strip.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kg-section kg-about", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kg-section kg-about"><!-- wp:group {"align": "wide", "className": "kg-about__story", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide kg-about__story"><!-- wp:group {"className": "kg-about__text", "layout": {"type": "default"}} -->
<div class="wp-block-group kg-about__text"><!-- wp:paragraph {"className": "is-style-lead"} -->
<p class="is-style-lead"><?php echo esc_html( karan_geta_t( 'about_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( karan_geta_t( 'about_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kg-about__img"} -->
<figure class="wp-block-image size-full kg-about__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/shopfront.webp' ) ); ?>" alt="<?php echo esc_attr( karan_geta_t( 'alt_counter' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"align": "wide", "className": "kg-promise", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide kg-promise"><!-- wp:heading {"className": "kg-sec__title"} -->
<h2 class="wp-block-heading kg-sec__title"><?php echo esc_html( karan_geta_t( 'promise' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered": true, "className": "kg-promise__list"} -->
<ol class="wp-block-list kg-promise__list"><!-- wp:list-item -->
<li><?php echo esc_html( karan_geta_t( 'pr1' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( karan_geta_t( 'pr2' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( karan_geta_t( 'pr3' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( karan_geta_t( 'pr4' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
