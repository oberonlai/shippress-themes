<?php
/**
 * Title: Home: the flavour note
 * Slug: himuro-gelato/front-note
 * Categories: himuro-gelato
 * Viewport Width: 1440
 * Description: Newsletter section: a short invitation on the left and the newsletter form slot on the right.
 */
?>
<!-- wp:group {"className":"hg-notesec hg-sec","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull hg-notesec hg-sec"><!-- wp:group {"className":"hg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hg-wrap"><!-- wp:paragraph {"className":"hg-label"} -->
<p class="hg-label"><?php echo esc_html( himuro_gelato_t( 'nt_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hg-note__cols","layout":{"type":"default"}} -->
<div class="wp-block-group hg-note__cols"><!-- wp:group {"className":"hg-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group hg-note__text"><!-- wp:heading {"level":2,"className":"hg-note__h sp-reveal sp-reveal--wipe"} -->
<h2 class="wp-block-heading hg-note__h sp-reveal sp-reveal--wipe"><span><?php echo esc_html( himuro_gelato_t( 'nt_h' ) ); ?></span></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hg-note__p"} -->
<p class="hg-note__p"><?php echo esc_html( himuro_gelato_t( 'nt_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hg-note__form","layout":{"type":"default"}} -->
<div class="wp-block-group hg-note__form"><?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'hello@himurogelato.example', 'label' => himuro_gelato_t( 'forms_email' ), 'submit' => himuro_gelato_t( 'forms_subscribe' ), 'notice' => himuro_gelato_t( 'forms_mail_notice' ), 'subject' => himuro_gelato_t( 'forms_mail_subject' ) ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
