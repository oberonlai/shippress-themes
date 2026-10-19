<?php
/**
 * Title: About: the office
 * Slug: waza-college/about-main
 * Categories: waza-college
 * Keywords: college, vocational, courses
 * Viewport Width: 1440
 * Description: The story of the office beside a picture, a wide picture and what we promise.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "wz-section wz-about", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull wz-section wz-about"><!-- wp:group {"align": "wide", "className": "wz-about__story", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide wz-about__story"><!-- wp:group {"className": "wz-about__text", "layout": {"type": "default"}} -->
<div class="wp-block-group wz-about__text"><!-- wp:paragraph {"className": "wz-dropcap"} -->
<p class="wz-dropcap"><?php echo esc_html( waza_college_t( 'about_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( waza_college_t( 'about_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "wz-piece wz-about__img"} -->
<figure class="wp-block-image size-full wz-piece wz-about__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/lab.webp' ) ); ?>" alt="<?php echo esc_attr( waza_college_t( 'alt_lab' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "wz-about__wide alignwide"} -->
<figure class="wp-block-image size-full wz-about__wide alignwide"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/workshop.webp' ) ); ?>" alt="<?php echo esc_attr( waza_college_t( 'alt_workshop' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "wz-rules", "layout": {"type": "default"}} -->
<div class="wp-block-group wz-rules"><!-- wp:heading {"className": "wz-sec__title"} -->
<h2 class="wp-block-heading wz-sec__title"><?php echo esc_html( waza_college_t( 'tools' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"className": "is-style-rule-list"} -->
<ul class="wp-block-list is-style-rule-list"><!-- wp:list-item -->
<li><?php echo esc_html( waza_college_t( 'tool1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( waza_college_t( 'tool2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( waza_college_t( 'tool3' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( waza_college_t( 'tool4' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
