<?php
/**
 * Title: Booking: how it works
 * Slug: tsunagu-systems/contact-main
 * Categories: tsunagu-systems
 * Keywords: it services, managed it, support
 * Viewport Width: 1440
 * Description: How booking works, the email button and the synced fees beside the synced office details and directions.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "ts-section ts-contact", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull ts-section ts-contact"><!-- wp:group {"align": "wide", "className": "ts-contact__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide ts-contact__grid"><!-- wp:group {"className": "ts-contact__book", "layout": {"type": "default"}} -->
<div class="wp-block-group ts-contact__book"><!-- wp:heading {"className": "ts-sec__title"} -->
<h2 class="wp-block-heading ts-sec__title"><?php echo esc_html( tsunagu_systems_t( 'how_book' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered": true, "className": "ts-steps"} -->
<ol class="wp-block-list ts-steps"><!-- wp:list-item -->
<li><?php echo esc_html( tsunagu_systems_t( 'b1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( tsunagu_systems_t( 'b2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( tsunagu_systems_t( 'b3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:buttons {"className": "ts-links"} -->
<div class="wp-block-buttons ts-links"><!-- wp:button {"className": "ts-mailto"} -->
<div class="wp-block-button ts-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:hello@tsunagusystems.example?subject=' . rawurlencode( tsunagu_systems_t( 'book_subject' ) ) ); ?>"><?php echo esc_html( tsunagu_systems_t( 'email_us' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:pattern {"slug":"tsunagu-systems/rates"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className": "ts-contact__find", "layout": {"type": "default"}} -->
<div class="wp-block-group ts-contact__find"><!-- wp:pattern {"slug":"tsunagu-systems/details"} /-->

<!-- wp:heading {"className": "ts-sec__title"} -->
<h2 class="wp-block-heading ts-sec__title"><?php echo esc_html( tsunagu_systems_t( 'access' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( tsunagu_systems_t( 'access_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( tsunagu_systems_t( 'access_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
