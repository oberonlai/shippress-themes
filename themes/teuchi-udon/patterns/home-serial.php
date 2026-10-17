<?php
/**
 * Title: Home: the company band
 * Slug: teuchi-udon/home-serial
 * Categories: teuchi-udon
 * Keywords: udon, noodles, restaurant
 * Viewport Width: 1440
 * Description: A chitose green band: the opening year in giant type and the story of the shop beside a collage of pencil sketches; the cut-out plover flag breaks over the band top edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tu-section tu-story", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tu-section tu-story"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tu-story__branch"} -->
<figure class="wp-block-image size-full tu-story__branch"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/flour-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"align": "wide", "className": "tu-story__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide tu-story__grid"><!-- wp:group {"className": "tu-story__text", "layout": {"type": "default"}} -->
<div class="wp-block-group tu-story__text"><!-- wp:paragraph {"className": "tu-eyebrow"} -->
<p class="tu-eyebrow"><?php echo esc_html( teuchi_udon_t( 'story_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "tu-story__no"} -->
<p class="tu-story__no"><?php echo esc_html( teuchi_udon_t( 'story_no' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "tu-sec__title"} -->
<h2 class="wp-block-heading tu-sec__title"><?php echo esc_html( teuchi_udon_t( 'story_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "tu-story__lead"} -->
<p class="tu-story__lead"><?php echo esc_html( teuchi_udon_t( 'story_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "tu-story__cta"} -->
<div class="wp-block-buttons tu-story__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/about/"><?php echo esc_html( teuchi_udon_t( 'story_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "tu-story__collage", "layout": {"type": "default"}} -->
<div class="wp-block-group tu-story__collage"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tu-piece tu-piece--d"} -->
<figure class="wp-block-image size-full tu-piece tu-piece--d"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/bowl-curry.webp' ) ); ?>" alt="<?php echo esc_attr( teuchi_udon_t( 'alt_kitchen' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tu-piece tu-piece--e"} -->
<figure class="wp-block-image size-full tu-piece tu-piece--e"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/wheat-field.webp' ) ); ?>" alt="<?php echo esc_attr( teuchi_udon_t( 'alt_canal' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tu-piece tu-piece--f"} -->
<figure class="wp-block-image size-full tu-piece tu-piece--f"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/dough.webp' ) ); ?>" alt="<?php echo esc_attr( teuchi_udon_t( 'alt_host' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
