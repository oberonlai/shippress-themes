<?php
/**
 * Title: Book & find us: booking and directions
 * Slug: hoshizora-camp/contact-main
 * Categories: hoshizora-camp
 * Keywords: glamping, camp, tents
 * Viewport Width: 1440
 * Description: How booking works with an email button and the synced rates, beside the synced camp details and directions.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hz-section hz-contact", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hz-section hz-contact"><!-- wp:group {"align": "wide", "className": "hz-contact__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide hz-contact__grid"><!-- wp:group {"className": "hz-contact__book", "layout": {"type": "default"}} -->
<div class="wp-block-group hz-contact__book"><!-- wp:heading {"className": "hz-sec__title"} -->
<h2 class="wp-block-heading hz-sec__title"><?php echo esc_html( hoshizora_camp_t( 'how_book' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered": true, "className": "hz-steps"} -->
<ol class="wp-block-list hz-steps"><!-- wp:list-item -->
<li><?php echo esc_html( hoshizora_camp_t( 'b1' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( hoshizora_camp_t( 'b2' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( hoshizora_camp_t( 'b3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:buttons {"className": "hz-links"} -->
<div class="wp-block-buttons hz-links"><!-- wp:button {"className": "hz-mailto"} -->
<div class="wp-block-button hz-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:stay@hoshizora.example?subject=' . rawurlencode( hoshizora_camp_t( 'book_subject' ) ) ); ?>"><?php echo esc_html( hoshizora_camp_t( 'email_us' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:pattern {"slug":"hoshizora-camp/rates"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className": "hz-contact__find", "layout": {"type": "default"}} -->
<div class="wp-block-group hz-contact__find"><!-- wp:pattern {"slug":"hoshizora-camp/details"} /-->

<!-- wp:heading {"level": 3, "className": "hz-sec__title"} -->
<h3 class="wp-block-heading hz-sec__title"><?php echo esc_html( hoshizora_camp_t( 'access' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hoshizora_camp_t( 'access_car' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hoshizora_camp_t( 'access_bus' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
