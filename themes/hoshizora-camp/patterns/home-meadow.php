<?php
/**
 * Title: Home: the azalea band
 * Slug: hoshizora-camp/home-meadow
 * Categories: hoshizora-camp
 * Keywords: glamping, camp, tents
 * Viewport Width: 1440
 * Description: A full azalea-pink band with the wide watercolour of the hillside in bloom and the season dates.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hz-section hz-meadow", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hz-section hz-meadow"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hz-meadow__img", "align": "wide"} -->
<figure class="wp-block-image alignwide size-full hz-meadow__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/meadow.webp' ) ); ?>" alt="<?php echo esc_attr( hoshizora_camp_t( 'alt_meadow' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "hz-meadow__text", "layout": {"type": "default"}} -->
<div class="wp-block-group hz-meadow__text"><!-- wp:paragraph {"className": "hz-eyebrow"} -->
<p class="hz-eyebrow"><?php echo esc_html( hoshizora_camp_t( 'meadow_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "hz-sec__title"} -->
<h2 class="wp-block-heading hz-sec__title"><?php echo esc_html( hoshizora_camp_t( 'meadow_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hoshizora_camp_t( 'meadow_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "hz-more"} -->
<div class="wp-block-buttons hz-more"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/the-meadow/"><?php echo esc_html( hoshizora_camp_t( 'meadow_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
