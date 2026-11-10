<?php
/**
 * Title: Page: About
 * Slug: nagisa-grill/page-about
 * Categories: nagisa-grill
 * Inserter: no
 */
echo nagisa_grill_head( 'p15-skipper.webp', 'The skipper coiling rope on the deck of the day boat under an overcast sky.', 'About', 'Harbour Row, Port Ellery', '[Since 2019]' );

$story  = nagisa_grill_p( 'Founded in 2019 at 7 Harbour Row in Port Ellery, Nagisa Grill is the shared work of chef Inès Calder and skipper Tomas Varga: to bring the honest work of one coastal boat directly to the dinner table.', 'ng-lede' );
$story .= nagisa_grill_copy( 'Our story: 7 Harbour Row since 2019', array( 'In 2019, chef Inès Calder and skipper Tomas Varga opened Nagisa Grill along the quayside at 7 Harbour Row. Their partnership began with a simple premise: skip the long supply chain of commercial fish trading and connect one boat directly to one kitchen. With the dining room only steps from the water where the Wren docks, every guest shares in the daily fortunes of our coastal waters.' ) );
echo nagisa_grill_split( 'Story', $story, 'ng-prose-sect' );

echo nagisa_grill_scene(
	'Why one boat, one service',
	'One boat,<br>one evening.',
	array( 'p14-pass.webp', 'Three cooks plating side by side along the pass under warm lamps.' ),
	array( 'p13-harbour.webp', 'The harbour at dusk with the restaurant windows reflected across calm water.' ),
	array(
		'Working with only one boat, the day boat Wren berthed at Berth 14, anchors the restaurant in natural reality. We place no wholesale orders and ask for no species the local water cannot sustain.',
		'Running a single evening service from Wednesday to Sunday lets us cook without compromise. Instead of turning tables for volume, we give the whole evening to two calm seatings at 18:00 and 20:30.',
	)
);

$people = nagisa_grill_people(
	array(
		array( 'Inès Calder', 'Chef and co-founder', 'Oversees the kitchen and the daily board, and writes the menu in chalk at three.' ),
		array( 'Tomas Varga', 'Skipper of the Wren, co-founder', 'Fishes the coastal waters from Berth 14 and brings the morning landing to the quay.' ),
		array( 'Amara Osei', 'Front of house', 'Keeps the table book and welcomes every guest by name where she can.' ),
		array( 'Jun Park', 'Grill cook', 'Sears the day’s catch over open embers and rests every fish before it leaves the pass.' ),
		array( 'Noor Haddad', 'Breaks down the fish', 'Prepares the morning landing with practised hands and saves the bones for broth.' ),
		array( 'Lucía Ferraz', 'Bread and desserts', 'Bakes the hearth bread and prepares the desserts, always seasonal and quiet.' ),
		array( 'Henrik Dahl', 'Wine and the bar', 'Tends the bar and chooses the cellar wines to meet the catch.' ),
	)
);
echo nagisa_grill_split( 'People', nagisa_grill_h( 3, 'People of Nagisa Grill', 'ng-copy-h' ) . $people, 'ng-prose-sect' );
