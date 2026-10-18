<?php
/**
 * Title: Trial lesson: how it works
 * Slug: manabi-juku/contact-main
 * Categories: manabi-juku
 * Keywords: school, tutoring, courses
 * Viewport Width: 1440
 * Description: How booking works, the email button and the synced fees beside the synced office details and directions.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "mj-section mj-contact", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull mj-section mj-contact"><!-- wp:group {"align": "wide", "className": "mj-contact__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide mj-contact__grid"><!-- wp:group {"className": "mj-contact__book", "layout": {"type": "default"}} -->
<div class="wp-block-group mj-contact__book"><!-- wp:heading {"className": "mj-sec__title"} -->
<h2 class="wp-block-heading mj-sec__title"><?php echo esc_html( manabi_juku_t( 'how_book' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered": true, "className": "mj-steps"} -->
<ol class="wp-block-list mj-steps"><!-- wp:list-item -->
<li><?php echo esc_html( manabi_juku_t( 'b1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( manabi_juku_t( 'b2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( manabi_juku_t( 'b3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:buttons {"className": "mj-links"} -->
<div class="wp-block-buttons mj-links"><!-- wp:button {"className": "mj-mailto"} -->
<div class="wp-block-button mj-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:hello@manabijuku.example?subject=' . rawurlencode( manabi_juku_t( 'book_subject' ) ) ); ?>"><?php echo esc_html( manabi_juku_t( 'email_us' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:pattern {"slug":"manabi-juku/rates"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className": "mj-contact__find", "layout": {"type": "default"}} -->
<div class="wp-block-group mj-contact__find"><!-- wp:pattern {"slug":"manabi-juku/details"} /-->

<!-- wp:heading {"className": "mj-sec__title"} -->
<h2 class="wp-block-heading mj-sec__title"><?php echo esc_html( manabi_juku_t( 'access' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( manabi_juku_t( 'access_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( manabi_juku_t( 'access_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
