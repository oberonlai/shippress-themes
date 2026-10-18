<?php
/**
 * Title: Book a seat: how it works
 * Slug: hiyoko-kindergarten/contact-main
 * Categories: hiyoko-kindergarten
 * Keywords: kindergarten, nursery, school
 * Viewport Width: 1440
 * Description: How booking works, the email button and the synced price list beside the synced shop details and directions.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hk-section hk-contact", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hk-section hk-contact"><!-- wp:group {"align": "wide", "className": "hk-contact__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide hk-contact__grid"><!-- wp:group {"className": "hk-contact__book", "layout": {"type": "default"}} -->
<div class="wp-block-group hk-contact__book"><!-- wp:heading {"className": "hk-sec__title"} -->
<h2 class="wp-block-heading hk-sec__title"><?php echo esc_html( hiyoko_kindergarten_t( 'how_book' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered": true, "className": "hk-steps"} -->
<ol class="wp-block-list hk-steps"><!-- wp:list-item -->
<li><?php echo esc_html( hiyoko_kindergarten_t( 'b1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( hiyoko_kindergarten_t( 'b2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( hiyoko_kindergarten_t( 'b3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:buttons {"className": "hk-links"} -->
<div class="wp-block-buttons hk-links"><!-- wp:button {"className": "hk-mailto"} -->
<div class="wp-block-button hk-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:studio@hiyokokindergarten.example?subject=' . rawurlencode( hiyoko_kindergarten_t( 'book_subject' ) ) ); ?>"><?php echo esc_html( hiyoko_kindergarten_t( 'email_us' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:pattern {"slug":"hiyoko-kindergarten/rates"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className": "hk-contact__find", "layout": {"type": "default"}} -->
<div class="wp-block-group hk-contact__find"><!-- wp:pattern {"slug":"hiyoko-kindergarten/details"} /-->

<!-- wp:heading {"className": "hk-sec__title"} -->
<h2 class="wp-block-heading hk-sec__title"><?php echo esc_html( hiyoko_kindergarten_t( 'access' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hiyoko_kindergarten_t( 'access_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hiyoko_kindergarten_t( 'access_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
