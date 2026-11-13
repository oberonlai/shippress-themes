<?php
/**
 * Title: Home: The Case Letter
 * Slug: hisagi-neurology/front-letter
 * Categories: hisagi-neurology
 * Viewport Width: 1440
 * Description: Newsletter panel with a form slot: plugin form when available, otherwise a real email field that opens the mail app.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hn-sec hn-letter","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hn-sec hn-letter"><!-- wp:group {"className":"hn-letter__panel","layout":{"type":"default"}} -->
<div class="wp-block-group hn-letter__panel"><!-- wp:group {"className":"hn-letter__text","layout":{"type":"default"}} -->
<div class="wp-block-group hn-letter__text"><!-- wp:paragraph {"className":"hn-label hn-strip"} -->
<p class="hn-label hn-strip"><?php echo wp_kses_post( hisagi_neurology_t( 'k98d03c25' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"hn-h2"} -->
<h2 class="wp-block-heading hn-h2"><?php echo wp_kses_post( hisagi_neurology_t( 'k7d44cffd' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hn-body"} -->
<p class="hn-body"><?php echo wp_kses_post( hisagi_neurology_t( 'k42e98046' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hn-letter__form","layout":{"type":"default"}} -->
<div class="wp-block-group hn-letter__form"><?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'hello@hisagi-neurology.example', 'label' => hisagi_neurology_t( 'forms_email' ), 'submit' => hisagi_neurology_t( 'forms_subscribe' ), 'notice' => hisagi_neurology_t( 'forms_mail_notice' ), 'subject' => hisagi_neurology_t( 'forms_mail_subject' ) ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
