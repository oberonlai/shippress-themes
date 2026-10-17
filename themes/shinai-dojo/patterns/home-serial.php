<?php
/**
 * Title: Home: the dojo on the madder band
 * Slug: shinai-dojo/home-serial
 * Categories: shinai-dojo
 * Keywords: kendo, dojo, martial arts
 * Viewport Width: 1440
 * Description: Feature 02: a madder red band with the asanoha pattern: the founding year in giant type and the story of the dojo beside three stacked isometric plates; the cut-out dojo drum breaks over the band top edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sd-section sd-story", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sd-section sd-story"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sd-story__branch"} -->
<figure class="wp-block-image size-full sd-story__branch"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/drum-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"align": "wide", "className": "sd-story__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide sd-story__grid"><!-- wp:group {"className": "sd-story__text", "layout": {"type": "default"}} -->
<div class="wp-block-group sd-story__text"><!-- wp:paragraph {"className": "sd-eyebrow"} -->
<p class="sd-eyebrow"><?php echo esc_html( shinai_dojo_t( 'story_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "sd-story__no"} -->
<p class="sd-story__no"><?php echo esc_html( shinai_dojo_t( 'story_no' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "sd-sec__title"} -->
<h2 class="wp-block-heading sd-sec__title"><?php echo esc_html( shinai_dojo_t( 'story_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sd-story__lead"} -->
<p class="sd-story__lead"><?php echo esc_html( shinai_dojo_t( 'story_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "sd-story__cta"} -->
<div class="wp-block-buttons sd-story__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/about/"><?php echo esc_html( shinai_dojo_t( 'story_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "sd-story__collage", "layout": {"type": "default"}} -->
<div class="wp-block-group sd-story__collage"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sd-piece sd-piece--d"} -->
<figure class="wp-block-image size-full sd-piece sd-piece--d"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/grading.webp' ) ); ?>" alt="<?php echo esc_attr( shinai_dojo_t( 'alt_kitchen' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sd-piece sd-piece--e"} -->
<figure class="wp-block-image size-full sd-piece sd-piece--e"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/dawn.webp' ) ); ?>" alt="<?php echo esc_attr( shinai_dojo_t( 'alt_canal' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sd-piece sd-piece--f"} -->
<figure class="wp-block-image size-full sd-piece sd-piece--f"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/bogu.webp' ) ); ?>" alt="<?php echo esc_attr( shinai_dojo_t( 'alt_host' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
