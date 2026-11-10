<?php
/**
 * Title: Footer
 * Slug: fukubi-clinic/foot-main
 * Categories: fukubi-clinic
 * Keywords: clinic, gastroenterology, digestive
 * Viewport Width: 1440
 * Description: Wash footer: wordmark and one line, address and contact, the hours in words.
 */
?>
<!-- wp:group {"align":"full","className":"fc-footer","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull fc-footer"><!-- wp:group {"className":"fc-footer__grid","layout":{"type":"default"}} -->
<div class="wp-block-group fc-footer__grid"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"fc-footer__name"} -->
<p class="fc-footer__name"><?php echo esc_html( fc_t( 'logo_alt' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph -->
<p><?php echo esc_html( fc_t( 'foot_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"fc-footer__h"} -->
<p class="fc-footer__h"><?php echo esc_html( fc_t( 'foot_nav' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph -->
<p><?php echo esc_html( fc_t( 'address' ) ); ?><br><a href="tel:+16045550148"><?php echo esc_html( fc_t( 'phone' ) ); ?></a><br><a href="mailto:<?php echo esc_attr( fc_t( 'email' ) ); ?>"><?php echo esc_html( fc_t( 'email' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"fc-footer__h"} -->
<p class="fc-footer__h"><?php echo esc_html( fc_t( 'wk_label' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph -->
<p><?php echo esc_html( fc_t( 'foot_hours' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:paragraph {"className":"fc-footer__copy"} -->
<p class="fc-footer__copy"><?php echo esc_html( fc_t( 'foot_copy' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
