<?php
/**
 * Title: Home: framed-window hero
 * Slug: taiko-juku/home-hero
 * Categories: taiko-juku
 * Keywords: taiko, drumming, classes
 * Viewport Width: 1440
 * Description: The Edo-purple field with the title beside a deep window frame holding the low-key dojo photograph; a cut-out drum breaks out of the window frame and over the hero edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tj-hero", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull tj-hero"><!-- wp:group {"className": "tj-hero__type", "layout": {"type": "default"}} -->
<div class="wp-block-group tj-hero__type"><!-- wp:paragraph {"className": "tj-eyebrow"} -->
<p class="tj-eyebrow"><?php echo esc_html( taiko_juku_t( 'hero_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "tj-hero__title"} -->
<h1 class="wp-block-heading tj-hero__title"><?php echo esc_html( taiko_juku_t( 'hero_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "tj-hero__lead"} -->
<p class="tj-hero__lead"><?php echo esc_html( taiko_juku_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "tj-hero__cta"} -->
<div class="wp-block-buttons tj-hero__cta"><!-- wp:button {"className": "tj-book"} -->
<div class="wp-block-button tj-book"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo esc_html( taiko_juku_t( 'book' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/classes/"><?php echo esc_html( taiko_juku_t( 'see_tents' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<?php if ( '' !== taiko_juku_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "tj-tate"} -->
<p class="tj-tate"><?php echo esc_html( taiko_juku_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?>

<!-- wp:group {"className": "tj-window", "layout": {"type": "default"}} -->
<div class="wp-block-group tj-window"><!-- wp:paragraph {"className": "tj-window__label"} -->
<p class="tj-window__label"><?php echo esc_html( taiko_juku_t( 'map_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tj-window__img"} -->
<figure class="wp-block-image size-full tj-window__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero.webp' ) ); ?>" alt="<?php echo esc_attr( taiko_juku_t( 'map_alt' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tj-window__drum"} -->
<figure class="wp-block-image size-full tj-window__drum"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/drum-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
