<?php
/**
 * Title: Booking: how it works
 * Slug: hakobi-logistics/contact-main
 * Categories: hakobi-logistics
 * Keywords: logistics, freight, warehousing
 * Viewport Width: 1440
 * Description: How booking works, the email button and the synced fees beside the synced office details and directions.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hg-section hg-contact", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hg-section hg-contact"><!-- wp:group {"align": "wide", "className": "hg-contact__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide hg-contact__grid"><!-- wp:group {"className": "hg-contact__book", "layout": {"type": "default"}} -->
<div class="wp-block-group hg-contact__book"><!-- wp:heading {"className": "hg-sec__title"} -->
<h2 class="wp-block-heading hg-sec__title"><?php echo esc_html( hakobi_logistics_t( 'how_book' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered": true, "className": "hg-steps"} -->
<ol class="wp-block-list hg-steps"><!-- wp:list-item -->
<li><?php echo esc_html( hakobi_logistics_t( 'b1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( hakobi_logistics_t( 'b2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( hakobi_logistics_t( 'b3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:buttons {"className": "hg-links"} -->
<div class="wp-block-buttons hg-links"><!-- wp:button {"className": "hg-mailto"} -->
<div class="wp-block-button hg-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:hello@hakobilogistics.example?subject=' . rawurlencode( hakobi_logistics_t( 'book_subject' ) ) ); ?>"><?php echo esc_html( hakobi_logistics_t( 'email_us' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:pattern {"slug":"hakobi-logistics/rates"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className": "hg-contact__find", "layout": {"type": "default"}} -->
<div class="wp-block-group hg-contact__find"><!-- wp:pattern {"slug":"hakobi-logistics/details"} /-->

<!-- wp:heading {"className": "hg-sec__title"} -->
<h2 class="wp-block-heading hg-sec__title"><?php echo esc_html( hakobi_logistics_t( 'access' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hakobi_logistics_t( 'access_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hakobi_logistics_t( 'access_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
