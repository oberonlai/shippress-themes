<?php
/**
 * Title: Commission a book: how it works
 * Slug: hotaru-ehon/contact-main
 * Categories: hotaru-ehon
 * Keywords: picture book, illustration, illustrator
 * Viewport Width: 1440
 * Description: How booking works, the email button and the synced prices, then the synced studio details and directions.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "ht-section ht-contact", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull ht-section ht-contact"><!-- wp:group {"align": "wide", "className": "ht-contact__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide ht-contact__grid"><!-- wp:group {"className": "ht-contact__book", "layout": {"type": "default"}} -->
<div class="wp-block-group ht-contact__book"><!-- wp:heading {"className": "ht-sec__title"} -->
<h2 class="wp-block-heading ht-sec__title"><?php echo esc_html( hotaru_ehon_t( 'how_book' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered": true, "className": "ht-steps"} -->
<ol class="wp-block-list ht-steps"><!-- wp:list-item -->
<li><?php echo esc_html( hotaru_ehon_t( 'b1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( hotaru_ehon_t( 'b2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( hotaru_ehon_t( 'b3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:buttons {"className": "ht-links"} -->
<div class="wp-block-buttons ht-links"><!-- wp:button {"className": "ht-mailto"} -->
<div class="wp-block-button ht-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:studio@hotaruehon.example?subject=' . rawurlencode( hotaru_ehon_t( 'book_subject' ) ) ); ?>"><?php echo esc_html( hotaru_ehon_t( 'email_us' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:pattern {"slug":"hotaru-ehon/rates"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className": "ht-contact__find", "layout": {"type": "default"}} -->
<div class="wp-block-group ht-contact__find"><!-- wp:pattern {"slug":"hotaru-ehon/details"} /-->

<!-- wp:heading {"className": "ht-sec__title"} -->
<h2 class="wp-block-heading ht-sec__title"><?php echo esc_html( hotaru_ehon_t( 'access' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hotaru_ehon_t( 'access_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hotaru_ehon_t( 'access_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
