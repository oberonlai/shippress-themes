<?php
/**
 * Title: Yard board form slot
 * Slug: kashidashi-hire/news-slot
 * Categories: kashidashi-hire
 * Inserter: no
 * Description: The yard board form: a MailPoet or Mailchimp for WP form when one is active, otherwise an email field and a submit button that opens the mail app.
 */
?>
<?php
echo shippress_form_slot( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	array(
		'kind'    => 'newsletter',
		'email'   => 'hire@kashidashi-hire.example',
		'label'   => kashidashi_hire_t( 'forms_email' ),
		'submit'  => kashidashi_hire_t( 'forms_subscribe' ),
		'notice'  => kashidashi_hire_t( 'forms_mail_notice' ),
		'subject' => kashidashi_hire_t( 'forms_mail_subject' ),
	)
);
?>
