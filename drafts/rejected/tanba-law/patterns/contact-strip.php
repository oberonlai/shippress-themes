<?php
/**
 * Title: Home: contact strip
 * Slug: tanba-law/contact-strip
 * Categories: tanba-law
 * Keywords: law firm, lawyer, legal
 * Viewport Width: 1440
 * Description: Reception phone and hours, a short enquiry form and the office address in one strip.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"contact","className":"tb-ct","align":"full","layout":{"type":"default"}} -->
<section id="contact" class="wp-block-group alignfull tb-ct">
<!-- wp:html -->
<div class="tb-ct__grid"><div class="tb-ct__cell"><p class="tb-label"><?php echo esc_html( tanba_law_t( 'ct_label' ) ); ?></p><h2 class="wp-block-heading tb-sec__title"><?php echo esc_html( tanba_law_t( 'ct_title' ) ); ?></h2><p class="tb-ct__l"><?php echo esc_html( tanba_law_t( 'ct_call' ) ); ?></p><p class="tb-ct__ph"><a href="tel:+10000000000"><?php echo esc_html( tanba_law_t( 'phone' ) ); ?></a></p><p class="tb-ct__hrs"><?php echo esc_html( tanba_law_t( 'ct_hours' ) ); ?></p></div><div class="tb-ct__cell tb-ct__cell--form"><p class="tb-ct__l"><?php echo esc_html( tanba_law_t( 'ct_form' ) ); ?></p><form class="tb-ct__form" method="get" action="/contact/"><label><span><?php echo esc_html( tanba_law_t( 'ct_f1' ) ); ?></span><input type="text" name="n" autocomplete="name"/></label><label><span><?php echo esc_html( tanba_law_t( 'ct_f2' ) ); ?></span><input type="email" name="e" autocomplete="email"/></label><label><span><?php echo esc_html( tanba_law_t( 'ct_f3' ) ); ?></span><select name="p"><option><?php echo esc_html( tanba_law_t( 'ix_g1' ) ); ?></option><option><?php echo esc_html( tanba_law_t( 'ix_g2' ) ); ?></option><option><?php echo esc_html( tanba_law_t( 'ix_g3' ) ); ?></option><option><?php echo esc_html( tanba_law_t( 'ix_g4' ) ); ?></option></select></label><label class="tb-ct__wide"><span><?php echo esc_html( tanba_law_t( 'ct_f4' ) ); ?></span><textarea name="m" rows="3"></textarea></label><button type="submit"><?php echo esc_html( tanba_law_t( 'ct_send' ) ); ?> <span aria-hidden="true">&rarr;</span></button><p class="tb-ct__note"><?php echo esc_html( tanba_law_t( 'ct_note' ) ); ?></p></form></div><div class="tb-ct__cell"><p class="tb-ct__l"><?php echo esc_html( tanba_law_t( 'ct_office' ) ); ?></p><p class="tb-ct__ad"><?php echo esc_html( tanba_law_t( 'ct_a1' ) ); ?><br/><?php echo esc_html( tanba_law_t( 'ct_a2' ) ); ?><br/><?php echo esc_html( tanba_law_t( 'ct_a3' ) ); ?></p><p class="tb-more"><a href="/contact/"><?php echo esc_html( tanba_law_t( 'ct_map' ) ); ?> <span aria-hidden="true">&rarr;</span></a></p></div></div>
<!-- /wp:html --></section>
<!-- /wp:group -->
