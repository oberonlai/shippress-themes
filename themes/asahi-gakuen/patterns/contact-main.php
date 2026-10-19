<?php
/**
 * Title: Booking: how it works
 * Slug: asahi-gakuen/contact-main
 * Categories: asahi-gakuen
 * Keywords: school, high school, education
 * Viewport Width: 1440
 * Description: How booking works, the email button and the synced fees beside the synced office details and directions.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "ag-section ag-contact", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull ag-section ag-contact"><!-- wp:group {"align": "wide", "className": "ag-contact__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide ag-contact__grid"><!-- wp:group {"className": "ag-contact__book", "layout": {"type": "default"}} -->
<div class="wp-block-group ag-contact__book"><!-- wp:heading {"className": "ag-sec__title"} -->
<h2 class="wp-block-heading ag-sec__title"><?php echo esc_html( asahi_gakuen_t( 'how_book' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered": true, "className": "ag-steps"} -->
<ol class="wp-block-list ag-steps"><!-- wp:list-item -->
<li><?php echo esc_html( asahi_gakuen_t( 'b1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( asahi_gakuen_t( 'b2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( asahi_gakuen_t( 'b3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:buttons {"className": "ag-links"} -->
<div class="wp-block-buttons ag-links"><!-- wp:button {"className": "ag-mailto"} -->
<div class="wp-block-button ag-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:hello@asahigakuen.example?subject=' . rawurlencode( asahi_gakuen_t( 'book_subject' ) ) ); ?>"><?php echo esc_html( asahi_gakuen_t( 'email_us' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:pattern {"slug":"asahi-gakuen/rates"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className": "ag-contact__find", "layout": {"type": "default"}} -->
<div class="wp-block-group ag-contact__find"><!-- wp:pattern {"slug":"asahi-gakuen/details"} /-->

<!-- wp:heading {"className": "ag-sec__title"} -->
<h2 class="wp-block-heading ag-sec__title"><?php echo esc_html( asahi_gakuen_t( 'access' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( asahi_gakuen_t( 'access_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( asahi_gakuen_t( 'access_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
