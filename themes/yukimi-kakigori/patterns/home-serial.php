<?php
/**
 * Title: Home: the company band
 * Slug: yukimi-kakigori/home-serial
 * Categories: yukimi-kakigori
 * Keywords: kakigori, shaved ice, dessert
 * Viewport Width: 1440
 * Description: A rikyū sage band: the opening year in giant type and the story of the ice beside a sticky collage of paper-cut pictures; the cut-out plover flag breaks over the band top edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "yk-section yk-story", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull yk-section yk-story"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "yk-story__branch"} -->
<figure class="wp-block-image size-full yk-story__branch"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/flag-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"align": "wide", "className": "yk-story__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide yk-story__grid"><!-- wp:group {"className": "yk-story__text", "layout": {"type": "default"}} -->
<div class="wp-block-group yk-story__text"><!-- wp:paragraph {"className": "yk-eyebrow"} -->
<p class="yk-eyebrow"><?php echo esc_html( yukimi_kakigori_t( 'story_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "yk-story__no"} -->
<p class="yk-story__no"><?php echo esc_html( yukimi_kakigori_t( 'story_no' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "yk-sec__title"} -->
<h2 class="wp-block-heading yk-sec__title"><?php echo esc_html( yukimi_kakigori_t( 'story_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "yk-story__lead"} -->
<p class="yk-story__lead"><?php echo esc_html( yukimi_kakigori_t( 'story_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "yk-story__cta"} -->
<div class="wp-block-buttons yk-story__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/parlour/"><?php echo esc_html( yukimi_kakigori_t( 'story_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "yk-story__collage", "layout": {"type": "default"}} -->
<div class="wp-block-group yk-story__collage"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "yk-piece yk-piece--d"} -->
<figure class="wp-block-image size-full yk-piece yk-piece--d"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/bowl-yuzu.webp' ) ); ?>" alt="<?php echo esc_attr( yukimi_kakigori_t( 'alt_kitchen' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "yk-piece yk-piece--e"} -->
<figure class="wp-block-image size-full yk-piece yk-piece--e"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/garden.webp' ) ); ?>" alt="<?php echo esc_attr( yukimi_kakigori_t( 'alt_canal' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "yk-piece yk-piece--f"} -->
<figure class="wp-block-image size-full yk-piece yk-piece--f"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/machine.webp' ) ); ?>" alt="<?php echo esc_attr( yukimi_kakigori_t( 'alt_host' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
