<?php
/**
 * Title: Booking: how it works
 * Slug: niko-kids-clinic/contact-main
 * Categories: niko-kids-clinic
 * Keywords: paediatric clinic, children, doctor
 * Viewport Width: 1440
 * Description: How booking works, the email button and the synced fees beside the synced office details and directions.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "nk-section nk-contact", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull nk-section nk-contact"><!-- wp:group {"align": "wide", "className": "nk-contact__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide nk-contact__grid"><!-- wp:group {"className": "nk-contact__book", "layout": {"type": "default"}} -->
<div class="wp-block-group nk-contact__book"><!-- wp:heading {"className": "nk-sec__title"} -->
<h2 class="wp-block-heading nk-sec__title"><?php echo esc_html( niko_kids_clinic_t( 'how_book' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered": true, "className": "nk-steps"} -->
<ol class="wp-block-list nk-steps"><!-- wp:list-item -->
<li><?php echo esc_html( niko_kids_clinic_t( 'b1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( niko_kids_clinic_t( 'b2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( niko_kids_clinic_t( 'b3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:buttons {"className": "nk-links"} -->
<div class="wp-block-buttons nk-links"><!-- wp:button {"className": "nk-mailto"} -->
<div class="wp-block-button nk-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:hello@nikokidsclinic.example?subject=' . rawurlencode( niko_kids_clinic_t( 'book_subject' ) ) ); ?>"><?php echo esc_html( niko_kids_clinic_t( 'email_us' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:pattern {"slug":"niko-kids-clinic/rates"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className": "nk-contact__find", "layout": {"type": "default"}} -->
<div class="wp-block-group nk-contact__find"><!-- wp:pattern {"slug":"niko-kids-clinic/details"} /-->

<!-- wp:heading {"className": "nk-sec__title"} -->
<h2 class="wp-block-heading nk-sec__title"><?php echo esc_html( niko_kids_clinic_t( 'access' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( niko_kids_clinic_t( 'access_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( niko_kids_clinic_t( 'access_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
