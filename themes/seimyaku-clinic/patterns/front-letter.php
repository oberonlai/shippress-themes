<?php
/**
 * Title: Home: the clinic letter (newsletter slot)
 * Slug: seimyaku-clinic/front-letter
 * Categories: seimyaku-clinic
 * Keywords: newsletter
 * Viewport Width: 1440
 * Description: A light band with a short text on the left and the subscribe form slot on the right (a real email field and button even without a plugin).
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"letter","className":"sz-letter","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sz-letter" id="letter"><!-- wp:group {"className":"sz-letter__grid","layout":{"type":"default"}} -->
<div class="wp-block-group sz-letter__grid"><!-- wp:group {"className":"sz-letter__text","layout":{"type":"default"}} -->
<div class="wp-block-group sz-letter__text"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">A letter, four times a year</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Opening-hour changes, a note from our dietitian and flu-season dates. Never advertising, and we never share your address.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-letter__form","layout":{"type":"default"}} -->
<div class="wp-block-group sz-letter__form"><?php
echo shippress_form_slot( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	array(
		'kind'    => 'newsletter',
		'email'   => 'care@seimyaku-clinic.example',
		'label'   => seimyaku_clinic_t( 'forms_email' ),
		'submit'  => seimyaku_clinic_t( 'forms_subscribe' ),
		'notice'  => seimyaku_clinic_t( 'forms_mail_notice' ),
		'subject' => seimyaku_clinic_t( 'forms_mail_subject' ),
	)
);
?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
