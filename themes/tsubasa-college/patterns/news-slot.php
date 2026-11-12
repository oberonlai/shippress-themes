<?php
/**
 * Title: Newsletter form slot
 * Slug: tsubasa-college/news-slot
 * Categories: tsubasa-college
 * Inserter: no
 * Description: The newsletter form: a MailPoet or Mailchimp for WP form when one is active, otherwise an email field and a submit button that opens the mail app.
 */
?>
<?php
echo shippress_form_slot( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	array(
		'kind'    => 'newsletter',
		'email'   => 'admissions@tsubasa-college.example',
		'label'   => tsubasa_college_t( 'forms_email' ),
		'submit'  => tsubasa_college_t( 'forms_subscribe' ),
		'notice'  => tsubasa_college_t( 'forms_mail_notice' ),
		'subject' => tsubasa_college_t( 'forms_mail_subject' ),
	)
);
?>
