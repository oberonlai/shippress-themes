<?php
/**
 * Title: Book a seat: how it works
 * Slug: kotonoha-honyaku/contact-main
 * Categories: kotonoha-honyaku
 * Keywords: translation, interpreting, languages
 * Viewport Width: 1440
 * Description: How a quote works, the email button and the synced rates beside the synced studio details and directions.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kh-section kh-contact", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kh-section kh-contact"><!-- wp:group {"align": "wide", "className": "kh-contact__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide kh-contact__grid"><!-- wp:group {"className": "kh-contact__book", "layout": {"type": "default"}} -->
<div class="wp-block-group kh-contact__book"><!-- wp:heading {"className": "kh-sec__title"} -->
<h2 class="wp-block-heading kh-sec__title"><?php echo esc_html( kotonoha_honyaku_t( 'how_book' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered": true, "className": "kh-steps"} -->
<ol class="wp-block-list kh-steps"><!-- wp:list-item -->
<li><?php echo esc_html( kotonoha_honyaku_t( 'b1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( kotonoha_honyaku_t( 'b2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( kotonoha_honyaku_t( 'b3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:buttons {"className": "kh-links"} -->
<div class="wp-block-buttons kh-links"><!-- wp:button {"className": "kh-mailto"} -->
<div class="wp-block-button kh-mailto"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:studio@kotonohahonyaku.example?subject=' . rawurlencode( kotonoha_honyaku_t( 'book_subject' ) ) ); ?>"><?php echo esc_html( kotonoha_honyaku_t( 'email_us' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:pattern {"slug":"kotonoha-honyaku/rates"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className": "kh-contact__find", "layout": {"type": "default"}} -->
<div class="wp-block-group kh-contact__find"><!-- wp:pattern {"slug":"kotonoha-honyaku/details"} /-->

<!-- wp:heading {"className": "kh-sec__title"} -->
<h2 class="wp-block-heading kh-sec__title"><?php echo esc_html( kotonoha_honyaku_t( 'access' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( kotonoha_honyaku_t( 'access_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( kotonoha_honyaku_t( 'access_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
