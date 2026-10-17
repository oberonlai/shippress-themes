<?php
/**
 * Title: Our story: the shop and the promise
 * Slug: shirokuro-camera/about-main
 * Categories: shirokuro-camera
 * Keywords: film cameras, lenses, film
 * Viewport Width: 1440
 * Description: The story of the shop beside the clay shopfront illustration, then the four promises as uneven masonry tiles.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sc-section sc-about", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sc-section sc-about"><!-- wp:group {"align": "wide", "className": "sc-about__story", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide sc-about__story"><!-- wp:group {"className": "sc-about__text", "layout": {"type": "default"}} -->
<div class="wp-block-group sc-about__text"><!-- wp:paragraph {"className": "is-style-lead"} -->
<p class="is-style-lead"><?php echo esc_html( shirokuro_camera_t( 'about_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( shirokuro_camera_t( 'about_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sc-about__img"} -->
<figure class="wp-block-image size-full sc-about__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/shopfront.webp' ) ); ?>" alt="<?php echo esc_attr( shirokuro_camera_t( 'alt_counter' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"align": "wide", "className": "sc-promise", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide sc-promise"><!-- wp:heading {"className": "sc-sec__title"} -->
<h2 class="wp-block-heading sc-sec__title"><?php echo esc_html( shirokuro_camera_t( 'promise' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered": true, "className": "sc-promise__list"} -->
<ol class="wp-block-list sc-promise__list"><!-- wp:list-item -->
<li><?php echo esc_html( shirokuro_camera_t( 'pr1' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( shirokuro_camera_t( 'pr2' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( shirokuro_camera_t( 'pr3' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( shirokuro_camera_t( 'pr4' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
