<?php
/**
 * Title: Home: the tea room band
 * Slug: fukusa-chado/home-serial
 * Categories: fukusa-chado
 * Keywords: tea ceremony, matcha, lessons
 * Viewport Width: 1440
 * Description: The tea room on a tokiwa-green band: four and a half in giant type and the story beside three rounded clay picture cards; the cut-out whisk breaks over the band top edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "fc-section fc-story", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull fc-section fc-story"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "fc-story__branch"} -->
<figure class="wp-block-image size-full fc-story__branch"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/whisk-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"align": "wide", "className": "fc-story__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide fc-story__grid"><!-- wp:group {"className": "fc-story__text", "layout": {"type": "default"}} -->
<div class="wp-block-group fc-story__text"><!-- wp:paragraph {"className": "fc-eyebrow"} -->
<p class="fc-eyebrow"><?php echo esc_html( fukusa_chado_t( 'story_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "fc-story__no"} -->
<p class="fc-story__no"><?php echo esc_html( fukusa_chado_t( 'story_no' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "fc-sec__title"} -->
<h2 class="wp-block-heading fc-sec__title"><?php echo esc_html( fukusa_chado_t( 'story_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "fc-story__lead"} -->
<p class="fc-story__lead"><?php echo esc_html( fukusa_chado_t( 'story_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "fc-story__cta"} -->
<div class="wp-block-buttons fc-story__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/teacher/"><?php echo esc_html( fukusa_chado_t( 'story_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "fc-story__collage", "layout": {"type": "default"}} -->
<div class="wp-block-group fc-story__collage"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "fc-piece fc-piece--d"} -->
<figure class="wp-block-image size-full fc-piece fc-piece--d"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/gate.webp' ) ); ?>" alt="<?php echo esc_attr( fukusa_chado_t( 'alt_canal' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "fc-piece fc-piece--e"} -->
<figure class="wp-block-image size-full fc-piece fc-piece--e"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/tearoom.webp' ) ); ?>" alt="<?php echo esc_attr( fukusa_chado_t( 'alt_street' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "fc-piece fc-piece--f"} -->
<figure class="wp-block-image size-full fc-piece fc-piece--f"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/garden.webp' ) ); ?>" alt="<?php echo esc_attr( fukusa_chado_t( 'alt_court' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
