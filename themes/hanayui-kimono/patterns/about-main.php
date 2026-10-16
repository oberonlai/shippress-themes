<?php
/**
 * Title: The shop: story and promise
 * Slug: hanayui-kimono/about-main
 * Categories: hanayui-kimono
 * Keywords: kimono, rental, dressing
 * Viewport Width: 1440
 * Description: The story of the shop beside the shop-front print, then the four promises as a horizontal strip.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hy-section hy-about", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hy-section hy-about"><!-- wp:group {"align": "wide", "className": "hy-about__story", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide hy-about__story"><!-- wp:group {"className": "hy-about__text", "layout": {"type": "default"}} -->
<div class="wp-block-group hy-about__text"><!-- wp:paragraph {"className": "is-style-lead"} -->
<p class="is-style-lead"><?php echo esc_html( hanayui_kimono_t( 'about_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hanayui_kimono_t( 'about_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hy-about__img"} -->
<figure class="wp-block-image size-full hy-about__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/shopfront.webp' ) ); ?>" alt="<?php echo esc_attr( hanayui_kimono_t( 'alt_counter' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"align": "wide", "className": "hy-promise", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide hy-promise"><!-- wp:heading {"className": "hy-sec__title"} -->
<h2 class="wp-block-heading hy-sec__title"><?php echo esc_html( hanayui_kimono_t( 'promise' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered": true, "className": "hy-promise__list"} -->
<ol class="wp-block-list hy-promise__list"><!-- wp:list-item -->
<li><?php echo esc_html( hanayui_kimono_t( 'pr1' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( hanayui_kimono_t( 'pr2' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( hanayui_kimono_t( 'pr3' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( hanayui_kimono_t( 'pr4' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
