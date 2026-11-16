<?php
/**
 * Title: Home: The Call Sheet newsletter
 * Slug: butai-playhouse/front-callsheet
 * Categories: butai-playhouse
 * Viewport Width: 1440
 * Description: Ink panel with the newsletter slot: a required email field and submit work without any plugin.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"bp-section bp-call bp-dark","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull bp-section bp-call bp-dark"><!-- wp:group {"className":"bp-call__in","layout":{"type":"default"}} -->
<div class="wp-block-group bp-call__in"><!-- wp:group {"className":"bp-call__text","layout":{"type":"default"}} -->
<div class="wp-block-group bp-call__text"><!-- wp:paragraph {"className":"bp-label"} -->
<p class="bp-label"><span class="bp-dot" aria-hidden="true"></span><?php echo wp_kses_post( butai_playhouse_t( 'kffb7e666' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"bp-title"} -->
<h2 class="wp-block-heading bp-title"><?php echo wp_kses_post( butai_playhouse_t( 'k22bf7231' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"bp-body"} -->
<p class="bp-body"><?php echo wp_kses_post( butai_playhouse_t( 'k0f1c84a9' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"bp-call__form","layout":{"type":"default"}} -->
<div class="wp-block-group bp-call__form"><?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'hello@butai-playhouse.example', 'label' => butai_playhouse_t( 'forms_email' ), 'submit' => butai_playhouse_t( 'forms_subscribe' ), 'notice' => butai_playhouse_t( 'forms_mail_notice' ), 'subject' => butai_playhouse_t( 'forms_mail_subject' ) ) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
