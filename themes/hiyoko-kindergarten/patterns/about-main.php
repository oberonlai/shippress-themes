<?php
/**
 * Title: The workshop: the story
 * Slug: hiyoko-kindergarten/about-main
 * Categories: hiyoko-kindergarten
 * Keywords: kindergarten, nursery, school
 * Viewport Width: 1440
 * Description: The parlour story beside a sticky picture, a wide picture and what we keep.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hk-section hk-about", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hk-section hk-about"><!-- wp:group {"align": "wide", "className": "hk-about__story", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide hk-about__story"><!-- wp:group {"className": "hk-about__text", "layout": {"type": "default"}} -->
<div class="wp-block-group hk-about__text"><!-- wp:paragraph {"className": "hk-dropcap"} -->
<p class="hk-dropcap"><?php echo esc_html( hiyoko_kindergarten_t( 'about_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hiyoko_kindergarten_t( 'about_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hk-piece hk-about__img"} -->
<figure class="wp-block-image size-full hk-piece hk-about__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hands-clay.webp' ) ); ?>" alt="<?php echo esc_attr( hiyoko_kindergarten_t( 'alt_breakfast' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hk-about__wide alignwide"} -->
<figure class="wp-block-image size-full hk-about__wide alignwide"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/building.webp' ) ); ?>" alt="<?php echo esc_attr( hiyoko_kindergarten_t( 'alt_dusk' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "hk-rules", "layout": {"type": "default"}} -->
<div class="wp-block-group hk-rules"><!-- wp:heading {"className": "hk-sec__title"} -->
<h2 class="wp-block-heading hk-sec__title"><?php echo esc_html( hiyoko_kindergarten_t( 'tools' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"className": "is-style-rule-list"} -->
<ul class="wp-block-list is-style-rule-list"><!-- wp:list-item -->
<li><?php echo esc_html( hiyoko_kindergarten_t( 'tool1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( hiyoko_kindergarten_t( 'tool2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( hiyoko_kindergarten_t( 'tool3' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( hiyoko_kindergarten_t( 'tool4' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
