<?php
/**
 * Title: Home: the shop through a framed window on the mikan field
 * Slug: shirokuro-camera/home-hero
 * Categories: shirokuro-camera
 * Keywords: film cameras, lenses, film
 * Viewport Width: 1440
 * Description: A full mikan orange field with a faint clay dot texture: the shop line on top (a vertical line beside it in Chinese and Japanese), the clay shop interior seen through a black viewfinder window, a cream card with the lead and buttons overlapping the window, and the cut-out clay camera breaking out over the window frame and the hero bottom edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sc-hero", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull sc-hero"><!-- wp:group {"className": "sc-hero__head", "layout": {"type": "default"}} -->
<div class="wp-block-group sc-hero__head"><!-- wp:paragraph {"className": "sc-eyebrow sc-chip"} -->
<p class="sc-eyebrow sc-chip"><?php echo esc_html( shirokuro_camera_t( 'hero_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className": "sc-hero__row", "layout": {"type": "default"}} -->
<div class="wp-block-group sc-hero__row"><?php if ( '' !== shirokuro_camera_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "sc-tate"} -->
<p class="sc-tate"><?php echo esc_html( shirokuro_camera_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?>

<!-- wp:heading {"level": 1, "className": "sc-hero__title"} -->
<h1 class="wp-block-heading sc-hero__title"><?php echo esc_html( shirokuro_camera_t( 'hero_title' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "sc-hero__window", "layout": {"type": "default"}} -->
<div class="wp-block-group sc-hero__window"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sc-hero__art"} -->
<figure class="wp-block-image size-full sc-hero__art"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-art.webp' ) ); ?>" alt="<?php echo esc_attr( shirokuro_camera_t( 'alt_hero' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sc-hero__cut"} -->
<figure class="wp-block-image size-full sc-hero__cut"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/camera-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "sc-hero__card", "layout": {"type": "default"}} -->
<div class="wp-block-group sc-hero__card"><!-- wp:paragraph {"className": "sc-hero__lead"} -->
<p class="sc-hero__lead"><?php echo esc_html( shirokuro_camera_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "sc-hero__cta"} -->
<div class="wp-block-buttons sc-hero__cta"><!-- wp:button {"className": "sc-book"} -->
<div class="wp-block-button sc-book"><a class="wp-block-button__link wp-element-button" href="/shop/"><?php echo esc_html( shirokuro_camera_t( 'book' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="#sc-day"><?php echo esc_html( shirokuro_camera_t( 'hero_more' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
