<?php
/**
 * Title: Home: the office band
 * Slug: niko-kids-clinic/home-serial
 * Categories: niko-kids-clinic
 * Keywords: paediatric clinic, children, doctor
 * Viewport Width: 1440
 * Description: A pale aqua band: the opening year in large type and the story of the clinic beside a strip of photos; the cut-out stethoscope breaks over the band top edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "nk-section nk-story", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull nk-section nk-story"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "nk-story__branch"} -->
<figure class="wp-block-image size-full nk-story__branch"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/scope-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"align": "wide", "className": "nk-story__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide nk-story__grid"><!-- wp:group {"className": "nk-story__text", "layout": {"type": "default"}} -->
<div class="wp-block-group nk-story__text"><!-- wp:paragraph {"className": "nk-eyebrow"} -->
<p class="nk-eyebrow"><?php echo esc_html( niko_kids_clinic_t( 'story_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "nk-story__no"} -->
<p class="nk-story__no"><?php echo esc_html( niko_kids_clinic_t( 'story_no' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "nk-sec__title"} -->
<h2 class="wp-block-heading nk-sec__title"><?php echo esc_html( niko_kids_clinic_t( 'story_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "nk-story__lead"} -->
<p class="nk-story__lead"><?php echo esc_html( niko_kids_clinic_t( 'story_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "nk-story__cta"} -->
<div class="wp-block-buttons nk-story__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/about/"><?php echo esc_html( niko_kids_clinic_t( 'story_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "nk-story__collage", "layout": {"type": "default"}} -->
<div class="wp-block-group nk-story__collage"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "nk-piece nk-piece--d"} -->
<figure class="wp-block-image size-full nk-piece nk-piece--d"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/exam.webp' ) ); ?>" alt="<?php echo esc_attr( niko_kids_clinic_t( 'alt_kitchen' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "nk-piece nk-piece--e"} -->
<figure class="wp-block-image size-full nk-piece nk-piece--e"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/vaccine.webp' ) ); ?>" alt="<?php echo esc_attr( niko_kids_clinic_t( 'alt_canal' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "nk-piece nk-piece--f"} -->
<figure class="wp-block-image size-full nk-piece nk-piece--f"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hands.webp' ) ); ?>" alt="<?php echo esc_attr( niko_kids_clinic_t( 'alt_host' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
