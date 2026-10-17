<?php
/**
 * Title: The workshop: the story
 * Slug: totonou-sauna/about-main
 * Categories: totonou-sauna
 * Keywords: sauna, bathhouse, cold plunge
 * Viewport Width: 1440
 * Description: The parlour story beside a sticky picture, a wide picture and what we keep.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tn-section tn-about", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tn-section tn-about"><!-- wp:group {"align": "wide", "className": "tn-about__story", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide tn-about__story"><!-- wp:group {"className": "tn-about__text", "layout": {"type": "default"}} -->
<div class="wp-block-group tn-about__text"><!-- wp:paragraph {"className": "tn-dropcap"} -->
<p class="tn-dropcap"><?php echo esc_html( totonou_sauna_t( 'about_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( totonou_sauna_t( 'about_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tn-piece tn-about__img"} -->
<figure class="wp-block-image size-full tn-piece tn-about__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/towels.webp' ) ); ?>" alt="<?php echo esc_attr( totonou_sauna_t( 'alt_breakfast' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tn-about__wide alignwide"} -->
<figure class="wp-block-image size-full tn-about__wide alignwide"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/front-desk.webp' ) ); ?>" alt="<?php echo esc_attr( totonou_sauna_t( 'alt_dusk' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "tn-rules", "layout": {"type": "default"}} -->
<div class="wp-block-group tn-rules"><!-- wp:heading {"className": "tn-sec__title"} -->
<h2 class="wp-block-heading tn-sec__title"><?php echo esc_html( totonou_sauna_t( 'tools' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"className": "is-style-rule-list"} -->
<ul class="wp-block-list is-style-rule-list"><!-- wp:list-item -->
<li><?php echo esc_html( totonou_sauna_t( 'tool1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( totonou_sauna_t( 'tool2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( totonou_sauna_t( 'tool3' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( totonou_sauna_t( 'tool4' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
