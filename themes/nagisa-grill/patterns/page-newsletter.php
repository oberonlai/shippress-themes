<?php
/**
 * Title: Newsletter: The Board, by email
 * Slug: nagisa-grill/page-newsletter
 * Categories: nagisa-grill
 * Inserter: no
 */
?>
<!-- wp:paragraph -->
<p>The Board, by email: one letter on Wednesday mornings with the week's boat notes and the next two weeks' open tables.</p>
<!-- /wp:paragraph -->

<?php
echo shippress_form_slot(
	array(
		'kind'    => 'newsletter',
		'email'   => 'table@nagisagrill.example',
		'label'   => nagisa_grill_t( 'forms_email' ),
		'submit'  => nagisa_grill_t( 'forms_subscribe' ),
		'notice'  => nagisa_grill_t( 'forms_mail_notice' ),
		'subject' => nagisa_grill_t( 'forms_mail_subject' ),
	)
);
?>
