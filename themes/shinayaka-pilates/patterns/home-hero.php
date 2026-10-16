<?php
/**
 * Title: Home: diagonal split hero
 * Slug: shinayaka-pilates/home-hero
 * Categories: shinayaka-pilates
 * Keywords: pilates, studio, wellness
 * Viewport Width: 1440
 * Description: A yamabuki field cut on a diagonal beside the studio illustration; the cut-out figure stretches across the diagonal seam and over the hero bottom edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sp-hero", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull sp-hero"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sp-hero__art"} -->
<figure class="wp-block-image size-full sp-hero__art"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero.webp' ) ); ?>" alt="<?php echo esc_attr( shinayaka_pilates_t( 'alt_hero' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "sp-hero__field", "layout": {"type": "default"}} -->
<div class="wp-block-group sp-hero__field"><!-- wp:paragraph {"className": "sp-eyebrow"} -->
<p class="sp-eyebrow"><?php echo esc_html( shinayaka_pilates_t( 'hero_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "sp-hero__title"} -->
<h1 class="wp-block-heading sp-hero__title"><?php echo esc_html( shinayaka_pilates_t( 'hero_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sp-hero__lead"} -->
<p class="sp-hero__lead"><?php echo esc_html( shinayaka_pilates_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "sp-hero__cta"} -->
<div class="wp-block-buttons sp-hero__cta"><!-- wp:button {"className": "sp-book"} -->
<div class="wp-block-button sp-book"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo esc_html( shinayaka_pilates_t( 'book' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/classes/"><?php echo esc_html( shinayaka_pilates_t( 'see_works' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className": "sp-hero__label"} -->
<p class="sp-hero__label"><?php echo esc_html( shinayaka_pilates_t( 'panel_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sp-hero__pose"} -->
<figure class="wp-block-image size-full sp-hero__pose"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/pose-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<?php if ( '' !== shinayaka_pilates_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "sp-tate"} -->
<p class="sp-tate"><?php echo esc_html( shinayaka_pilates_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
