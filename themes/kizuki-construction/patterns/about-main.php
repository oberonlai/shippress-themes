<?php
/**
 * Title: About: the office
 * Slug: kizuki-construction/about-main
 * Categories: kizuki-construction
 * Keywords: construction, contractor, building
 * Viewport Width: 1440
 * Description: The story of the office beside a picture, a wide picture and what we promise.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kz-section kz-about", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kz-section kz-about"><!-- wp:group {"align": "wide", "className": "kz-about__story", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide kz-about__story"><!-- wp:group {"className": "kz-about__text", "layout": {"type": "default"}} -->
<div class="wp-block-group kz-about__text"><!-- wp:paragraph {"className": "kz-dropcap"} -->
<p class="kz-dropcap"><?php echo esc_html( kizuki_construction_t( 'about_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( kizuki_construction_t( 'about_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kz-piece kz-about__img"} -->
<figure class="wp-block-image size-full kz-piece kz-about__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/handover.webp' ) ); ?>" alt="<?php echo esc_attr( kizuki_construction_t( 'alt_handover' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kz-about__wide alignwide"} -->
<figure class="wp-block-image size-full kz-about__wide alignwide"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/frame.webp' ) ); ?>" alt="<?php echo esc_attr( kizuki_construction_t( 'alt_frame' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "kz-rules", "layout": {"type": "default"}} -->
<div class="wp-block-group kz-rules"><!-- wp:heading {"className": "kz-sec__title"} -->
<h2 class="wp-block-heading kz-sec__title"><?php echo esc_html( kizuki_construction_t( 'tools' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"className": "is-style-rule-list"} -->
<ul class="wp-block-list is-style-rule-list"><!-- wp:list-item -->
<li><?php echo esc_html( kizuki_construction_t( 'tool1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( kizuki_construction_t( 'tool2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( kizuki_construction_t( 'tool3' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( kizuki_construction_t( 'tool4' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
