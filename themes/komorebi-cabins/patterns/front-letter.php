<?php
/**
 * Title: Home: the Woodshed Letter
 * Slug: komorebi-cabins/front-letter
 * Categories: komorebi-cabins
 * Viewport Width: 1440
 * Description: Newsletter panel on forest green with the email field and submit (works without plugins).
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-section kc-letterwrap","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-section kc-letterwrap"><!-- wp:group {"className":"kc-letter kc-dark","layout":{"type":"default"}} -->
<div class="wp-block-group kc-letter kc-dark"><!-- wp:heading {"level":2,"className":"kc-letter__h"} -->
<h2 class="wp-block-heading kc-letter__h"><?php echo wp_kses_post( komorebi_cabins_t( 'kbce0dc10' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-letter__p"} -->
<p class="kc-letter__p"><?php echo wp_kses_post( komorebi_cabins_t( 'kaffae34a' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kc-letter__form","layout":{"type":"default"}} -->
<div class="wp-block-group kc-letter__form"><?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'stay@komorebi-cabins.example', 'label' => komorebi_cabins_t( 'forms_email' ), 'submit' => komorebi_cabins_t( 'forms_subscribe' ), 'notice' => komorebi_cabins_t( 'forms_mail_notice' ), 'subject' => komorebi_cabins_t( 'forms_mail_subject' ) ) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
