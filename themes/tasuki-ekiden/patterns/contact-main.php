<?php
/**
 * Title: Entries: how it works and the race office
 * Slug: tasuki-ekiden/contact-main
 * Categories: tasuki-ekiden
 * Keywords: ekiden, relay race, running
 * Viewport Width: 1440
 * Description: How team entry works with an email button and the synced entry fees, beside the synced race office details and directions.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "te-section te-contact", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull te-section te-contact"><!-- wp:group {"align": "wide", "className": "te-contact__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide te-contact__grid"><!-- wp:group {"className": "te-contact__book", "layout": {"type": "default"}} -->
<div class="wp-block-group te-contact__book"><!-- wp:heading {"className": "te-sec__title"} -->
<h2 class="wp-block-heading te-sec__title"><?php echo esc_html( tasuki_ekiden_t( 'how_book' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered": true, "className": "te-steps"} -->
<ol class="wp-block-list te-steps"><!-- wp:list-item -->
<li><?php echo esc_html( tasuki_ekiden_t( 'b1' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( tasuki_ekiden_t( 'b2' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( tasuki_ekiden_t( 'b3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:buttons {"className": "te-links"} -->
<div class="wp-block-buttons te-links"><!-- wp:button {"className": "te-mailto"} -->
<div class="wp-block-button te-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:hello@kanmidokoro.example?subject=' . rawurlencode( tasuki_ekiden_t( 'book_subject' ) ) ); ?>"><?php echo esc_html( tasuki_ekiden_t( 'email_us' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:pattern {"slug":"tasuki-ekiden/rates"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className": "te-contact__find", "layout": {"type": "default"}} -->
<div class="wp-block-group te-contact__find"><!-- wp:pattern {"slug":"tasuki-ekiden/details"} /-->

<!-- wp:heading {"level": 3, "className": "te-sec__title"} -->
<h3 class="wp-block-heading te-sec__title"><?php echo esc_html( tasuki_ekiden_t( 'access' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( tasuki_ekiden_t( 'access_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( tasuki_ekiden_t( 'access_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
