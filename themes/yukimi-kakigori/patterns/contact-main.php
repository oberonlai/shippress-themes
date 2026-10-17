<?php
/**
 * Title: Book a seat: how it works
 * Slug: yukimi-kakigori/contact-main
 * Categories: yukimi-kakigori
 * Keywords: kakigori, shaved ice, dessert
 * Viewport Width: 1440
 * Description: How reservations work, the email button and the synced price list beside the synced parlour details and directions.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "yk-section yk-contact", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull yk-section yk-contact"><!-- wp:group {"align": "wide", "className": "yk-contact__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide yk-contact__grid"><!-- wp:group {"className": "yk-contact__book", "layout": {"type": "default"}} -->
<div class="wp-block-group yk-contact__book"><!-- wp:heading {"className": "yk-sec__title"} -->
<h2 class="wp-block-heading yk-sec__title"><?php echo esc_html( yukimi_kakigori_t( 'how_book' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered": true, "className": "yk-steps"} -->
<ol class="wp-block-list yk-steps"><!-- wp:list-item -->
<li><?php echo esc_html( yukimi_kakigori_t( 'b1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( yukimi_kakigori_t( 'b2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( yukimi_kakigori_t( 'b3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:buttons {"className": "yk-links"} -->
<div class="wp-block-buttons yk-links"><!-- wp:button {"className": "yk-mailto"} -->
<div class="wp-block-button yk-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:studio@yukimikakigori.example?subject=' . rawurlencode( yukimi_kakigori_t( 'book_subject' ) ) ); ?>"><?php echo esc_html( yukimi_kakigori_t( 'email_us' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:pattern {"slug":"yukimi-kakigori/rates"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className": "yk-contact__find", "layout": {"type": "default"}} -->
<div class="wp-block-group yk-contact__find"><!-- wp:pattern {"slug":"yukimi-kakigori/details"} /-->

<!-- wp:heading {"className": "yk-sec__title"} -->
<h2 class="wp-block-heading yk-sec__title"><?php echo esc_html( yukimi_kakigori_t( 'access' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( yukimi_kakigori_t( 'access_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( yukimi_kakigori_t( 'access_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
