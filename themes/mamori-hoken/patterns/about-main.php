<?php
/**
 * Title: The workshop: the story
 * Slug: mamori-hoken/about-main
 * Categories: mamori-hoken
 * Keywords: insurance, agency, advice
 * Viewport Width: 1440
 * Description: The parlour story beside a sticky picture, a wide picture and what we keep.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "mh-section mh-about", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull mh-section mh-about"><!-- wp:group {"align": "wide", "className": "mh-about__story", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide mh-about__story"><!-- wp:group {"className": "mh-about__text", "layout": {"type": "default"}} -->
<div class="wp-block-group mh-about__text"><!-- wp:paragraph {"className": "mh-dropcap"} -->
<p class="mh-dropcap"><?php echo esc_html( mamori_hoken_t( 'about_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( mamori_hoken_t( 'about_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mh-piece mh-about__img"} -->
<figure class="wp-block-image size-full mh-piece mh-about__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hands-papers.webp' ) ); ?>" alt="<?php echo esc_attr( mamori_hoken_t( 'alt_breakfast' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mh-about__wide alignwide"} -->
<figure class="wp-block-image size-full mh-about__wide alignwide"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/office.webp' ) ); ?>" alt="<?php echo esc_attr( mamori_hoken_t( 'alt_dusk' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "mh-rules", "layout": {"type": "default"}} -->
<div class="wp-block-group mh-rules"><!-- wp:heading {"className": "mh-sec__title"} -->
<h2 class="wp-block-heading mh-sec__title"><?php echo esc_html( mamori_hoken_t( 'tools' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"className": "is-style-rule-list"} -->
<ul class="wp-block-list is-style-rule-list"><!-- wp:list-item -->
<li><?php echo esc_html( mamori_hoken_t( 'tool1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( mamori_hoken_t( 'tool2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( mamori_hoken_t( 'tool3' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( mamori_hoken_t( 'tool4' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
