<?php
/**
 * Title: The dojo: story, photograph and manners
 * Slug: taiko-juku/about-main
 * Categories: taiko-juku
 * Keywords: taiko, drumming, classes
 * Viewport Width: 1440
 * Description: The story of the dojo beside a still life of sticks, a wide framed photograph and the dojo manners.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tj-section tj-about", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tj-section tj-about"><!-- wp:group {"align": "wide", "className": "tj-about__story", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide tj-about__story"><!-- wp:group {"className": "tj-about__text", "layout": {"type": "default"}} -->
<div class="wp-block-group tj-about__text"><!-- wp:paragraph {"className": "is-style-lead"} -->
<p class="is-style-lead"><?php echo esc_html( taiko_juku_t( 'about_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( taiko_juku_t( 'about_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tj-about__img"} -->
<figure class="wp-block-image size-full tj-about__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/bachi.webp' ) ); ?>" alt="<?php echo esc_attr( taiko_juku_t( 'alt_trail' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"align": "wide", "className": "tj-about__frame", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide tj-about__frame"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tj-about__wide"} -->
<figure class="wp-block-image size-full tj-about__wide"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero.webp' ) ); ?>" alt="<?php echo esc_attr( taiko_juku_t( 'alt_fire' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "tj-rules", "layout": {"type": "default"}} -->
<div class="wp-block-group tj-rules"><!-- wp:heading {"className": "tj-sec__title"} -->
<h2 class="wp-block-heading tj-sec__title"><?php echo esc_html( taiko_juku_t( 'rules' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered": true, "className": "tj-rules__list"} -->
<ol class="wp-block-list tj-rules__list"><!-- wp:list-item -->
<li><?php echo esc_html( taiko_juku_t( 'rule1' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( taiko_juku_t( 'rule2' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( taiko_juku_t( 'rule3' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( taiko_juku_t( 'rule4' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
