<?php
/**
 * Title: Booking: how it works
 * Slug: kizuki-construction/contact-main
 * Categories: kizuki-construction
 * Keywords: construction, contractor, building
 * Viewport Width: 1440
 * Description: How booking works, the email button and the synced fees beside the synced office details and directions.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kz-section kz-contact", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kz-section kz-contact"><!-- wp:group {"align": "wide", "className": "kz-contact__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide kz-contact__grid"><!-- wp:group {"className": "kz-contact__book", "layout": {"type": "default"}} -->
<div class="wp-block-group kz-contact__book"><!-- wp:heading {"className": "kz-sec__title"} -->
<h2 class="wp-block-heading kz-sec__title"><?php echo esc_html( kizuki_construction_t( 'how_book' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered": true, "className": "kz-steps"} -->
<ol class="wp-block-list kz-steps"><!-- wp:list-item -->
<li><?php echo esc_html( kizuki_construction_t( 'b1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( kizuki_construction_t( 'b2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( kizuki_construction_t( 'b3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:buttons {"className": "kz-links"} -->
<div class="wp-block-buttons kz-links"><!-- wp:button {"className": "kz-mailto"} -->
<div class="wp-block-button kz-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:hello@kizukiconstruction.example?subject=' . rawurlencode( kizuki_construction_t( 'book_subject' ) ) ); ?>"><?php echo esc_html( kizuki_construction_t( 'email_us' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:pattern {"slug":"kizuki-construction/rates"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className": "kz-contact__find", "layout": {"type": "default"}} -->
<div class="wp-block-group kz-contact__find"><!-- wp:pattern {"slug":"kizuki-construction/details"} /-->

<!-- wp:heading {"className": "kz-sec__title"} -->
<h2 class="wp-block-heading kz-sec__title"><?php echo esc_html( kizuki_construction_t( 'access' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( kizuki_construction_t( 'access_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( kizuki_construction_t( 'access_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
