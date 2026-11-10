<?php
/**
 * Title: Page: The Boat
 * Slug: nagisa-grill/page-the-boat
 * Categories: nagisa-grill
 * Inserter: no
 */
echo nagisa_grill_head( 'p02-quay.webp', 'A small wooden day boat at a stone quay at dawn as a crate of fish is handed up to a cook.', 'The Boat', 'The day boat', '[The Wren · Berth 14]' );

$one  = nagisa_grill_p( 'Nagisa Grill relies entirely on a single wooden day boat moored at Berth 14 in Port Ellery. Every dish served in our dining room begins with what skipper Tomas Varga lands that morning.', 'ng-lede' );
$one .= nagisa_grill_copy( 'One boat: the Wren', array( 'The Wren is a traditional wooden-hulled day boat operated by skipper and co-founder Tomas Varga. Moored at Berth 14, she leaves the harbour at 05:30 each morning from Wednesday to Sunday, working close coastal grounds with low-impact line and pot fishing. There are no factory freezers or prolonged voyages aboard; by 10:30 the boat is tied back up at the stone quay, delivering crates of glistening seafood straight to the kitchen door at 7 Harbour Row.' ) );
echo nagisa_grill_split( 'Wren', $one, 'ng-prose-sect' );

echo nagisa_grill_scene(
	'The catch · the skipper',
	'Taken by hand,<br>landed by ten.',
	array( 'p10-catch.webp', 'Crates of fresh fish on ice on the boat deck in morning light.' ),
	array( 'p15-skipper.webp', 'The skipper coiling rope on the deck of the day boat under an overcast sky.' ),
	array(
		'Hand lines and pots, close to the rocky shelf that runs along our stretch of coast. Whatever comes over the gunwale is inspected at once and layered into crates with crushed ice.',
		'Tomas Varga has fished these waters since before the restaurant had a name, and still ties the Wren up himself.',
	)
);

$what = nagisa_grill_copy( 'What comes in each morning?', array( 'Because we take only what coastal waters yield on the day, our catch changes with the weather, water temperature and tides. Typical landings include hake, mackerel, sea bream, squid, mussels and crab in season. We never purchase fish from commercial markets to fill gaps. Whatever arrives at 10:30 determines the evening slate board, so our guests meet the genuine, unvarnished variety of the local sea.' ) );
echo nagisa_grill_split( 'Catch', $what, 'ng-prose-sect' );

$no = nagisa_grill_copy( 'What happens when the sea says no?', array( 'Coastal weather is unpredictable, and safety always comes first. On rare days when rough seas keep the Wren moored at Berth 14, the restaurant does not close and booked tables remain held. Instead, chef Inès Calder shapes the evening around the stock-pot, the pantry and our shore plates, and guests dine warmly while the harbour wind blows outside.' ) ) . nagisa_grill_link( '/tables/', 'Book a table' );
echo nagisa_grill_split( 'Weather', $no, 'ng-prose-sect' );
