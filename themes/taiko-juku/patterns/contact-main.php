<?php
/**
 * Title: Join: trial class and directions
 * Slug: taiko-juku/contact-main
 * Categories: taiko-juku
 * Keywords: taiko, drumming, classes
 * Viewport Width: 1440
 * Description: How to join with an email button and the synced fees, beside the synced dojo details and directions.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tj-section tj-contact", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tj-section tj-contact"><!-- wp:group {"align": "wide", "className": "tj-contact__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide tj-contact__grid"><!-- wp:group {"className": "tj-contact__book", "layout": {"type": "default"}} -->
<div class="wp-block-group tj-contact__book"><!-- wp:heading {"className": "tj-sec__title"} -->
<h2 class="wp-block-heading tj-sec__title"><?php echo esc_html( taiko_juku_t( 'how_book' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered": true, "className": "tj-steps"} -->
<ol class="wp-block-list tj-steps"><!-- wp:list-item -->
<li><?php echo esc_html( taiko_juku_t( 'b1' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( taiko_juku_t( 'b2' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( taiko_juku_t( 'b3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:buttons {"className": "tj-links"} -->
<div class="wp-block-buttons tj-links"><!-- wp:button {"className": "tj-mailto"} -->
<div class="wp-block-button tj-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:dojo@taikojuku.example?subject=' . rawurlencode( taiko_juku_t( 'book_subject' ) ) ); ?>"><?php echo esc_html( taiko_juku_t( 'email_us' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:pattern {"slug":"taiko-juku/rates"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className": "tj-contact__find", "layout": {"type": "default"}} -->
<div class="wp-block-group tj-contact__find"><!-- wp:pattern {"slug":"taiko-juku/details"} /-->

<!-- wp:heading {"level": 3, "className": "tj-sec__title"} -->
<h3 class="wp-block-heading tj-sec__title"><?php echo esc_html( taiko_juku_t( 'access' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( taiko_juku_t( 'access_car' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( taiko_juku_t( 'access_bus' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
