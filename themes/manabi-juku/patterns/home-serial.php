<?php
/**
 * Title: Home: the office band
 * Slug: manabi-juku/home-serial
 * Categories: manabi-juku
 * Keywords: school, tutoring, courses
 * Viewport Width: 1440
 * Description: A suou crimson band: the opening year in large type and the story of the school beside a strip of photos; the cut-out desk lamp breaks over the band top edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "mj-section mj-story", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull mj-section mj-story"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mj-story__branch"} -->
<figure class="wp-block-image size-full mj-story__branch"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/lamp-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"align": "wide", "className": "mj-story__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide mj-story__grid"><!-- wp:group {"className": "mj-story__text", "layout": {"type": "default"}} -->
<div class="wp-block-group mj-story__text"><!-- wp:paragraph {"className": "mj-eyebrow"} -->
<p class="mj-eyebrow"><?php echo esc_html( manabi_juku_t( 'story_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "mj-story__no"} -->
<p class="mj-story__no"><?php echo esc_html( manabi_juku_t( 'story_no' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "mj-sec__title"} -->
<h2 class="wp-block-heading mj-sec__title"><?php echo esc_html( manabi_juku_t( 'story_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "mj-story__lead"} -->
<p class="mj-story__lead"><?php echo esc_html( manabi_juku_t( 'story_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "mj-story__cta"} -->
<div class="wp-block-buttons mj-story__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/about/"><?php echo esc_html( manabi_juku_t( 'story_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "mj-story__collage", "layout": {"type": "default"}} -->
<div class="wp-block-group mj-story__collage"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mj-piece mj-piece--d"} -->
<figure class="wp-block-image size-full mj-piece mj-piece--d"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/lab.webp' ) ); ?>" alt="<?php echo esc_attr( manabi_juku_t( 'alt_kitchen' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mj-piece mj-piece--e"} -->
<figure class="wp-block-image size-full mj-piece mj-piece--e"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/grade-exam.webp' ) ); ?>" alt="<?php echo esc_attr( manabi_juku_t( 'alt_canal' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mj-piece mj-piece--f"} -->
<figure class="wp-block-image size-full mj-piece mj-piece--f"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/tutor.webp' ) ); ?>" alt="<?php echo esc_attr( manabi_juku_t( 'alt_host' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
