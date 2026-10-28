<?php
/**
 * Mame Coffee: theme strings (en).
 *
 * Every key is used by a pattern in patterns/ or a template part; the other languages (inc/i18n/<lang>.php) use the
 * same keys, and a missing key falls back to this file.
 *
 * @package mame-coffee
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

return array(
	// parts/header.html, parts/footer.html (patterns/head-*.php, foot-*.php)
	'head_menu'       => 'Menu',
	'head_lang'       => 'EN',
	'foot_address'    => 'Branderijstraat 12<br>9000 Ghent, Belgium<br>+32 9 000 12 34<br>hello@mamecoffee.example',
	'foot_bar_t'      => 'Bar',
	'foot_bar'        => 'Wednesday to Sunday<br>8:00–16:00<br>Monday and Tuesday: roasting only',
	'foot_roast_t'    => 'Roasting',
	'foot_roast'      => 'Monday, Tuesday, Thursday<br>from 6:30<br>Cupping Thursday 11:00',
	'foot_nav_t'      => 'Explore',
	'foot_copy'       => '© 2026 Mame Coffee · Ghent',
	'foot_name'       => 'MAME COFFEE',

	// patterns/front-hero.php
	'hero_alt_bg'     => 'Sunlit roastery hall with tall steel windows and jute sacks on the floor.',
	'hero_alt_frame'  => 'A roaster watching freshly roasted coffee beans drop into a circular cooling tray.',
	'hero_lede_1'     => 'Few lots, chosen at the farm.',
	'hero_lede_2'     => '<span class="mc-u">Roasted this morning</span>, poured within weeks.',
	'hero_mark'       => 'MAME COFFEE',
	'hero_sub'        => 'Roastery &amp; coffee bar · Ghent',
	'hero_scroll'     => 'Scroll down',

	// patterns/front-statement.php
	'stmt_alt'        => 'Morning mist settling over terraced rows of coffee shrubs on a green hillside.',
	'stmt_1'          => '<span class="mc-u">Buy few lots.</span> <span class="mc-u">Know who grew them.</span>',
	'stmt_2'          => 'Roast them on Monday, Tuesday and Thursday,',
	'stmt_3'          => 'and pour them before they fade.',
	'stmt_label'      => 'MAME COFFEE · GHENT',
	'stmt_body'       => 'We buy only six green lots a year, working directly with growers we know at origin. Four lots remain on the bar at any given time, roasted on our five-kilogram drum roaster in Ghent and poured between day five and day twenty-eight. By roasting three mornings each week in small batches, every harvest is enjoyed fresh before its distinctive sweetness and clarity fade.',

	// patterns/front-lots.php
	'lots_label'      => 'LOTS | ON THE BAR NOW',
	'lots_sweet'      => 'Sweetness',
	'lots_acid'       => 'Acidity',
	'lots_body'       => 'Body',
	'lots_per'        => '/ 200 g',
	'lots_1_name'     => 'KIAMARA',
	'lots_1_line'     => 'NYERI, KENYA · 1,800 M · WASHED',
	'lots_1_chip'     => 'NEW LOT',
	'lots_1_alt'      => 'Plain kraft paper coffee bag standing upright on a grey surface beside roasted beans.',
	'lots_1_text'     => 'Crisp blackcurrant and a clean, juicy finish. Roasted on Mondays and poured from day five until day twenty-eight.',
	'lots_2_name'     => 'ALTO ROCÍO',
	'lots_2_line'     => 'HUILA, COLOMBIA · 1,700 M · WASHED',
	'lots_2_chip'     => 'ON THE BAR',
	'lots_2_alt'      => 'Unprinted matte off-white coffee bag standing upright with roasted beans on light grey ground.',
	'lots_2_text'     => 'Balanced caramel and stone fruit sweetness, round and easy to drink. Roasted on Mondays, poured within four weeks.',
	'lots_3_name'     => 'HARA BURA',
	'lots_3_line'     => 'GUJI, ETHIOPIA · 2,000 M · NATURAL',
	'lots_3_chip'     => 'LAST WEEKS',
	'lots_3_alt'      => 'Matte charcoal coffee bag standing upright beside a small pile of roasted coffee beans.',
	'lots_3_text'     => 'Fragrant florals and ripe berries, light in the cup. Roasted on Tuesdays and nearly finished on the bar.',
	'lots_4_name'     => 'EL MIRADOR',
	'lots_4_line'     => 'CHALATENANGO, EL SALVADOR · 1,600 M · HONEY',
	'lots_4_chip'     => 'SATURDAY CUPPING',
	'lots_4_alt'      => 'Plain sage grey coffee bag upright on grey surface beside roasted coffee beans.',
	'lots_4_text'     => 'Layered plum sweetness with a soft, full body. Roasted on Tuesdays; taste it first at the Saturday cupping.',
	'lots_more'       => 'All lots and past lots',

	// patterns/front-pour.php
	'pour_alt'        => 'Pouring hot water from a gooseneck kettle into a coffee dripper over glass carafe.',
	'pour_title'      => 'HOW A CUP IS POURED',
	'pour_1_k'        => '15 g · 250 g · 93 °C',
	'pour_1'          => 'We weigh 15 grams of freshly ground coffee for 250 grams of filtered water heated to 93 °C.',
	'pour_2_k'        => '40 s bloom · three pours',
	'pour_2'          => 'A 40-second bloom opens the grounds and releases the aromatics, then three steady, concentric pours extract clarity and balance.',
	'pour_3_k'        => 'Done at 3:00',
	'pour_3'          => 'The draw-down finishes at three minutes, a vibrant cup that shows the soil, altitude and processing of the farm.',
	'pour_more'       => 'The bar menu',

	// patterns/front-people.php
	'ppl_label'       => 'PEOPLE | WHO ROASTS',
	'ppl_wide_title'  => 'ON BY 6:30, THREE MORNINGS A WEEK',
	'ppl_wide_line'   => 'ROASTERY | 5 KG DRUM',
	'ppl_wide_alt'    => 'Roaster checking a sample of roasted coffee beans from the trier near drum roaster.',
	'ppl_wide_text'   => 'Our roastery starts early three mornings a week. Ines Duarte, Amara Okoye and Tomas Varga take turns on the five-kilogram drum roaster, keeping batches small so every profile stays exact. Every Thursday at 11:00, Mei Lin Ho cups all the roasts of the week and decides which bags move to the bar shelves, and which go back for another look.',
	'ppl_narrow_title' => 'INES DUARTE',
	'ppl_narrow_line' => 'HEAD ROASTER · CO-FOUNDER',
	'ppl_narrow_alt'  => 'Portrait of female head roaster wearing dark apron standing beside the coffee drum roaster.',
	'ppl_r1_when'     => 'Mon 6:30',
	'ppl_r1_who'      => 'Ines Duarte',
	'ppl_r1_what'     => 'Kiamara, Alto Rocío',
	'ppl_r2_when'     => 'Tue 6:30',
	'ppl_r2_who'      => 'Amara Okoye',
	'ppl_r2_what'     => 'Hara Bura, El Mirador',
	'ppl_r3_when'     => 'Thu 6:30',
	'ppl_r3_who'      => 'Tomas Varga',
	'ppl_r3_what'     => 'whichever lot runs low',
	'ppl_r4_when'     => 'Thu 11:00',
	'ppl_r4_who'      => 'Mei Lin Ho',
	'ppl_r4_what'     => 'cups every roast of the week',

	// patterns/front-bar.php
	'bar_label'       => 'BAR | WED–SUN 8:00–16:00',
	'bar_title'       => 'AT THE BAR',
	'bar_note'        => 'Filter is always the current lot.',
	'bar_1_n'         => 'Filter, current lot',
	'bar_1_d'         => 'Brewed fresh through the morning from the lot on the bar.',
	'bar_1_p'         => '€4.50',
	'bar_2_n'         => 'Espresso',
	'bar_2_d'         => 'A single shot pulled from the current lot.',
	'bar_2_p'         => '€3.00',
	'bar_3_n'         => 'Cortado',
	'bar_3_d'         => 'Equal parts espresso and steamed milk.',
	'bar_3_p'         => '€3.80',
	'bar_4_n'         => 'Flat white',
	'bar_4_d'         => 'Double shot with velvety microfoam.',
	'bar_4_p'         => '€4.20',
	'bar_5_n'         => 'Pour-over flight',
	'bar_5_d'         => 'Two lots × 150 ml, side by side.',
	'bar_5_p'         => '€8.00',
	'bar_6_n'         => 'Cold brew',
	'bar_6_d'         => 'Summer only, brewed cold from the current lot.',
	'bar_6_p'         => '€4.50',
	'bar_7_n'         => 'Cardamom bun',
	'bar_7_d'         => 'Baked fresh, the usual partner for a filter.',
	'bar_7_p'         => '€3.50',

	// patterns/front-stories.php
	'sto_title_1'     => 'A WEEK AT HARA BURA',
	'sto_alt_1'       => 'Coffee green buyer and farm producer talking alongside raised mesh coffee drying beds.',
	'sto_text_1'      => 'Tomas Varga walks the hillside plots in Guji and watches natural processing on raised beds at harvest.',
	'sto_line_1'      => 'JOURNAL | OCT 2026',
	'sto_title_2'     => 'SORTING BY HAND',
	'sto_alt_2'       => 'Hands sorting green coffee beans in a circular sieve to remove defective beans.',
	'sto_text_2'      => 'New green arrivals are graded by density and sorted for defects before the drum is lit.',
	'sto_line_2'      => 'JOURNAL | SEP 2026',
	'sto_title_3'     => 'DAY 5 TO DAY 28',
	'sto_alt_3'       => 'Close-up of freshly roasted coffee beans turning inside a perforated metal cooling tray.',
	'sto_text_3'      => 'Why we rest every roast for five days, and why each lot leaves the bar within twenty-eight.',
	'sto_line_3'      => 'JOURNAL | AUG 2026',
	'sto_more'        => 'Read the journal',

	// patterns/front-visit.php
	'visit_alt'       => 'Bright coffee bar interior with long wooden counter, guests, barista, and large windows.',
	'visit_1'         => '<span class="mc-u">Sit at the bar</span>',
	'visit_2'         => '<span class="mc-u">while the roaster cools.</span>',
	'visit_text'      => 'Our roastery and coffee bar is at Branderijstraat 12 in Ghent, five minutes’ walk from Gent-Dampoort station.',
	'visit_a_t'       => 'Address',
	'visit_a'         => 'Branderijstraat 12<br>9000 Ghent, Belgium',
	'visit_b_t'       => 'Bar hours',
	'visit_b'         => 'Wednesday to Sunday<br>8:00–16:00',
	'visit_c_t'       => 'Roasting days',
	'visit_c'         => 'Monday, Tuesday, Thursday<br>from 6:30',
	'visit_d_t'       => 'Contact',
	'visit_d'         => '+32 9 000 12 34<br>hello@mamecoffee.example',
	'visit_more'      => 'Plan a visit',
);
