<?php
/**
 * Title: Page: season notes
 * Slug: kuruma-tabi/page-newsletter
 * Categories: kuruma-tabi
 * Inserter: no
 * Viewport Width: 1440
 * Description: Newsletter page: early-access list with the newsletter slot (email and submit are always present).
 */
?>
<!-- wp:group {"tagName":"main","className":"kt-main","layout":{"type":"default"}} -->
<main class="wp-block-group kt-main"><!-- wp:group {"className":"kt-wrap kt-wrap--narrow kt-sec","layout":{"type":"default"}} -->
<div class="wp-block-group kt-wrap kt-wrap--narrow kt-sec"><!-- wp:group {"className":"kt-head","layout":{"type":"default"}} -->
<div class="wp-block-group kt-head"><!-- wp:html -->
<span class="kt-emblem"><?php echo kuruma_tabi_icon( 'wheel' ); ?></span>
<!-- /wp:html -->

<!-- wp:heading {"level":2,"className":"kt-h2"} -->
<h2 class="wp-block-heading kt-h2"><?php echo esc_html( kuruma_tabi_t( 'nl_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kt-sub"} -->
<p class="kt-sub"><?php echo esc_html( kuruma_tabi_t( 'nl_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kt-p"} -->
<p class="kt-p"><?php echo esc_html( kuruma_tabi_t( 'nl_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kt-form kt-form--page","layout":{"type":"default"}} -->
<div class="wp-block-group kt-form kt-form--page"><?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'plan@kurumatabi.example', 'label' => kuruma_tabi_t( 'forms_email' ), 'submit' => kuruma_tabi_t( 'forms_subscribe' ), 'notice' => kuruma_tabi_t( 'forms_mail_notice' ), 'subject' => kuruma_tabi_t( 'forms_mail_subject' ) ) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->
