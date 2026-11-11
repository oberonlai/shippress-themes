<?php
/**
 * Title: Page: The Day
 * Slug: nagisa-grill/page-the-day
 * Categories: nagisa-grill
 * Inserter: no
 */
echo nagisa_grill_head( 'p14-pass.webp', 'Three cooks plating side by side along the steel pass under warm lamps.', 'The Day', 'Wed–Sun · one service', 'Seatings 18:00 · 20:30' );

$rows = array(
	array( '05:30', 'The Wren leaves Berth 14', 'Tomas Varga takes the Wren out from Berth 14 into coastal waters for morning line and pot fishing.' ),
	array( '10:30', 'The catch lands at the quay', 'The wooden boat returns to the stone quay of Port Ellery with the morning landing, and the crates come directly ashore to our kitchen at 7 Harbour Row.' ),
	array( '11:00', 'The fish is broken down', 'Noor Haddad breaks down the whole fish on the prep tables, separating prime cuts for the charcoal grill while the heads and bones are rinsed and transferred immediately to the stock-pot.' ),
	array( '15:00', 'The board is written', 'Once the morning catch is inspected and portioned, chef Inès Calder writes the evening menu on the slate board in chalk, listing only what the Wren brought in.' ),
	array( '17:30', 'The bar opens', 'Henrik Dahl opens the bar, pouring the first glasses of wine and serving shore plates as the dining room settles.' ),
	array( '18:00', 'First seating', 'Guests are welcomed to their tables for the five-course Boat Menu or the charcoal-grilled whole fish.' ),
	array( '20:30', 'Second seating', 'The second seating follows and continues until last orders are taken at the kitchen pass at 22:00.' ),
	array( '23:00', 'The board is wiped', 'The last guests depart, the dining room goes dark, the slate menu board is wiped clean, and the kitchen rests before the boat sails again.' ),
);
$right  = nagisa_grill_p( 'Our service follows the rhythm of a single morning tide and the work of one boat. From the dawn departure at Berth 14 to the wiping of the slate board at night, each day at Nagisa Grill runs to an unhurried, fixed schedule.', 'ng-lede' );
$right .= nagisa_grill_rows( $rows );
echo nagisa_grill_split( 'Hours', $right, 'ng-day' );

echo nagisa_grill_scene(
	'Why one service',
	'Why do we offer<br>only one service?',
	array( 'p03-chalk.webp', 'A hand with chalk ruling lines across a dark kitchen slate board.' ),
	array( 'p05-room.webp', 'Empty dining room with set wooden tables and tall windows facing a grey harbour.' ),
	array(
		'We choose to operate a single evening service each day from Wednesday to Sunday because our kitchen cooks exclusively what the day boat Wren lands each morning. Dividing our focus across multiple turns or lunch shifts would force us to buy outside fish, freeze delicate catch, or rush the charcoal hearth.',
		'One service allows Inès Calder and Jun Park to cook each fish with complete attention, giving every table the unhurried care that coastal cooking deserves.',
	)
);

echo nagisa_grill_band(
	'Before the doors open',
	'Before the doors open',
	'The hours before service are quiet and deliberate. The charcoal grill is brought to heat slowly, the tables are set with pressed linen and unlit candles, and Henrik Dahl tastes the open bottles. Nothing is assembled in haste. By the time our front doors open at 17:30, the stock has reduced to a clear, deep broth, the bread is warm, and the team knows every plate that will leave the pass.',
	'/kitchen/',
	'The kitchen'
);
