<?php
/**
 * Title: Page: curriculum
 * Slug: kazu-data-course/page-curriculum
 * Categories: kazu-data-course
 * Inserter: false
 */
$mods = array(
	array( 'Module 1', 'Asking a good question', 8, array( 'Where good questions come from', 'Reading a spreadsheet like a map', 'Sorting, filtering and pivoting', 'Writing the question down' ), 'Project: turn a vague request from your own work into one answerable question.' ),
	array( 'Module 2', 'Cleaning messy data', 8, array( 'Dates, names and other small disasters', 'Duplicates without panic', 'Missing values: leave, fill or drop', 'Keeping a cleaning log' ), 'Project: clean an exported file and hand back the log with it.' ),
	array( 'Module 3', 'SQL for analysts', 9, array( 'SELECT, WHERE and thinking in tables', 'Joining two logs', 'Grouping and counting', 'Checking your answer twice' ), 'Project: join three tables and find the one thing that repeats.' ),
	array( 'Module 4', 'Python with pandas', 10, array( 'Your first notebook', 'Loading and reshaping data', 'Group, merge, compare', 'Retention over time' ), 'Project: a retention table from five years of exports.' ),
	array( 'Module 5', 'Charts people actually read', 7, array( 'Choosing the right chart', 'Bars before everything', 'Labels, colour and quiet', 'One chart, one sentence' ), 'Project: make one chart that a busy reader understands in ten seconds.' ),
	array( 'Module 6', 'Final project: a report for a real decision', 6, array( 'Picking a decision', 'Gathering and checking data', 'Drafting the one-page report', 'Presenting what you found' ), 'Project: a one-page report for a real decision, reviewed by Kazu.' ),
);
$cards = '';
foreach ( $mods as $m ) {
	$lessons = '';
	foreach ( $m[3] as $l ) {
		$lessons .= "<!-- wp:list-item -->\n<li>" . kz_x( $l ) . "</li>\n<!-- /wp:list-item -->";
	}
	$cards .= kz_card( $m[0],
		kz_g( 'kz-mod',
			kz_g( 'kz-mod__head', kz_h( 3, 'kz-mod__title', kz_x( $m[1] ) ) . kz_p( 'kz-num', $m[2] . ' <small>' . kz_x( 'lessons' ) . '</small>' ) )
			. kz_g( 'kz-mod__body',
				"<!-- wp:list {\"className\":\"kz-checks\"} -->\n<ul class=\"wp-block-list kz-checks\">$lessons</ul>\n<!-- /wp:list -->\n\n"
				. kz_t( $m[4], 'kz-small kz-small--0' )
			)
		), 'kz-modcard sp-reveal sp-reveal--up' );
}
echo kz_sub( 'Six modules, 48 lessons, 14 hours of video.' )
. kz_g( 'kz-sec kz-inner',
	kz_g( 'kz-col',
		kz_t( 'The course is one path from a vague question to a report you can hand to someone who has to decide. You learn spreadsheets, SQL and Python in that order, and every module ends in a project that gets a written review.', 'kz-lead' )
		. kz_t( 'Nothing here assumes a maths degree. If you can open a spreadsheet, you can start with Module 1.' )
	)
	. kz_g( 'kz-mid kz-gap-s', kz_imgx( 'p15-flatlay.webp', 'A notebook, pencil, round glasses and a laptop with a blurred table on a light oak desk, seen from above', 'kz-photo kz-photo--32' ) . kz_p( 'kz-caption', kz_x( 'Free preview: Lesson 1.3 “Where good questions come from”, 11 minutes, no account needed.' ) ) )
	. kz_g( 'kz-mid kz-gap kz-modlist', $cards )
	. kz_g( 'kz-col kz-gap', kz_btns( 'kz-actions__two', array( array( kazu_x( 'Buy the course' ), kazu_buy_url() ), array( kazu_x( 'See the price list' ), '/pricing/', 'is-style-outline' ) ) ) ),
	'section', 'full'
);
