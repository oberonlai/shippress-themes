<?php
/**
 * Title: Booking: how it works
 * Slug: hidamari-care/contact-main
 * Categories: hidamari-care
 * Keywords: senior care, residence, nursing
 * Viewport Width: 1440
 * Description: How booking works, the email button and the synced fees beside the synced office details and directions.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hc-section hc-contact", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hc-section hc-contact"><!-- wp:group {"align": "wide", "className": "hc-contact__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide hc-contact__grid"><!-- wp:group {"className": "hc-contact__book", "layout": {"type": "default"}} -->
<div class="wp-block-group hc-contact__book"><!-- wp:heading {"className": "hc-sec__title"} -->
<h2 class="wp-block-heading hc-sec__title"><?php echo esc_html( hidamari_care_t( 'how_book' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered": true, "className": "hc-steps"} -->
<ol class="wp-block-list hc-steps"><!-- wp:list-item -->
<li><?php echo esc_html( hidamari_care_t( 'b1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( hidamari_care_t( 'b2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( hidamari_care_t( 'b3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:buttons {"className": "hc-links"} -->
<div class="wp-block-buttons hc-links"><!-- wp:button {"className": "hc-mailto"} -->
<div class="wp-block-button hc-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:hello@hidamaricare.example?subject=' . rawurlencode( hidamari_care_t( 'book_subject' ) ) ); ?>"><?php echo esc_html( hidamari_care_t( 'email_us' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:pattern {"slug":"hidamari-care/rates"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className": "hc-contact__find", "layout": {"type": "default"}} -->
<div class="wp-block-group hc-contact__find"><!-- wp:pattern {"slug":"hidamari-care/details"} /-->

<!-- wp:heading {"className": "hc-sec__title"} -->
<h2 class="wp-block-heading hc-sec__title"><?php echo esc_html( hidamari_care_t( 'access' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hidamari_care_t( 'access_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hidamari_care_t( 'access_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
