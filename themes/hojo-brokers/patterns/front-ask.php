<?php
/**
 * Title: Home: ask for a cover review
 * Slug: hojo-brokers/front-ask
 * Categories: hojo-brokers
 * Keywords: cta,newsletter,form
 * Viewport Width: 1440
 * Description: The slate call-to-action band with mirrored wedges, contact lines, a photograph and the renewal-notes newsletter slot.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hb-sec hb-ask","anchor":"ask","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hb-sec hb-ask" id="ask"><!-- wp:html -->
<span class="hb-wedge hb-wedge--a" aria-hidden="true"></span><span class="hb-wedge hb-wedge--b" aria-hidden="true"></span>
<!-- /wp:html -->

<!-- wp:group {"className":"hb-wrap hb-ask__in","layout":{"type":"default"}} -->
<div class="wp-block-group hb-wrap hb-ask__in"><!-- wp:group {"className":"hb-ask__text","layout":{"type":"default"}} -->
<div class="wp-block-group hb-ask__text"><!-- wp:heading {"className":"hb-h2 hb-h2--ask"} -->
<h2 class="wp-block-heading hb-h2 hb-h2--ask"><?php echo wp_kses_post( hojo_brokers_t( 'k6f5a54b0' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( hojo_brokers_t( 'kd74eafe3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"hb-cta-row"} -->
<div class="wp-block-buttons hb-cta-row"><!-- wp:button {"className":"hb-cta"} -->
<div class="wp-block-button hb-cta"><a class="wp-block-button__link wp-element-button" href="mailto:review@hojobrokers.example?subject=<?php echo rawurlencode( hojo_brokers_t( 'contact_subject' ) ); ?>"><?php echo wp_kses_post( hojo_brokers_t( 'kb27f46a5' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"hb-ask__contact"} -->
<p class="hb-ask__contact"><?php echo wp_kses_post( hojo_brokers_t( 'k374e475c' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hb-ask__photo"} -->
<figure class="wp-block-image size-full hb-ask__photo"><img src="<?php echo hojo_brokers_img( 'ask-folder-pass.webp' ); ?>" alt="<?php echo esc_attr( hojo_brokers_t( 'a6de980a2' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hb-wrap hb-letter","layout":{"type":"default"}} -->
<div class="wp-block-group hb-wrap hb-letter"><!-- wp:group {"className":"hb-letter__text","layout":{"type":"default"}} -->
<div class="wp-block-group hb-letter__text"><!-- wp:heading {"level":3,"className":"hb-letter__h"} -->
<h3 class="wp-block-heading hb-letter__h"><?php echo wp_kses_post( hojo_brokers_t( 'k739aadc3' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( hojo_brokers_t( 'kfdeb5e1b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hb-letter__form","layout":{"type":"default"}} -->
<div class="wp-block-group hb-letter__form"><?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'review@hojobrokers.example', 'label' => hojo_brokers_t( 'forms_email' ), 'submit' => hojo_brokers_t( 'forms_subscribe' ), 'notice' => hojo_brokers_t( 'forms_mail_notice' ), 'subject' => hojo_brokers_t( 'forms_mail_subject' ) ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
