<?php
/**
 * Title: Book a stay: how it works
 * Slug: koshi-machiya/contact-main
 * Categories: koshi-machiya
 * Keywords: machiya, townhouse, stay
 * Viewport Width: 1440
 * Description: How booking works, the email button and the synced rates beside the synced house details and directions.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kc-section kc-contact", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kc-section kc-contact"><!-- wp:group {"align": "wide", "className": "kc-contact__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide kc-contact__grid"><!-- wp:group {"className": "kc-contact__book", "layout": {"type": "default"}} -->
<div class="wp-block-group kc-contact__book"><!-- wp:heading {"className": "kc-sec__title"} -->
<h2 class="wp-block-heading kc-sec__title"><?php echo esc_html( koshi_machiya_t( 'how_book' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered": true, "className": "kc-steps"} -->
<ol class="wp-block-list kc-steps"><!-- wp:list-item -->
<li><?php echo esc_html( koshi_machiya_t( 'b1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( koshi_machiya_t( 'b2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( koshi_machiya_t( 'b3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:buttons {"className": "kc-links"} -->
<div class="wp-block-buttons kc-links"><!-- wp:button {"className": "kc-mailto"} -->
<div class="wp-block-button kc-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:stay@koshimachiya.example?subject=' . rawurlencode( koshi_machiya_t( 'book_subject' ) ) ); ?>"><?php echo esc_html( koshi_machiya_t( 'email_us' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:pattern {"slug":"koshi-machiya/rates"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className": "kc-contact__find", "layout": {"type": "default"}} -->
<div class="wp-block-group kc-contact__find"><!-- wp:pattern {"slug":"koshi-machiya/details"} /-->

<!-- wp:heading {"className": "kc-sec__title"} -->
<h2 class="wp-block-heading kc-sec__title"><?php echo esc_html( koshi_machiya_t( 'access' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( koshi_machiya_t( 'access_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( koshi_machiya_t( 'access_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
