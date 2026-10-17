<?php
/**
 * Title: The studio: the story
 * Slug: hotaru-ehon/about-main
 * Categories: hotaru-ehon
 * Keywords: picture book, illustration, illustrator
 * Viewport Width: 1440
 * Description: The studio story with a taped picture, a wide picture and what we keep.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "ht-section ht-about", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull ht-section ht-about"><!-- wp:group {"align": "wide", "className": "ht-about__story", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide ht-about__story"><!-- wp:group {"className": "ht-about__text", "layout": {"type": "default"}} -->
<div class="wp-block-group ht-about__text"><!-- wp:paragraph {"className": "ht-dropcap"} -->
<p class="ht-dropcap"><?php echo esc_html( hotaru_ehon_t( 'about_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hotaru_ehon_t( 'about_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "ht-piece ht-about__img"} -->
<figure class="wp-block-image size-full ht-piece ht-about__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/tools.webp' ) ); ?>" alt="<?php echo esc_attr( hotaru_ehon_t( 'alt_breakfast' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "ht-about__wide alignwide"} -->
<figure class="wp-block-image size-full ht-about__wide alignwide"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/studio.webp' ) ); ?>" alt="<?php echo esc_attr( hotaru_ehon_t( 'alt_dusk' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "ht-rules", "layout": {"type": "default"}} -->
<div class="wp-block-group ht-rules"><!-- wp:heading {"className": "ht-sec__title"} -->
<h2 class="wp-block-heading ht-sec__title"><?php echo esc_html( hotaru_ehon_t( 'tools' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"className": "is-style-rule-list"} -->
<ul class="wp-block-list is-style-rule-list"><!-- wp:list-item -->
<li><?php echo esc_html( hotaru_ehon_t( 'tool1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( hotaru_ehon_t( 'tool2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( hotaru_ehon_t( 'tool3' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( hotaru_ehon_t( 'tool4' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
