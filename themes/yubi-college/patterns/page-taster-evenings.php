<?php
/**
 * Title: Page: taster evenings
 * Slug: yubi-college/page-taster-evenings
 * Categories: yubi-college
 * Viewport Width: 1440
 * Inserter: false
 * Description: Booking page: hero with a corner ribbon, the three dates and the evening hour by hour, access, and the contact form slot with a mailto fallback.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"yb-ph","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull yb-ph"><!-- wp:group {"className":"yb-ph__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group yb-ph__photo sp-parallax"><!-- wp:group {"className":"sp-parallax__layer yb-ph__layer","layout":{"type":"default"}} -->
<div class="wp-block-group sp-parallax__layer yb-ph__layer"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yb-ph__img"} -->
<figure class="wp-block-image size-full yb-ph__img"><img src="<?php echo yubi_college_img( 'p18-taster-welcome.webp' ); ?>" alt="<?php echo yubi_college_a( 'alt_p18' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:html -->
<div class="yb-ribbon yb-ribbon--a" aria-hidden="true"></div>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"yb-ph__text","layout":{"type":"default"}} -->
<div class="wp-block-group yb-ph__text"><!-- wp:paragraph {"className":"yb-sub yb-ph__sub"} -->
<p class="yb-sub yb-ph__sub"><?php echo esc_html( yubi_college_t( 'taster_evenings_sub' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"yb-ph__h"} -->
<h1 class="wp-block-heading yb-ph__h"><?php echo esc_html( yubi_college_t( 'taster_evenings_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yb-ph__lead"} -->
<p class="yb-ph__lead"><?php echo esc_html( yubi_college_t( 'taster_evenings_lead' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"yb-ph__bar","layout":{"type":"default"}} -->
<div class="wp-block-group yb-ph__bar"><!-- wp:html -->
<nav class="yb-infobar yb-jump yb-jump--4" aria-label="<?php echo yubi_college_a( 'jump_label' ); ?>"><a class="yb-cell" href="#dates"><span class="yb-cell__l"><?php echo esc_html( yubi_college_t( 'j_x1' ) ); ?></span><svg class="yb-arrow" viewBox="0 0 16 10" width="14" height="9" aria-hidden="true" focusable="false"><path d="M0 5h14M10 1l4 4-4 4" fill="none" stroke="currentColor" stroke-width="1.25"/></svg></a><a class="yb-cell" href="#evening"><span class="yb-cell__l"><?php echo esc_html( yubi_college_t( 'j_x2' ) ); ?></span><svg class="yb-arrow" viewBox="0 0 16 10" width="14" height="9" aria-hidden="true" focusable="false"><path d="M0 5h14M10 1l4 4-4 4" fill="none" stroke="currentColor" stroke-width="1.25"/></svg></a><a class="yb-cell" href="#access"><span class="yb-cell__l"><?php echo esc_html( yubi_college_t( 'j_x3' ) ); ?></span><svg class="yb-arrow" viewBox="0 0 16 10" width="14" height="9" aria-hidden="true" focusable="false"><path d="M0 5h14M10 1l4 4-4 4" fill="none" stroke="currentColor" stroke-width="1.25"/></svg></a><a class="yb-cell" href="#book"><span class="yb-cell__l"><?php echo esc_html( yubi_college_t( 'j_x4' ) ); ?></span><svg class="yb-arrow" viewBox="0 0 16 10" width="14" height="9" aria-hidden="true" focusable="false"><path d="M0 5h14M10 1l4 4-4 4" fill="none" stroke="currentColor" stroke-width="1.25"/></svg></a></nav>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","anchor":"dates","className":"yb-sec yb-sec--white yb-sec--in","layout":{"type":"default"}} -->
<section id="dates" class="wp-block-group alignfull yb-sec yb-sec--white yb-sec--in"><!-- wp:group {"className":"yb-wrap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yb-wrap sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"yb-h2 yb-h2--m"} -->
<h2 class="wp-block-heading yb-h2 yb-h2--m"><?php echo esc_html( yubi_college_t( 'taster_evenings_s1_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yb-sub"} -->
<p class="yb-sub"><?php echo esc_html( yubi_college_t( 'taster_evenings_s1_sub' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yb-prose"} -->
<p class="yb-prose"><?php echo esc_html( yubi_college_t( 'taster_evenings_s1_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"yb-wrap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yb-wrap sp-reveal sp-reveal--up"><!-- wp:html -->
<div class="yb-datecells"><div class="yb-datecell"><p class="yb-datecell__d"><?php echo esc_html( yubi_college_t( 'td1_d' ) ); ?></p><p class="yb-datecell__t"><?php echo esc_html( yubi_college_t( 'td1_t' ) ); ?></p></div><div class="yb-datecell"><p class="yb-datecell__d"><?php echo esc_html( yubi_college_t( 'td2_d' ) ); ?></p><p class="yb-datecell__t"><?php echo esc_html( yubi_college_t( 'td2_t' ) ); ?></p></div><div class="yb-datecell"><p class="yb-datecell__d"><?php echo esc_html( yubi_college_t( 'td3_d' ) ); ?></p><p class="yb-datecell__t"><?php echo esc_html( yubi_college_t( 'td3_t' ) ); ?></p></div></div>
<!-- /wp:html -->
<!-- wp:html -->
<p id="evening" class="yb-sublabel"><?php echo esc_html( yubi_college_t( 'ev_label' ) ); ?></p>
<!-- /wp:html -->
<!-- wp:html -->
<ul class="yb-sched"><li><span class="yb-sched__t"><?php echo esc_html( yubi_college_t( 'ev1_t' ) ); ?></span><span class="yb-sched__x"><?php echo esc_html( yubi_college_t( 'ev1_x' ) ); ?></span></li><li><span class="yb-sched__t"><?php echo esc_html( yubi_college_t( 'ev2_t' ) ); ?></span><span class="yb-sched__x"><?php echo esc_html( yubi_college_t( 'ev2_x' ) ); ?></span></li><li><span class="yb-sched__t"><?php echo esc_html( yubi_college_t( 'ev3_t' ) ); ?></span><span class="yb-sched__x"><?php echo esc_html( yubi_college_t( 'ev3_x' ) ); ?></span></li><li><span class="yb-sched__t"><?php echo esc_html( yubi_college_t( 'ev4_t' ) ); ?></span><span class="yb-sched__x"><?php echo esc_html( yubi_college_t( 'ev4_x' ) ); ?></span></li></ul>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","anchor":"access","className":"yb-sec yb-sec--ground yb-sec--in","layout":{"type":"default"}} -->
<section id="access" class="wp-block-group alignfull yb-sec yb-sec--ground yb-sec--in"><!-- wp:group {"className":"yb-wrap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yb-wrap sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"yb-h2 yb-h2--m"} -->
<h2 class="wp-block-heading yb-h2 yb-h2--m"><?php echo esc_html( yubi_college_t( 'taster_evenings_s2_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yb-sub"} -->
<p class="yb-sub"><?php echo esc_html( yubi_college_t( 'taster_evenings_s2_sub' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yb-prose"} -->
<p class="yb-prose"><?php echo esc_html( yubi_college_t( 'taster_evenings_s2_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","anchor":"book","className":"yb-sec yb-sec--white yb-sec--in","layout":{"type":"default"}} -->
<section id="book" class="wp-block-group alignfull yb-sec yb-sec--white yb-sec--in"><!-- wp:group {"className":"yb-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group yb-wrap"><!-- wp:group {"className":"sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"yb-h2 yb-h2--m"} -->
<h2 class="wp-block-heading yb-h2 yb-h2--m"><?php echo esc_html( yubi_college_t( 'taster_evenings_s3_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yb-sub"} -->
<p class="yb-sub"><?php echo esc_html( yubi_college_t( 'taster_evenings_s3_sub' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yb-prose"} -->
<p class="yb-prose"><?php echo esc_html( yubi_college_t( 'taster_evenings_s3_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"yb-formpanel yb-formpanel--w","layout":{"type":"default"}} -->
<div class="wp-block-group yb-formpanel yb-formpanel--w"><!-- wp:heading {"level":3,"className":"yb-letters__h"} -->
<h3 class="wp-block-heading yb-letters__h"><?php echo esc_html( yubi_college_t( 'book_h' ) ); ?></h3>
<!-- /wp:heading -->
<?php ob_start(); ?>
<a class="wp-element-button yb-mail" href="mailto:hello@yubicollege.example?subject=<?php echo rawurlencode( yubi_college_t( 'taster_mail_subject' ) ); ?>"><?php echo esc_html( yubi_college_t( 'taster_email_button' ) ); ?></a>
<p class="yb-mail-line"><?php echo esc_html( yubi_college_t( 'forms_phone_line' ) ); ?></p>
<?php $fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
