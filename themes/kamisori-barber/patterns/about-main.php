<?php
/**
 * Title: The shop: the story
 * Slug: kamisori-barber/about-main
 * Categories: kamisori-barber
 * Keywords: barber, barbershop, shave
 * Viewport Width: 1440
 * Description: The shop story with a taped picture, a wide picture and what we keep.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kb-section kb-about", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kb-section kb-about"><!-- wp:group {"align": "wide", "className": "kb-about__story", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide kb-about__story"><!-- wp:group {"className": "kb-about__text", "layout": {"type": "default"}} -->
<div class="wp-block-group kb-about__text"><!-- wp:paragraph {"className": "kb-dropcap"} -->
<p class="kb-dropcap"><?php echo esc_html( kamisori_barber_t( 'about_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( kamisori_barber_t( 'about_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kb-piece kb-about__img"} -->
<figure class="wp-block-image size-full kb-piece kb-about__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/tools.webp' ) ); ?>" alt="<?php echo esc_attr( kamisori_barber_t( 'alt_breakfast' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kb-about__wide alignwide"} -->
<figure class="wp-block-image size-full kb-about__wide alignwide"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/shopfront.webp' ) ); ?>" alt="<?php echo esc_attr( kamisori_barber_t( 'alt_dusk' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "kb-rules", "layout": {"type": "default"}} -->
<div class="wp-block-group kb-rules"><!-- wp:heading {"className": "kb-sec__title"} -->
<h2 class="wp-block-heading kb-sec__title"><?php echo esc_html( kamisori_barber_t( 'tools' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"className": "is-style-rule-list"} -->
<ul class="wp-block-list is-style-rule-list"><!-- wp:list-item -->
<li><?php echo esc_html( kamisori_barber_t( 'tool1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( kamisori_barber_t( 'tool2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( kamisori_barber_t( 'tool3' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( kamisori_barber_t( 'tool4' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
