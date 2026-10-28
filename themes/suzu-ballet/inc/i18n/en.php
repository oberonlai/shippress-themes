<?php
/**
 * Suzu Ballet: theme strings (en).
 *
 * Every key is used by a pattern in patterns/ or a template part; the other languages (inc/i18n/<lang>.php) use the
 * same keys, and a missing key falls back to this file.
 *
 * @package suzu-ballet
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

return array(
	// patterns/head-main.php, foot-main.php
	'nav_classes'    => 'Classes',
	'nav_timetable'  => 'Timetable',
	'nav_teachers'   => 'Teachers',
	'nav_about'      => 'About',
	'nav_contact'    => 'Contact',
	'nav_book'       => 'Book a trial',
	'foot_name'      => 'SUZU BALLET',
	'foot_addr_t'    => 'Studio',
	'foot_addr'      => '2nd floor, 210 Alder Row<br>Victoria, BC V8W 1A1, Canada<br>+1 250 555 0142<br>hello@suzuballet.example',
	'foot_hours_t'   => 'Front desk',
	'foot_hours'     => 'Monday to Friday 06:45–21:45<br>Saturday 08:30–13:00<br>Sunday closed',
	'foot_nav_t'     => 'Explore',
	'foot_links'     => '<a href="/classes/">Classes</a><br><a href="/timetable/">Timetable</a><br><a href="/fees/">Fees &amp; Terms</a><br><a href="/teachers/">Teachers &amp; Pianists</a><br><a href="/trial/">Trial class</a><br><a href="/about/">About the studio</a><br><a href="/showcase/">Showcase</a><br><a href="/journal/">Journal</a><br><a href="/contact/">Contact</a>',
	'foot_copy'      => '© 2026 Suzu Ballet · Victoria, BC',

	// patterns/front-hero.php
	'hero_alt'       => "Teacher lifts a student's arm at the barre, reflected in the studio wall mirror.",
	'hero_l1'        => 'STAND TALL,',
	'hero_l2'        => 'AT THE BARRE.',
	'hero_sub'       => 'Ballet school for children and adults · Victoria',

	// patterns/front-day-strip.php
	'strip_h'        => 'A WEDNESDAY AT SUZU',
	'strip_label'    => 'Seven classes, one day',
	'strip_hint'     => 'Scroll →',
	'strip_1_n'      => 'Morning Open Class',
	'strip_1_m'      => 'Adults · intermediate · live piano',
	'strip_1_s'      => 'Window Studio<br>Mira Ostrowska · piano Hélène Marchetti',
	'strip_2_n'      => 'Adult Beginners',
	'strip_2_m'      => 'Adults · daytime · live piano',
	'strip_2_s'      => 'Window Studio<br>Priya Raman · piano Hélène Marchetti',
	'strip_3_n'      => 'Pre-ballet',
	'strip_3_m'      => 'Ages 4–6 · first steps and skips',
	'strip_3_s'      => 'Garden Studio<br>Aiko Brandt',
	'strip_4_n'      => 'Children',
	'strip_4_m'      => 'Ages 7–10 · classical foundations',
	'strip_4_s'      => 'Garden Studio<br>Aiko Brandt',
	'strip_5_n'      => 'Juniors',
	'strip_5_m'      => 'Ages 11–15 · classical training · live piano',
	'strip_5_s'      => 'Window Studio<br>Tomás Ferreira · piano Daniel Mensah',
	'strip_6_n'      => 'Adult Improvers',
	'strip_6_m'      => 'Adults · evening · live piano',
	'strip_6_s'      => 'Window Studio<br>Priya Raman · piano Daniel Mensah',
	'strip_7_n'      => 'Repertory rehearsal',
	'strip_7_m'      => 'By invitation · Spring term',
	'strip_7_s'      => 'Garden Studio<br>Tomás Ferreira · piano Daniel Mensah',

	// patterns/front-intro.php
	'intro_l1'       => 'Every class begins at the barre.',
	'intro_l2'       => 'Every dancer leaves a little taller.',
	'intro_p1'       => 'Founded in 2012 by Mira Ostrowska, Suzu Ballet is a daylight studio in Victoria dedicated to deliberate, classical dance training for students of all ages. We believe that proper alignment is built through patient repetition and hands-on corrections rather than hurried routines. In our two light-filled rooms, the Window Studio and the Garden Studio, students practise on sprung maple floors that protect the body while building strength and poise.',
	'intro_p2'       => 'Every adult and Juniors class is accompanied by a live pianist, grounding technique in responsive acoustic music. From four-year-olds in Pre-ballet discovering balance to adults refining their adage, our dancers share a quiet, focused room where disciplined study produces genuine grace.',
	'intro_cta'      => 'OUR STUDIO →',

	// patterns/front-reasons.php
	'why_label'      => 'Three pillars of our practice',
	'why_1_t'        => 'Live piano, every adult class',
	'why_1_p'        => 'Acoustic music teaches dancers how to breathe within the phrase, adjusting tempo and dynamics to support the work at the barre and in the centre.',
	'why_2_t'        => 'Small classes: 12 children, 16 adults',
	'why_2_p'        => 'We cap attendance at twelve students for children and sixteen for adults, so every dancer receives personal, hands-on corrections from the teacher during each exercise.',
	'why_3_t'        => 'One building, two studios',
	'why_3_p'        => 'Children, teenagers and adult dancers share the same sprung floors and natural daylight, a multi-generational community united by a shared dedication to classical technique.',

	// patterns/front-classes.php
	'cls_alt'        => 'Adult dancer performs a tendu à la seconde beside the wooden studio barre.',
	'cls_h'          => 'CLASSES<br>&amp; FEES',
	'cls_sub'        => 'Children from 4, adults at any age',
	'cls_p'          => 'We offer structured training in four divisions: Pre-ballet for ages 4 to 6, Children for ages 7 to 10, Juniors for ages 11 to 15, and adult classes from Beginners to Open level. Whether you commit to a twelve-week term or drop in for morning practice, you can begin with a trial class for $15.',
	'cls_cta'        => 'CLASSES & FEES →',

	// patterns/front-day.php
	'day_h'          => 'THE WEEK,<br>MORNING TO NIGHT',
	'day_1_l'        => 'MORNING · WEEKDAYS 07:00–11:15',
	'day_1_h'        => 'The barre, divided',
	'day_1_p'        => 'The studio wakes in clear daylight for the 75-minute Morning Open Class and the daytime Adult Beginners. Mira divides the class with classical rigour: 40 minutes at the barre through pliés, tendus, ronds de jambe, fondus, frappés, adage and grands battements, then 25 minutes of centre work and allegro, closing with a 5-minute révérence. At the piano, Hélène gives each exercise its own character: a slow 3/4 for pliés, a crisp 2/4 for tendus, a lively mazurka for ronds de jambe and a broad waltz for grands battements.',
	'day_1_r1'       => '07:00|Morning Open Class|Monday to Friday',
	'day_1_r2'       => '10:00|Adult Beginners|Mon · Wed · Fri',
	'day_1_alt'      => 'Adult dancers in morning class perform pliés at the barre with a pianist playing behind.',
	'day_1_q'        => '“I split the class so that nobody is rushed: forty minutes of barre, twenty-five of centre, and a bow to the piano.” — Mira Ostrowska',
	'day_2_l'        => 'AFTERNOON · FROM 15:45',
	'day_2_h'        => 'The youngest dancers, then Juniors',
	'day_2_p'        => 'As the afternoon light shifts, younger dancers fill the studios. In the Garden Studio, Aiko introduces four- to six-year-olds to posture, skips and rhythm in Pre-ballet. At 17:30 Tomás welcomes the Juniors into the Window Studio for classical training with Daniel at the piano, building strength, turn-out and precision at the barre.',
	'day_2_r1'       => '15:45|Pre-ballet (4–6)|Mon · Wed',
	'day_2_r2'       => '17:30|Juniors (11–15)|Mon · Wed · Fri',
	'day_2_alt'      => 'Young pre-ballet children skip in a circle with their teacher across the sprung floor.',
	'day_2_q'        => '“A child who has skipped in a circle with her friends already understands phrasing. We only put names to it.” — Aiko Brandt',
	'day_3_l'        => 'EVENING · FROM 19:15',
	'day_3_h'        => 'Adults, then who stays',
	'day_3_p'        => 'Evening brings adult dancers back to the barre under warm studio lamps. Priya leads Adult Improvers through detailed technical work with Daniel at the piano. At 20:30 selected dancers stay on in the Garden Studio while Tomás directs the Spring term Repertory rehearsal, setting ensemble choreography for the June Showcase.',
	'day_3_r1'       => '19:15|Adult Improvers|Mon · Wed',
	'day_3_r2'       => '20:30|Repertory rehearsal|Wed · Fri, Spring term',
	'day_3_alt'      => 'Dancers mark choreography during evening rehearsal while their teacher counts the rhythm.',
	'day_3_q'        => '“After a long day the barre is the quietest hour. I play slower in the evening, and the room breathes with it.” — Daniel Mensah',

	// patterns/front-band.php
	'band_alt'       => "Close-up of a dancer's arm and hand held in soft classical port de bras.",
	'band_word'      => 'EVERY DAY',
	'band_cap'       => 'Live piano in every adult and Juniors class',

	// patterns/front-stories.php
	'sto_h1'         => 'STORIES',
	'sto_h2'         => 'FROM<br>THE STUDIO',
	'sto_chip_alt'   => 'Junior ballet students balance in relevé on demi-pointe along the wooden studio barre.',
	'sto_1_t'        => 'Back at the barre at 41',
	'sto_1_p'        => 'After twenty years away from dance, Nora Whitfield returns to Wednesday Adult Improvers and finds her posture, her focus and the rhythm of class.',
	'sto_1_alt'      => 'Adult woman sits on a wooden bench tying the ribbons of soft ballet flats.',
	'sto_2_t'        => 'Six months to the first pointe shoes',
	'sto_2_p'        => 'Tomás checks a Junior for foot and ankle readiness: strength and steady alignment, never age alone, decide when pointe work begins.',
	'sto_2_alt'      => "Hands carefully tie satin pointe shoe ribbons around a dancer's ankle in the studio.",
	'sto_3_t'        => 'What the pianist plays for pliés',
	'sto_3_p'        => 'Hélène Marchetti opens her notebook of handwritten tempos and shows why a slow three-four waltz gives dancers time to breathe and stretch.',
	'sto_3_alt'      => "Pianist's hands rest on piano keys beside a pencil and open notebook.",
	'sto_read'       => 'Read →',

	// patterns/front-trial.php
	'tri_h'          => 'BOOK A<br>TRIAL CLASS',
	'tri_lead'       => 'Any class, any level, $15, with live piano.',
	'tri_1'          => 'Book online or call our front desk.',
	'tri_2'          => 'Arrive 15 minutes early, we lend a barre spot and show the changing room.',
	'tri_3'          => 'Take the class and experience the sprung floor and live music.',
	'tri_4'          => 'Talk with the teacher about the right class and term.',
	'tri_cta'        => 'Book a trial',
	'tri_cta2'       => 'Timetable',
	'tri_visit'      => 'Visit us at 2nd floor, 210 Alder Row, Victoria, BC V8W 1A1. Front desk hours: Monday to Friday 06:45–21:45, Saturday 08:30–13:00, Sunday closed.',
	'tri_alt'        => 'Studio entrance bench holding canvas dance bags and ballet shoes beneath an arched window.',
);
