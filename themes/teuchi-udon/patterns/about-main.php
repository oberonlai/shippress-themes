<?php
/**
 * Title: The workshop: the story
 * Slug: teuchi-udon/about-main
 * Categories: teuchi-udon
 * Keywords: udon, noodles, restaurant
 * Viewport Width: 1440
 * Description: The parlour story beside a sticky picture, a wide picture and what we keep.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tu-section tu-about", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tu-section tu-about"><!-- wp:group {"align": "wide", "className": "tu-about__story", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide tu-about__story"><!-- wp:group {"className": "tu-about__text", "layout": {"type": "default"}} -->
<div class="wp-block-group tu-about__text"><!-- wp:paragraph {"className": "tu-dropcap"} -->
<p class="tu-dropcap"><?php echo esc_html( teuchi_udon_t( 'about_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( teuchi_udon_t( 'about_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tu-piece tu-about__img"} -->
<figure class="wp-block-image size-full tu-piece tu-about__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/flour.webp' ) ); ?>" alt="<?php echo esc_attr( teuchi_udon_t( 'alt_breakfast' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tu-about__wide alignwide"} -->
<figure class="wp-block-image size-full tu-about__wide alignwide"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/shopfront.webp' ) ); ?>" alt="<?php echo esc_attr( teuchi_udon_t( 'alt_dusk' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "tu-rules", "layout": {"type": "default"}} -->
<div class="wp-block-group tu-rules"><!-- wp:heading {"className": "tu-sec__title"} -->
<h2 class="wp-block-heading tu-sec__title"><?php echo esc_html( teuchi_udon_t( 'tools' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"className": "is-style-rule-list"} -->
<ul class="wp-block-list is-style-rule-list"><!-- wp:list-item -->
<li><?php echo esc_html( teuchi_udon_t( 'tool1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( teuchi_udon_t( 'tool2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( teuchi_udon_t( 'tool3' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( teuchi_udon_t( 'tool4' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
