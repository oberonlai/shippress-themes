<?php
/**
 * Title: Book a first call: how it works
 * Slug: michishirube-consulting/contact-main
 * Categories: michishirube-consulting
 * Keywords: consulting, management, strategy
 * Viewport Width: 1440
 * Description: How booking works, the email button and the synced price list beside the synced shop details and directions.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "mc-section mc-contact", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull mc-section mc-contact"><!-- wp:group {"align": "wide", "className": "mc-contact__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide mc-contact__grid"><!-- wp:group {"className": "mc-contact__book", "layout": {"type": "default"}} -->
<div class="wp-block-group mc-contact__book"><!-- wp:heading {"className": "mc-sec__title"} -->
<h2 class="wp-block-heading mc-sec__title"><?php echo esc_html( michishirube_consulting_t( 'how_book' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered": true, "className": "mc-steps"} -->
<ol class="wp-block-list mc-steps"><!-- wp:list-item -->
<li><?php echo esc_html( michishirube_consulting_t( 'b1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( michishirube_consulting_t( 'b2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( michishirube_consulting_t( 'b3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:buttons {"className": "mc-links"} -->
<div class="wp-block-buttons mc-links"><!-- wp:button {"className": "mc-mailto"} -->
<div class="wp-block-button mc-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:studio@michishirube-consulting.example?subject=' . rawurlencode( michishirube_consulting_t( 'book_subject' ) ) ); ?>"><?php echo esc_html( michishirube_consulting_t( 'email_us' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:pattern {"slug":"michishirube-consulting/rates"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className": "mc-contact__find", "layout": {"type": "default"}} -->
<div class="wp-block-group mc-contact__find"><!-- wp:pattern {"slug":"michishirube-consulting/details"} /-->

<!-- wp:heading {"className": "mc-sec__title"} -->
<h2 class="wp-block-heading mc-sec__title"><?php echo esc_html( michishirube_consulting_t( 'access' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( michishirube_consulting_t( 'access_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( michishirube_consulting_t( 'access_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
