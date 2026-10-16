<?php
/**
 * Title: Home: the festival band
 * Slug: taiko-juku/home-meadow
 * Categories: taiko-juku
 * Keywords: taiko, drumming, classes
 * Viewport Width: 1440
 * Description: A full Edo-purple band with a wide low-key class photograph and the festival season.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tj-section tj-meadow", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tj-section tj-meadow"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tj-meadow__img", "align": "wide"} -->
<figure class="wp-block-image alignwide size-full tj-meadow__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/class.webp' ) ); ?>" alt="<?php echo esc_attr( taiko_juku_t( 'alt_bell' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "tj-meadow__text", "layout": {"type": "default"}} -->
<div class="wp-block-group tj-meadow__text"><!-- wp:paragraph {"className": "tj-eyebrow"} -->
<p class="tj-eyebrow"><?php echo esc_html( taiko_juku_t( 'meadow_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "tj-sec__title"} -->
<h2 class="wp-block-heading tj-sec__title"><?php echo esc_html( taiko_juku_t( 'meadow_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( taiko_juku_t( 'meadow_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "tj-more"} -->
<div class="wp-block-buttons tj-more"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/the-dojo/"><?php echo esc_html( taiko_juku_t( 'meadow_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
