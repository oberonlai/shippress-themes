<?php
/**
 * Title: About: the office
 * Slug: seimitsu-works/about-main
 * Categories: seimitsu-works
 * Keywords: manufacturing, machining, precision parts
 * Viewport Width: 1440
 * Description: The story of the office beside a picture, a wide picture and what we promise.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sw-section sw-about", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sw-section sw-about"><!-- wp:group {"align": "wide", "className": "sw-about__story", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide sw-about__story"><!-- wp:group {"className": "sw-about__text", "layout": {"type": "default"}} -->
<div class="wp-block-group sw-about__text"><!-- wp:paragraph {"className": "sw-dropcap"} -->
<p class="sw-dropcap"><?php echo esc_html( seimitsu_works_t( 'about_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( seimitsu_works_t( 'about_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sw-piece sw-about__img"} -->
<figure class="wp-block-image size-full sw-piece sw-about__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hands.webp' ) ); ?>" alt="<?php echo esc_attr( seimitsu_works_t( 'alt_breakfast' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sw-about__wide alignwide"} -->
<figure class="wp-block-image size-full sw-about__wide alignwide"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/building.webp' ) ); ?>" alt="<?php echo esc_attr( seimitsu_works_t( 'alt_dusk' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "sw-rules", "layout": {"type": "default"}} -->
<div class="wp-block-group sw-rules"><!-- wp:heading {"className": "sw-sec__title"} -->
<h2 class="wp-block-heading sw-sec__title"><?php echo esc_html( seimitsu_works_t( 'tools' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"className": "is-style-rule-list"} -->
<ul class="wp-block-list is-style-rule-list"><!-- wp:list-item -->
<li><?php echo esc_html( seimitsu_works_t( 'tool1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( seimitsu_works_t( 'tool2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( seimitsu_works_t( 'tool3' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( seimitsu_works_t( 'tool4' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
