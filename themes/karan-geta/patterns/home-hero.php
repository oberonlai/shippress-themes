<?php
/**
 * Title: Home: vertical banner on the turquoise field
 * Slug: karan-geta/home-hero
 * Categories: karan-geta
 * Keywords: geta, sandals, workshop
 * Viewport Width: 1440
 * Description: A full shinbashi turquoise field: a tall woodblock print of the hot-spring street hangs like a shop banner from a wooden rod; beside it the shop line (a vertical line in Chinese and Japanese), the lead and the buttons; a cut-out pair of geta steps off the banner over the hero bottom edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kg-hero", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull kg-hero"><!-- wp:group {"className": "kg-hero__banner", "layout": {"type": "default"}} -->
<div class="wp-block-group kg-hero__banner"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kg-hero__art"} -->
<figure class="wp-block-image size-full kg-hero__art"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-street.webp' ) ); ?>" alt="<?php echo esc_attr( karan_geta_t( 'alt_hero' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kg-hero__geta"} -->
<figure class="wp-block-image size-full kg-hero__geta"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/geta-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "kg-hero__type", "layout": {"type": "default"}} -->
<div class="wp-block-group kg-hero__type"><!-- wp:paragraph {"className": "kg-eyebrow kg-chip"} -->
<p class="kg-eyebrow kg-chip"><?php echo esc_html( karan_geta_t( 'hero_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className": "kg-hero__row", "layout": {"type": "default"}} -->
<div class="wp-block-group kg-hero__row"><?php if ( '' !== karan_geta_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "kg-tate"} -->
<p class="kg-tate"><?php echo esc_html( karan_geta_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?>

<!-- wp:heading {"level": 1, "className": "kg-hero__title"} -->
<h1 class="wp-block-heading kg-hero__title"><?php echo esc_html( karan_geta_t( 'hero_title' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className": "kg-hero__lead"} -->
<p class="kg-hero__lead"><?php echo esc_html( karan_geta_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "kg-hero__cta"} -->
<div class="wp-block-buttons kg-hero__cta"><!-- wp:button {"className": "kg-book"} -->
<div class="wp-block-button kg-book"><a class="wp-block-button__link wp-element-button" href="/shop/"><?php echo esc_html( karan_geta_t( 'book' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="#kg-day"><?php echo esc_html( karan_geta_t( 'hero_more' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
