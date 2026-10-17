<?php
/**
 * Title: Book a seat: how it works
 * Slug: teuchi-udon/contact-main
 * Categories: teuchi-udon
 * Keywords: udon, noodles, restaurant
 * Viewport Width: 1440
 * Description: How booking works, the email button and the synced price list beside the synced shop details and directions.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tu-section tu-contact", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tu-section tu-contact"><!-- wp:group {"align": "wide", "className": "tu-contact__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide tu-contact__grid"><!-- wp:group {"className": "tu-contact__book", "layout": {"type": "default"}} -->
<div class="wp-block-group tu-contact__book"><!-- wp:heading {"className": "tu-sec__title"} -->
<h2 class="wp-block-heading tu-sec__title"><?php echo esc_html( teuchi_udon_t( 'how_book' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered": true, "className": "tu-steps"} -->
<ol class="wp-block-list tu-steps"><!-- wp:list-item -->
<li><?php echo esc_html( teuchi_udon_t( 'b1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( teuchi_udon_t( 'b2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( teuchi_udon_t( 'b3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:buttons {"className": "tu-links"} -->
<div class="wp-block-buttons tu-links"><!-- wp:button {"className": "tu-mailto"} -->
<div class="wp-block-button tu-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:studio@teuchiudon.example?subject=' . rawurlencode( teuchi_udon_t( 'book_subject' ) ) ); ?>"><?php echo esc_html( teuchi_udon_t( 'email_us' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:pattern {"slug":"teuchi-udon/rates"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className": "tu-contact__find", "layout": {"type": "default"}} -->
<div class="wp-block-group tu-contact__find"><!-- wp:pattern {"slug":"teuchi-udon/details"} /-->

<!-- wp:heading {"className": "tu-sec__title"} -->
<h2 class="wp-block-heading tu-sec__title"><?php echo esc_html( teuchi_udon_t( 'access' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( teuchi_udon_t( 'access_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( teuchi_udon_t( 'access_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
