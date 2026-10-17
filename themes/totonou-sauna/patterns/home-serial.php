<?php
/**
 * Title: Home: the company band
 * Slug: totonou-sauna/home-serial
 * Categories: totonou-sauna
 * Keywords: sauna, bathhouse, cold plunge
 * Viewport Width: 1440
 * Description: An ouni orange band: the opening year in giant type and the story of the stove beside a collage of photographs; the cut-out plover flag breaks over the band top edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tn-section tn-story", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tn-section tn-story"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tn-story__branch"} -->
<figure class="wp-block-image size-full tn-story__branch"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hat-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"align": "wide", "className": "tn-story__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide tn-story__grid"><!-- wp:group {"className": "tn-story__text", "layout": {"type": "default"}} -->
<div class="wp-block-group tn-story__text"><!-- wp:paragraph {"className": "tn-eyebrow"} -->
<p class="tn-eyebrow"><?php echo esc_html( totonou_sauna_t( 'story_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "tn-story__no"} -->
<p class="tn-story__no"><?php echo esc_html( totonou_sauna_t( 'story_no' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "tn-sec__title"} -->
<h2 class="wp-block-heading tn-sec__title"><?php echo esc_html( totonou_sauna_t( 'story_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "tn-story__lead"} -->
<p class="tn-story__lead"><?php echo esc_html( totonou_sauna_t( 'story_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "tn-story__cta"} -->
<div class="wp-block-buttons tn-story__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/about/"><?php echo esc_html( totonou_sauna_t( 'story_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "tn-story__collage", "layout": {"type": "default"}} -->
<div class="wp-block-group tn-story__collage"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tn-piece tn-piece--d"} -->
<figure class="wp-block-image size-full tn-piece tn-piece--d"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/room-loyly.webp' ) ); ?>" alt="<?php echo esc_attr( totonou_sauna_t( 'alt_kitchen' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tn-piece tn-piece--e"} -->
<figure class="wp-block-image size-full tn-piece tn-piece--e"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/garden.webp' ) ); ?>" alt="<?php echo esc_attr( totonou_sauna_t( 'alt_canal' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tn-piece tn-piece--f"} -->
<figure class="wp-block-image size-full tn-piece tn-piece--f"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/stove.webp' ) ); ?>" alt="<?php echo esc_attr( totonou_sauna_t( 'alt_host' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
