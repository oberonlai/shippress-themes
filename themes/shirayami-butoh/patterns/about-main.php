<?php
/**
 * Title: The workshop: the story
 * Slug: shirayami-butoh/about-main
 * Categories: shirayami-butoh
 * Keywords: butoh, dance, performance
 * Viewport Width: 1440
 * Description: The workshop story beside a photograph, a wide photograph of the workshop and what we bring.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sb-section sb-about", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sb-section sb-about"><!-- wp:group {"align": "wide", "className": "sb-about__story", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide sb-about__story"><!-- wp:group {"className": "sb-about__text", "layout": {"type": "default"}} -->
<div class="wp-block-group sb-about__text"><!-- wp:paragraph {"className": "sb-dropcap"} -->
<p class="sb-dropcap"><?php echo esc_html( shirayami_butoh_t( 'about_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( shirayami_butoh_t( 'about_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sb-piece sb-about__img"} -->
<figure class="wp-block-image size-full sb-piece sb-about__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/feet.webp' ) ); ?>" alt="<?php echo esc_attr( shirayami_butoh_t( 'alt_breakfast' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sb-about__wide alignwide"} -->
<figure class="wp-block-image size-full sb-about__wide alignwide"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/stage.webp' ) ); ?>" alt="<?php echo esc_attr( shirayami_butoh_t( 'alt_dusk' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "sb-rules", "layout": {"type": "default"}} -->
<div class="wp-block-group sb-rules"><!-- wp:heading {"className": "sb-sec__title"} -->
<h2 class="wp-block-heading sb-sec__title"><?php echo esc_html( shirayami_butoh_t( 'tools' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"className": "is-style-rule-list"} -->
<ul class="wp-block-list is-style-rule-list"><!-- wp:list-item -->
<li><?php echo esc_html( shirayami_butoh_t( 'tool1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( shirayami_butoh_t( 'tool2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( shirayami_butoh_t( 'tool3' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( shirayami_butoh_t( 'tool4' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
