<?php
/**
 * Title: Booking: how it works
 * Slug: tsutsumi-packaging/contact-main
 * Categories: tsutsumi-packaging
 * Keywords: packaging, boxes, manufacturer
 * Viewport Width: 1440
 * Description: How booking works, the email button and the synced fees beside the synced office details and directions.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tp-section tp-contact", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tp-section tp-contact"><!-- wp:group {"align": "wide", "className": "tp-contact__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide tp-contact__grid"><!-- wp:group {"className": "tp-contact__book", "layout": {"type": "default"}} -->
<div class="wp-block-group tp-contact__book"><!-- wp:heading {"className": "tp-sec__title"} -->
<h2 class="wp-block-heading tp-sec__title"><?php echo esc_html( tsutsumi_packaging_t( 'how_book' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered": true, "className": "tp-steps"} -->
<ol class="wp-block-list tp-steps"><!-- wp:list-item -->
<li><?php echo esc_html( tsutsumi_packaging_t( 'b1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( tsutsumi_packaging_t( 'b2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( tsutsumi_packaging_t( 'b3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:buttons {"className": "tp-links"} -->
<div class="wp-block-buttons tp-links"><!-- wp:button {"className": "tp-mailto"} -->
<div class="wp-block-button tp-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:hello@tsutsumipackaging.example?subject=' . rawurlencode( tsutsumi_packaging_t( 'book_subject' ) ) ); ?>"><?php echo esc_html( tsutsumi_packaging_t( 'email_us' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:pattern {"slug":"tsutsumi-packaging/rates"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className": "tp-contact__find", "layout": {"type": "default"}} -->
<div class="wp-block-group tp-contact__find"><!-- wp:pattern {"slug":"tsutsumi-packaging/details"} /-->

<!-- wp:heading {"className": "tp-sec__title"} -->
<h2 class="wp-block-heading tp-sec__title"><?php echo esc_html( tsutsumi_packaging_t( 'access' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( tsutsumi_packaging_t( 'access_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( tsutsumi_packaging_t( 'access_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
