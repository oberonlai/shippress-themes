<?php
/**
 * Title: First meeting: how it works
 * Slug: kakei-advisors/contact-main
 * Categories: kakei-advisors
 * Keywords: finance, planning, advice
 * Viewport Width: 1440
 * Description: How booking works, the email button and the synced fees beside the synced office details and directions.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "ka-section ka-contact", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull ka-section ka-contact"><!-- wp:group {"align": "wide", "className": "ka-contact__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide ka-contact__grid"><!-- wp:group {"className": "ka-contact__book", "layout": {"type": "default"}} -->
<div class="wp-block-group ka-contact__book"><!-- wp:heading {"className": "ka-sec__title"} -->
<h2 class="wp-block-heading ka-sec__title"><?php echo esc_html( kakei_advisors_t( 'how_book' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered": true, "className": "ka-steps"} -->
<ol class="wp-block-list ka-steps"><!-- wp:list-item -->
<li><?php echo esc_html( kakei_advisors_t( 'b1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( kakei_advisors_t( 'b2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( kakei_advisors_t( 'b3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:buttons {"className": "ka-links"} -->
<div class="wp-block-buttons ka-links"><!-- wp:button {"className": "ka-mailto"} -->
<div class="wp-block-button ka-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:studio@kakeiadvisors.example?subject=' . rawurlencode( kakei_advisors_t( 'book_subject' ) ) ); ?>"><?php echo esc_html( kakei_advisors_t( 'email_us' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:pattern {"slug":"kakei-advisors/rates"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className": "ka-contact__find", "layout": {"type": "default"}} -->
<div class="wp-block-group ka-contact__find"><!-- wp:pattern {"slug":"kakei-advisors/details"} /-->

<!-- wp:heading {"className": "ka-sec__title"} -->
<h2 class="wp-block-heading ka-sec__title"><?php echo esc_html( kakei_advisors_t( 'access' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( kakei_advisors_t( 'access_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( kakei_advisors_t( 'access_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
