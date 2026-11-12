<?php
/**
 * Title: Newsletter form slot
 * Slug: mise-studio/news-slot
 * Categories: mise-studio
 * Inserter: no
 * Viewport Width: 1440
 * Description: The waitlist form: a MailPoet or Mailchimp for WP form when one is active, otherwise an email field and a submit that opens the mail app with the entered address.
 */
?>
<?php
echo shippress_form_slot( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	array(
		'kind'    => 'newsletter',
		'email'   => 'hello@mise-studio.example',
		'label'   => mise_studio_t( 'forms_email' ),
		'submit'  => mise_studio_t( 'forms_subscribe' ),
		'notice'  => mise_studio_t( 'forms_mail_notice' ),
		'subject' => mise_studio_t( 'forms_mail_subject' ),
	)
);
?>
