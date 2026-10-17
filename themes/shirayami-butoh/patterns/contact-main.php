<?php
/**
 * Title: Book a seat: how it works
 * Slug: shirayami-butoh/contact-main
 * Categories: shirayami-butoh
 * Keywords: butoh, dance, performance
 * Viewport Width: 1440
 * Description: How a survey works, the email button and the synced ticket guide beside the synced studio details and directions.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sb-section sb-contact", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sb-section sb-contact"><!-- wp:group {"align": "wide", "className": "sb-contact__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide sb-contact__grid"><!-- wp:group {"className": "sb-contact__book", "layout": {"type": "default"}} -->
<div class="wp-block-group sb-contact__book"><!-- wp:heading {"className": "sb-sec__title"} -->
<h2 class="wp-block-heading sb-sec__title"><?php echo esc_html( shirayami_butoh_t( 'how_book' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered": true, "className": "sb-steps"} -->
<ol class="wp-block-list sb-steps"><!-- wp:list-item -->
<li><?php echo esc_html( shirayami_butoh_t( 'b1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( shirayami_butoh_t( 'b2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( shirayami_butoh_t( 'b3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:buttons {"className": "sb-links"} -->
<div class="wp-block-buttons sb-links"><!-- wp:button {"className": "sb-mailto"} -->
<div class="wp-block-button sb-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:studio@shirayamibutoh.example?subject=' . rawurlencode( shirayami_butoh_t( 'book_subject' ) ) ); ?>"><?php echo esc_html( shirayami_butoh_t( 'email_us' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:pattern {"slug":"shirayami-butoh/rates"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className": "sb-contact__find", "layout": {"type": "default"}} -->
<div class="wp-block-group sb-contact__find"><!-- wp:pattern {"slug":"shirayami-butoh/details"} /-->

<!-- wp:heading {"className": "sb-sec__title"} -->
<h2 class="wp-block-heading sb-sec__title"><?php echo esc_html( shirayami_butoh_t( 'access' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( shirayami_butoh_t( 'access_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( shirayami_butoh_t( 'access_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
