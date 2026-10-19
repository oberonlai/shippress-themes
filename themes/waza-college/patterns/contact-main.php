<?php
/**
 * Title: Booking: how it works
 * Slug: waza-college/contact-main
 * Categories: waza-college
 * Keywords: college, vocational, courses
 * Viewport Width: 1440
 * Description: How booking works, the email button and the synced fees beside the synced office details and directions.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "wz-section wz-contact", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull wz-section wz-contact"><!-- wp:group {"align": "wide", "className": "wz-contact__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide wz-contact__grid"><!-- wp:group {"className": "wz-contact__book", "layout": {"type": "default"}} -->
<div class="wp-block-group wz-contact__book"><!-- wp:heading {"className": "wz-sec__title"} -->
<h2 class="wp-block-heading wz-sec__title"><?php echo esc_html( waza_college_t( 'how_book' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered": true, "className": "wz-steps"} -->
<ol class="wp-block-list wz-steps"><!-- wp:list-item -->
<li><?php echo esc_html( waza_college_t( 'b1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( waza_college_t( 'b2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( waza_college_t( 'b3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:buttons {"className": "wz-links"} -->
<div class="wp-block-buttons wz-links"><!-- wp:button {"className": "wz-mailto"} -->
<div class="wp-block-button wz-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:hello@wazacollege.example?subject=' . rawurlencode( waza_college_t( 'book_subject' ) ) ); ?>"><?php echo esc_html( waza_college_t( 'email_us' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:pattern {"slug":"waza-college/rates"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className": "wz-contact__find", "layout": {"type": "default"}} -->
<div class="wp-block-group wz-contact__find"><!-- wp:pattern {"slug":"waza-college/details"} /-->

<!-- wp:heading {"className": "wz-sec__title"} -->
<h2 class="wp-block-heading wz-sec__title"><?php echo esc_html( waza_college_t( 'access' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( waza_college_t( 'access_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( waza_college_t( 'access_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
