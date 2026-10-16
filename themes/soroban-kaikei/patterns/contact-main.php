<?php
/**
 * Title: Reserve: how it works and the office
 * Slug: soroban-kaikei/contact-main
 * Categories: soroban-kaikei
 * Keywords: tax, accountant, bookkeeping
 * Viewport Width: 1440
 * Description: How reserving works with an email button and the synced fees, beside the synced office details and directions.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sk-section sk-contact", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sk-section sk-contact"><!-- wp:group {"align": "wide", "className": "sk-contact__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide sk-contact__grid"><!-- wp:group {"className": "sk-contact__book", "layout": {"type": "default"}} -->
<div class="wp-block-group sk-contact__book"><!-- wp:heading {"className": "sk-sec__title"} -->
<h2 class="wp-block-heading sk-sec__title"><?php echo esc_html( soroban_kaikei_t( 'how_book' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered": true, "className": "sk-steps"} -->
<ol class="wp-block-list sk-steps"><!-- wp:list-item -->
<li><?php echo esc_html( soroban_kaikei_t( 'b1' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( soroban_kaikei_t( 'b2' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( soroban_kaikei_t( 'b3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:buttons {"className": "sk-links"} -->
<div class="wp-block-buttons sk-links"><!-- wp:button {"className": "sk-mailto"} -->
<div class="wp-block-button sk-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:hello@kanmidokoro.example?subject=' . rawurlencode( soroban_kaikei_t( 'book_subject' ) ) ); ?>"><?php echo esc_html( soroban_kaikei_t( 'email_us' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:pattern {"slug":"soroban-kaikei/rates"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className": "sk-contact__find", "layout": {"type": "default"}} -->
<div class="wp-block-group sk-contact__find"><!-- wp:pattern {"slug":"soroban-kaikei/details"} /-->

<!-- wp:heading {"level": 3, "className": "sk-sec__title"} -->
<h3 class="wp-block-heading sk-sec__title"><?php echo esc_html( soroban_kaikei_t( 'access' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( soroban_kaikei_t( 'access_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( soroban_kaikei_t( 'access_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
