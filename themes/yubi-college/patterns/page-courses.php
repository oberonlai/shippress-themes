<?php
/**
 * Title: Page: courses
 * Slug: yubi-college/page-courses
 * Categories: yubi-college
 * Viewport Width: 1440
 * Inserter: false
 * Description: Inner hero with a five-cell jump grid, then each course as a large overhanging caption card beside its description, weekly pattern, group size and price.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"yb-ph","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull yb-ph"><!-- wp:group {"className":"yb-ph__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group yb-ph__photo sp-parallax"><!-- wp:group {"className":"sp-parallax__layer yb-ph__layer","layout":{"type":"default"}} -->
<div class="wp-block-group sp-parallax__layer yb-ph__layer"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yb-ph__img"} -->
<figure class="wp-block-image size-full yb-ph__img"><img src="<?php echo yubi_college_img( 'p05-for-career-change.webp' ); ?>" alt="<?php echo yubi_college_a( 'alt_p05' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"yb-ph__text","layout":{"type":"default"}} -->
<div class="wp-block-group yb-ph__text"><!-- wp:paragraph {"className":"yb-sub yb-ph__sub"} -->
<p class="yb-sub yb-ph__sub"><?php echo esc_html( yubi_college_t( 'courses_sub' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"yb-ph__h"} -->
<h1 class="wp-block-heading yb-ph__h"><?php echo esc_html( yubi_college_t( 'courses_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yb-ph__lead"} -->
<p class="yb-ph__lead"><?php echo esc_html( yubi_college_t( 'courses_lead' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"yb-ph__bar","layout":{"type":"default"}} -->
<div class="wp-block-group yb-ph__bar"><!-- wp:html -->
<nav class="yb-infobar yb-jump yb-jump--5" aria-label="<?php echo yubi_college_a( 'jump_label' ); ?>"><a class="yb-cell" href="#foundation"><span class="yb-cell__l"><?php echo esc_html( yubi_college_t( 'j_c1' ) ); ?></span><svg class="yb-arrow" viewBox="0 0 16 10" width="14" height="9" aria-hidden="true" focusable="false"><path d="M0 5h14M10 1l4 4-4 4" fill="none" stroke="currentColor" stroke-width="1.25"/></svg></a><a class="yb-cell" href="#diploma"><span class="yb-cell__l"><?php echo esc_html( yubi_college_t( 'j_c2' ) ); ?></span><svg class="yb-arrow" viewBox="0 0 16 10" width="14" height="9" aria-hidden="true" focusable="false"><path d="M0 5h14M10 1l4 4-4 4" fill="none" stroke="currentColor" stroke-width="1.25"/></svg></a><a class="yb-cell" href="#healthcare"><span class="yb-cell__l"><?php echo esc_html( yubi_college_t( 'j_c3' ) ); ?></span><svg class="yb-arrow" viewBox="0 0 16 10" width="14" height="9" aria-hidden="true" focusable="false"><path d="M0 5h14M10 1l4 4-4 4" fill="none" stroke="currentColor" stroke-width="1.25"/></svg></a><a class="yb-cell" href="#legal"><span class="yb-cell__l"><?php echo esc_html( yubi_college_t( 'j_c4' ) ); ?></span><svg class="yb-arrow" viewBox="0 0 16 10" width="14" height="9" aria-hidden="true" focusable="false"><path d="M0 5h14M10 1l4 4-4 4" fill="none" stroke="currentColor" stroke-width="1.25"/></svg></a><a class="yb-cell" href="#education"><span class="yb-cell__l"><?php echo esc_html( yubi_college_t( 'j_c5' ) ); ?></span><svg class="yb-arrow" viewBox="0 0 16 10" width="14" height="9" aria-hidden="true" focusable="false"><path d="M0 5h14M10 1l4 4-4 4" fill="none" stroke="currentColor" stroke-width="1.25"/></svg></a></nav>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","anchor":"foundation","className":"yb-sec yb-sec--ground yb-sec--in","layout":{"type":"default"}} -->
<section id="foundation" class="wp-block-group alignfull yb-sec yb-sec--ground yb-sec--in"><!-- wp:group {"className":"yb-wide yb-row","layout":{"type":"default"}} -->
<div class="wp-block-group yb-wide yb-row"><!-- wp:group {"className":"yb-row__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yb-row__text sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"yb-h2 yb-h2--m"} -->
<h2 class="wp-block-heading yb-h2 yb-h2--m"><?php echo esc_html( yubi_college_t( 'courses_s1_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yb-sub"} -->
<p class="yb-sub"><?php echo esc_html( yubi_college_t( 'courses_s1_sub' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yb-prose"} -->
<p class="yb-prose"><?php echo esc_html( yubi_college_t( 'courses_s1_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<dl class="yb-fl"><div class="yb-fl__r"><dt><?php echo esc_html( yubi_college_t( 'course_foundation_f1' ) ); ?></dt><dd><?php echo esc_html( yubi_college_t( 'course_foundation_f1v' ) ); ?></dd></div><div class="yb-fl__r"><dt><?php echo esc_html( yubi_college_t( 'course_foundation_f2' ) ); ?></dt><dd><?php echo esc_html( yubi_college_t( 'course_foundation_f2v' ) ); ?></dd></div><div class="yb-fl__r"><dt><?php echo esc_html( yubi_college_t( 'course_foundation_f3' ) ); ?></dt><dd><?php echo esc_html( yubi_college_t( 'course_foundation_f3v' ) ); ?></dd></div></dl>
<!-- /wp:html --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"yb-row__card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yb-row__card sp-reveal sp-reveal--up"><!-- wp:html -->
<figure class="yb-bigcard "><img class="yb-bigcard__img" src="<?php echo yubi_college_img( 'p02-for-nurse.webp' ); ?>" alt="<?php echo yubi_college_a( 'alt_p02' ); ?>" loading="lazy"/><figcaption class="yb-bigcard__panel"><h3 class="yb-bigcard__t"><?php echo esc_html( yubi_college_t( 'course_foundation_t' ) ); ?></h3><p class="yb-bigcard__p"><?php echo esc_html( yubi_college_t( 'course_foundation_p' ) ); ?></p></figcaption></figure>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","anchor":"diploma","className":"yb-sec yb-sec--white yb-sec--in","layout":{"type":"default"}} -->
<section id="diploma" class="wp-block-group alignfull yb-sec yb-sec--white yb-sec--in"><!-- wp:group {"className":"yb-wide yb-row yb-row--rev","layout":{"type":"default"}} -->
<div class="wp-block-group yb-wide yb-row yb-row--rev"><!-- wp:group {"className":"yb-row__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yb-row__text sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"yb-h2 yb-h2--m"} -->
<h2 class="wp-block-heading yb-h2 yb-h2--m"><?php echo esc_html( yubi_college_t( 'courses_s2_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yb-sub"} -->
<p class="yb-sub"><?php echo esc_html( yubi_college_t( 'courses_s2_sub' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yb-prose"} -->
<p class="yb-prose"><?php echo esc_html( yubi_college_t( 'courses_s2_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<dl class="yb-fl"><div class="yb-fl__r"><dt><?php echo esc_html( yubi_college_t( 'course_diploma_f1' ) ); ?></dt><dd><?php echo esc_html( yubi_college_t( 'course_diploma_f1v' ) ); ?></dd></div><div class="yb-fl__r"><dt><?php echo esc_html( yubi_college_t( 'course_diploma_f2' ) ); ?></dt><dd><?php echo esc_html( yubi_college_t( 'course_diploma_f2v' ) ); ?></dd></div><div class="yb-fl__r"><dt><?php echo esc_html( yubi_college_t( 'course_diploma_f3' ) ); ?></dt><dd><?php echo esc_html( yubi_college_t( 'course_diploma_f3v' ) ); ?></dd></div></dl>
<!-- /wp:html --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"yb-row__card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yb-row__card sp-reveal sp-reveal--up"><!-- wp:html -->
<figure class="yb-bigcard "><img class="yb-bigcard__img" src="<?php echo yubi_college_img( 'p09-thu-booth-lab.webp' ); ?>" alt="<?php echo yubi_college_a( 'alt_p09' ); ?>" loading="lazy"/><figcaption class="yb-bigcard__panel"><h3 class="yb-bigcard__t"><?php echo esc_html( yubi_college_t( 'course_diploma_t' ) ); ?></h3><p class="yb-bigcard__p"><?php echo esc_html( yubi_college_t( 'course_diploma_p' ) ); ?></p></figcaption></figure>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","anchor":"healthcare","className":"yb-sec yb-sec--ground yb-sec--in","layout":{"type":"default"}} -->
<section id="healthcare" class="wp-block-group alignfull yb-sec yb-sec--ground yb-sec--in"><!-- wp:group {"className":"yb-wide yb-row","layout":{"type":"default"}} -->
<div class="wp-block-group yb-wide yb-row"><!-- wp:group {"className":"yb-row__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yb-row__text sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"yb-h2 yb-h2--m"} -->
<h2 class="wp-block-heading yb-h2 yb-h2--m"><?php echo esc_html( yubi_college_t( 'courses_s3_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yb-sub"} -->
<p class="yb-sub"><?php echo esc_html( yubi_college_t( 'courses_s3_sub' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yb-prose"} -->
<p class="yb-prose"><?php echo esc_html( yubi_college_t( 'courses_s3_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<dl class="yb-fl"><div class="yb-fl__r"><dt><?php echo esc_html( yubi_college_t( 'course_healthcare_f1' ) ); ?></dt><dd><?php echo esc_html( yubi_college_t( 'course_healthcare_f1v' ) ); ?></dd></div><div class="yb-fl__r"><dt><?php echo esc_html( yubi_college_t( 'course_healthcare_f2' ) ); ?></dt><dd><?php echo esc_html( yubi_college_t( 'course_healthcare_f2v' ) ); ?></dd></div><div class="yb-fl__r"><dt><?php echo esc_html( yubi_college_t( 'course_healthcare_f3' ) ); ?></dt><dd><?php echo esc_html( yubi_college_t( 'course_healthcare_f3v' ) ); ?></dd></div></dl>
<!-- /wp:html --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"yb-row__card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yb-row__card sp-reveal sp-reveal--up"><!-- wp:html -->
<figure class="yb-bigcard "><img class="yb-bigcard__img" src="<?php echo yubi_college_img( 'p12-work-hospital.webp' ); ?>" alt="<?php echo yubi_college_a( 'alt_p12' ); ?>" loading="lazy"/><figcaption class="yb-bigcard__panel"><h3 class="yb-bigcard__t"><?php echo esc_html( yubi_college_t( 'course_healthcare_t' ) ); ?></h3><p class="yb-bigcard__p"><?php echo esc_html( yubi_college_t( 'course_healthcare_p' ) ); ?></p></figcaption></figure>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","anchor":"legal","className":"yb-sec yb-sec--white yb-sec--in","layout":{"type":"default"}} -->
<section id="legal" class="wp-block-group alignfull yb-sec yb-sec--white yb-sec--in"><!-- wp:group {"className":"yb-wide yb-row yb-row--rev","layout":{"type":"default"}} -->
<div class="wp-block-group yb-wide yb-row yb-row--rev"><!-- wp:group {"className":"yb-row__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yb-row__text sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"yb-h2 yb-h2--m"} -->
<h2 class="wp-block-heading yb-h2 yb-h2--m"><?php echo esc_html( yubi_college_t( 'courses_s4_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yb-sub"} -->
<p class="yb-sub"><?php echo esc_html( yubi_college_t( 'courses_s4_sub' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yb-prose"} -->
<p class="yb-prose"><?php echo esc_html( yubi_college_t( 'courses_s4_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<dl class="yb-fl"><div class="yb-fl__r"><dt><?php echo esc_html( yubi_college_t( 'course_legal_f1' ) ); ?></dt><dd><?php echo esc_html( yubi_college_t( 'course_legal_f1v' ) ); ?></dd></div><div class="yb-fl__r"><dt><?php echo esc_html( yubi_college_t( 'course_legal_f2' ) ); ?></dt><dd><?php echo esc_html( yubi_college_t( 'course_legal_f2v' ) ); ?></dd></div><div class="yb-fl__r"><dt><?php echo esc_html( yubi_college_t( 'course_legal_f3' ) ); ?></dt><dd><?php echo esc_html( yubi_college_t( 'course_legal_f3v' ) ); ?></dd></div></dl>
<!-- /wp:html --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"yb-row__card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yb-row__card sp-reveal sp-reveal--up"><!-- wp:html -->
<figure class="yb-bigcard "><img class="yb-bigcard__img" src="<?php echo yubi_college_img( 'p13-work-court.webp' ); ?>" alt="<?php echo yubi_college_a( 'alt_p13' ); ?>" loading="lazy"/><figcaption class="yb-bigcard__panel"><h3 class="yb-bigcard__t"><?php echo esc_html( yubi_college_t( 'course_legal_t' ) ); ?></h3><p class="yb-bigcard__p"><?php echo esc_html( yubi_college_t( 'course_legal_p' ) ); ?></p></figcaption></figure>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","anchor":"education","className":"yb-sec yb-sec--ground yb-sec--in","layout":{"type":"default"}} -->
<section id="education" class="wp-block-group alignfull yb-sec yb-sec--ground yb-sec--in"><!-- wp:group {"className":"yb-wide yb-row","layout":{"type":"default"}} -->
<div class="wp-block-group yb-wide yb-row"><!-- wp:group {"className":"yb-row__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yb-row__text sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"yb-h2 yb-h2--m"} -->
<h2 class="wp-block-heading yb-h2 yb-h2--m"><?php echo esc_html( yubi_college_t( 'courses_s5_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yb-sub"} -->
<p class="yb-sub"><?php echo esc_html( yubi_college_t( 'courses_s5_sub' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yb-prose"} -->
<p class="yb-prose"><?php echo esc_html( yubi_college_t( 'courses_s5_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<dl class="yb-fl"><div class="yb-fl__r"><dt><?php echo esc_html( yubi_college_t( 'course_education_f1' ) ); ?></dt><dd><?php echo esc_html( yubi_college_t( 'course_education_f1v' ) ); ?></dd></div><div class="yb-fl__r"><dt><?php echo esc_html( yubi_college_t( 'course_education_f2' ) ); ?></dt><dd><?php echo esc_html( yubi_college_t( 'course_education_f2v' ) ); ?></dd></div><div class="yb-fl__r"><dt><?php echo esc_html( yubi_college_t( 'course_education_f3' ) ); ?></dt><dd><?php echo esc_html( yubi_college_t( 'course_education_f3v' ) ); ?></dd></div></dl>
<!-- /wp:html --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"yb-row__card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yb-row__card sp-reveal sp-reveal--up"><!-- wp:html -->
<figure class="yb-bigcard "><img class="yb-bigcard__img" src="<?php echo yubi_college_img( 'p14-work-school.webp' ); ?>" alt="<?php echo yubi_college_a( 'alt_p14' ); ?>" loading="lazy"/><figcaption class="yb-bigcard__panel"><h3 class="yb-bigcard__t"><?php echo esc_html( yubi_college_t( 'course_education_t' ) ); ?></h3><p class="yb-bigcard__p"><?php echo esc_html( yubi_college_t( 'course_education_p' ) ); ?></p></figcaption></figure>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"yb-sec yb-sec--wash yb-sec--in yb-sec--note","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull yb-sec yb-sec--wash yb-sec--in yb-sec--note"><!-- wp:group {"className":"yb-wrap yb-narrow-left","layout":{"type":"default"}} -->
<div class="wp-block-group yb-wrap yb-narrow-left"><!-- wp:paragraph {"className":"yb-note yb-note--l"} -->
<p class="yb-note yb-note--l"><?php echo esc_html( yubi_college_t( 'courses_note' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yb-textlink"} -->
<p class="yb-textlink"><a href="<?php echo esc_url( home_url( '/fees-and-entry/' ) ); ?>"><?php echo esc_html( yubi_college_t( 'courses_note_link' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
