<?php
/**
 * Title: Newsletter form slot
 * Slug: shoko-archives/news-slot
 * Categories: shoko-archives
 * Inserter: no
 * Viewport Width: 1440
 * Description: The Hall Two waitlist form: a MailPoet or Mailchimp for WP form when one is active, otherwise an email field and a submit that opens the mail app with the entered address.
 */
?>
<?php
echo shippress_form_slot( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	array(
		'kind'    => 'newsletter',
		'email'   => 'hello@shoko-archives.example',
		'label'   => shoko_archives_t( 'forms_email' ),
		'submit'  => shoko_archives_t( 'forms_subscribe' ),
		'notice'  => shoko_archives_t( 'forms_mail_notice' ),
		'subject' => shoko_archives_t( 'forms_mail_subject' ),
	)
);
?>
