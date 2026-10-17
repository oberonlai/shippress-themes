<?php
/**
 * Title: The host: the story
 * Slug: koshi-machiya/about-main
 * Categories: koshi-machiya
 * Keywords: machiya, townhouse, stay
 * Viewport Width: 1440
 * Description: The host’s story in two columns beside a taped sketch, a wide sketch of the lane and what is in the house.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kc-section kc-about", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kc-section kc-about"><!-- wp:group {"align": "wide", "className": "kc-about__story", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide kc-about__story"><!-- wp:group {"className": "kc-about__text", "layout": {"type": "default"}} -->
<div class="wp-block-group kc-about__text"><!-- wp:paragraph {"className": "kc-dropcap"} -->
<p class="kc-dropcap"><?php echo esc_html( koshi_machiya_t( 'about_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( koshi_machiya_t( 'about_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kc-piece kc-about__img"} -->
<figure class="wp-block-image size-full kc-piece kc-about__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/breakfast.webp' ) ); ?>" alt="<?php echo esc_attr( koshi_machiya_t( 'alt_breakfast' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kc-about__wide alignwide"} -->
<figure class="wp-block-image size-full kc-about__wide alignwide"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/dusk.webp' ) ); ?>" alt="<?php echo esc_attr( koshi_machiya_t( 'alt_dusk' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "kc-rules", "layout": {"type": "default"}} -->
<div class="wp-block-group kc-rules"><!-- wp:heading {"className": "kc-sec__title"} -->
<h2 class="wp-block-heading kc-sec__title"><?php echo esc_html( koshi_machiya_t( 'tools' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"className": "is-style-rule-list"} -->
<ul class="wp-block-list is-style-rule-list"><!-- wp:list-item -->
<li><?php echo esc_html( koshi_machiya_t( 'tool1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( koshi_machiya_t( 'tool2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( koshi_machiya_t( 'tool3' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( koshi_machiya_t( 'tool4' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
