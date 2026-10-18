<?php
/**
 * Title: Booking: how it works
 * Slug: hirameki-lab/contact-main
 * Categories: hirameki-lab
 * Keywords: STEM, robotics, after-school
 * Viewport Width: 1440
 * Description: How booking works, the email button and the synced fees beside the synced office details and directions.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hl-section hl-contact", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hl-section hl-contact"><!-- wp:group {"align": "wide", "className": "hl-contact__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide hl-contact__grid"><!-- wp:group {"className": "hl-contact__book", "layout": {"type": "default"}} -->
<div class="wp-block-group hl-contact__book"><!-- wp:heading {"className": "hl-sec__title"} -->
<h2 class="wp-block-heading hl-sec__title"><?php echo esc_html( hirameki_lab_t( 'how_book' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered": true, "className": "hl-steps"} -->
<ol class="wp-block-list hl-steps"><!-- wp:list-item -->
<li><?php echo esc_html( hirameki_lab_t( 'b1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( hirameki_lab_t( 'b2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( hirameki_lab_t( 'b3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:buttons {"className": "hl-links"} -->
<div class="wp-block-buttons hl-links"><!-- wp:button {"className": "hl-mailto"} -->
<div class="wp-block-button hl-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:hello@hiramekilab.example?subject=' . rawurlencode( hirameki_lab_t( 'book_subject' ) ) ); ?>"><?php echo esc_html( hirameki_lab_t( 'email_us' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:pattern {"slug":"hirameki-lab/rates"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className": "hl-contact__find", "layout": {"type": "default"}} -->
<div class="wp-block-group hl-contact__find"><!-- wp:pattern {"slug":"hirameki-lab/details"} /-->

<!-- wp:heading {"className": "hl-sec__title"} -->
<h2 class="wp-block-heading hl-sec__title"><?php echo esc_html( hirameki_lab_t( 'access' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hirameki_lab_t( 'access_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hirameki_lab_t( 'access_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
