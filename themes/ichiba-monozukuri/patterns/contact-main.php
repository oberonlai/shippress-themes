<?php
/**
 * Title: Visit & exhibit: apply and directions
 * Slug: ichiba-monozukuri/contact-main
 * Categories: ichiba-monozukuri
 * Keywords: craft market, makers, handmade
 * Viewport Width: 1440
 * Description: How to apply for a stall with an email button and the synced fees, beside the synced market details and directions.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "im-section im-contact", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull im-section im-contact"><!-- wp:group {"align": "wide", "className": "im-contact__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide im-contact__grid"><!-- wp:group {"className": "im-contact__book", "layout": {"type": "default"}} -->
<div class="wp-block-group im-contact__book"><!-- wp:heading {"className": "im-sec__title"} -->
<h2 class="wp-block-heading im-sec__title"><?php echo esc_html( ichiba_monozukuri_t( 'how_book' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered": true, "className": "im-steps"} -->
<ol class="wp-block-list im-steps"><!-- wp:list-item -->
<li><?php echo esc_html( ichiba_monozukuri_t( 'b1' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( ichiba_monozukuri_t( 'b2' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( ichiba_monozukuri_t( 'b3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:buttons {"className": "im-links"} -->
<div class="wp-block-buttons im-links"><!-- wp:button {"className": "im-mailto"} -->
<div class="wp-block-button im-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:hello@ichiba-monozukuri.example?subject=' . rawurlencode( ichiba_monozukuri_t( 'book_subject' ) ) ); ?>"><?php echo esc_html( ichiba_monozukuri_t( 'email_us' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:pattern {"slug":"ichiba-monozukuri/rates"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className": "im-contact__find", "layout": {"type": "default"}} -->
<div class="wp-block-group im-contact__find"><!-- wp:pattern {"slug":"ichiba-monozukuri/details"} /-->

<!-- wp:heading {"level": 3, "className": "im-sec__title"} -->
<h3 class="wp-block-heading im-sec__title"><?php echo esc_html( ichiba_monozukuri_t( 'access' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( ichiba_monozukuri_t( 'access_car' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( ichiba_monozukuri_t( 'access_bus' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
