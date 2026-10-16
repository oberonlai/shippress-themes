<?php
/**
 * Title: Visit: ask and find us
 * Slug: tsuribito-tackle/contact-main
 * Categories: tsuribito-tackle
 * Keywords: fishing, tackle, shop
 * Viewport Width: 1440
 * Description: Ask before you buy with an email button and the synced tide board, beside the synced shop details and directions.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tt-section tt-contact", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tt-section tt-contact"><!-- wp:group {"align": "wide", "className": "tt-contact__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide tt-contact__grid"><!-- wp:group {"className": "tt-contact__ask", "layout": {"type": "default"}} -->
<div class="wp-block-group tt-contact__ask"><!-- wp:heading {"className": "tt-sec__title"} -->
<h2 class="wp-block-heading tt-sec__title"><?php echo esc_html( tsuribito_tackle_t( 'ask_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( tsuribito_tackle_t( 'ask_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "tt-links"} -->
<div class="wp-block-buttons tt-links"><!-- wp:button {"className": "tt-mailto"} -->
<div class="wp-block-button tt-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:shop@tsuribito.example?subject=' . rawurlencode( tsuribito_tackle_t( 'ask_subject' ) ) ); ?>"><?php echo esc_html( tsuribito_tackle_t( 'email_us' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:pattern {"slug":"tsuribito-tackle/board"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className": "tt-contact__find", "layout": {"type": "default"}} -->
<div class="wp-block-group tt-contact__find"><!-- wp:pattern {"slug":"tsuribito-tackle/details"} /-->

<!-- wp:heading {"level": 3, "className": "tt-sec__title"} -->
<h3 class="wp-block-heading tt-sec__title"><?php echo esc_html( tsuribito_tackle_t( 'access' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( tsuribito_tackle_t( 'access_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( tsuribito_tackle_t( 'access_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
