<?php
/**
 * Title: Newsletter form slot
 * Slug: homura-safety/news-slot
 * Categories: homura-safety
 * Inserter: no
 * Description: The newsletter form: a MailPoet or Mailchimp for WP form when one is active, otherwise an email field and a submit button that opens the mail app.
 */
?>
<?php
echo shippress_form_slot( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	array(
		'kind'    => 'newsletter',
		'email'   => 'hello@homura-safety.example',
		'label'   => homura_safety_t( 'forms_email' ),
		'submit'  => homura_safety_t( 'forms_subscribe' ),
		'notice'  => homura_safety_t( 'forms_mail_notice' ),
		'subject' => homura_safety_t( 'forms_mail_subject' ),
	)
);
?>
