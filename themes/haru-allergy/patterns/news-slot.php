<?php
/**
 * Title: Newsletter form slot
 * Slug: haru-allergy/news-slot
 * Categories: haru-allergy
 * Inserter: no
 * Description: The newsletter form: a MailPoet or Mailchimp for WP form when one is active, otherwise an email field and a submit button that opens the mail app.
 */
?>
<?php
echo shippress_form_slot( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	array(
		'kind'    => 'newsletter',
		'email'   => 'hello@haru-allergy.example',
		'label'   => haru_allergy_t( 'forms_email' ),
		'submit'  => haru_allergy_t( 'forms_subscribe' ),
		'notice'  => haru_allergy_t( 'forms_mail_notice' ),
		'subject' => haru_allergy_t( 'forms_mail_subject' ),
	)
);
?>
