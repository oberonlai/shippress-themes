<?php
/**
 * Title: Home: the company band
 * Slug: hiyoko-kindergarten/home-serial
 * Categories: hiyoko-kindergarten
 * Keywords: kindergarten, nursery, school
 * Viewport Width: 1440
 * Description: A dandelion yellow band with a faint paper grain: the opening year in giant type and the story of the kindergarten beside a collage of photos; the cut-out wooden blocks breaks over the band top edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hk-section hk-story", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hk-section hk-story"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hk-story__branch"} -->
<figure class="wp-block-image size-full hk-story__branch"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/blocks-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"align": "wide", "className": "hk-story__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide hk-story__grid"><!-- wp:group {"className": "hk-story__text", "layout": {"type": "default"}} -->
<div class="wp-block-group hk-story__text"><!-- wp:paragraph {"className": "hk-eyebrow"} -->
<p class="hk-eyebrow"><?php echo esc_html( hiyoko_kindergarten_t( 'story_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "hk-story__no"} -->
<p class="hk-story__no"><?php echo esc_html( hiyoko_kindergarten_t( 'story_no' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "hk-sec__title"} -->
<h2 class="wp-block-heading hk-sec__title"><?php echo esc_html( hiyoko_kindergarten_t( 'story_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "hk-story__lead"} -->
<p class="hk-story__lead"><?php echo esc_html( hiyoko_kindergarten_t( 'story_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "hk-story__cta"} -->
<div class="wp-block-buttons hk-story__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/about/"><?php echo esc_html( hiyoko_kindergarten_t( 'story_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "hk-story__collage", "layout": {"type": "default"}} -->
<div class="wp-block-group hk-story__collage"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hk-piece hk-piece--d"} -->
<figure class="wp-block-image size-full hk-piece hk-piece--d"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/class-after.webp' ) ); ?>" alt="<?php echo esc_attr( hiyoko_kindergarten_t( 'alt_kitchen' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hk-piece hk-piece--e"} -->
<figure class="wp-block-image size-full hk-piece hk-piece--e"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/garden.webp' ) ); ?>" alt="<?php echo esc_attr( hiyoko_kindergarten_t( 'alt_canal' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hk-piece hk-piece--f"} -->
<figure class="wp-block-image size-full hk-piece hk-piece--f"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hands-clay.webp' ) ); ?>" alt="<?php echo esc_attr( hiyoko_kindergarten_t( 'alt_host' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
