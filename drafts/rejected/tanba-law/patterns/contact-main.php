<?php
/**
 * Title: Booking: how it works
 * Slug: tanba-law/contact-main
 * Categories: tanba-law
 * Keywords: law firm, lawyer, legal
 * Viewport Width: 1440
 * Description: How booking works, the email button and the synced fees beside the synced office details and directions.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tb-section tb-contact", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tb-section tb-contact"><!-- wp:group {"align": "wide", "className": "tb-contact__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide tb-contact__grid"><!-- wp:group {"className": "tb-contact__book", "layout": {"type": "default"}} -->
<div class="wp-block-group tb-contact__book"><!-- wp:heading {"className": "tb-sec__title"} -->
<h2 class="wp-block-heading tb-sec__title"><?php echo esc_html( tanba_law_t( 'how_book' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered": true, "className": "tb-steps"} -->
<ol class="wp-block-list tb-steps"><!-- wp:list-item -->
<li><?php echo esc_html( tanba_law_t( 'b1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( tanba_law_t( 'b2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( tanba_law_t( 'b3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:buttons {"className": "tb-links"} -->
<div class="wp-block-buttons tb-links"><!-- wp:button {"className": "tb-mailto"} -->
<div class="wp-block-button tb-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:hello@tanbalaw.example?subject=' . rawurlencode( tanba_law_t( 'book_subject' ) ) ); ?>"><?php echo esc_html( tanba_law_t( 'email_us' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:pattern {"slug":"tanba-law/rates"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className": "tb-contact__find", "layout": {"type": "default"}} -->
<div class="wp-block-group tb-contact__find"><!-- wp:pattern {"slug":"tanba-law/details"} /-->

<!-- wp:heading {"className": "tb-sec__title"} -->
<h2 class="wp-block-heading tb-sec__title"><?php echo esc_html( tanba_law_t( 'access' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( tanba_law_t( 'access_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( tanba_law_t( 'access_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
