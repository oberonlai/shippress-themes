<?php
/**
 * Title: Commissions: how it works and the studio
 * Slug: koma-manga/contact-main
 * Categories: koma-manga
 * Keywords: manga, comics, illustration
 * Viewport Width: 1440
 * Description: How a commission works with an email button and the synced prices, beside the synced studio details and directions.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "km-section km-contact", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull km-section km-contact"><!-- wp:group {"align": "wide", "className": "km-contact__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide km-contact__grid"><!-- wp:group {"className": "km-contact__book", "layout": {"type": "default"}} -->
<div class="wp-block-group km-contact__book"><!-- wp:heading {"className": "km-sec__title"} -->
<h2 class="wp-block-heading km-sec__title"><?php echo esc_html( koma_manga_t( 'how_book' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered": true, "className": "km-steps"} -->
<ol class="wp-block-list km-steps"><!-- wp:list-item -->
<li><?php echo esc_html( koma_manga_t( 'b1' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( koma_manga_t( 'b2' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( koma_manga_t( 'b3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:buttons {"className": "km-links"} -->
<div class="wp-block-buttons km-links"><!-- wp:button {"className": "km-mailto"} -->
<div class="wp-block-button km-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:studio@komamanga.example?subject=' . rawurlencode( koma_manga_t( 'book_subject' ) ) ); ?>"><?php echo esc_html( koma_manga_t( 'email_us' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:pattern {"slug":"koma-manga/rates"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className": "km-contact__find", "layout": {"type": "default"}} -->
<div class="wp-block-group km-contact__find"><!-- wp:pattern {"slug":"koma-manga/details"} /-->

<!-- wp:heading {"level": 3, "className": "km-sec__title"} -->
<h3 class="wp-block-heading km-sec__title"><?php echo esc_html( koma_manga_t( 'access' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( koma_manga_t( 'access_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( koma_manga_t( 'access_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
