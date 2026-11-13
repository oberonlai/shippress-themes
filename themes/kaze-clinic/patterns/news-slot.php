<?php
/**
 * Title: Newsletter form slot
 * Slug: kaze-clinic/news-slot
 * Categories: kaze-clinic
 * Inserter: no
 * Viewport Width: 1440
 * Description: The Breathing Letter form: a MailPoet or Mailchimp for WP form when one is active, otherwise an email field and a submit that opens the mail app with the entered address.
 */
?>
<?php
echo shippress_form_slot( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	array(
		'kind'    => 'newsletter',
		'email'   => 'hello@kazeclinic.example',
		'label'   => kaze_clinic_t( 'forms_email' ),
		'submit'  => kaze_clinic_t( 'forms_subscribe' ),
		'notice'  => kaze_clinic_t( 'forms_mail_notice' ),
		'subject' => kaze_clinic_t( 'forms_mail_subject' ),
	)
);
?>
