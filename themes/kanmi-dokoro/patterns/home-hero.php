<?php
/**
 * Title: Home: split-screen hero with a framed window
 * Slug: kanmi-dokoro/home-hero
 * Categories: kanmi-dokoro
 * Keywords: wagashi, tea house, matcha
 * Viewport Width: 1440
 * Description: A split screen: the kikyo field with the headline on one half, the garden watercolour framed as an open window on the other; the cut-out bellflower sweet breaks out of the window frame across the seam into the kikyo field.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kd-hero", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull kd-hero"><!-- wp:group {"className": "kd-hero__field", "layout": {"type": "default"}} -->
<div class="wp-block-group kd-hero__field"><!-- wp:paragraph {"className": "kd-eyebrow"} -->
<p class="kd-eyebrow"><?php echo esc_html( kanmi_dokoro_t( 'hero_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "kd-hero__title"} -->
<h1 class="wp-block-heading kd-hero__title"><?php echo esc_html( kanmi_dokoro_t( 'hero_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kd-hero__lead"} -->
<p class="kd-hero__lead"><?php echo esc_html( kanmi_dokoro_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "kd-hero__cta"} -->
<div class="wp-block-buttons kd-hero__cta"><!-- wp:button {"className": "kd-book"} -->
<div class="wp-block-button kd-book"><a class="wp-block-button__link wp-element-button" href="/reserve/"><?php echo esc_html( kanmi_dokoro_t( 'book' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/menu/"><?php echo esc_html( kanmi_dokoro_t( 'see_works' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "kd-hero__room", "layout": {"type": "default"}} -->
<div class="wp-block-group kd-hero__room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kd-hero__art"} -->
<figure class="wp-block-image size-full kd-hero__art"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero.webp' ) ); ?>" alt="<?php echo esc_attr( kanmi_dokoro_t( 'alt_hero' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className": "kd-hero__label"} -->
<p class="kd-hero__label"><?php echo esc_html( kanmi_dokoro_t( 'panel_label' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kd-hero__pose"} -->
<figure class="wp-block-image size-full kd-hero__pose"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/wagashi-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<?php if ( '' !== kanmi_dokoro_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "kd-tate"} -->
<p class="kd-tate"><?php echo esc_html( kanmi_dokoro_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
