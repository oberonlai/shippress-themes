<?php
/**
 * Title: Page: Tables (booking)
 * Slug: nagisa-grill/page-tables
 * Categories: nagisa-grill
 * Inserter: no
 */
echo nagisa_grill_head( 'p05-room.webp', 'Dining room before service with bare wooden tables, linen and tall windows onto a grey harbour.', 'Tables', 'A small dining room', 'Held 15 minutes' );

$right  = nagisa_grill_p( 'We keep a small dining room of bare wood tables overlooking Port Ellery harbour, so reservations stay intimate and calm. Each table is prepared for one seating, and your evening is never hurried.', 'ng-lede' );
$right .= nagisa_grill_copy( 'How a table is held', array( 'Reserving a table follows four steps, designed to protect the catch and our guests.' ) );
$right .= nagisa_grill_rules(
	array(
		'Book up to 30 days ahead by form or email.',
		'A deposit of €20 per guest holds the table and comes off the bill.',
		'We hold your table for 15 minutes after the seating time.',
		'Cancel by 15:00 the day before and the deposit is returned in full.',
	)
);
echo nagisa_grill_split( 'Held', $right, 'ng-prose-sect' );

echo nagisa_grill_scene(
	'Seatings and groups',
	'Two seatings,<br>up to eight.',
	array( 'p06-card.webp', 'A host placing a small folded blank card on a table set for two.' ),
	array( 'p16-after.webp', 'A table after service with folded napkins, a snuffed candle and two empty glasses.' ),
	array(
		'We welcome parties of 1 to 8 guests at the dining tables, at 18:00 and 20:30 from Wednesday to Sunday.',
		'For parties larger than 8, please write to us first at table@nagisagrill.example so Amara Osei can plan the seating and the pacing of the menu. A table of no more than 8 lets Jun Park and the kitchen cook every whole fish to order.',
	)
);

ob_start();
?>
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="mailto:table@nagisagrill.example?subject=<?php echo rawurlencode( nagisa_grill_t( 'tables_mail_subject' ) ); ?>"><?php echo esc_html( nagisa_grill_t( 'tables_email' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<?php
$fallback = ob_get_clean();
$book  = nagisa_grill_copy( 'How to book your table', array( 'Send your request through the form below, choosing the 18:00 or 20:30 seating from Wednesday to Sunday. If you prefer email, use the button and give your date, party size and any allergy notes. Amara Osei reads every request and replies to confirm the table and the €20 deposit per guest.' ) );
$book .= shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) );
echo nagisa_grill_section( 'ng-prose-sect ng-book', nagisa_grill_group( 'ng-book__col', nagisa_grill_label() . $book ) );
