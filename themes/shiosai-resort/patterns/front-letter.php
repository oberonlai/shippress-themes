<?php
/**
 * Title: Home: the Tide Letter
 * Slug: shiosai-resort/front-letter
 * Categories: shiosai-resort
 * Keywords: resort, hotel, seaside
 * Viewport Width: 1440
 * Description: Newsletter section with the shared email-and-submit slot (works without plugins).
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ss-sec ss-sec--white ss-letter","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ss-sec ss-sec--white ss-letter"><!-- wp:group {"className":"ss-letter__cols","layout":{"type":"default"}} -->
<div class="wp-block-group ss-letter__cols"><!-- wp:group {"className":"ss-letter__l","layout":{"type":"default"}} -->
<div class="wp-block-group ss-letter__l"><!-- wp:heading {"level":3,"className":"ss-letter__t"} -->
<h3 class="wp-block-heading ss-letter__t"><?php echo wp_kses_post( shiosai_resort_t( 'ka5be2f9e' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( shiosai_resort_t( 'kb61cc775' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ss-letter__form","layout":{"type":"default"}} -->
<div class="wp-block-group ss-letter__form"><?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'stay@shiosai-resort.example', 'label' => shiosai_resort_t( 'forms_email' ), 'submit' => shiosai_resort_t( 'forms_subscribe' ), 'notice' => shiosai_resort_t( 'forms_mail_notice' ), 'subject' => shiosai_resort_t( 'forms_mail_subject' ) ) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
