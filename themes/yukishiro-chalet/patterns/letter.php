<?php
/**
 * Title: Home: snow letter
 * Slug: yukishiro-chalet/letter
 * Categories: yukishiro-chalet
 * Viewport Width: 1440
 * Description: Two-column newsletter section with the shared form slot.
 */
?>
<!-- wp:group {"tagName":"section","className":"yk-sec yk-sec--panel yk-letter","layout":{"type":"default"}} -->
<section class="wp-block-group yk-sec yk-sec--panel yk-letter"><!-- wp:group {"className":"yk-wrap yk-letter__grid","layout":{"type":"default"}} -->
<div class="wp-block-group yk-wrap yk-letter__grid"><!-- wp:group {"className":"yk-letter__text","layout":{"type":"default"}} -->
<div class="wp-block-group yk-letter__text"><!-- wp:paragraph {"className":"yk-lead yk-lead--l"} -->
<p class="yk-lead yk-lead--l"><?php echo esc_html( yukishiro_chalet_t( 'letter_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"yk-title yk-title--l"} -->
<h2 class="wp-block-heading yk-title yk-title--l"><?php echo esc_html( yukishiro_chalet_t( 'letter_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yk-letter__p"} -->
<p class="yk-letter__p"><?php echo esc_html( yukishiro_chalet_t( 'letter_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yk-letter__form","layout":{"type":"default"}} -->
<div class="wp-block-group yk-letter__form"><?php echo shippress_form_slot( array(
	'kind'    => 'newsletter',
	'email'   => 'stay@yukishiro-chalet.example',
	'label'   => yukishiro_chalet_t( 'forms_email' ),
	'submit'  => yukishiro_chalet_t( 'forms_subscribe' ),
	'notice'  => yukishiro_chalet_t( 'forms_mail_notice' ),
	'subject' => yukishiro_chalet_t( 'forms_mail_subject' ),
) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
