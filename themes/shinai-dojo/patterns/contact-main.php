<?php
/**
 * Title: Trial class: how it works
 * Slug: shinai-dojo/contact-main
 * Categories: shinai-dojo
 * Keywords: kendo, dojo, martial arts
 * Viewport Width: 1440
 * Description: How a trial class works, the email button and the synced fees beside the synced dojo details and directions.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sd-section sd-contact", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sd-section sd-contact"><!-- wp:group {"align": "wide", "className": "sd-contact__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide sd-contact__grid"><!-- wp:group {"className": "sd-contact__book", "layout": {"type": "default"}} -->
<div class="wp-block-group sd-contact__book"><!-- wp:heading {"className": "sd-sec__title"} -->
<h2 class="wp-block-heading sd-sec__title"><?php echo esc_html( shinai_dojo_t( 'how_book' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered": true, "className": "sd-steps"} -->
<ol class="wp-block-list sd-steps"><!-- wp:list-item -->
<li><?php echo esc_html( shinai_dojo_t( 'b1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( shinai_dojo_t( 'b2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( shinai_dojo_t( 'b3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:buttons {"className": "sd-links"} -->
<div class="wp-block-buttons sd-links"><!-- wp:button {"className": "sd-mailto"} -->
<div class="wp-block-button sd-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:studio@shinaidojo.example?subject=' . rawurlencode( shinai_dojo_t( 'book_subject' ) ) ); ?>"><?php echo esc_html( shinai_dojo_t( 'email_us' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:pattern {"slug":"shinai-dojo/rates"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className": "sd-contact__find", "layout": {"type": "default"}} -->
<div class="wp-block-group sd-contact__find"><!-- wp:pattern {"slug":"shinai-dojo/details"} /-->

<!-- wp:heading {"className": "sd-sec__title"} -->
<h2 class="wp-block-heading sd-sec__title"><?php echo esc_html( shinai_dojo_t( 'access' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( shinai_dojo_t( 'access_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( shinai_dojo_t( 'access_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
