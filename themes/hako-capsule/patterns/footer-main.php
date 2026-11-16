<?php
/**
 * Title: Footer: wordmark, address, hours and links
 * Slug: hako-capsule/footer-main
 * Categories: hako-capsule
 * Keywords: capsule hotel, pods, station
 * Viewport Width: 1440
 * Inserter: no
 * Description: White footer under a 1px ink rule: small wordmark, address, hours, the e-mail address, all page links and the copyright line.
 */
?>
<!-- wp:group {"className":"hk-footer","layout":{"type":"default"}} -->
<div class="wp-block-group hk-footer"><!-- wp:group {"className":"hk-footer__top","layout":{"type":"default"}} -->
<div class="wp-block-group hk-footer__top"><!-- wp:group {"className":"hk-footer__brand","layout":{"type":"default"}} -->
<div class="wp-block-group hk-footer__brand"><!-- wp:paragraph {"className":"hk-wordmark hk-wordmark--s"} -->
<p class="hk-wordmark hk-wordmark--s"><a href="<?php echo hako_capsule_url( '/' ); ?>"><?php echo esc_html( hako_capsule_t( 'wm_name' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-footer__addr"} -->
<p class="hk-footer__addr"><?php echo esc_html( hako_capsule_t( 'foot_addr' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-footer__addr"} -->
<p class="hk-footer__addr"><?php echo esc_html( hako_capsule_t( 'foot_hours' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-footer__addr"} -->
<p class="hk-footer__addr"><a href="mailto:<?php echo esc_attr( hako_capsule_t( 'foot_mail' ) ); ?>"><?php echo esc_html( hako_capsule_t( 'foot_mail' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hk-footer__links"} -->
<p class="hk-footer__links"><a href="<?php echo hako_capsule_url( '/pods/' ); ?>"><?php echo esc_html( hako_capsule_t( 'fl_pods' ) ); ?></a> <a href="<?php echo hako_capsule_url( '/prices/' ); ?>"><?php echo esc_html( hako_capsule_t( 'fl_compare' ) ); ?></a> <a href="<?php echo hako_capsule_url( '/showers/' ); ?>"><?php echo esc_html( hako_capsule_t( 'fl_showers' ) ); ?></a> <a href="<?php echo hako_capsule_url( '/house-rules/' ); ?>"><?php echo esc_html( hako_capsule_t( 'fl_rules' ) ); ?></a> <a href="<?php echo hako_capsule_url( '/access/' ); ?>"><?php echo esc_html( hako_capsule_t( 'fl_access' ) ); ?></a> <a href="<?php echo hako_capsule_url( '/about/' ); ?>"><?php echo esc_html( hako_capsule_t( 'fl_about' ) ); ?></a> <a href="<?php echo hako_capsule_url( '/book/' ); ?>"><?php echo esc_html( hako_capsule_t( 'fl_book' ) ); ?></a> <a href="<?php echo hako_capsule_url( '/journal/' ); ?>"><?php echo esc_html( hako_capsule_t( 'fl_journal' ) ); ?></a> <a href="<?php echo hako_capsule_url( '/faq/' ); ?>"><?php echo esc_html( hako_capsule_t( 'fl_faq' ) ); ?></a> <a href="<?php echo hako_capsule_url( '/letter/' ); ?>"><?php echo esc_html( hako_capsule_t( 'fl_letter' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hk-footer__copy"} -->
<p class="hk-footer__copy"><?php echo esc_html( hako_capsule_t( 'foot_copy' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
