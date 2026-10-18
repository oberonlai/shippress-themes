<?php
/**
 * Title: Quote: how it works
 * Slug: seimitsu-works/contact-main
 * Categories: seimitsu-works
 * Keywords: manufacturing, machining, precision parts
 * Viewport Width: 1440
 * Description: How booking works, the email button and the synced fees beside the synced office details and directions.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sw-section sw-contact", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sw-section sw-contact"><!-- wp:group {"align": "wide", "className": "sw-contact__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide sw-contact__grid"><!-- wp:group {"className": "sw-contact__book", "layout": {"type": "default"}} -->
<div class="wp-block-group sw-contact__book"><!-- wp:heading {"className": "sw-sec__title"} -->
<h2 class="wp-block-heading sw-sec__title"><?php echo esc_html( seimitsu_works_t( 'how_book' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered": true, "className": "sw-steps"} -->
<ol class="wp-block-list sw-steps"><!-- wp:list-item -->
<li><?php echo esc_html( seimitsu_works_t( 'b1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( seimitsu_works_t( 'b2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( seimitsu_works_t( 'b3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:buttons {"className": "sw-links"} -->
<div class="wp-block-buttons sw-links"><!-- wp:button {"className": "sw-mailto"} -->
<div class="wp-block-button sw-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:hello@seimitsuworks.example?subject=' . rawurlencode( seimitsu_works_t( 'book_subject' ) ) ); ?>"><?php echo esc_html( seimitsu_works_t( 'email_us' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:pattern {"slug":"seimitsu-works/rates"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className": "sw-contact__find", "layout": {"type": "default"}} -->
<div class="wp-block-group sw-contact__find"><!-- wp:pattern {"slug":"seimitsu-works/details"} /-->

<!-- wp:heading {"className": "sw-sec__title"} -->
<h2 class="wp-block-heading sw-sec__title"><?php echo esc_html( seimitsu_works_t( 'access' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( seimitsu_works_t( 'access_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( seimitsu_works_t( 'access_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
