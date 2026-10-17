<?php
/**
 * Title: Newsletter: sign up
 * Slug: itomaki-yarn/letter-main
 * Categories: itomaki-yarn
 * Keywords: yarn, wool, knitting
 * Viewport Width: 1440
 * Description: A swatch watercolour beside the sign-up card (by email).
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "iy-section iy-letter", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull iy-section iy-letter"><!-- wp:group {"align": "wide", "className": "iy-letter__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide iy-letter__grid"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "iy-letter__img"} -->
<figure class="wp-block-image size-full iy-letter__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/j-swatch.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "iy-letter__card", "layout": {"type": "default"}} -->
<div class="wp-block-group iy-letter__card"><!-- wp:heading {"className": "iy-sec__title"} -->
<h2 class="wp-block-heading iy-sec__title"><?php echo esc_html( itomaki_yarn_t( 'letter_card_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( itomaki_yarn_t( 'letter_card' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "iy-links"} -->
<div class="wp-block-buttons iy-links"><!-- wp:button {"className": "iy-mailto"} -->
<div class="wp-block-button iy-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:hello@itomaki.example?subject=' . rawurlencode( itomaki_yarn_t( 'letter_subject' ) ) ); ?>"><?php echo esc_html( itomaki_yarn_t( 'letter_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
