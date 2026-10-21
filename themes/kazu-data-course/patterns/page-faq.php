<?php
/**
 * Title: Page: faq
 * Slug: kazu-data-course/page-faq
 * Categories: kazu-data-course
 * Inserter: false
 */
$groups = array(
	'Before buying' => array(
		array( 'Do I need to know any maths or code?', 'No. You need to be able to open a spreadsheet. SQL and Python are taught from the first line.' ),
		array( 'Can I watch anything before I pay?', 'Yes. Lesson 1.3, “Where good questions come from”, is 11 minutes and is open to everyone without an account.' ),
		array( 'How long does the course take?', 'There are 14 hours of video. Most people take two to four months alongside work, and you have 24 months of access.' ),
		array( 'Will this get me a job?', 'We do not promise jobs or salaries. We promise clear lessons and real feedback on your projects.' ),
	),
	'Access and accounts' => array(
		array( 'How do I get into the lessons after paying?', 'The checkout creates your account. Log in and open My courses; the course appears there straight away.' ),
		array( 'What if I miss the live Q&A?', 'The Thursday session, 18:00 to 19:00 CET, is recorded and added to My courses.' ),
		array( 'Are there captions?', 'Yes, in English, Chinese, Japanese, French and German.' ),
	),
	'Projects and feedback' => array(
		array( 'Who reviews my projects?', 'Priya Raman or Kazu Moreno. You get written comments within 5 working days.' ),
		array( 'Can I use data from my own job?', 'Yes, if you are allowed to. Otherwise Kazu supplies practice datasets for every project.' ),
		array( 'What if I want to talk it through?', 'You can add a 45-minute video call with Kazu or Priya for €70.' ),
	),
	'Teams and invoices' => array(
		array( 'Can my employer pay?', 'Yes. The team licence has five seats for €1,160 and comes with one invoice.' ),
		array( 'Do you issue invoices for a single course?', 'Yes. Write to us after buying and include the name and address for the invoice.' ),
		array( 'Where do I ask something not covered here?', 'Email us Monday to Friday, 09:00 to 17:00 CET. We reply within 2 working days.' ),
		array( 'Is the studio open to visitors?', 'No, lessons are online. The Rotterdam studio is where they are recorded.' ),
	),
);
$out = '';
foreach ( $groups as $g => $qs ) {
	$d = '';
	foreach ( $qs as $q ) {
		$d .= kz_details( kazu_x( $q[0] ), kazu_x( $q[1] ) );
	}
	$out .= kz_g( 'kz-faqgroup', kz_h( 3, 'kz-h3', kz_x( $g ) ) . kz_g( 'kz-faq', $d ) );
}
echo kz_sub( 'Short answers before you buy.' )
. kz_g( 'kz-sec kz-inner',
	kz_g( 'kz-mid', kz_imgx( 'p17-group.webp', 'Four adults at a library table with laptops, talking quietly', 'kz-photo kz-photo--32' ) )
	. kz_g( 'kz-col kz-gap', $out
		. kz_t( 'Email support is open Mon–Fri 09:00–17:00 CET. Live Q&A is every Thursday 18:00–19:00 CET.', 'kz-small' ) ),
	'section', 'full'
);
