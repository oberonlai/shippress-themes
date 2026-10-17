<?php
/**
 * Title: Home: the company band
 * Slug: shirayami-butoh/home-serial
 * Categories: shirayami-butoh
 * Keywords: butoh, dance, performance
 * Viewport Width: 1440
 * Description: A sumire violet band in the column: the founding year in giant type, the story of the company and three high-key photographs in a row; the cut-out silk breaks over the band top edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sb-section sb-story", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sb-section sb-story"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sb-story__branch"} -->
<figure class="wp-block-image size-full sb-story__branch"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/silk-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"align": "wide", "className": "sb-story__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide sb-story__grid"><!-- wp:group {"className": "sb-story__text", "layout": {"type": "default"}} -->
<div class="wp-block-group sb-story__text"><!-- wp:paragraph {"className": "sb-eyebrow"} -->
<p class="sb-eyebrow"><?php echo esc_html( shirayami_butoh_t( 'story_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "sb-story__no"} -->
<p class="sb-story__no"><?php echo esc_html( shirayami_butoh_t( 'story_no' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "sb-sec__title"} -->
<h2 class="wp-block-heading sb-sec__title"><?php echo esc_html( shirayami_butoh_t( 'story_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sb-story__lead"} -->
<p class="sb-story__lead"><?php echo esc_html( shirayami_butoh_t( 'story_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "sb-story__cta"} -->
<div class="wp-block-buttons sb-story__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/company/"><?php echo esc_html( shirayami_butoh_t( 'story_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "sb-story__collage", "layout": {"type": "default"}} -->
<div class="wp-block-group sb-story__collage"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sb-piece sb-piece--d"} -->
<figure class="wp-block-image size-full sb-piece sb-piece--d"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/costume.webp' ) ); ?>" alt="<?php echo esc_attr( shirayami_butoh_t( 'alt_kitchen' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sb-piece sb-piece--e"} -->
<figure class="wp-block-image size-full sb-piece sb-piece--e"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/workshop.webp' ) ); ?>" alt="<?php echo esc_attr( shirayami_butoh_t( 'alt_canal' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sb-piece sb-piece--f"} -->
<figure class="wp-block-image size-full sb-piece sb-piece--f"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/profile.webp' ) ); ?>" alt="<?php echo esc_attr( shirayami_butoh_t( 'alt_host' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
