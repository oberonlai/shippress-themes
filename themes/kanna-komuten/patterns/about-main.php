<?php
/**
 * Title: The workshop: the story
 * Slug: kanna-komuten/about-main
 * Categories: kanna-komuten
 * Keywords: carpenter, machiya, renovation
 * Viewport Width: 1440
 * Description: The workshop story beside a photograph, a wide photograph of the workshop and what we bring.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kn-section kn-about", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kn-section kn-about"><!-- wp:group {"align": "wide", "className": "kn-about__story", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide kn-about__story"><!-- wp:group {"className": "kn-about__text", "layout": {"type": "default"}} -->
<div class="wp-block-group kn-about__text"><!-- wp:paragraph {"className": "kn-dropcap"} -->
<p class="kn-dropcap"><?php echo esc_html( kanna_komuten_t( 'about_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( kanna_komuten_t( 'about_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kn-piece kn-about__img"} -->
<figure class="wp-block-image size-full kn-piece kn-about__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/tools.webp' ) ); ?>" alt="<?php echo esc_attr( kanna_komuten_t( 'alt_breakfast' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kn-about__wide alignwide"} -->
<figure class="wp-block-image size-full kn-about__wide alignwide"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-workshop.webp' ) ); ?>" alt="<?php echo esc_attr( kanna_komuten_t( 'alt_dusk' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "kn-rules", "layout": {"type": "default"}} -->
<div class="wp-block-group kn-rules"><!-- wp:heading {"className": "kn-sec__title"} -->
<h2 class="wp-block-heading kn-sec__title"><?php echo esc_html( kanna_komuten_t( 'tools' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"className": "is-style-rule-list"} -->
<ul class="wp-block-list is-style-rule-list"><!-- wp:list-item -->
<li><?php echo esc_html( kanna_komuten_t( 'tool1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( kanna_komuten_t( 'tool2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( kanna_komuten_t( 'tool3' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( kanna_komuten_t( 'tool4' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
