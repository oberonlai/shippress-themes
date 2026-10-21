<?php
/**
 * Title: Page: about Kazu
 * Slug: kazu-data-course/page-about
 * Categories: kazu-data-course
 * Inserter: false
 */
$rules = array(
	array( 'Real datasets', 'Every exercise uses messy data from a real kind of workplace, not a tidy textbook table.' ),
	array( 'Short lessons', 'Lessons run 6 to 18 minutes, so you can finish one before the kettle cools.' ),
	array( 'Written feedback', 'Every project gets a written review from Priya or Kazu, with the next step named.' ),
	array( 'No hype', 'We do not promise jobs, salaries or results. We teach you to ask a question and answer it carefully.' ),
);
$rows = '';
foreach ( $rules as $i => $r ) {
	$rows .= kz_g( 'kz-row sp-reveal sp-reveal--up', kz_p( 'kz-row__no', '0' . ( $i + 1 ) ) . kz_g( 'kz-row__body', kz_h( 3, 'kz-row__title', kz_x( $r[0] ) ) . kz_t( $r[1], 'kz-row__note' ) ) );
}
echo kz_sub( 'Eleven years as an analyst, then a teacher.' )
. kz_g( 'kz-sec kz-inner',
	kz_g( 'kz-split',
		kz_g( 'kz-win-wrap sp-reveal sp-reveal--up', kz_win( 'p13-kazu-board.webp', 'Kazu Moreno at a whiteboard with axes drawn on it, two learners at laptops behind her', 'Kazu Moreno', '34' ) )
		. kz_g( 'kz-split__text',
			kz_open( 'ab_eyebrow', 'ab_title' )
			. kz_t( 'Kazu Moreno spent eleven years as an analyst, first in logistics and then in public-health reporting. Her job was to take a pile of messy exports and say, plainly, what was going on and what to do about it.', 'kz-lead' )
			. kz_t( 'Colleagues kept asking her to show them how. She began by running lunchtime sessions on spreadsheets, then on SQL, and in 2019 she turned those sessions into a course of her own in Rotterdam.' )
			. kz_t( 'Today she writes and records every lesson herself. The course is small on purpose: one teacher, one assistant, one producer and a few thousand learners who mostly have day jobs that are not in data.' )
		)
	)
	. kz_g( 'kz-wide kz-gap',
		kz_g( 'kz-split kz-split--rev',
			kz_g( 'kz-split__text',
				kz_p( 'kz-eyebrow', kz_x( 'How lessons are made' ) )
				. kz_h( 2, 'kz-h2', kz_x( 'A studio, a producer and captions in five languages' ) )
				. kz_t( 'Tomás Ibarra produces the video, sound and captions. He records in the Rotterdam studio, where the desk you see in the lessons is the real one, and he checks every caption against the audio before it goes online.' )
				. kz_t( 'Lessons are recorded in one take where possible. When Kazu makes a mistake she leaves it in and corrects it, because that is how analysis actually goes.' )
			)
			. kz_g( 'kz-split__photo sp-reveal sp-reveal--up', kz_imgx( 'p04-headphones.webp', 'Headphones and a small microphone on a light oak desk in the recording studio', 'kz-photo kz-photo--32' ) )
		)
	)
	. kz_g( 'kz-wide kz-gap',
		kz_g( 'kz-split',
			kz_win( 'p14-priya-call.webp', 'Priya Raman on a video call, in natural light', '', '45', 'kz-win--small' )
			. kz_g( 'kz-split__text',
				kz_p( 'kz-eyebrow', kz_x( 'Teaching assistant' ) )
				. kz_h( 2, 'kz-h2', kz_x( 'Priya Raman reads every project' ) )
				. kz_t( 'Priya Raman works as the course’s teaching assistant. She reviews student projects, answers questions in the course and joins the Thursday live Q&A.' )
				. kz_t( 'Projects are returned within 5 working days, with written comments on the question, the method and the chart.' )
				. kz_p( 'kz-namesmall', kz_x( 'Priya Raman, teaching assistant' ) )
			)
		)
	)
	. kz_g( 'kz-col kz-gap',
		kz_p( 'kz-eyebrow', kz_x( 'Principles' ) )
		. kz_h( 2, 'kz-h2', kz_x( 'Four things we hold to' ) )
		. kz_g( 'kz-rows kz-rows--2', $rows )
		. kz_btns( 'kz-actions__two kz-gap-s', array( array( kazu_x( 'See the curriculum' ), '/curriculum/' ), array( kazu_x( 'Contact us' ), '/contact/', 'is-style-outline' ) ) )
	)
	, 'section', 'full'
);
