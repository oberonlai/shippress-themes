<?php
/**
 * Title: Book a trial: how it works and the studio
 * Slug: shinayaka-pilates/contact-main
 * Categories: shinayaka-pilates
 * Keywords: pilates, studio, wellness
 * Viewport Width: 1440
 * Description: How booking works with an email button and the synced prices, beside the synced studio details and directions.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sp-section sp-contact", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sp-section sp-contact"><!-- wp:group {"align": "wide", "className": "sp-contact__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide sp-contact__grid"><!-- wp:group {"className": "sp-contact__book", "layout": {"type": "default"}} -->
<div class="wp-block-group sp-contact__book"><!-- wp:heading {"className": "sp-sec__title"} -->
<h2 class="wp-block-heading sp-sec__title"><?php echo esc_html( shinayaka_pilates_t( 'how_book' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered": true, "className": "sp-steps"} -->
<ol class="wp-block-list sp-steps"><!-- wp:list-item -->
<li><?php echo esc_html( shinayaka_pilates_t( 'b1' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( shinayaka_pilates_t( 'b2' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( shinayaka_pilates_t( 'b3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:buttons {"className": "sp-links"} -->
<div class="wp-block-buttons sp-links"><!-- wp:button {"className": "sp-mailto"} -->
<div class="wp-block-button sp-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:studio@shinayaka.example?subject=' . rawurlencode( shinayaka_pilates_t( 'book_subject' ) ) ); ?>"><?php echo esc_html( shinayaka_pilates_t( 'email_us' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:pattern {"slug":"shinayaka-pilates/rates"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className": "sp-contact__find", "layout": {"type": "default"}} -->
<div class="wp-block-group sp-contact__find"><!-- wp:pattern {"slug":"shinayaka-pilates/details"} /-->

<!-- wp:heading {"level": 3, "className": "sp-sec__title"} -->
<h3 class="wp-block-heading sp-sec__title"><?php echo esc_html( shinayaka_pilates_t( 'access' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( shinayaka_pilates_t( 'access_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( shinayaka_pilates_t( 'access_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
