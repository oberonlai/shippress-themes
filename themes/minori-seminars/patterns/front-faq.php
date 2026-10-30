<?php
/**
 * Title: Home: questions
 * Slug: minori-seminars/front-faq
 * Categories: minori-seminars
 * Keywords: seminar, management, landing
 * Viewport Width: 1440
 * Description: White block: label and five ruled question rows that open on click.
 */
?>
<?php
$ms_qa = array(
	array( 'Can my company pay?', 'Yes. We issue the invoice on confirmation, with 30-day payment terms. Send your billing address, purchase order number and VAT details with your reservation email.' ),
	array( 'Can I send someone in my place?', 'Yes. Cancellation is free until 14 days before the seminar. After that, the seat can pass to a colleague or move to a later date.' ),
	array( 'Is there homework?', 'No. Seven days before the seminar we send a short five-question note that asks you to choose one live management situation for the afternoon clinic.' ),
	array( 'Is it in English?', 'Yes. The open seminars in Rotterdam run in English, with English notes. In-house versions can run in German, French, Mandarin or Japanese.' ),
	array( 'Can we have it in-house?', 'Yes. Any of the three seminars can run at your premises within 100 km of Rotterdam for up to 16 people, led by the same facilitators.' ),
);
$ms_out = '';
foreach ( $ms_qa as $ms_q ) {
	$ms_out .= '<!-- wp:details {"className":"ms-faq__item"} -->' . "\n"
		. '<details class="wp-block-details ms-faq__item"><summary>' . esc_html( $ms_q[0] ) . '</summary><!-- wp:paragraph -->' . "\n"
		. '<p>' . esc_html( $ms_q[1] ) . '</p>' . "\n<!-- /wp:paragraph --></details>\n<!-- /wp:details -->\n\n";
}
?>
<!-- wp:group {"align":"full","anchor":"questions","className":"ms-sec ms-faq","layout":{"type":"default"}} -->
<div id="questions" class="wp-block-group alignfull ms-sec ms-faq"><!-- wp:group {"className":"ms-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ms-wrap"><?php echo minori_seminars_label( 'QUESTIONS' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<!-- wp:group {"className":"ms-faq__list","layout":{"type":"default"}} -->
<div class="wp-block-group ms-faq__list"><?php echo $ms_out; // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
