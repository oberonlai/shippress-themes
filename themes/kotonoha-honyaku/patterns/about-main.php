<?php
/**
 * Title: The studio: the story
 * Slug: kotonoha-honyaku/about-main
 * Categories: kotonoha-honyaku
 * Keywords: translation, interpreting, languages
 * Viewport Width: 1440
 * Description: The parlour story beside a sticky picture, a wide picture and what we keep.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kh-section kh-about", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kh-section kh-about"><!-- wp:group {"align": "wide", "className": "kh-about__story", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide kh-about__story"><!-- wp:group {"className": "kh-about__text", "layout": {"type": "default"}} -->
<div class="wp-block-group kh-about__text"><!-- wp:paragraph {"className": "kh-dropcap"} -->
<p class="kh-dropcap"><?php echo esc_html( kotonoha_honyaku_t( 'about_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( kotonoha_honyaku_t( 'about_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kh-piece kh-about__img"} -->
<figure class="wp-block-image size-full kh-piece kh-about__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/glossary.webp' ) ); ?>" alt="<?php echo esc_attr( kotonoha_honyaku_t( 'alt_breakfast' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kh-about__wide alignwide"} -->
<figure class="wp-block-image size-full kh-about__wide alignwide"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/office.webp' ) ); ?>" alt="<?php echo esc_attr( kotonoha_honyaku_t( 'alt_dusk' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "kh-rules", "layout": {"type": "default"}} -->
<div class="wp-block-group kh-rules"><!-- wp:heading {"className": "kh-sec__title"} -->
<h2 class="wp-block-heading kh-sec__title"><?php echo esc_html( kotonoha_honyaku_t( 'tools' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"className": "is-style-rule-list"} -->
<ul class="wp-block-list is-style-rule-list"><!-- wp:list-item -->
<li><?php echo esc_html( kotonoha_honyaku_t( 'tool1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( kotonoha_honyaku_t( 'tool2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( kotonoha_honyaku_t( 'tool3' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( kotonoha_honyaku_t( 'tool4' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
