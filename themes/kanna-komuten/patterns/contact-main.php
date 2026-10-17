<?php
/**
 * Title: Request a survey: how it works
 * Slug: kanna-komuten/contact-main
 * Categories: kanna-komuten
 * Keywords: carpenter, machiya, renovation
 * Viewport Width: 1440
 * Description: How a survey works, the email button and the synced price guide beside the synced workshop details and directions.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kn-section kn-contact", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kn-section kn-contact"><!-- wp:group {"align": "wide", "className": "kn-contact__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide kn-contact__grid"><!-- wp:group {"className": "kn-contact__book", "layout": {"type": "default"}} -->
<div class="wp-block-group kn-contact__book"><!-- wp:heading {"className": "kn-sec__title"} -->
<h2 class="wp-block-heading kn-sec__title"><?php echo esc_html( kanna_komuten_t( 'how_book' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered": true, "className": "kn-steps"} -->
<ol class="wp-block-list kn-steps"><!-- wp:list-item -->
<li><?php echo esc_html( kanna_komuten_t( 'b1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( kanna_komuten_t( 'b2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( kanna_komuten_t( 'b3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:buttons {"className": "kn-links"} -->
<div class="wp-block-buttons kn-links"><!-- wp:button {"className": "kn-mailto"} -->
<div class="wp-block-button kn-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:workshop@kannakomuten.example?subject=' . rawurlencode( kanna_komuten_t( 'book_subject' ) ) ); ?>"><?php echo esc_html( kanna_komuten_t( 'email_us' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:pattern {"slug":"kanna-komuten/rates"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className": "kn-contact__find", "layout": {"type": "default"}} -->
<div class="wp-block-group kn-contact__find"><!-- wp:pattern {"slug":"kanna-komuten/details"} /-->

<!-- wp:heading {"className": "kn-sec__title"} -->
<h2 class="wp-block-heading kn-sec__title"><?php echo esc_html( kanna_komuten_t( 'access' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( kanna_komuten_t( 'access_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( kanna_komuten_t( 'access_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
