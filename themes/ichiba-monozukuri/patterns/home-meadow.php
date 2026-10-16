<?php
/**
 * Title: Home: the season band
 * Slug: ichiba-monozukuri/home-meadow
 * Categories: ichiba-monozukuri
 * Keywords: craft market, makers, handmade
 * Viewport Width: 1440
 * Description: A full indigo band with a wide risograph risograph print and the festival season.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "im-section im-meadow", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull im-section im-meadow"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "im-meadow__img", "align": "wide"} -->
<figure class="wp-block-image alignwide size-full im-meadow__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/baskets.webp' ) ); ?>" alt="<?php echo esc_attr( ichiba_monozukuri_t( 'alt_baskets' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "im-meadow__text", "layout": {"type": "default"}} -->
<div class="wp-block-group im-meadow__text"><!-- wp:paragraph {"className": "im-eyebrow"} -->
<p class="im-eyebrow"><?php echo esc_html( ichiba_monozukuri_t( 'meadow_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "im-sec__title"} -->
<h2 class="wp-block-heading im-sec__title"><?php echo esc_html( ichiba_monozukuri_t( 'meadow_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( ichiba_monozukuri_t( 'meadow_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "im-more"} -->
<div class="wp-block-buttons im-more"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/the-market/"><?php echo esc_html( ichiba_monozukuri_t( 'meadow_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
