<?php
/**
 * Title: Page: Kitchen
 * Slug: nagisa-grill/page-kitchen
 * Categories: nagisa-grill
 * Inserter: no
 */
echo nagisa_grill_head( 'p04-grill.webp', 'Hands scoring the skin of a whole fish over a low charcoal grill with wisps of smoke.', 'Kitchen', 'Charcoal and patience', '[Charcoal grill · one pass]' );

$right  = nagisa_grill_p( 'Our kitchen at 7 Harbour Row is built around an open charcoal hearth, patient broth preparation and whole-catch cookery. We cook strictly what the Wren brings to our quay each morning.', 'ng-lede' );
$right .= nagisa_grill_rules(
	array(
		'The fish stock simmers for six full hours to draw deep, clean flavour from roasted bones.',
		'Lucía Ferraz bakes the hearth bread at 14:00 so that it reaches the table warm.',
		'The board is written only after Noor Haddad has broken down the whole morning catch.',
		'Jun Park rests every fish after the grill, so the juices settle before it is served.',
	)
);
echo nagisa_grill_split( 'Pace', $right, 'ng-prose-sect' );

echo nagisa_grill_scene(
	'The hearth and the pass',
	'Fire, bones<br>and a single pass.',
	array( 'p11-bones.webp', 'A cook breaking down a fish on a wooden board with bones set aside in a steel tray.' ),
	array( 'p14-pass.webp', 'Three cooks plating side by side along the pass under warm lamps.' ),
	array(
		'Cooking over natural lump charcoal requires undivided attention and calm technique. We do not use electric broilers or heavy sauces that mask delicate marine notes.',
		'Whole fish and squid are seasoned lightly with sea salt, then seared over embers until the skin blisters crisp and the flesh stays translucent. Plates move across the pass in one steady sequence.',
	)
);

$people = nagisa_grill_people(
	array(
		array( 'Inès Calder', 'Chef and co-founder', 'Directs the daily board and shapes the five courses around the morning catch.' ),
		array( 'Jun Park', 'Grill cook', 'Manages the charcoal grill, cooking sea bream, mackerel and shellfish with steady restraint.' ),
		array( 'Noor Haddad', 'Breaks down the fish', 'Prepares the morning landing by hand and saves every bone for the stock.' ),
		array( 'Lucía Ferraz', 'Bread and desserts', 'Runs the oven, baking the loaves at 14:00 and finishing the quiet, seasonal desserts.' ),
	)
);
echo nagisa_grill_split( 'Crew', nagisa_grill_h( 3, 'People of the kitchen', 'ng-copy-h' ) . $people, 'ng-prose-sect' );
