<?php
/**
 * Title: Page: Menu
 * Slug: nagisa-grill/page-menu
 * Categories: nagisa-grill
 * Inserter: no
 */
echo nagisa_grill_head( 'p09-bream.webp', 'Whole grilled sea bream for two on an oval platter with lemon and greens.', 'Menu', 'Fixed formats, a daily board', '[Five courses €78]' );

$right  = nagisa_grill_p( 'Because we cook exclusively what the Wren lands at Berth 14 each morning, our dishes change daily on the chalk board. We offer our cooking through fixed formats and transparent prices.', 'ng-lede' );
$right .= nagisa_grill_prices(
	array( 'Item', 'What it is', 'Price' ),
	array(
		array( 'The Boat Menu', 'Five courses from the morning’s catch', '€78' ),
		array( 'Four glasses', 'Wine pairing for the Boat Menu', '€42' ),
		array( 'Whole fish for two', 'Grilled over charcoal, two sides', '€64' ),
		array( 'Shore plates', 'Three small plates, bar only', '€28' ),
		array( 'Children’s plate', 'Under 12, grilled fish and potatoes', '€18' ),
		array( 'Table deposit', 'Per guest, taken off the bill', '€20' ),
	)
);
echo nagisa_grill_section( 'ng-prose-sect ng-price-sect', nagisa_grill_group( 'ng-price-head', nagisa_grill_label() . nagisa_grill_h( 2, 'Prices', 'ng-word', 'x-large' ) ) . $right );

echo nagisa_grill_plates(
	'Three ways to the table',
	array(
		array( 'p07-bar.webp', 'Three small seafood plates and a glass of white wine on a zinc counter.', 'At the bar', 'Shore plates · €28' ),
		array( 'p08-broth.webp', 'Overhead view of a fish course with clear broth on a grey ceramic plate.', 'The Boat Menu', 'Five courses · €78' ),
		array( 'p12-pour.webp', 'Wine being poured into two glasses at a candlelit table.', 'Four glasses', 'Wine pairing · €42' ),
	)
);

$fmt  = nagisa_grill_copy( 'The dining formats: bar, table and cellar', array( 'At the zinc bar counter, shore plates are a relaxed first encounter with the morning catch beside a glass of crisp wine. In the dining room the Boat Menu moves from clear broths and raw preparations to fish seared over embers. The whole fish for two is a centrepiece for the table, cooked on the bone to keep every drop of sweetness.' ) );
$fmt .= nagisa_grill_copy( 'Allergies and dietary needs', array( 'Because the menu depends on what one boat lands, please tell us about any allergy or dietary need when you book. We can plan around shellfish, gluten or a particular fish with advance notice. Our kitchen handles whole fish, crustaceans and shellfish throughout the day, so traces of marine allergens remain present across our preparation areas.' ) );
echo nagisa_grill_split( 'Care', $fmt, 'ng-prose-sect' );
