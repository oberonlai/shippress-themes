<?php
/**
 * Title: Visit: ask and find us
 * Slug: karan-geta/contact-main
 * Categories: karan-geta
 * Keywords: geta, sandals, workshop
 * Viewport Width: 1440
 * Description: Ask about a group with an email button and the synced shop board, beside the synced shop details and directions.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kg-section kg-contact", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kg-section kg-contact"><!-- wp:group {"align": "wide", "className": "kg-contact__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide kg-contact__grid"><!-- wp:group {"className": "kg-contact__ask", "layout": {"type": "default"}} -->
<div class="wp-block-group kg-contact__ask"><!-- wp:heading {"className": "kg-sec__title"} -->
<h2 class="wp-block-heading kg-sec__title"><?php echo esc_html( karan_geta_t( 'ask_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( karan_geta_t( 'ask_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "kg-links"} -->
<div class="wp-block-buttons kg-links"><!-- wp:button {"className": "kg-mailto"} -->
<div class="wp-block-button kg-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:hello@karan.example?subject=' . rawurlencode( karan_geta_t( 'ask_subject' ) ) ); ?>"><?php echo esc_html( karan_geta_t( 'email_us' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:pattern {"slug":"karan-geta/board"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className": "kg-contact__find", "layout": {"type": "default"}} -->
<div class="wp-block-group kg-contact__find"><!-- wp:pattern {"slug":"karan-geta/details"} /-->

<!-- wp:heading {"level": 3, "className": "kg-sec__title"} -->
<h3 class="wp-block-heading kg-sec__title"><?php echo esc_html( karan_geta_t( 'access' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( karan_geta_t( 'access_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( karan_geta_t( 'access_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
