<?php
/**
 * Title: Home: room alerts
 * Slug: koori-coldstore/front-alerts
 * Categories: koori-coldstore
 * Keywords: cold storage, warehouse, logistics
 * Viewport Width: 1440
 * Description: A pale panel with a lowercase label and one sentence beside the newsletter form slot.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"alerts","className":"kc-sec kc-alerts-sec","layout":{"type":"default"}} -->
<section id="alerts" class="wp-block-group alignfull kc-sec kc-alerts-sec"><!-- wp:group {"className":"kc-alerts","layout":{"type":"default"}} -->
<div class="wp-block-group kc-alerts"><!-- wp:group {"className":"kc-alerts__text","layout":{"type":"default"}} -->
<div class="wp-block-group kc-alerts__text"><!-- wp:paragraph {"className":"kc-alerts__title"} -->
<p class="kc-alerts__title"><?php echo esc_html( koori_coldstore_t( 'alerts_title' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( koori_coldstore_t( 'alerts_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-alerts__form","layout":{"type":"default"}} -->
<div class="wp-block-group kc-alerts__form"><?php echo shippress_form_slot( array(
	'kind'    => 'newsletter',
	'email'   => 'ask@koori-coldstore.example',
	'label'   => koori_coldstore_t( 'forms_email' ),
	'submit'  => koori_coldstore_t( 'forms_subscribe' ),
	'notice'  => koori_coldstore_t( 'forms_mail_notice' ),
	'subject' => koori_coldstore_t( 'forms_mail_subject' ),
) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
