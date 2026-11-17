<?php
/**
 * Title: Home: the farm letter (newsletter)
 * Slug: makiba-farmstay/front-letter
 * Categories: makiba-farmstay
 * Viewport Width: 1440
 * Description: Mist band: a short pitch for the seasonal letter beside the newsletter slot (email field and submit, working without plugins).
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"letter","className":"mf-letter mf-grain--mist","layout":{"type":"default"}} -->
<section id="letter" class="wp-block-group alignfull mf-letter mf-grain--mist"><!-- wp:group {"className":"mf-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mf-wrap"><!-- wp:group {"className":"mf-letter__pair","layout":{"type":"default"}} -->
<div class="wp-block-group mf-letter__pair"><!-- wp:group {"className":"mf-letter__l","layout":{"type":"default"}} -->
<div class="wp-block-group mf-letter__l"><!-- wp:heading {"level":2,"className":"mf-letter__h"} -->
<h2 class="wp-block-heading mf-letter__h"><?php echo wp_kses_post( makiba_farmstay_t( 'k446bafcf' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph {"className":"mf-body"} -->
<p class="mf-body"><?php echo wp_kses_post( makiba_farmstay_t( 'ka96983c1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"mf-letter__form","layout":{"type":"default"}} -->
<div class="wp-block-group mf-letter__form"><?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'stay@makibafarm.example', 'label' => makiba_farmstay_t( 'forms_email' ), 'submit' => makiba_farmstay_t( 'forms_subscribe' ), 'notice' => makiba_farmstay_t( 'forms_mail_notice' ), 'subject' => makiba_farmstay_t( 'forms_mail_subject' ) ) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
