<?php
/**
 * Title: Home: the serial band
 * Slug: koma-manga/home-serial
 * Categories: koma-manga
 * Keywords: manga, comics, illustration
 * Viewport Width: 1440
 * Description: A full bamboo-green band: the chapter number in giant type, the chapter note and a tilted desk panel; the cut-out dip pen breaks out of the panel and over the band's top edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "km-section km-serial", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull km-section km-serial"><!-- wp:paragraph {"className": "km-eyebrow"} -->
<p class="km-eyebrow"><?php echo esc_html( koma_manga_t( 'serial_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"align": "wide", "className": "km-serial__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide km-serial__grid"><!-- wp:paragraph {"className": "km-serial__no"} -->
<p class="km-serial__no"><?php echo esc_html( koma_manga_t( 'serial_no' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className": "km-serial__text", "layout": {"type": "default"}} -->
<div class="wp-block-group km-serial__text"><!-- wp:heading {"className": "km-sec__title"} -->
<h2 class="wp-block-heading km-sec__title"><?php echo esc_html( koma_manga_t( 'serial_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( koma_manga_t( 'serial_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "km-more"} -->
<div class="wp-block-buttons km-more"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/works/"><?php echo esc_html( koma_manga_t( 'serial_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "km-serial__frame", "layout": {"type": "default"}} -->
<div class="wp-block-group km-serial__frame"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "km-serial__img"} -->
<figure class="wp-block-image size-full km-serial__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/desk.webp' ) ); ?>" alt="<?php echo esc_attr( koma_manga_t( 'alt_desk' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "km-serial__pen"} -->
<figure class="wp-block-image size-full km-serial__pen"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/pen-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
