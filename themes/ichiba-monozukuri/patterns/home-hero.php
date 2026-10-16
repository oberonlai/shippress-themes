<?php
/**
 * Title: Home: stacked-collage hero
 * Slug: ichiba-monozukuri/home-hero
 * Categories: ichiba-monozukuri
 * Keywords: craft market, makers, handmade
 * Viewport Width: 1440
 * Description: The indigo field with the issue line and title beside a stacked collage of two risograph prints; a cut-out teapot, basket and indigo cloth breaks out of the collage and over the hero edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "im-hero", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull im-hero"><!-- wp:group {"className": "im-hero__type", "layout": {"type": "default"}} -->
<div class="wp-block-group im-hero__type"><!-- wp:paragraph {"className": "im-eyebrow im-issue"} -->
<p class="im-eyebrow im-issue"><?php echo esc_html( ichiba_monozukuri_t( 'hero_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "im-hero__title"} -->
<h1 class="wp-block-heading im-hero__title"><?php echo esc_html( ichiba_monozukuri_t( 'hero_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "im-hero__lead"} -->
<p class="im-hero__lead"><?php echo esc_html( ichiba_monozukuri_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "im-hero__cta"} -->
<div class="wp-block-buttons im-hero__cta"><!-- wp:button {"className": "im-book"} -->
<div class="wp-block-button im-book"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo esc_html( ichiba_monozukuri_t( 'book' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/makers/"><?php echo esc_html( ichiba_monozukuri_t( 'see_tents' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<?php if ( '' !== ichiba_monozukuri_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "im-tate"} -->
<p class="im-tate"><?php echo esc_html( ichiba_monozukuri_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?>

<!-- wp:group {"className": "im-collage", "layout": {"type": "default"}} -->
<div class="wp-block-group im-collage"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "im-collage__a"} -->
<figure class="wp-block-image size-full im-collage__a"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/market.webp' ) ); ?>" alt="<?php echo esc_attr( ichiba_monozukuri_t( 'alt_bell' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "im-collage__b"} -->
<figure class="wp-block-image size-full im-collage__b"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hands.webp' ) ); ?>" alt="<?php echo esc_attr( ichiba_monozukuri_t( 'alt_dome' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className": "im-collage__label"} -->
<p class="im-collage__label"><?php echo esc_html( ichiba_monozukuri_t( 'map_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "im-collage__cut"} -->
<figure class="wp-block-image size-full im-collage__cut"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( ichiba_monozukuri_t( 'map_alt' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
