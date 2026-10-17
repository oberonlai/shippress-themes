<?php
/**
 * Title: The workshop: the story
 * Slug: yukimi-kakigori/about-main
 * Categories: yukimi-kakigori
 * Keywords: kakigori, shaved ice, dessert
 * Viewport Width: 1440
 * Description: The parlour story beside a sticky picture, a wide picture and what we keep.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "yk-section yk-about", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull yk-section yk-about"><!-- wp:group {"align": "wide", "className": "yk-about__story", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide yk-about__story"><!-- wp:group {"className": "yk-about__text", "layout": {"type": "default"}} -->
<div class="wp-block-group yk-about__text"><!-- wp:paragraph {"className": "yk-dropcap"} -->
<p class="yk-dropcap"><?php echo esc_html( yukimi_kakigori_t( 'about_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( yukimi_kakigori_t( 'about_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "yk-piece yk-about__img"} -->
<figure class="wp-block-image size-full yk-piece yk-about__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/syrup.webp' ) ); ?>" alt="<?php echo esc_attr( yukimi_kakigori_t( 'alt_breakfast' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "yk-about__wide alignwide"} -->
<figure class="wp-block-image size-full yk-about__wide alignwide"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/counter.webp' ) ); ?>" alt="<?php echo esc_attr( yukimi_kakigori_t( 'alt_dusk' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "yk-rules", "layout": {"type": "default"}} -->
<div class="wp-block-group yk-rules"><!-- wp:heading {"className": "yk-sec__title"} -->
<h2 class="wp-block-heading yk-sec__title"><?php echo esc_html( yukimi_kakigori_t( 'tools' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"className": "is-style-rule-list"} -->
<ul class="wp-block-list is-style-rule-list"><!-- wp:list-item -->
<li><?php echo esc_html( yukimi_kakigori_t( 'tool1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( yukimi_kakigori_t( 'tool2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( yukimi_kakigori_t( 'tool3' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( yukimi_kakigori_t( 'tool4' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
