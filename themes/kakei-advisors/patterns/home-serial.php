<?php
/**
 * Title: Home: the office band
 * Slug: kakei-advisors/home-serial
 * Categories: kakei-advisors
 * Keywords: finance, planning, advice
 * Viewport Width: 1440
 * Description: A pine-green band: the opening year in large type and the story of the office beside a strip of photos; the cut-out notebook breaks over the band top edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "ka-section ka-story", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull ka-section ka-story"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "ka-story__branch"} -->
<figure class="wp-block-image size-full ka-story__branch"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/notebook-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"align": "wide", "className": "ka-story__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide ka-story__grid"><!-- wp:group {"className": "ka-story__text", "layout": {"type": "default"}} -->
<div class="wp-block-group ka-story__text"><!-- wp:paragraph {"className": "ka-eyebrow"} -->
<p class="ka-eyebrow"><?php echo esc_html( kakei_advisors_t( 'story_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "ka-story__no"} -->
<p class="ka-story__no"><?php echo esc_html( kakei_advisors_t( 'story_no' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "ka-sec__title"} -->
<h2 class="wp-block-heading ka-sec__title"><?php echo esc_html( kakei_advisors_t( 'story_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "ka-story__lead"} -->
<p class="ka-story__lead"><?php echo esc_html( kakei_advisors_t( 'story_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "ka-story__cta"} -->
<div class="wp-block-buttons ka-story__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/about/"><?php echo esc_html( kakei_advisors_t( 'story_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "ka-story__collage", "layout": {"type": "default"}} -->
<div class="wp-block-group ka-story__collage"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "ka-piece ka-piece--d"} -->
<figure class="wp-block-image size-full ka-piece ka-piece--d"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/stage-business.webp' ) ); ?>" alt="<?php echo esc_attr( kakei_advisors_t( 'alt_kitchen' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "ka-piece ka-piece--e"} -->
<figure class="wp-block-image size-full ka-piece ka-piece--e"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/stage-retire.webp' ) ); ?>" alt="<?php echo esc_attr( kakei_advisors_t( 'alt_canal' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "ka-piece ka-piece--f"} -->
<figure class="wp-block-image size-full ka-piece ka-piece--f"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/advisor.webp' ) ); ?>" alt="<?php echo esc_attr( kakei_advisors_t( 'alt_host' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
