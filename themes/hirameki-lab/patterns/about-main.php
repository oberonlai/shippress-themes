<?php
/**
 * Title: About: the office
 * Slug: hirameki-lab/about-main
 * Categories: hirameki-lab
 * Keywords: STEM, robotics, after-school
 * Viewport Width: 1440
 * Description: The story of the office beside a picture, a wide picture and what we promise.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hl-section hl-about", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hl-section hl-about"><!-- wp:group {"align": "wide", "className": "hl-about__story", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide hl-about__story"><!-- wp:group {"className": "hl-about__text", "layout": {"type": "default"}} -->
<div class="wp-block-group hl-about__text"><!-- wp:paragraph {"className": "hl-dropcap"} -->
<p class="hl-dropcap"><?php echo esc_html( hirameki_lab_t( 'about_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hirameki_lab_t( 'about_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hl-piece hl-about__img"} -->
<figure class="wp-block-image size-full hl-piece hl-about__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hands.webp' ) ); ?>" alt="<?php echo esc_attr( hirameki_lab_t( 'alt_hands' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hl-about__wide alignwide"} -->
<figure class="wp-block-image size-full hl-about__wide alignwide"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/lab.webp' ) ); ?>" alt="<?php echo esc_attr( hirameki_lab_t( 'alt_lab' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "hl-rules", "layout": {"type": "default"}} -->
<div class="wp-block-group hl-rules"><!-- wp:heading {"className": "hl-sec__title"} -->
<h2 class="wp-block-heading hl-sec__title"><?php echo esc_html( hirameki_lab_t( 'tools' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"className": "is-style-rule-list"} -->
<ul class="wp-block-list is-style-rule-list"><!-- wp:list-item -->
<li><?php echo esc_html( hirameki_lab_t( 'tool1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( hirameki_lab_t( 'tool2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( hirameki_lab_t( 'tool3' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( hirameki_lab_t( 'tool4' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
