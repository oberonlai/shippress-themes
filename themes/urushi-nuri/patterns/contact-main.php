<?php
/**
 * Title: Visit: ask and find us
 * Slug: urushi-nuri/contact-main
 * Categories: urushi-nuri
 * Keywords: urushi, lacquer, workshop
 * Viewport Width: 1440
 * Description: Ask about a repair with an email button and the synced workshop board, beside the synced shop details and directions.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "un-section un-contact", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull un-section un-contact"><!-- wp:group {"align": "wide", "className": "un-contact__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide un-contact__grid"><!-- wp:group {"className": "un-contact__ask", "layout": {"type": "default"}} -->
<div class="wp-block-group un-contact__ask"><!-- wp:heading {"className": "un-sec__title"} -->
<h2 class="wp-block-heading un-sec__title"><?php echo esc_html( urushi_nuri_t( 'ask_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( urushi_nuri_t( 'ask_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "un-links"} -->
<div class="wp-block-buttons un-links"><!-- wp:button {"className": "un-mailto"} -->
<div class="wp-block-button un-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:studio@urushinuri.example?subject=' . rawurlencode( urushi_nuri_t( 'ask_subject' ) ) ); ?>"><?php echo esc_html( urushi_nuri_t( 'email_us' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:pattern {"slug":"urushi-nuri/board"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className": "un-contact__find", "layout": {"type": "default"}} -->
<div class="wp-block-group un-contact__find"><!-- wp:pattern {"slug":"urushi-nuri/details"} /-->

<!-- wp:heading {"level": 3, "className": "un-sec__title"} -->
<h3 class="wp-block-heading un-sec__title"><?php echo esc_html( urushi_nuri_t( 'access' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( urushi_nuri_t( 'access_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( urushi_nuri_t( 'access_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
