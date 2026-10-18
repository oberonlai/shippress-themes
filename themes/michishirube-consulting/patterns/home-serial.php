<?php
/**
 * Title: Home: the company band
 * Slug: michishirube-consulting/home-serial
 * Categories: michishirube-consulting
 * Keywords: consulting, management, strategy
 * Viewport Width: 1440
 * Description: A shikon violet band: the opening year in giant type and the story of the firm beside a collage of photos; the cut-out brass compass breaks over the band top edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "mc-section mc-story", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull mc-section mc-story"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mc-story__branch"} -->
<figure class="wp-block-image size-full mc-story__branch"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/compass-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"align": "wide", "className": "mc-story__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide mc-story__grid"><!-- wp:group {"className": "mc-story__text", "layout": {"type": "default"}} -->
<div class="wp-block-group mc-story__text"><!-- wp:paragraph {"className": "mc-eyebrow"} -->
<p class="mc-eyebrow"><?php echo esc_html( michishirube_consulting_t( 'story_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "mc-story__no"} -->
<p class="mc-story__no"><?php echo esc_html( michishirube_consulting_t( 'story_no' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "mc-sec__title"} -->
<h2 class="wp-block-heading mc-sec__title"><?php echo esc_html( michishirube_consulting_t( 'story_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "mc-story__lead"} -->
<p class="mc-story__lead"><?php echo esc_html( michishirube_consulting_t( 'story_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "mc-story__cta"} -->
<div class="wp-block-buttons mc-story__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/about/"><?php echo esc_html( michishirube_consulting_t( 'story_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "mc-story__collage", "layout": {"type": "default"}} -->
<div class="wp-block-group mc-story__collage"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mc-piece mc-piece--d"} -->
<figure class="wp-block-image size-full mc-piece mc-piece--d"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/desk.webp' ) ); ?>" alt="<?php echo esc_attr( michishirube_consulting_t( 'alt_kitchen' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mc-piece mc-piece--e"} -->
<figure class="wp-block-image size-full mc-piece mc-piece--e"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/city.webp' ) ); ?>" alt="<?php echo esc_attr( michishirube_consulting_t( 'alt_canal' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mc-piece mc-piece--f"} -->
<figure class="wp-block-image size-full mc-piece mc-piece--f"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/meeting.webp' ) ); ?>" alt="<?php echo esc_attr( michishirube_consulting_t( 'alt_host' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
