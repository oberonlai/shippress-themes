<?php
/**
 * Title: Home: the company band
 * Slug: mamori-hoken/home-serial
 * Categories: mamori-hoken
 * Keywords: insurance, agency, advice
 * Viewport Width: 1440
 * Description: A hanada band with a faint linen texture: the opening year in giant type and the story of the agency beside a collage of photos; the cut-out house model breaks over the band top edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "mh-section mh-story", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull mh-section mh-story"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mh-story__branch"} -->
<figure class="wp-block-image size-full mh-story__branch"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/house-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"align": "wide", "className": "mh-story__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide mh-story__grid"><!-- wp:group {"className": "mh-story__text", "layout": {"type": "default"}} -->
<div class="wp-block-group mh-story__text"><!-- wp:paragraph {"className": "mh-eyebrow"} -->
<p class="mh-eyebrow"><?php echo esc_html( mamori_hoken_t( 'story_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "mh-story__no"} -->
<p class="mh-story__no"><?php echo esc_html( mamori_hoken_t( 'story_no' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "mh-sec__title"} -->
<h2 class="wp-block-heading mh-sec__title"><?php echo esc_html( mamori_hoken_t( 'story_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "mh-story__lead"} -->
<p class="mh-story__lead"><?php echo esc_html( mamori_hoken_t( 'story_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "mh-story__cta"} -->
<div class="wp-block-buttons mh-story__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/about/"><?php echo esc_html( mamori_hoken_t( 'story_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "mh-story__collage", "layout": {"type": "default"}} -->
<div class="wp-block-group mh-story__collage"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mh-piece mh-piece--d"} -->
<figure class="wp-block-image size-full mh-piece mh-piece--d"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/cover-business.webp' ) ); ?>" alt="<?php echo esc_attr( mamori_hoken_t( 'alt_kitchen' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mh-piece mh-piece--e"} -->
<figure class="wp-block-image size-full mh-piece mh-piece--e"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/town.webp' ) ); ?>" alt="<?php echo esc_attr( mamori_hoken_t( 'alt_canal' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mh-piece mh-piece--f"} -->
<figure class="wp-block-image size-full mh-piece mh-piece--f"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hands-papers.webp' ) ); ?>" alt="<?php echo esc_attr( mamori_hoken_t( 'alt_host' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
