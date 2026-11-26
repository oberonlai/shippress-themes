<?php
/**
 * Title: Page: Tutors
 * Slug: shirogane-college/page-tutors
 * Categories: shirogane-college
 * Inserter: no
 * Viewport Width: 1440
 * Description: Tutors page: seven long dotted rows with role, three lines and teaching chips, two photographs set into the right column.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sg-phead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sg-phead">
<!-- wp:group {"className":"sg-phead__panel","layout":{"type":"default"}} -->
<div class="wp-block-group sg-phead__panel">
<!-- wp:html -->
<nav class="sg-crumb" aria-label="Breadcrumb"><a href="/"><?php echo esc_html( shirogane_college_t( 'crumb_home' ) ); ?></a><span aria-hidden="true">›</span><span><?php echo esc_html( shirogane_college_t( 'crumb_tutors' ) ); ?></span></nav>
<!-- /wp:html -->
<!-- wp:heading {"level":1,"className":"sg-phead__h"} -->
<h1 class="wp-block-heading sg-phead__h"><?php echo esc_html( shirogane_college_t( 'tu_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-phead__lead"} -->
<p class="sg-phead__lead"><?php echo esc_html( shirogane_college_t( 'tu_lead' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sg-phead__ph sp-parallax"} -->
<figure class="wp-block-image size-full sg-phead__ph sp-parallax"><img src="<?php echo shirogane_college_img( 'tutor-handling.webp' ); ?>" alt="<?php echo esc_attr( shirogane_college_t( 'alt_p09' ) ); ?>" loading="eager"/></figure>
<!-- /wp:image -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"team","align":"full","className":"sg-sec sg-sec--tutors","layout":{"type":"default"}} -->
<section id="team" class="wp-block-group alignfull sg-sec sg-sec--tutors">
<!-- wp:group {"className":"sg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sg-wrap">
<!-- wp:group {"className":"sg-h5","layout":{"type":"default"}} -->
<div class="wp-block-group sg-h5">
<!-- wp:heading {"className":"sg-h5__t"} -->
<h2 class="wp-block-heading sg-h5__t"><?php echo esc_html( shirogane_college_t( 'tu_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-h5__s"} -->
<p class="sg-h5__s"><?php echo esc_html( shirogane_college_t( 'tu_s' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sg-intro"} -->
<p class="sg-intro"><?php echo esc_html( shirogane_college_t( 'tu_intro' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"sg-split sg-split--tut","layout":{"type":"default"}} -->
<div class="wp-block-group sg-split sg-split--tut">
<!-- wp:group {"className":"sg-split__txt","layout":{"type":"default"}} -->
<div class="wp-block-group sg-split__txt">
<!-- wp:html -->
<ul class="sg-rows sg-rows--tut sp-stagger"><li class="sg-row sg-row--tut sp-reveal sp-reveal--up"><div class="sg-row__k"><b><?php echo esc_html( shirogane_college_t( 'pn1' ) ); ?></b><span><?php echo esc_html( shirogane_college_t( 'pr1' ) ); ?></span></div><div class="sg-row__v"><p><?php echo esc_html( shirogane_college_t( 'tu1' ) ); ?></p><div class="sg-chips"><span class="sg-chips__l"><?php echo esc_html( shirogane_college_t( 'tu_teaches' ) ); ?></span><span class="sg-chip"><?php echo esc_html( shirogane_college_t( 'tc_handling' ) ); ?></span><span class="sg-chip"><?php echo esc_html( shirogane_college_t( 'tc_welfare' ) ); ?></span></div></div></li><li class="sg-row sg-row--tut sp-reveal sp-reveal--up"><div class="sg-row__k"><b><?php echo esc_html( shirogane_college_t( 'pn2' ) ); ?></b><span><?php echo esc_html( shirogane_college_t( 'pr2' ) ); ?></span></div><div class="sg-row__v"><p><?php echo esc_html( shirogane_college_t( 'tu2' ) ); ?></p><div class="sg-chips"><span class="sg-chips__l"><?php echo esc_html( shirogane_college_t( 'tu_teaches' ) ); ?></span><span class="sg-chip"><?php echo esc_html( shirogane_college_t( 'tc_ward' ) ); ?></span><span class="sg-chip"><?php echo esc_html( shirogane_college_t( 'tc_handling' ) ); ?></span></div></div></li><li class="sg-row sg-row--tut sp-reveal sp-reveal--up"><div class="sg-row__k"><b><?php echo esc_html( shirogane_college_t( 'pn3' ) ); ?></b><span><?php echo esc_html( shirogane_college_t( 'pr3' ) ); ?></span></div><div class="sg-row__v"><p><?php echo esc_html( shirogane_college_t( 'tu3' ) ); ?></p><div class="sg-chips"><span class="sg-chips__l"><?php echo esc_html( shirogane_college_t( 'tu_teaches' ) ); ?></span><span class="sg-chip"><?php echo esc_html( shirogane_college_t( 'tc_theatre' ) ); ?></span><span class="sg-chip"><?php echo esc_html( shirogane_college_t( 'tc_anaes' ) ); ?></span></div></div></li><li class="sg-row sg-row--tut sp-reveal sp-reveal--up"><div class="sg-row__k"><b><?php echo esc_html( shirogane_college_t( 'pn4' ) ); ?></b><span><?php echo esc_html( shirogane_college_t( 'pr4' ) ); ?></span></div><div class="sg-row__v"><p><?php echo esc_html( shirogane_college_t( 'tu4' ) ); ?></p><div class="sg-chips"><span class="sg-chips__l"><?php echo esc_html( shirogane_college_t( 'tu_teaches' ) ); ?></span><span class="sg-chip"><?php echo esc_html( shirogane_college_t( 'tc_imaging' ) ); ?></span><span class="sg-chip"><?php echo esc_html( shirogane_college_t( 'tc_lab' ) ); ?></span></div></div></li><li class="sg-row sg-row--tut sp-reveal sp-reveal--up"><div class="sg-row__k"><b><?php echo esc_html( shirogane_college_t( 'pn5' ) ); ?></b><span><?php echo esc_html( shirogane_college_t( 'pr5' ) ); ?></span></div><div class="sg-row__v"><p><?php echo esc_html( shirogane_college_t( 'tu5' ) ); ?></p><div class="sg-chips"><span class="sg-chips__l"><?php echo esc_html( shirogane_college_t( 'tu_teaches' ) ); ?></span><span class="sg-chip"><?php echo esc_html( shirogane_college_t( 'tc_pharm' ) ); ?></span><span class="sg-chip"><?php echo esc_html( shirogane_college_t( 'tc_evening' ) ); ?></span></div></div></li><li class="sg-row sg-row--tut sp-reveal sp-reveal--up"><div class="sg-row__k"><b><?php echo esc_html( shirogane_college_t( 'pn6' ) ); ?></b><span><?php echo esc_html( shirogane_college_t( 'pr6' ) ); ?></span></div><div class="sg-row__v"><p><?php echo esc_html( shirogane_college_t( 'tu6' ) ); ?></p><div class="sg-chips"><span class="sg-chips__l"><?php echo esc_html( shirogane_college_t( 'tu_teaches' ) ); ?></span><span class="sg-chip"><?php echo esc_html( shirogane_college_t( 'tc_place' ) ); ?></span></div></div></li><li class="sg-row sg-row--tut sp-reveal sp-reveal--up"><div class="sg-row__k"><b><?php echo esc_html( shirogane_college_t( 'pn7' ) ); ?></b><span><?php echo esc_html( shirogane_college_t( 'pr7' ) ); ?></span></div><div class="sg-row__v"><p><?php echo esc_html( shirogane_college_t( 'tu7' ) ); ?></p><div class="sg-chips"><span class="sg-chips__l"><?php echo esc_html( shirogane_college_t( 'tu_teaches' ) ); ?></span><span class="sg-chip"><?php echo esc_html( shirogane_college_t( 'tc_admit' ) ); ?></span><span class="sg-chip"><?php echo esc_html( shirogane_college_t( 'tc_support' ) ); ?></span></div></div></li></ul>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sg-split__img sg-split__img--sticky","layout":{"type":"default"}} -->
<div class="wp-block-group sg-split__img sg-split__img--sticky">
<!-- wp:group {"className":"sg-tutside","layout":{"type":"default"}} -->
<div class="wp-block-group sg-tutside">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sg-ph sg-ph--11"} -->
<figure class="wp-block-image size-full sg-ph sg-ph--11"><img src="<?php echo shirogane_college_img( 'student-leo.webp' ); ?>" alt="<?php echo esc_attr( shirogane_college_t( 'alt_p11' ) ); ?>" loading="eager"/></figure>
<!-- /wp:image -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sg-ph sg-ph--32"} -->
<figure class="wp-block-image size-full sg-ph sg-ph--32"><img src="<?php echo shirogane_college_img( 'hero-ward-cat.webp' ); ?>" alt="<?php echo esc_attr( shirogane_college_t( 'alt_p02' ) ); ?>" loading="eager"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"next","align":"full","className":"sg-sec sg-sec--picks","layout":{"type":"default"}} -->
<section id="next" class="wp-block-group alignfull sg-sec sg-sec--picks">
<!-- wp:group {"className":"sg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sg-wrap">
<!-- wp:group {"className":"sg-h5","layout":{"type":"default"}} -->
<div class="wp-block-group sg-h5">
<!-- wp:heading {"className":"sg-h5__t"} -->
<h2 class="wp-block-heading sg-h5__t"><?php echo esc_html( shirogane_college_t( 'nx_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-h5__s"} -->
<p class="sg-h5__s"><?php echo esc_html( shirogane_college_t( 'nx_s' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:html -->
<div class="sg-picks sp-stagger"><a class="sg-pick sp-reveal sp-reveal--up" href="/visit/#ward-visit"><span class="sg-pick__ico" style="--sg-tile:#8E6E2A"><svg class="sg-ico" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M6 20.5v-17h12v17"/><path d="M4 20.5h16M14.5 12v1"/></svg></span><span class="sg-pick__t"><?php echo esc_html( shirogane_college_t( 'nx3' ) ); ?></span><svg class="sg-chev" width="8" height="14" viewBox="0 0 8 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M1 1l6 6-6 6"/></svg></a><a class="sg-pick sp-reveal sp-reveal--up" href="/course/"><span class="sg-pick__ico" style="--sg-tile:#7B5A44"><svg class="sg-ico" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M6 3.5v6a4 4 0 0 0 8 0v-6"/><path d="M10 13.5v2a4 4 0 0 0 8 0v-2"/><circle cx="18" cy="11.5" r="2"/></svg></span><span class="sg-pick__t"><?php echo esc_html( shirogane_college_t( 'nx8' ) ); ?></span><svg class="sg-chev" width="8" height="14" viewBox="0 0 8 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M1 1l6 6-6 6"/></svg></a><a class="sg-pick sp-reveal sp-reveal--up" href="/admissions/#questions"><span class="sg-pick__ico" style="--sg-tile:#657A3E"><svg class="sg-ico" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="12" cy="12" r="8.5"/><path d="M9.5 9.5a2.5 2.5 0 1 1 3.5 2.3c-.7.4-1 .9-1 1.7M12 16.5v.5"/></svg></span><span class="sg-pick__t"><?php echo esc_html( shirogane_college_t( 'nx6' ) ); ?></span><svg class="sg-chev" width="8" height="14" viewBox="0 0 8 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M1 1l6 6-6 6"/></svg></a></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"sg-cta","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sg-cta">
<!-- wp:group {"className":"sg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sg-wrap">
<!-- wp:group {"className":"sg-cta__in","layout":{"type":"default"}} -->
<div class="wp-block-group sg-cta__in">
<!-- wp:paragraph {"className":"sg-cta__t"} -->
<p class="sg-cta__t"><?php echo esc_html( shirogane_college_t( 'cta_line' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"sg-btns"} -->
<div class="wp-block-buttons sg-btns"><!-- wp:button {"className":"sg-btn"} -->
<div class="wp-block-button sg-btn"><a class="wp-block-button__link wp-element-button" href="/admissions/#apply"><?php echo esc_html( shirogane_college_t( 'cta_apply' ) ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"sg-btn sg-btn--outline"} -->
<div class="wp-block-button sg-btn sg-btn--outline"><a class="wp-block-button__link wp-element-button" href="/visit/#ward-visit"><?php echo esc_html( shirogane_college_t( 'cta_visit' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
