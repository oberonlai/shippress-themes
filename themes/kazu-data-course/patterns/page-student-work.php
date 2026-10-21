<?php
/**
 * Title: Page: student-work
 * Slug: kazu-data-course/page-student-work
 * Categories: kazu-data-course
 * Inserter: false
 */
$ring = '<!-- wp:html -->' . "\n" . '<div class="kz-ring kz-ring--page sp-parallax" aria-hidden="true"><img src="' . esc_url( get_theme_file_uri( 'assets/images/watermark-ring.svg' ) ) . '" alt="" width="640" height="640"/></div>' . "\n<!-- /wp:html -->\n\n";
$st = array(
	array( 'p07-amara.webp', 'Amara Osei at a standing desk in a bright warehouse office', 'Amara', 'Amara Osei: “Why are returns up?”', 'Amara coordinates operations for a warehouse that handles returns. Her question was simple: why were returns going up? She joined three return logs in SQL and found that one size chart caused most of the repeat returns. She wrote a one-page memo for her team. It was her Module 3 project.', 'Amara Osei, operations coordinator, returns warehouse. Project from Module 3.' ),
	array( 'p08-lena.webp', 'Lena Hoffmann at a nonprofit office table with a laptop', 'Lena', 'Lena Hoffmann: “Who stops giving, and when?”', 'Lena works in fundraising at a small nonprofit and had five years of donation exports nobody trusted. She cleaned them in a spreadsheet, then in pandas, and drew a plain retention chart. Her board now reads it every quarter. It grew out of Modules 4 and 5.', 'Lena Hoffmann, fundraising, small nonprofit. Projects from Modules 4 and 5.' ),
	array( 'p09-daniel.webp', 'Daniel Kowalski in a bright bakery back room with a tablet', 'Daniel', 'Daniel Kowalski: “How many loaves on a rainy Tuesday?”', 'Daniel owns a neighbourhood bakery. He compared daily sales with the weather and the weekday, and turned the result into a plain weekly baking plan. There is less leftover bread on the shelf, which he can see for himself. It was his final project, Module 6.', 'Daniel Kowalski, owner, neighbourhood bakery. Final project, Module 6.' ),
);
$rows = '';
foreach ( $st as $i => $s ) {
	$rows .= kz_g( 'kz-story sp-reveal sp-reveal--up' . ( 1 === $i ? ' kz-story--rev' : '' ),
		kz_win( $s[0], $s[1], $s[2], '34', 'kz-frame--story' )
		. kz_g( 'kz-story__text', kz_h( 3, 'kz-story__title', kz_x( $s[3] ) ) . kz_t( $s[4] ) . kz_p( 'kz-caption', kz_x( $s[5] ) ) )
	);
}
$q = array(
	array( 'Quote', '“I do HR, not data. By Module 2 I was cleaning our leave records and finding the gaps myself.”', 'Sofia Marchetti, HR generalist' ),
	array( 'Quote', '“The written feedback was the point for me. Each review told me exactly what to fix next.”', 'Jae-won Park, public-library programme lead' ),
);
$quotes = '';
foreach ( $q as $x ) {
	$quotes .= kz_card( $x[0], kz_p( 'kz-quote', kz_x( $x[1] ) ) . kz_p( 'kz-namesmall', kz_x( $x[2] ) ), 'kz-quotecard' );
}
echo kz_sub( 'Real questions, small decisions.' )
. kz_g( 'kz-sec kz-inner kz-work kz-work--page',
	$ring
	. kz_g( 'kz-mid kz-work__in',
		kz_g( 'kz-col', kz_t( 'Students arrive with a question from their own work. These three finished projects were shared with permission. Outcomes are described in words, not promised.', 'kz-lead' ) )
		. kz_g( 'kz-stories', $rows )
		. kz_g( 'kz-quotes kz-gap', $quotes )
	),
	'section', 'full'
);
