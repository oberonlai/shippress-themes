<?php
/**
 * Title: Visit: address and contact form slot
 * Slug: nagisa-grill/page-visit
 * Categories: nagisa-grill
 * Inserter: no
 */
echo nagisa_grill_head( 'p13-harbour.webp', 'The harbour at dusk with the restaurant windows reflected across calm water.', 'Visit', 'Harbour Row, Port Ellery', '[Wed–Sun · 17:30–23:00]' );

ob_start();
?>
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="mailto:table@nagisagrill.example"><?php echo esc_html( nagisa_grill_t( 'contact_email' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<?php
$fallback = ob_get_clean();

$left  = nagisa_grill_p( 'Nagisa Grill is at 7 Harbour Row, along the working waterfront in Port Ellery, overlooking the stone quay where the Wren docks.', 'ng-lede' );
$left .= nagisa_grill_copy( 'Hours and getting here', array( 'Open Wednesday to Sunday for a single dinner service: Henrik Dahl opens the bar at 17:30, with seatings at 18:00 and 20:30. Last order is at 22:00 and the doors close at 23:00. We are closed on Monday and Tuesday for boat maintenance.', 'Take the harbour tram to the Harbour Row stop; it is a four-minute walk to the door. There are bicycle racks along the quay.' ) );
$left .= nagisa_grill_p( '7 Harbour Row, Port Ellery<br><a href="mailto:table@nagisagrill.example">table@nagisagrill.example</a>', 'ng-address' );
$right  = nagisa_grill_copy( 'Write to us', array( 'There is no telephone line in the dining room, so the service stays quiet. For general questions, private events or table requests, use the form or write to table@nagisagrill.example. Amara Osei reads every message between services.' ) );
$right .= shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) );
$inner = nagisa_grill_group( 'ng-split', nagisa_grill_group( 'ng-split__l', nagisa_grill_label() . $left ) . nagisa_grill_group( 'ng-split__r ng-visit-form', $right ) );
echo nagisa_grill_group( 'ng-sect ng-prose-sect', $inner, 'section', 'full' );

echo nagisa_grill_scene(
	'A calm arrival',
	'Arrive early,<br>stay unhurried.',
	array( 'p06-card.webp', 'A host placing a small folded blank card on a table set for two.' ),
	array( 'p01-service.webp', 'A server placing a whole grilled fish on a pale plate between two seated guests.' ),
	array(
		'Arrive a few minutes before your reservation to take in the evening light over the harbour.',
		'You are welcome in the bar from 17:30 for a glass of wine or a plate of grilled squid while your table is prepared. Once seated, the evening is held at your pace, from the first course to the last.',
	)
);
echo nagisa_grill_button( '/tables/', 'Book a table', 'ng-close' );
