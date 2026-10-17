<?php
/**
 * Title: Home: the company band
 * Slug: hotaru-ehon/home-serial
 * Categories: hotaru-ehon
 * Keywords: picture book, illustration, illustrator
 * Viewport Width: 1440
 * Description: A imayo pink band: the opening year in giant type, the story of the studio in the column and a taped flat 2D collage below; the cut-out fox with a picture book breaks over the band top edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "ht-section ht-story", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull ht-section ht-story"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "ht-story__branch"} -->
<figure class="wp-block-image size-full ht-story__branch"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/fox-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"align": "wide", "className": "ht-story__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide ht-story__grid"><!-- wp:group {"className": "ht-story__text", "layout": {"type": "default"}} -->
<div class="wp-block-group ht-story__text"><!-- wp:paragraph {"className": "ht-eyebrow"} -->
<p class="ht-eyebrow"><?php echo esc_html( hotaru_ehon_t( 'story_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "ht-story__no"} -->
<p class="ht-story__no"><?php echo esc_html( hotaru_ehon_t( 'story_no' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "ht-sec__title"} -->
<h2 class="wp-block-heading ht-sec__title"><?php echo esc_html( hotaru_ehon_t( 'story_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "ht-story__lead"} -->
<p class="ht-story__lead"><?php echo esc_html( hotaru_ehon_t( 'story_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "ht-story__cta"} -->
<div class="wp-block-buttons ht-story__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/studio/"><?php echo esc_html( hotaru_ehon_t( 'story_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "ht-story__collage", "layout": {"type": "default"}} -->
<div class="wp-block-group ht-story__collage"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "ht-piece ht-piece--d"} -->
<figure class="wp-block-image size-full ht-piece ht-piece--d"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/svc-editorial.webp' ) ); ?>" alt="<?php echo esc_attr( hotaru_ehon_t( 'alt_kitchen' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "ht-piece ht-piece--e"} -->
<figure class="wp-block-image size-full ht-piece ht-piece--e"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/river.webp' ) ); ?>" alt="<?php echo esc_attr( hotaru_ehon_t( 'alt_canal' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "ht-piece ht-piece--f"} -->
<figure class="wp-block-image size-full ht-piece ht-piece--f"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hands-drawing.webp' ) ); ?>" alt="<?php echo esc_attr( hotaru_ehon_t( 'alt_host' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
