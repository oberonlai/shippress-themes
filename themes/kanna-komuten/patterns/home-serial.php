<?php
/**
 * Title: Home: the workshop, split screen
 * Slug: kanna-komuten/home-serial
 * Categories: kanna-komuten
 * Keywords: carpenter, machiya, renovation
 * Viewport Width: 1440
 * Description: A turmeric-yellow half with the founding year in giant type and the story of the workshop, beside a half of three film photographs; the cut-out hand plane breaks over the band top edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kn-section kn-story", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kn-section kn-story"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kn-story__branch"} -->
<figure class="wp-block-image size-full kn-story__branch"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/plane-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"align": "wide", "className": "kn-story__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide kn-story__grid"><!-- wp:group {"className": "kn-story__text", "layout": {"type": "default"}} -->
<div class="wp-block-group kn-story__text"><!-- wp:paragraph {"className": "kn-eyebrow"} -->
<p class="kn-eyebrow"><?php echo esc_html( kanna_komuten_t( 'story_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "kn-story__no"} -->
<p class="kn-story__no"><?php echo esc_html( kanna_komuten_t( 'story_no' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "kn-sec__title"} -->
<h2 class="wp-block-heading kn-sec__title"><?php echo esc_html( kanna_komuten_t( 'story_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kn-story__lead"} -->
<p class="kn-story__lead"><?php echo esc_html( kanna_komuten_t( 'story_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "kn-story__cta"} -->
<div class="wp-block-buttons kn-story__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/workshop/"><?php echo esc_html( kanna_komuten_t( 'story_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "kn-story__collage", "layout": {"type": "default"}} -->
<div class="wp-block-group kn-story__collage"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kn-piece kn-piece--d"} -->
<figure class="wp-block-image size-full kn-piece kn-piece--d"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/kitchen.webp' ) ); ?>" alt="<?php echo esc_attr( kanna_komuten_t( 'alt_kitchen' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kn-piece kn-piece--e"} -->
<figure class="wp-block-image size-full kn-piece kn-piece--e"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/joinery.webp' ) ); ?>" alt="<?php echo esc_attr( kanna_komuten_t( 'alt_canal' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kn-piece kn-piece--f"} -->
<figure class="wp-block-image size-full kn-piece kn-piece--f"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/shavings.webp' ) ); ?>" alt="<?php echo esc_attr( kanna_komuten_t( 'alt_host' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
