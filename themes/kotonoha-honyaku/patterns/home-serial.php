<?php
/**
 * Title: Home: the company band
 * Slug: kotonoha-honyaku/home-serial
 * Categories: kotonoha-honyaku
 * Keywords: translation, interpreting, languages
 * Viewport Width: 1440
 * Description: A ruri band: the opening year in giant type and the story of the studio beside a collage of risograph pictures; the cut-out desk globe breaks over the band top edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kh-section kh-story", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kh-section kh-story"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kh-story__branch"} -->
<figure class="wp-block-image size-full kh-story__branch"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/globe-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"align": "wide", "className": "kh-story__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide kh-story__grid"><!-- wp:group {"className": "kh-story__text", "layout": {"type": "default"}} -->
<div class="wp-block-group kh-story__text"><!-- wp:paragraph {"className": "kh-eyebrow"} -->
<p class="kh-eyebrow"><?php echo esc_html( kotonoha_honyaku_t( 'story_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "kh-story__no"} -->
<p class="kh-story__no"><?php echo esc_html( kotonoha_honyaku_t( 'story_no' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "kh-sec__title"} -->
<h2 class="wp-block-heading kh-sec__title"><?php echo esc_html( kotonoha_honyaku_t( 'story_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kh-story__lead"} -->
<p class="kh-story__lead"><?php echo esc_html( kotonoha_honyaku_t( 'story_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "kh-story__cta"} -->
<div class="wp-block-buttons kh-story__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/about/"><?php echo esc_html( kotonoha_honyaku_t( 'story_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "kh-story__collage", "layout": {"type": "default"}} -->
<div class="wp-block-group kh-story__collage"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kh-piece kh-piece--d"} -->
<figure class="wp-block-image size-full kh-piece kh-piece--d"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/svc-web.webp' ) ); ?>" alt="<?php echo esc_attr( kotonoha_honyaku_t( 'alt_kitchen' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kh-piece kh-piece--e"} -->
<figure class="wp-block-image size-full kh-piece kh-piece--e"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/harbour.webp' ) ); ?>" alt="<?php echo esc_attr( kotonoha_honyaku_t( 'alt_canal' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kh-piece kh-piece--f"} -->
<figure class="wp-block-image size-full kh-piece kh-piece--f"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hands-writing.webp' ) ); ?>" alt="<?php echo esc_attr( kotonoha_honyaku_t( 'alt_host' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
