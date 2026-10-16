<?php
/**
 * Title: Home: giant type over a clay collage
 * Slug: koma-manga/home-hero
 * Categories: koma-manga
 * Keywords: manga, comics, illustration
 * Viewport Width: 1440
 * Description: The bamboo-green poster field: centred giant type over a collage of tilted clay-diorama panels; the cut-out artist leaps out of a panel frame and over the hero edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "km-hero", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull km-hero"><!-- wp:group {"className": "km-hero__collage", "layout": {"type": "default"}} -->
<div class="wp-block-group km-hero__collage"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "km-panel km-panel--a"} -->
<figure class="wp-block-image size-full km-panel km-panel--a"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/work-rooftop.webp' ) ); ?>" alt="<?php echo esc_attr( koma_manga_t( 'alt_rooftop' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "km-panel km-panel--b"} -->
<figure class="wp-block-image size-full km-panel km-panel--b"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/work-seaside.webp' ) ); ?>" alt="<?php echo esc_attr( koma_manga_t( 'alt_seaside' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "km-panel km-panel--c"} -->
<figure class="wp-block-image size-full km-panel km-panel--c"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/work-forest.webp' ) ); ?>" alt="<?php echo esc_attr( koma_manga_t( 'alt_forest' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className": "km-panel__label"} -->
<p class="km-panel__label"><?php echo esc_html( koma_manga_t( 'panel_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "km-hero__artist"} -->
<figure class="wp-block-image size-full km-hero__artist"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/artist-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "km-hero__type", "layout": {"type": "default"}} -->
<div class="wp-block-group km-hero__type"><!-- wp:paragraph {"className": "km-eyebrow"} -->
<p class="km-eyebrow"><?php echo esc_html( koma_manga_t( 'hero_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "km-hero__title"} -->
<h1 class="wp-block-heading km-hero__title"><?php echo esc_html( koma_manga_t( 'hero_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "km-hero__lead"} -->
<p class="km-hero__lead"><?php echo esc_html( koma_manga_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "km-hero__cta"} -->
<div class="wp-block-buttons km-hero__cta"><!-- wp:button {"className": "km-book"} -->
<div class="wp-block-button km-book"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo esc_html( koma_manga_t( 'book' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/works/"><?php echo esc_html( koma_manga_t( 'see_works' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<?php if ( '' !== koma_manga_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "km-tate"} -->
<p class="km-tate"><?php echo esc_html( koma_manga_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
