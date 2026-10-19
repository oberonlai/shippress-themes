<?php
/**
 * Title: About: the office
 * Slug: tsunagu-systems/about-main
 * Categories: tsunagu-systems
 * Keywords: it services, managed it, support
 * Viewport Width: 1440
 * Description: The story of the office beside a picture, a wide picture and what we promise.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "ts-section ts-about", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull ts-section ts-about"><!-- wp:group {"align": "wide", "className": "ts-about__story", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide ts-about__story"><!-- wp:group {"className": "ts-about__text", "layout": {"type": "default"}} -->
<div class="wp-block-group ts-about__text"><!-- wp:paragraph {"className": "ts-dropcap"} -->
<p class="ts-dropcap"><?php echo esc_html( tsunagu_systems_t( 'about_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( tsunagu_systems_t( 'about_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "ts-piece ts-about__img"} -->
<figure class="wp-block-image size-full ts-piece ts-about__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/desk-setup.webp' ) ); ?>" alt="<?php echo esc_attr( tsunagu_systems_t( 'alt_desk' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "ts-about__wide alignwide"} -->
<figure class="wp-block-image size-full ts-about__wide alignwide"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/server-room.webp' ) ); ?>" alt="<?php echo esc_attr( tsunagu_systems_t( 'alt_server' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "ts-rules", "layout": {"type": "default"}} -->
<div class="wp-block-group ts-rules"><!-- wp:heading {"className": "ts-sec__title"} -->
<h2 class="wp-block-heading ts-sec__title"><?php echo esc_html( tsunagu_systems_t( 'tools' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"className": "is-style-rule-list"} -->
<ul class="wp-block-list is-style-rule-list"><!-- wp:list-item -->
<li><?php echo esc_html( tsunagu_systems_t( 'tool1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( tsunagu_systems_t( 'tool2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( tsunagu_systems_t( 'tool3' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( tsunagu_systems_t( 'tool4' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
