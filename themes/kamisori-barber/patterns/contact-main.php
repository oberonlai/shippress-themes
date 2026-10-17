<?php
/**
 * Title: Book a chair: how it works
 * Slug: kamisori-barber/contact-main
 * Categories: kamisori-barber
 * Keywords: barber, barbershop, shave
 * Viewport Width: 1440
 * Description: How booking works, the email button and the synced prices, then the synced shop details and directions.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kb-section kb-contact", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kb-section kb-contact"><!-- wp:group {"align": "wide", "className": "kb-contact__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide kb-contact__grid"><!-- wp:group {"className": "kb-contact__book", "layout": {"type": "default"}} -->
<div class="wp-block-group kb-contact__book"><!-- wp:heading {"className": "kb-sec__title"} -->
<h2 class="wp-block-heading kb-sec__title"><?php echo esc_html( kamisori_barber_t( 'how_book' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered": true, "className": "kb-steps"} -->
<ol class="wp-block-list kb-steps"><!-- wp:list-item -->
<li><?php echo esc_html( kamisori_barber_t( 'b1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( kamisori_barber_t( 'b2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( kamisori_barber_t( 'b3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:buttons {"className": "kb-links"} -->
<div class="wp-block-buttons kb-links"><!-- wp:button {"className": "kb-mailto"} -->
<div class="wp-block-button kb-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:studio@kamisoribarber.example?subject=' . rawurlencode( kamisori_barber_t( 'book_subject' ) ) ); ?>"><?php echo esc_html( kamisori_barber_t( 'email_us' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:pattern {"slug":"kamisori-barber/rates"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className": "kb-contact__find", "layout": {"type": "default"}} -->
<div class="wp-block-group kb-contact__find"><!-- wp:pattern {"slug":"kamisori-barber/details"} /-->

<!-- wp:heading {"className": "kb-sec__title"} -->
<h2 class="wp-block-heading kb-sec__title"><?php echo esc_html( kamisori_barber_t( 'access' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( kamisori_barber_t( 'access_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( kamisori_barber_t( 'access_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
