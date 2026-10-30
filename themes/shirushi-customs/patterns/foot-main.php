<?php
/**
 * Title: Footer
 * Slug: shirushi-customs/foot-main
 * Categories: shirushi-customs
 * Inserter: no
 * Description: Dark footer: wordmark, address, desk hours, page links and the copyright line.
 */
?>
<!-- wp:group {"align":"full","className":"sc-footer","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull sc-footer"><!-- wp:group {"className":"sc-footer__in","layout":{"type":"default"}} -->
<div class="wp-block-group sc-footer__in"><!-- wp:group {"className":"sc-footer__brand","layout":{"type":"default"}} -->
<div class="wp-block-group sc-footer__brand"><!-- wp:paragraph {"className":"sc-brand"} -->
<p class="sc-brand"><a href="/"><?php echo esc_html( sc_t( 'brand' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-footer__p"} -->
<p class="sc-footer__p"><?php echo esc_html( sc_t( 'foot_desk' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-footer__p"} -->
<p class="sc-footer__p"><?php echo esc_html( sc_t( 'foot_hours' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sc-footer__col","layout":{"type":"default"}} -->
<div class="wp-block-group sc-footer__col"><!-- wp:paragraph {"className":"sc-footer__k"} -->
<p class="sc-footer__k"><?php echo esc_html( sc_t( 'foot_contact' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-footer__p"} -->
<p class="sc-footer__p"><a href="tel:+15550142300"><?php echo esc_html( sc_t( 'foot_phone' ) ); ?></a><br><a href="mailto:desk@shirushi-customs.example"><?php echo esc_html( sc_t( 'foot_mail' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sc-footer__col","layout":{"type":"default"}} -->
<div class="wp-block-group sc-footer__col"><!-- wp:paragraph {"className":"sc-footer__k"} -->
<p class="sc-footer__k"><?php echo esc_html( sc_t( 'foot_pages' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:navigation {"overlayMenu":"never","className":"sc-footer__nav","layout":{"type":"flex","orientation":"vertical"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sc-footer__copy"} -->
<p class="sc-footer__copy"><?php echo esc_html( sc_t( 'foot_copy' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
