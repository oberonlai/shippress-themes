<?php
/**
 * Saji Culinary School: inner page content (English). One entry per page; other languages add inc/i18n/pages-<lang>.php.
 *
 * @package saji-culinary
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

return array(
	'the-day' => array(
		'word' => 'THE DAY',
		'sub' => '06:30 to 15:00, Monday to Friday',
		'img' => 'p1-taste.webp',
		'alt' => 'A student tastes a sauce from a steel spoon at the pass.',
		'pull' => 'Every training day has the same five stations, and every station ends with a taste.',
		'paras' => array(
			'The day starts before the city does. By 06:30 the deliveries are on the bench, and students check each crate against the order, write the prep lists and set their stations before the first knife is lifted.',
			'The timetable never changes from week to week, which is the point. Habits form when the hour of the day tells you what your hands should be doing.',
		),
		'rows' => array(
			array( 'Mise en place', '06:30 – 08:00', '', 'Students check the morning deliveries, work through the station prep lists and set their stations before the first knife is lifted.' ),
			array( 'Technique class', '08:00 – 10:30', '', 'A chef-instructor demonstrates one technique, then every student practises it straight away at their own station.' ),
			array( 'Family meal', '10:45 – 11:30', '', 'A rotating student station cooks a hot, shared lunch for the whole school brigade, then sits down to eat it together.' ),
			array( 'Lunch service', '11:30 – 14:00', '', 'Forty covers are prepared, cooked and served to public guests at The Pass, with an instructor tasting at the line.' ),
			array( 'Debrief & clean-down', '14:00 – 15:00', '', 'The day’s service is reviewed, stations are sanitised, and on Tuesday and Thursday a theory hour closes the day at 15:00.' ),
		),
		'go' => array( '/programmes/', 'Read about the four terms' ),
	),
	'programmes' => array(
		'word' => 'TERMS',
		'sub' => 'forty weeks, four plates',
		'pull' => 'Four terms of ten weeks each, one diploma, and a placement in a working kitchen at the end.',
		'paras' => array(
			'The Professional Cook Diploma runs for 40 weeks. Each term ends with a practical assessment at the pass, and students move to the next term only when they have cooked the previous one’s service cleanly.',
			'The Pastry & Bread Certificate takes Terms I and III only, for 20 weeks, and working cooks may join any single term for 10 weeks.',
		),
		'rows' => array(
			array( 'Foundations', 'Term I · 10 weeks', '', 'Precise knife skills, stocks, egg cookery and classical vegetable cuts: the base every other term builds on.', 'term-1' ),
			array( 'Stocks, sauces & fish', 'Term II · 10 weeks', '', 'Classical reductions, emulsified sauces and professional fish filleting, tasted and corrected at every stage.', 'term-2' ),
			array( 'Pastry & bread', 'Term III · 10 weeks', '', 'Sourdough fermentation, viennoiserie, laminated doughs and plated desserts under the pastry lead.', 'term-3' ),
			array( 'Service & stage', 'Term IV · 10 weeks', '', 'Complete menu design and portion costing, then a six-week placement in one of our 30 partner kitchens.', 'term-4' ),
		),
		'go' => array( '/tuition/', 'See tuition & fees' ),
	),
	'the-pass' => array(
		'word' => 'MENU',
		'sub' => 'lunch, cooked by students',
		'img' => 'd4-plate.webp',
		'alt' => 'A plated dish on a white plate at the pass.',
		'pull' => 'The Pass is our teaching dining room: forty seats, an open line and a three-course lunch cooked by the current term.',
		'paras' => array(
			'The Pass is open Tuesday to Friday, 12:00 to 13:30. From week three, students take turns on the line while instructors taste at the pass and send plates back when they are not right.',
			'Two courses are €19 and three courses are €24. Tables can be booked by email or telephone, and the menu changes with the term and the market.',
		),
		'rows' => array(
			array( 'First course', 'Cold kitchen', '€19 / €24', 'A seasonal plate from the garde manger station: vegetables, cured fish or a terrine, dressed and seasoned to order.' ),
			array( 'Main course', 'Hot kitchen', '€19 / €24', 'The centre of the lunch, built around the sauce or fish work of the current term, with garnishes cooked to the minute.' ),
			array( 'Dessert', 'Pastry', '€24', 'Served with the three-course menu: a plated dessert or tart from the pastry station, finished at the pass.' ),
		),
		'go' => array( '/contact/', 'Book a table' ),
	),
	'instructors' => array(
		'word' => 'BRIGADE',
		'sub' => 'seven chef-instructors',
		'img' => 'c1-instructor.webp',
		'alt' => 'A female chef instructor in a white jacket stands with loosely folded arms.',
		'pull' => 'Professional cooking is a craft refined through daily repetition, beside people who have done it for years.',
		'paras' => array(
			'Our brigade of seven chef-instructors brings decades of commercial kitchen experience to the teaching kitchens, mentoring twelve students per station from the morning deliveries to the final service debrief.',
			'Marta Ilić and Owen Achterberg founded the school in 2011; the other five chefs joined between 2013 and 2019. Each leads one station and teaches it every week of the year.',
		),
		'rows' => array(
			array( 'Marta Ilić', 'Director & hot kitchen', 'since 2011', '' ),
			array( 'Owen Achterberg', 'Pastry & bread', 'since 2011', '' ),
			array( 'Lucía Ferrer', 'Sauces & stocks', 'since 2013', '' ),
			array( 'Kwame Mensah', 'Butchery & fish', 'since 2015', '' ),
			array( 'Priya Raman', 'Garde manger & vegetables', 'since 2016', '' ),
			array( 'Henrik Dahl', 'Dining room & The Pass', 'since 2018', '' ),
			array( 'Amira Haddad', 'Kitchen management & costing', 'since 2019', '' ),
		),
		'go' => array( '/admissions/', 'Start with a trial day' ),
	),
	'graduates' => array(
		'word' => 'KITCHENS',
		'sub' => 'where graduates cook now',
		'img' => 'g1-hotel.webp',
		'alt' => 'A hotel kitchen at the evening pass.',
		'pull' => 'Graduates cook in independent bistros, hotel dining rooms, artisan bakeries and institutional kitchens across Europe.',
		'paras' => array(
			'Every Term IV student spends six weeks in one of our 30 partner kitchens.',
			'The school keeps no placement guarantee, only a simple promise: every Term IV student cooks six weeks in a real kitchen, and the chef there writes the report that goes into the diploma.',
		),
		'rows' => array(
			array( 'Chef de partie, hotel kitchen', 'JONAS WEBER · CLASS OF 2021', '', 'Jonas runs the sauce section in a hotel kitchen, where the evening rush has the rhythm he learned at The Pass: taste, adjust, plate, send. The steel spoon from his first morning is still in his apron pocket.' ),
			array( 'Pastry cook, neighbourhood bakery', 'AISHA BELLO · CLASS OF 2022', '', 'Aisha is up before dawn shaping sourdough loaves and laminating viennoiserie in a small bakery, the work she first practised in Term III beside Owen’s pastry bench.' ),
			array( 'Sous-chef, forty-seat bistro', 'TOMÁS ORTEGA · CLASS OF 2019', '', 'Tomás writes the prep lists and calls the evening pass in a forty-seat bistro, a job that grew out of the service shifts and the six-week placement he did in Term IV.' ),
		),
		'go' => array( '/admissions/', 'Apply for the next intake' ),
	),
	'tuition' => array(
		'word' => 'TUITION',
		'sub' => 'what the year costs, in euros',
		'img' => 'd1-cuts.webp',
		'alt' => 'Vegetable cuts on a steel tray.',
		'pull' => 'One price per programme, payable in up to four instalments.',
		'paras' => array(
			'Fees cover tuition, the lunch service ingredients and exams. The knife roll, whites and steel tasting spoon are a one-time kit fee of €420, fitted in the first week.',
		),
		'table' => array(
			array( 'Programme', 'Length', 'Price' ),
			array( 'Professional Cook Diploma', '4 terms, 40 weeks', '€14,800' ),
			array( 'Pastry & Bread Certificate', 'Terms I + III, 20 weeks', '€7,900' ),
			array( 'Single term (working cooks)', '10 weeks', '€3,900' ),
			array( 'Kitchen trial day', '1 day', '€60' ),
			array( 'Knife roll & whites kit', 'One time', '€420' ),
			array( 'Evening course: Stocks & sauces', '6 evenings', '€480' ),
			array( 'The Pass lunch, three courses', 'Two courses €19', '€24' ),
		),
		'go' => array( '/admissions/', 'How to apply' ),
	),
	'admissions' => array(
		'word' => 'APPLY',
		'sub' => 'four steps to a place',
		'img' => 'd2-fish.webp',
		'alt' => 'A filleted fish on a steel bench.',
		'pull' => 'Admission is a conversation, not an exam, and it starts with a day in the kitchen.',
		'paras' => array(
			'Two intakes start each year, in February and in September. Applications close six weeks before the start; the notices page lists the exact date.',
		),
		'rows' => array(
			array( '1. Apply online', 'Step one', '', 'Send the short form with a few lines about why you want to cook.' ),
			array( '2. Kitchen trial day', 'Step two', '€60', 'A day at a station with the current term, to see whether the work suits you.', 'trial' ),
			array( '3. Interview', 'Step three', '', 'A conversation with a chef-instructor about your goals and your schedule.' ),
			array( '4. Offer and kit fitting', 'Step four', '', 'If there is a place, you receive an offer and are fitted for whites and your knife roll.' ),
		),
		'go' => array( '/contact/', 'Write to the office' ),
	),
	'about' => array(
		'word' => 'SINCE 2011',
		'sub' => 'a school built on a spoon',
		'img' => 'v1-school.webp',
		'alt' => 'The school building on the canal.',
		'pull' => 'We named the school after the tasting spoon every student carries.',
		'paras' => array(
			'In 2011, chefs Marta Ilić and Owen Achterberg founded Saji Culinary School inside a former ship’s-chandler warehouse on the Veerkade in Rotterdam. They wanted a calm, disciplined academy where practical technique comes before demonstration.',
			'The name comes from saji, the Japanese tasting spoon. On day one every student receives an unadorned steel spoon that stays in their pocket for the forty weeks of the course, a reminder to taste stocks, sauces and seasoning at every stage.',
			'By week three students cook midday service for the public at The Pass. Timing, temperature, teamwork and accountability become habits long before graduation.',
		),
		'go' => array( '/instructors/', 'Meet the instructors' ),
	),
	'contact' => array(
		'word' => 'VISIT',
		'sub' => 'come to an open kitchen',
		'img' => 'h1-pass.webp',
		'alt' => 'Students plating at a steel pass while an instructor watches.',
		'pull' => 'Tour the teaching kitchens, watch a class and talk through the diploma with a chef-instructor.',
		'paras' => array(
			'The open kitchen is on the first Saturday of every month, 10:00 to 13:00. No booking is needed.',
		),
		'rows' => array(
			array( 'Address', 'Rotterdam', '', 'Veerkade 18, 3016 DE Rotterdam, Netherlands' ),
			array( 'Telephone', 'Office', '', '+31 10 555 0118' ),
			array( 'Email', 'Office', '', 'hello@saji-culinary.example' ),
			array( 'Office hours', 'Weekdays', '', 'Monday to Friday 08:00–16:00' ),
			array( 'The Pass', 'Lunch', '', 'Tuesday to Friday 12:00–13:30' ),
			array( 'Open kitchen', 'Monthly', '', 'First Saturday of each month, 10:00–13:00' ),
		),
		'go' => array( '/admissions/', 'Book a trial day' ),
	),
);
