<?php
/**
 * Title: About: the office
 * Slug: manabi-juku/about-main
 * Categories: manabi-juku
 * Keywords: school, tutoring, courses
 * Viewport Width: 1440
 * Description: The story of the office beside a picture, a wide picture and what we promise.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "mj-section mj-about", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull mj-section mj-about"><!-- wp:group {"align": "wide", "className": "mj-about__story", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide mj-about__story"><!-- wp:group {"className": "mj-about__text", "layout": {"type": "default"}} -->
<div class="wp-block-group mj-about__text"><!-- wp:paragraph {"className": "mj-dropcap"} -->
<p class="mj-dropcap"><?php echo esc_html( manabi_juku_t( 'about_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( manabi_juku_t( 'about_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mj-piece mj-about__img"} -->
<figure class="wp-block-image size-full mj-piece mj-about__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/tutor.webp' ) ); ?>" alt="<?php echo esc_attr( manabi_juku_t( 'alt_breakfast' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mj-about__wide alignwide"} -->
<figure class="wp-block-image size-full mj-about__wide alignwide"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/building.webp' ) ); ?>" alt="<?php echo esc_attr( manabi_juku_t( 'alt_dusk' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "mj-rules", "layout": {"type": "default"}} -->
<div class="wp-block-group mj-rules"><!-- wp:heading {"className": "mj-sec__title"} -->
<h2 class="wp-block-heading mj-sec__title"><?php echo esc_html( manabi_juku_t( 'tools' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"className": "is-style-rule-list"} -->
<ul class="wp-block-list is-style-rule-list"><!-- wp:list-item -->
<li><?php echo esc_html( manabi_juku_t( 'tool1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( manabi_juku_t( 'tool2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( manabi_juku_t( 'tool3' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( manabi_juku_t( 'tool4' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
