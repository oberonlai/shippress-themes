<?php
/**
 * Title: Trial lesson: how it works
 * Slug: fukusa-chado/contact-main
 * Categories: fukusa-chado
 * Keywords: tea ceremony, matcha, lessons
 * Viewport Width: 1440
 * Description: How booking works, the email button and the synced fees beside the synced school details and directions.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "fc-section fc-contact", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull fc-section fc-contact"><!-- wp:group {"align": "wide", "className": "fc-contact__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide fc-contact__grid"><!-- wp:group {"className": "fc-contact__book", "layout": {"type": "default"}} -->
<div class="wp-block-group fc-contact__book"><!-- wp:heading {"className": "fc-sec__title"} -->
<h2 class="wp-block-heading fc-sec__title"><?php echo esc_html( fukusa_chado_t( 'how_book' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered": true, "className": "fc-steps"} -->
<ol class="wp-block-list fc-steps"><!-- wp:list-item -->
<li><?php echo esc_html( fukusa_chado_t( 'b1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( fukusa_chado_t( 'b2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( fukusa_chado_t( 'b3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:buttons {"className": "fc-links"} -->
<div class="wp-block-buttons fc-links"><!-- wp:button {"className": "fc-mailto"} -->
<div class="wp-block-button fc-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:lessons@fukusachado.example?subject=' . rawurlencode( fukusa_chado_t( 'book_subject' ) ) ); ?>"><?php echo esc_html( fukusa_chado_t( 'email_us' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:pattern {"slug":"fukusa-chado/rates"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className": "fc-contact__find", "layout": {"type": "default"}} -->
<div class="wp-block-group fc-contact__find"><!-- wp:pattern {"slug":"fukusa-chado/details"} /-->

<!-- wp:heading {"className": "fc-sec__title"} -->
<h2 class="wp-block-heading fc-sec__title"><?php echo esc_html( fukusa_chado_t( 'access' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( fukusa_chado_t( 'access_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( fukusa_chado_t( 'access_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
