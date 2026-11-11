<?php
/**
 * Title: Newsletter form slot
 * Slug: tana-furniture/news-slot
 * Categories: tana-furniture
 * Inserter: no
 * Description: The newsletter form: a MailPoet or Mailchimp for WP form when one is active, otherwise an email field and a submit button that opens the mail app.
 */
?>
<?php
echo shippress_form_slot( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	array(
		'kind'    => 'newsletter',
		'email'   => 'hello@tanafurniture.example',
		'label'   => tana_furniture_t( 'forms_email' ),
		'submit'  => tana_furniture_t( 'forms_subscribe' ),
		'notice'  => tana_furniture_t( 'forms_mail_notice' ),
		'subject' => tana_furniture_t( 'forms_mail_subject' ),
	)
);
?>
