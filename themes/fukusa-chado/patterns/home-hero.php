<?php
/**
 * Title: Home: centred giant-type hero
 * Slug: fukusa-chado/home-hero
 * Categories: fukusa-chado
 * Keywords: tea ceremony, matcha, lessons
 * Viewport Width: 1440
 * Description: A tokiwa-green cover with everything on one centred axis: the lesson days, the eyebrow, the title in giant type, the lead and the buttons; the cut-out clay tea bowl sits below the title and breaks out over the hero bottom edge, and the cut-out whisk leans out of the right edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "fc-hero", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull fc-hero"><!-- wp:group {"className": "fc-hero__text", "layout": {"type": "default"}} -->
<div class="wp-block-group fc-hero__text"><!-- wp:paragraph {"className": "fc-issue"} -->
<p class="fc-issue"><?php echo esc_html( fukusa_chado_t( 'issue' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "fc-eyebrow"} -->
<p class="fc-eyebrow"><?php echo esc_html( fukusa_chado_t( 'hero_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "fc-hero__title"} -->
<h1 class="wp-block-heading fc-hero__title"><?php echo esc_html( fukusa_chado_t( 'hero_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "fc-hero__lead"} -->
<p class="fc-hero__lead"><?php echo esc_html( fukusa_chado_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "fc-hero__cta"} -->
<div class="wp-block-buttons fc-hero__cta"><!-- wp:button {"className": "fc-book"} -->
<div class="wp-block-button fc-book"><a class="wp-block-button__link wp-element-button" href="/trial/"><?php echo esc_html( fukusa_chado_t( 'book' ) ); ?></a></div>
<!-- /wp:button --><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/classes/"><?php echo esc_html( fukusa_chado_t( 'see_house' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "fc-hero__bowl"} -->
<figure class="wp-block-image size-full fc-hero__bowl"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/chawan-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "fc-hero__whisk"} -->
<figure class="wp-block-image size-full fc-hero__whisk"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/whisk-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<?php if ( '' !== fukusa_chado_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "fc-tate"} -->
<p class="fc-tate"><?php echo esc_html( fukusa_chado_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
