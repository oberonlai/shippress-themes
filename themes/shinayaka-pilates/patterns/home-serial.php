<?php
/**
 * Title: Home: the method band
 * Slug: shinayaka-pilates/home-serial
 * Categories: shinayaka-pilates
 * Keywords: pilates, studio, wellness
 * Viewport Width: 1440
 * Description: A yamabuki band laid over the fan-and-wave pattern: the number of principles in giant type, the note and a framed illustration; the cut-out ring and mat break over the band top edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sp-section sp-serial", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sp-section sp-serial"><!-- wp:paragraph {"className": "sp-eyebrow"} -->
<p class="sp-eyebrow"><?php echo esc_html( shinayaka_pilates_t( 'serial_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"align": "wide", "className": "sp-serial__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide sp-serial__grid"><!-- wp:paragraph {"className": "sp-serial__no"} -->
<p class="sp-serial__no"><?php echo esc_html( shinayaka_pilates_t( 'serial_no' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className": "sp-serial__text", "layout": {"type": "default"}} -->
<div class="wp-block-group sp-serial__text"><!-- wp:heading {"className": "sp-sec__title"} -->
<h2 class="wp-block-heading sp-sec__title"><?php echo esc_html( shinayaka_pilates_t( 'serial_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( shinayaka_pilates_t( 'serial_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "sp-more"} -->
<div class="wp-block-buttons sp-more"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/classes/"><?php echo esc_html( shinayaka_pilates_t( 'serial_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "sp-serial__frame", "layout": {"type": "default"}} -->
<div class="wp-block-group sp-serial__frame"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sp-serial__img"} -->
<figure class="wp-block-image size-full sp-serial__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/pattern.webp' ) ); ?>" alt="<?php echo esc_attr( shinayaka_pilates_t( 'alt_pattern' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sp-serial__pen"} -->
<figure class="wp-block-image size-full sp-serial__pen"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/ring-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
