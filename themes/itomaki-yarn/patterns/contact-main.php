<?php
/**
 * Title: Visit: ask and find us
 * Slug: itomaki-yarn/contact-main
 * Categories: itomaki-yarn
 * Keywords: yarn, wool, knitting
 * Viewport Width: 1440
 * Description: Ask about a custom dye lot with an email button and the synced shop board, beside the synced shop details and directions.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "iy-section iy-contact", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull iy-section iy-contact"><!-- wp:group {"align": "wide", "className": "iy-contact__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide iy-contact__grid"><!-- wp:group {"className": "iy-contact__ask", "layout": {"type": "default"}} -->
<div class="wp-block-group iy-contact__ask"><!-- wp:heading {"className": "iy-sec__title"} -->
<h2 class="wp-block-heading iy-sec__title"><?php echo esc_html( itomaki_yarn_t( 'ask_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( itomaki_yarn_t( 'ask_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "iy-links"} -->
<div class="wp-block-buttons iy-links"><!-- wp:button {"className": "iy-mailto"} -->
<div class="wp-block-button iy-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:hello@itomaki.example?subject=' . rawurlencode( itomaki_yarn_t( 'ask_subject' ) ) ); ?>"><?php echo esc_html( itomaki_yarn_t( 'email_us' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:pattern {"slug":"itomaki-yarn/board"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className": "iy-contact__find", "layout": {"type": "default"}} -->
<div class="wp-block-group iy-contact__find"><!-- wp:pattern {"slug":"itomaki-yarn/details"} /-->

<!-- wp:heading {"level": 3, "className": "iy-sec__title"} -->
<h3 class="wp-block-heading iy-sec__title"><?php echo esc_html( itomaki_yarn_t( 'access' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( itomaki_yarn_t( 'access_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( itomaki_yarn_t( 'access_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
