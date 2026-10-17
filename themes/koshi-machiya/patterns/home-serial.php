<?php
/**
 * Title: Home: feature band, the story
 * Slug: koshi-machiya/home-serial
 * Categories: koshi-machiya
 * Keywords: machiya, townhouse, stay
 * Viewport Width: 1440
 * Description: Feature 02 on a persimmon band: the year in giant type and the story of the house beside a taped collage of three sketches; the cut-out persimmon branch breaks over the band top edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kc-section kc-story", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kc-section kc-story"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kc-story__branch"} -->
<figure class="wp-block-image size-full kc-story__branch"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/persimmon-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"align": "wide", "className": "kc-story__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide kc-story__grid"><!-- wp:group {"className": "kc-story__text", "layout": {"type": "default"}} -->
<div class="wp-block-group kc-story__text"><!-- wp:paragraph {"className": "kc-eyebrow"} -->
<p class="kc-eyebrow"><?php echo esc_html( koshi_machiya_t( 'story_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "kc-story__no"} -->
<p class="kc-story__no"><?php echo esc_html( koshi_machiya_t( 'story_no' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "kc-sec__title"} -->
<h2 class="wp-block-heading kc-sec__title"><?php echo esc_html( koshi_machiya_t( 'story_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kc-story__lead"} -->
<p class="kc-story__lead"><?php echo esc_html( koshi_machiya_t( 'story_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "kc-story__cta"} -->
<div class="wp-block-buttons kc-story__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/the-host/"><?php echo esc_html( koshi_machiya_t( 'story_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "kc-story__collage", "layout": {"type": "default"}} -->
<div class="wp-block-group kc-story__collage"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kc-piece kc-piece--d"} -->
<figure class="wp-block-image size-full kc-piece kc-piece--d"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/kitchen.webp' ) ); ?>" alt="<?php echo esc_attr( koshi_machiya_t( 'alt_kitchen' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kc-piece kc-piece--e"} -->
<figure class="wp-block-image size-full kc-piece kc-piece--e"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/canal.webp' ) ); ?>" alt="<?php echo esc_attr( koshi_machiya_t( 'alt_canal' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kc-piece kc-piece--f"} -->
<figure class="wp-block-image size-full kc-piece kc-piece--f"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/host.webp' ) ); ?>" alt="<?php echo esc_attr( koshi_machiya_t( 'alt_host' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
