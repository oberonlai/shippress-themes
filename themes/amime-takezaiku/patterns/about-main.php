<?php
/**
 * Title: The workshop: story and promise
 * Slug: amime-takezaiku/about-main
 * Categories: amime-takezaiku
 * Keywords: bamboo, baskets, workshop
 * Viewport Width: 1440
 * Description: The story of the workshop beside the shop-front watercolour, then the four promises as a horizontal strip.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tk-section tk-about", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tk-section tk-about"><!-- wp:group {"align": "wide", "className": "tk-about__story", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide tk-about__story"><!-- wp:group {"className": "tk-about__text", "layout": {"type": "default"}} -->
<div class="wp-block-group tk-about__text"><!-- wp:paragraph {"className": "is-style-lead"} -->
<p class="is-style-lead"><?php echo esc_html( amime_takezaiku_t( 'about_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( amime_takezaiku_t( 'about_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tk-about__img"} -->
<figure class="wp-block-image size-full tk-about__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/shopfront.webp' ) ); ?>" alt="<?php echo esc_attr( amime_takezaiku_t( 'alt_counter' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"align": "wide", "className": "tk-promise", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide tk-promise"><!-- wp:heading {"className": "tk-sec__title"} -->
<h2 class="wp-block-heading tk-sec__title"><?php echo esc_html( amime_takezaiku_t( 'promise' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered": true, "className": "tk-promise__list"} -->
<ol class="wp-block-list tk-promise__list"><!-- wp:list-item -->
<li><?php echo esc_html( amime_takezaiku_t( 'pr1' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( amime_takezaiku_t( 'pr2' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( amime_takezaiku_t( 'pr3' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( amime_takezaiku_t( 'pr4' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
