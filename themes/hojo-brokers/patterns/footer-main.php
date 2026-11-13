<?php
/**
 * Title: Footer: details, links and renewal notes
 * Slug: hojo-brokers/footer-main
 * Categories: hojo-brokers
 * Keywords: footer
 * Viewport Width: 1440
 * Description: Ink footer with the firm details, the page links, the newsletter slot and the copyright line.
 */
?>
<!-- wp:group {"align":"full","className":"hb-footer","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hb-footer"><!-- wp:group {"className":"hb-wrap hb-footer__in","layout":{"type":"default"}} -->
<div class="wp-block-group hb-wrap hb-footer__in"><!-- wp:group {"className":"hb-footer__id","layout":{"type":"default"}} -->
<div class="wp-block-group hb-footer__id"><!-- wp:paragraph {"className":"hb-footer__name"} -->
<p class="hb-footer__name"><?php echo wp_kses_post( hojo_brokers_t( 'k3ed639d0' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( hojo_brokers_t( 'k1b07cd01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hb-footer__lines"} -->
<p class="hb-footer__lines"><?php echo wp_kses_post( hojo_brokers_t( 'k4626668b' ) ); ?><br><?php echo wp_kses_post( hojo_brokers_t( 'k70c38b82' ) ); ?><br>+00 41 2290 6604<br><a href="mailto:review@hojobrokers.example"><?php echo wp_kses_post( hojo_brokers_t( 'kabfcf041' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<ul class="hb-flinks"><li><a href="/covers/"><?php echo wp_kses_post( hojo_brokers_t( 'k3c74d67f' ) ); ?></a></li><li><a href="/trades/"><?php echo wp_kses_post( hojo_brokers_t( 'k18da2603' ) ); ?></a></li><li><a href="/review/"><?php echo wp_kses_post( hojo_brokers_t( 'k197daf37' ) ); ?></a></li><li><a href="/fees/"><?php echo wp_kses_post( hojo_brokers_t( 'k006300ef' ) ); ?></a></li><li><a href="/about/"><?php echo wp_kses_post( hojo_brokers_t( 'k362977a2' ) ); ?></a></li><li><a href="/claims/"><?php echo wp_kses_post( hojo_brokers_t( 'k64c4aa9c' ) ); ?></a></li><li><a href="/cases/"><?php echo wp_kses_post( hojo_brokers_t( 'kb1f0b866' ) ); ?></a></li><li><a href="/news/"><?php echo wp_kses_post( hojo_brokers_t( 'kdd1ba187' ) ); ?></a></li><li><a href="/newsletter/"><?php echo wp_kses_post( hojo_brokers_t( 'kffb7e666' ) ); ?></a></li><li><a href="/contact/"><?php echo wp_kses_post( hojo_brokers_t( 'kbbaff128' ) ); ?></a></li><li><a href="/privacy/"><?php echo wp_kses_post( hojo_brokers_t( 'kc5f29bb3' ) ); ?></a></li><li><a href="/terms/"><?php echo wp_kses_post( hojo_brokers_t( 'k6f1bf85c' ) ); ?></a></li></ul>
<!-- /wp:html -->

<!-- wp:group {"className":"hb-footer__letter","layout":{"type":"default"}} -->
<div class="wp-block-group hb-footer__letter"><!-- wp:paragraph {"className":"hb-footer__lh"} -->
<p class="hb-footer__lh"><?php echo wp_kses_post( hojo_brokers_t( 'k739aadc3' ) ); ?></p>
<!-- /wp:paragraph -->

<?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'review@hojobrokers.example', 'label' => hojo_brokers_t( 'forms_email' ), 'submit' => hojo_brokers_t( 'forms_subscribe' ), 'notice' => hojo_brokers_t( 'forms_mail_notice' ), 'subject' => hojo_brokers_t( 'forms_mail_subject' ) ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hb-copy"} -->
<p class="hb-copy"><?php echo wp_kses_post( hojo_brokers_t( 'k1e224391' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
