<?php
/**
 * Title: Booking: how it works
 * Slug: hanamizuki-dental/contact-main
 * Categories: hanamizuki-dental
 * Keywords: dental, dentist, clinic
 * Viewport Width: 1440
 * Description: How booking works, the email button and the synced fees beside the synced office details and directions.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hd-section hd-contact", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hd-section hd-contact"><!-- wp:group {"align": "wide", "className": "hd-contact__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide hd-contact__grid"><!-- wp:group {"className": "hd-contact__book", "layout": {"type": "default"}} -->
<div class="wp-block-group hd-contact__book"><!-- wp:heading {"className": "hd-sec__title"} -->
<h2 class="wp-block-heading hd-sec__title"><?php echo esc_html( hanamizuki_dental_t( 'how_book' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered": true, "className": "hd-steps"} -->
<ol class="wp-block-list hd-steps"><!-- wp:list-item -->
<li><?php echo esc_html( hanamizuki_dental_t( 'b1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( hanamizuki_dental_t( 'b2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( hanamizuki_dental_t( 'b3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:buttons {"className": "hd-links"} -->
<div class="wp-block-buttons hd-links"><!-- wp:button {"className": "hd-mailto"} -->
<div class="wp-block-button hd-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:hello@hanamizukidental.example?subject=' . rawurlencode( hanamizuki_dental_t( 'book_subject' ) ) ); ?>"><?php echo esc_html( hanamizuki_dental_t( 'email_us' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:pattern {"slug":"hanamizuki-dental/rates"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className": "hd-contact__find", "layout": {"type": "default"}} -->
<div class="wp-block-group hd-contact__find"><!-- wp:pattern {"slug":"hanamizuki-dental/details"} /-->

<!-- wp:heading {"className": "hd-sec__title"} -->
<h2 class="wp-block-heading hd-sec__title"><?php echo esc_html( hanamizuki_dental_t( 'access' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hanamizuki_dental_t( 'access_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hanamizuki_dental_t( 'access_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
