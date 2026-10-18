<?php
/**
 * Title: Book a seat: how it works
 * Slug: mamori-hoken/contact-main
 * Categories: mamori-hoken
 * Keywords: insurance, agency, advice
 * Viewport Width: 1440
 * Description: How booking works, the email button and the synced price list beside the synced shop details and directions.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "mh-section mh-contact", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull mh-section mh-contact"><!-- wp:group {"align": "wide", "className": "mh-contact__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide mh-contact__grid"><!-- wp:group {"className": "mh-contact__book", "layout": {"type": "default"}} -->
<div class="wp-block-group mh-contact__book"><!-- wp:heading {"className": "mh-sec__title"} -->
<h2 class="wp-block-heading mh-sec__title"><?php echo esc_html( mamori_hoken_t( 'how_book' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered": true, "className": "mh-steps"} -->
<ol class="wp-block-list mh-steps"><!-- wp:list-item -->
<li><?php echo esc_html( mamori_hoken_t( 'b1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( mamori_hoken_t( 'b2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( mamori_hoken_t( 'b3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:buttons {"className": "mh-links"} -->
<div class="wp-block-buttons mh-links"><!-- wp:button {"className": "mh-mailto"} -->
<div class="wp-block-button mh-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:studio@mamorihoken.example?subject=' . rawurlencode( mamori_hoken_t( 'book_subject' ) ) ); ?>"><?php echo esc_html( mamori_hoken_t( 'email_us' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:pattern {"slug":"mamori-hoken/rates"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className": "mh-contact__find", "layout": {"type": "default"}} -->
<div class="wp-block-group mh-contact__find"><!-- wp:pattern {"slug":"mamori-hoken/details"} /-->

<!-- wp:heading {"className": "mh-sec__title"} -->
<h2 class="wp-block-heading mh-sec__title"><?php echo esc_html( mamori_hoken_t( 'access' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( mamori_hoken_t( 'access_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( mamori_hoken_t( 'access_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
