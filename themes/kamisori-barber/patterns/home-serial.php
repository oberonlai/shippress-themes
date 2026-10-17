<?php
/**
 * Title: Home: the company band
 * Slug: kamisori-barber/home-serial
 * Categories: kamisori-barber
 * Keywords: barber, barbershop, shave
 * Viewport Width: 1440
 * Description: A kyo-murasaki band: the opening year in giant type, the story of the shop in the column and a taped paper-cut collage below; the cut-out shaving brush breaks over the band top edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kb-section kb-story", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kb-section kb-story"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kb-story__branch"} -->
<figure class="wp-block-image size-full kb-story__branch"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/brush-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"align": "wide", "className": "kb-story__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide kb-story__grid"><!-- wp:group {"className": "kb-story__text", "layout": {"type": "default"}} -->
<div class="wp-block-group kb-story__text"><!-- wp:paragraph {"className": "kb-eyebrow"} -->
<p class="kb-eyebrow"><?php echo esc_html( kamisori_barber_t( 'story_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "kb-story__no"} -->
<p class="kb-story__no"><?php echo esc_html( kamisori_barber_t( 'story_no' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "kb-sec__title"} -->
<h2 class="wp-block-heading kb-sec__title"><?php echo esc_html( kamisori_barber_t( 'story_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kb-story__lead"} -->
<p class="kb-story__lead"><?php echo esc_html( kamisori_barber_t( 'story_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "kb-story__cta"} -->
<div class="wp-block-buttons kb-story__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/about/"><?php echo esc_html( kamisori_barber_t( 'story_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "kb-story__collage", "layout": {"type": "default"}} -->
<div class="wp-block-group kb-story__collage"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kb-piece kb-piece--d"} -->
<figure class="wp-block-image size-full kb-piece kb-piece--d"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/svc-wash.webp' ) ); ?>" alt="<?php echo esc_attr( kamisori_barber_t( 'alt_kitchen' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kb-piece kb-piece--e"} -->
<figure class="wp-block-image size-full kb-piece kb-piece--e"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/street.webp' ) ); ?>" alt="<?php echo esc_attr( kamisori_barber_t( 'alt_canal' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kb-piece kb-piece--f"} -->
<figure class="wp-block-image size-full kb-piece kb-piece--f"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hands-comb.webp' ) ); ?>" alt="<?php echo esc_attr( kamisori_barber_t( 'alt_host' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
