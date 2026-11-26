<?php
/**
 * Title: Page: About
 * Slug: shirogane-college/page-about
 * Categories: shirogane-college
 * Inserter: no
 * Viewport Width: 1440
 * Description: About page: head with parallax photo, story, three hexagons of what the college holds to, partner clinics cell, address and hours.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sg-phead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sg-phead">
<!-- wp:group {"className":"sg-phead__panel","layout":{"type":"default"}} -->
<div class="wp-block-group sg-phead__panel">
<!-- wp:html -->
<nav class="sg-crumb" aria-label="Breadcrumb"><a href="/"><?php echo esc_html( shirogane_college_t( 'crumb_home' ) ); ?></a><span aria-hidden="true">›</span><span><?php echo esc_html( shirogane_college_t( 'crumb_about' ) ); ?></span></nav>
<!-- /wp:html -->
<!-- wp:heading {"level":1,"className":"sg-phead__h"} -->
<h1 class="wp-block-heading sg-phead__h"><?php echo esc_html( shirogane_college_t( 'ab_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-phead__lead"} -->
<p class="sg-phead__lead"><?php echo esc_html( shirogane_college_t( 'ab_lead' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sg-phead__ph sp-parallax"} -->
<figure class="wp-block-image size-full sg-phead__ph sp-parallax"><img src="<?php echo shirogane_college_img( 'college-building.webp' ); ?>" alt="<?php echo esc_attr( shirogane_college_t( 'alt_p17' ) ); ?>" loading="eager"/></figure>
<!-- /wp:image -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"story","align":"full","className":"sg-sec","layout":{"type":"default"}} -->
<section id="story" class="wp-block-group alignfull sg-sec">
<!-- wp:group {"className":"sg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sg-wrap">
<!-- wp:group {"className":"sg-h5","layout":{"type":"default"}} -->
<div class="wp-block-group sg-h5">
<!-- wp:heading {"className":"sg-h5__t"} -->
<h2 class="wp-block-heading sg-h5__t"><?php echo esc_html( shirogane_college_t( 'ab_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-h5__s"} -->
<p class="sg-h5__s"><?php echo esc_html( shirogane_college_t( 'ab_s' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sg-split sg-split--57","layout":{"type":"default"}} -->
<div class="wp-block-group sg-split sg-split--57">
<!-- wp:group {"className":"sg-split__img","layout":{"type":"default"}} -->
<div class="wp-block-group sg-split__img">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sg-ph sg-ph--45"} -->
<figure class="wp-block-image size-full sg-ph sg-ph--45"><img src="<?php echo shirogane_college_img( 'tutor-handling.webp' ); ?>" alt="<?php echo esc_attr( shirogane_college_t( 'alt_p09' ) ); ?>" loading="eager"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sg-split__txt","layout":{"type":"default"}} -->
<div class="wp-block-group sg-split__txt">
<!-- wp:paragraph {"className":"sg-body"} -->
<p class="sg-body"><?php echo esc_html( shirogane_college_t( 'ab_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sg-body"} -->
<p class="sg-body"><?php echo esc_html( shirogane_college_t( 'ab_p2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sg-body"} -->
<p class="sg-body"><?php echo esc_html( shirogane_college_t( 'ab_p3' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<a class="sg-tlink " href="/course/"><span><?php echo esc_html( shirogane_college_t( 'ab_link' ) ); ?></span><svg class="sg-chev" width="8" height="14" viewBox="0 0 8 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M1 1l6 6-6 6"/></svg></a>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"hold","align":"full","className":"sg-sec sg-sec--hold","layout":{"type":"default"}} -->
<section id="hold" class="wp-block-group alignfull sg-sec sg-sec--hold">
<!-- wp:group {"className":"sg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sg-wrap">
<!-- wp:group {"className":"sg-h5","layout":{"type":"default"}} -->
<div class="wp-block-group sg-h5">
<!-- wp:heading {"className":"sg-h5__t"} -->
<h2 class="wp-block-heading sg-h5__t"><?php echo esc_html( shirogane_college_t( 'ab_hold_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-h5__s"} -->
<p class="sg-h5__s"><?php echo esc_html( shirogane_college_t( 'ab_hold_s' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"align":"full","className":"sg-hexband sg-hexband--row","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull sg-hexband sg-hexband--row">
<!-- wp:html -->
<div class="sg-hexband__bg"><svg class="sg-tri" viewBox="0 0 1440 300" preserveAspectRatio="xMidYMid slice" aria-hidden="true" focusable="false"><polygon points="0,0 154,0 176,118" fill="#F3F5EE"/><polygon points="0,0 176,118 0,163" fill="#EDF0E6"/><polygon points="154,0 307,0 176,118" fill="#E4E9DB"/><polygon points="307,0 286,129 176,118" fill="#E4E9DB"/><polygon points="307,0 456,0 436,156" fill="#EDF0E6"/><polygon points="307,0 436,156 286,129" fill="#E4E9DB"/><polygon points="456,0 612,0 436,156" fill="#E4E9DB"/><polygon points="612,0 537,126 436,156" fill="#EDF0E6"/><polygon points="612,0 739,0 702,185" fill="#EDF0E6"/><polygon points="612,0 702,185 537,126" fill="#E4E9DB"/><polygon points="739,0 898,0 702,185" fill="#EDF0E6"/><polygon points="898,0 885,121 702,185" fill="#E4E9DB"/><polygon points="898,0 970,0 1032,120" fill="#E4E9DB"/><polygon points="898,0 1032,120 885,121" fill="#F3F5EE"/><polygon points="970,0 1149,0 1032,120" fill="#F3F5EE"/><polygon points="1149,0 1161,119 1032,120" fill="#EDF0E6"/><polygon points="1149,0 1332,0 1256,181" fill="#F3F5EE"/><polygon points="1149,0 1256,181 1161,119" fill="#F3F5EE"/><polygon points="1332,0 1440,0 1256,181" fill="#F3F5EE"/><polygon points="1440,0 1440,126 1256,181" fill="#E4E9DB"/><polygon points="0,163 176,118 0,300" fill="#EDF0E6"/><polygon points="176,118 121,300 0,300" fill="#E4E9DB"/><polygon points="176,118 286,129 327,300" fill="#E4E9DB"/><polygon points="176,118 327,300 121,300" fill="#E4E9DB"/><polygon points="286,129 436,156 327,300" fill="#E4E9DB"/><polygon points="436,156 462,300 327,300" fill="#F3F5EE"/><polygon points="436,156 537,126 559,300" fill="#E4E9DB"/><polygon points="436,156 559,300 462,300" fill="#EDF0E6"/><polygon points="537,126 702,185 559,300" fill="#E4E9DB"/><polygon points="702,185 757,300 559,300" fill="#E4E9DB"/><polygon points="702,185 885,121 867,300" fill="#F3F5EE"/><polygon points="702,185 867,300 757,300" fill="#EDF0E6"/><polygon points="885,121 1032,120 867,300" fill="#EDF0E6"/><polygon points="1032,120 1022,300 867,300" fill="#E4E9DB"/><polygon points="1032,120 1161,119 1128,300" fill="#EDF0E6"/><polygon points="1032,120 1128,300 1022,300" fill="#F3F5EE"/><polygon points="1161,119 1256,181 1128,300" fill="#E4E9DB"/><polygon points="1256,181 1332,300 1128,300" fill="#E4E9DB"/><polygon points="1256,181 1440,126 1440,300" fill="#EDF0E6"/><polygon points="1256,181 1440,300 1332,300" fill="#F3F5EE"/></svg></div><div class="sg-honeycomb sg-honeycomb--row sp-stagger"><a class="sg-hex sg-hex--r1 sp-reveal sp-reveal--up" href="#ab-calm"><span class="sg-hex__shape" style="--sg-fill:#5C6B48"><span class="sg-hex__t"><?php echo esc_html( shirogane_college_t( 'ab_hx1' ) ); ?></span><span class="sg-hex__c"><?php echo esc_html( shirogane_college_t( 'ab_hx1_c' ) ); ?></span></span></a><a class="sg-hex sg-hex--r2 sp-reveal sp-reveal--up" href="#ab-notes"><span class="sg-hex__shape" style="--sg-fill:#8E6E2A"><span class="sg-hex__t"><?php echo esc_html( shirogane_college_t( 'ab_hx2' ) ); ?></span><span class="sg-hex__c"><?php echo esc_html( shirogane_college_t( 'ab_hx2_c' ) ); ?></span></span></a><a class="sg-hex sg-hex--r3 sp-reveal sp-reveal--up" href="#ab-six"><span class="sg-hex__shape" style="--sg-fill:#3F7C85"><span class="sg-hex__t"><?php echo esc_html( shirogane_college_t( 'ab_hx3' ) ); ?></span><span class="sg-hex__c"><?php echo esc_html( shirogane_college_t( 'ab_hx3_c' ) ); ?></span></span></a></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sg-wrap sg-wrap--after","layout":{"type":"default"}} -->
<div class="wp-block-group sg-wrap sg-wrap--after">
<!-- wp:html -->
<div class="sg-cols3 sp-stagger"><div id="ab-calm" class="sg-cols3__c sp-reveal sp-reveal--up"><h3><?php echo esc_html( shirogane_college_t( 'ab_hx1' ) ); ?></h3><p><?php echo esc_html( shirogane_college_t( 'ab_hold1' ) ); ?></p></div><div id="ab-notes" class="sg-cols3__c sp-reveal sp-reveal--up"><h3><?php echo esc_html( shirogane_college_t( 'ab_hx2' ) ); ?></h3><p><?php echo esc_html( shirogane_college_t( 'ab_hold2' ) ); ?></p></div><div id="ab-six" class="sg-cols3__c sp-reveal sp-reveal--up"><h3><?php echo esc_html( shirogane_college_t( 'ab_hx3' ) ); ?></h3><p><?php echo esc_html( shirogane_college_t( 'ab_hold3' ) ); ?></p></div></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"clinics","align":"full","className":"sg-sec","layout":{"type":"default"}} -->
<section id="clinics" class="wp-block-group alignfull sg-sec">
<!-- wp:group {"className":"sg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sg-wrap">
<!-- wp:group {"className":"sg-h5","layout":{"type":"default"}} -->
<div class="wp-block-group sg-h5">
<!-- wp:heading {"className":"sg-h5__t"} -->
<h2 class="wp-block-heading sg-h5__t"><?php echo esc_html( shirogane_college_t( 'ab_clh' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-h5__s"} -->
<p class="sg-h5__s"><?php echo esc_html( shirogane_college_t( 'ab_cls' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sg-split sg-split--75 sg-split--mid","layout":{"type":"default"}} -->
<div class="wp-block-group sg-split sg-split--75 sg-split--mid">
<!-- wp:group {"className":"sg-split__txt","layout":{"type":"default"}} -->
<div class="wp-block-group sg-split__txt">
<!-- wp:group {"className":"sg-who sg-who--clinic","layout":{"type":"default"}} -->
<div class="wp-block-group sg-who sg-who--clinic">
<!-- wp:html -->
<div class="sg-who__row sg-who__row--one"><div class="sg-who__cell"><svg class="sg-ico" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M4 20.5v-12l8-4.5 8 4.5v12z"/><path d="M12 9.5v6M9 12.5h6"/></svg><h3><?php echo esc_html( shirogane_college_t( 'ab_cl_h' ) ); ?></h3><p><?php echo esc_html( shirogane_college_t( 'ab_cl_p' ) ); ?></p><a class="sg-tlink" href="mailto:admissions@shirogane-college.example?subject=<?php echo rawurlencode( shirogane_college_t( 'ab_host_subj' ) ); ?>"><span><?php echo esc_html( shirogane_college_t( 'ab_host' ) ); ?></span><svg class="sg-chev" width="8" height="14" viewBox="0 0 8 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M1 1l6 6-6 6"/></svg></a></div></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sg-split__img","layout":{"type":"default"}} -->
<div class="wp-block-group sg-split__img">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sg-ph sg-ph--32"} -->
<figure class="wp-block-image size-full sg-ph sg-ph--32"><img src="<?php echo shirogane_college_img( 'placement-clinic.webp' ); ?>" alt="<?php echo esc_attr( shirogane_college_t( 'alt_p16' ) ); ?>" loading="eager"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"find","align":"full","className":"sg-sec","layout":{"type":"default"}} -->
<section id="find" class="wp-block-group alignfull sg-sec">
<!-- wp:group {"className":"sg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sg-wrap">
<!-- wp:group {"className":"sg-h5","layout":{"type":"default"}} -->
<div class="wp-block-group sg-h5">
<!-- wp:heading {"className":"sg-h5__t"} -->
<h2 class="wp-block-heading sg-h5__t"><?php echo esc_html( shirogane_college_t( 'ab_fh' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-h5__s"} -->
<p class="sg-h5__s"><?php echo esc_html( shirogane_college_t( 'ab_fs' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:html -->
<ul class="sg-rows sp-stagger sg-rows--s"><li class="sg-row sp-reveal sp-reveal--up"><div class="sg-row__k"><?php echo esc_html( shirogane_college_t( 'ab_f1k' ) ); ?></div><div class="sg-row__v"><p><?php echo esc_html( shirogane_college_t( 'ab_f1v' ) ); ?></p></div></li><li class="sg-row sp-reveal sp-reveal--up"><div class="sg-row__k"><?php echo esc_html( shirogane_college_t( 'ab_f2k' ) ); ?></div><div class="sg-row__v"><p><?php echo esc_html( shirogane_college_t( 'ft_phone' ) ); ?> · admissions@shirogane-college.example</p></div></li><li class="sg-row sp-reveal sp-reveal--up"><div class="sg-row__k"><?php echo esc_html( shirogane_college_t( 'ab_f3k' ) ); ?></div><div class="sg-row__v"><p><?php echo esc_html( shirogane_college_t( 'ab_f3v' ) ); ?></p></div></li><li class="sg-row sp-reveal sp-reveal--up"><div class="sg-row__k"><?php echo esc_html( shirogane_college_t( 'ab_f4k' ) ); ?></div><div class="sg-row__v"><p><?php echo esc_html( shirogane_college_t( 'ab_f4v' ) ); ?></p></div></li><li class="sg-row sp-reveal sp-reveal--up"><div class="sg-row__k"><?php echo esc_html( shirogane_college_t( 'ab_f5k' ) ); ?></div><div class="sg-row__v"><p><?php echo esc_html( shirogane_college_t( 'ab_f5v' ) ); ?></p></div></li><li class="sg-row sp-reveal sp-reveal--up"><div class="sg-row__k"><?php echo esc_html( shirogane_college_t( 'ab_f6k' ) ); ?></div><div class="sg-row__v"><p><?php echo esc_html( shirogane_college_t( 'ab_f6v' ) ); ?></p></div></li><li class="sg-row sp-reveal sp-reveal--up"><div class="sg-row__k"><?php echo esc_html( shirogane_college_t( 'ab_f7k' ) ); ?></div><div class="sg-row__v"><p><?php echo esc_html( shirogane_college_t( 'ab_f7v' ) ); ?></p></div></li></ul>
<!-- /wp:html -->
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
<div class="sg-picks sp-stagger"><a class="sg-pick sp-reveal sp-reveal--up" href="/course/"><span class="sg-pick__ico" style="--sg-tile:#7B5A44"><svg class="sg-ico" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M6 3.5v6a4 4 0 0 0 8 0v-6"/><path d="M10 13.5v2a4 4 0 0 0 8 0v-2"/><circle cx="18" cy="11.5" r="2"/></svg></span><span class="sg-pick__t"><?php echo esc_html( shirogane_college_t( 'nx8' ) ); ?></span><svg class="sg-chev" width="8" height="14" viewBox="0 0 8 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M1 1l6 6-6 6"/></svg></a><a class="sg-pick sp-reveal sp-reveal--up" href="/tutors/"><span class="sg-pick__ico" style="--sg-tile:#A5586B"><svg class="sg-ico" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="12" cy="8" r="3.5"/><path d="M5 20v-2.5a4.5 4.5 0 0 1 4.5-4.5h5a4.5 4.5 0 0 1 4.5 4.5V20"/></svg></span><span class="sg-pick__t"><?php echo esc_html( shirogane_college_t( 'nx4' ) ); ?></span><svg class="sg-chev" width="8" height="14" viewBox="0 0 8 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M1 1l6 6-6 6"/></svg></a><a class="sg-pick sp-reveal sp-reveal--up" href="/visit/#ward-visit"><span class="sg-pick__ico" style="--sg-tile:#8E6E2A"><svg class="sg-ico" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M6 20.5v-17h12v17"/><path d="M4 20.5h16M14.5 12v1"/></svg></span><span class="sg-pick__t"><?php echo esc_html( shirogane_college_t( 'nx3' ) ); ?></span><svg class="sg-chev" width="8" height="14" viewBox="0 0 8 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M1 1l6 6-6 6"/></svg></a></div>
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
