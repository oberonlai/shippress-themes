<?php
/**
 * Title: Newsletter: The Board, by email
 * Slug: nagisa-grill/page-newsletter
 * Categories: nagisa-grill
 * Inserter: no
 */
echo nagisa_grill_head( 'p16-after.webp', 'A table after service with folded napkins, a snuffed candle and two empty glasses.', 'Newsletter', 'The Board, by email', 'Wednesdays' );

$right  = nagisa_grill_p( 'The Board is our weekly letter, sent from 7 Harbour Row on Wednesday mornings. It carries notes from the Wren’s landings alongside the open tables of the coming fortnight.', 'ng-lede' );
$right .= nagisa_grill_copy( 'What is The Board?', array( 'Written by Inès Calder and Tomas Varga, each letter shares notes on the coastal waters, what the Wren has been landing at Berth 14, and what Jun Park is cooking over the charcoal grill. Most importantly, it lists the open tables across the 18:00 and 20:30 seatings for the next two weeks, so readers can book before the dates fill.' ) );
echo nagisa_grill_split( 'Letter', $right, 'ng-prose-sect' );

$form  = nagisa_grill_label( 'Subscribe' ) . nagisa_grill_h( 2, 'The Board, by email', 'ng-h-photo', 'x-large' );
$form .= nagisa_grill_p( esc_html( nagisa_grill_t( 'footer_privacy_line' ) ), 'ng-copy' );
$form .= shippress_form_slot(
	array(
		'kind'    => 'newsletter',
		'email'   => 'table@nagisagrill.example',
		'label'   => nagisa_grill_t( 'forms_email' ),
		'submit'  => nagisa_grill_t( 'forms_subscribe' ),
		'notice'  => nagisa_grill_t( 'forms_mail_notice' ),
		'subject' => nagisa_grill_t( 'forms_mail_subject' ),
	)
);
echo nagisa_grill_group( 'ng-dark', nagisa_grill_group( 'ng-dark__col', $form ), 'section', 'full' );

$priv = nagisa_grill_copy( 'Your address and your privacy', array( 'We believe in simple, respectful communication. We send exactly one letter on Wednesdays, and you may unsubscribe at any time. Submitting the form opens your email app with the subject “Subscribe to The Board”: send the message to ask for the letter. You are not subscribed until that request reaches us. Past dispatches are always in the Journal.' ) ) . nagisa_grill_link( '/journal/', 'Read the Journal' );
echo nagisa_grill_split( 'Privacy', $priv, 'ng-prose-sect' );
