<?php
/**
 * Title: Book a seat: how it works
 * Slug: totonou-sauna/contact-main
 * Categories: totonou-sauna
 * Keywords: sauna, bathhouse, cold plunge
 * Viewport Width: 1440
 * Description: How booking works, the email button and the synced price list beside the synced sauna details and directions.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tn-section tn-contact", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tn-section tn-contact"><!-- wp:group {"align": "wide", "className": "tn-contact__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide tn-contact__grid"><!-- wp:group {"className": "tn-contact__book", "layout": {"type": "default"}} -->
<div class="wp-block-group tn-contact__book"><!-- wp:heading {"className": "tn-sec__title"} -->
<h2 class="wp-block-heading tn-sec__title"><?php echo esc_html( totonou_sauna_t( 'how_book' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered": true, "className": "tn-steps"} -->
<ol class="wp-block-list tn-steps"><!-- wp:list-item -->
<li><?php echo esc_html( totonou_sauna_t( 'b1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( totonou_sauna_t( 'b2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( totonou_sauna_t( 'b3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:buttons {"className": "tn-links"} -->
<div class="wp-block-buttons tn-links"><!-- wp:button {"className": "tn-mailto"} -->
<div class="wp-block-button tn-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:studio@totonousauna.example?subject=' . rawurlencode( totonou_sauna_t( 'book_subject' ) ) ); ?>"><?php echo esc_html( totonou_sauna_t( 'email_us' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:pattern {"slug":"totonou-sauna/rates"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className": "tn-contact__find", "layout": {"type": "default"}} -->
<div class="wp-block-group tn-contact__find"><!-- wp:pattern {"slug":"totonou-sauna/details"} /-->

<!-- wp:heading {"className": "tn-sec__title"} -->
<h2 class="wp-block-heading tn-sec__title"><?php echo esc_html( totonou_sauna_t( 'access' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( totonou_sauna_t( 'access_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( totonou_sauna_t( 'access_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
