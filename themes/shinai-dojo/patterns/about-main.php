<?php
/**
 * Title: The dojo: the story
 * Slug: shinai-dojo/about-main
 * Categories: shinai-dojo
 * Keywords: kendo, dojo, martial arts
 * Viewport Width: 1440
 * Description: The dojo story beside an isometric plate, a wide plate of the building and what we keep.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sd-section sd-about", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sd-section sd-about"><!-- wp:group {"align": "wide", "className": "sd-about__story", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide sd-about__story"><!-- wp:group {"className": "sd-about__text", "layout": {"type": "default"}} -->
<div class="wp-block-group sd-about__text"><!-- wp:paragraph {"className": "sd-dropcap"} -->
<p class="sd-dropcap"><?php echo esc_html( shinai_dojo_t( 'about_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( shinai_dojo_t( 'about_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sd-piece sd-about__img"} -->
<figure class="wp-block-image size-full sd-piece sd-about__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/gear.webp' ) ); ?>" alt="<?php echo esc_attr( shinai_dojo_t( 'alt_breakfast' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sd-about__wide alignwide"} -->
<figure class="wp-block-image size-full sd-about__wide alignwide"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/entrance.webp' ) ); ?>" alt="<?php echo esc_attr( shinai_dojo_t( 'alt_dusk' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "sd-rules", "layout": {"type": "default"}} -->
<div class="wp-block-group sd-rules"><!-- wp:heading {"className": "sd-sec__title"} -->
<h2 class="wp-block-heading sd-sec__title"><?php echo esc_html( shinai_dojo_t( 'tools' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"className": "is-style-rule-list"} -->
<ul class="wp-block-list is-style-rule-list"><!-- wp:list-item -->
<li><?php echo esc_html( shinai_dojo_t( 'tool1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( shinai_dojo_t( 'tool2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( shinai_dojo_t( 'tool3' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( shinai_dojo_t( 'tool4' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
