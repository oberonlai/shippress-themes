<?php
/**
 * Title: About: the office
 * Slug: tsutsumi-packaging/about-main
 * Categories: tsutsumi-packaging
 * Keywords: packaging, boxes, manufacturer
 * Viewport Width: 1440
 * Description: The story of the office beside a picture, a wide picture and what we promise.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tp-section tp-about", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tp-section tp-about"><!-- wp:group {"align": "wide", "className": "tp-about__story", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide tp-about__story"><!-- wp:group {"className": "tp-about__text", "layout": {"type": "default"}} -->
<div class="wp-block-group tp-about__text"><!-- wp:paragraph {"className": "tp-dropcap"} -->
<p class="tp-dropcap"><?php echo esc_html( tsutsumi_packaging_t( 'about_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( tsutsumi_packaging_t( 'about_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tp-piece tp-about__img"} -->
<figure class="wp-block-image size-full tp-piece tp-about__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/factory.webp' ) ); ?>" alt="<?php echo esc_attr( tsutsumi_packaging_t( 'alt_factory' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tp-about__wide alignwide"} -->
<figure class="wp-block-image size-full tp-about__wide alignwide"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/pallets.webp' ) ); ?>" alt="<?php echo esc_attr( tsutsumi_packaging_t( 'alt_pallets' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "tp-rules", "layout": {"type": "default"}} -->
<div class="wp-block-group tp-rules"><!-- wp:heading {"className": "tp-sec__title"} -->
<h2 class="wp-block-heading tp-sec__title"><?php echo esc_html( tsutsumi_packaging_t( 'tools' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"className": "is-style-rule-list"} -->
<ul class="wp-block-list is-style-rule-list"><!-- wp:list-item -->
<li><?php echo esc_html( tsutsumi_packaging_t( 'tool1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( tsutsumi_packaging_t( 'tool2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( tsutsumi_packaging_t( 'tool3' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( tsutsumi_packaging_t( 'tool4' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
