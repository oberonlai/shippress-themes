<?php
/**
 * Title: Page: Teaching ward
 * Slug: shirogane-college/page-ward
 * Categories: shirogane-college
 * Inserter: no
 * Viewport Width: 1440
 * Description: Ward page: three hexagons for the rooms, a section per room with photographs, how animals come to the ward and five welfare rules.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sg-phead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sg-phead">
<!-- wp:group {"className":"sg-phead__panel","layout":{"type":"default"}} -->
<div class="wp-block-group sg-phead__panel">
<!-- wp:html -->
<nav class="sg-crumb" aria-label="Breadcrumb"><a href="/"><?php echo esc_html( shirogane_college_t( 'crumb_home' ) ); ?></a><span aria-hidden="true">›</span><span><?php echo esc_html( shirogane_college_t( 'crumb_ward' ) ); ?></span></nav>
<!-- /wp:html -->
<!-- wp:heading {"level":1,"className":"sg-phead__h"} -->
<h1 class="wp-block-heading sg-phead__h"><?php echo esc_html( shirogane_college_t( 'wd_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-phead__lead"} -->
<p class="sg-phead__lead"><?php echo esc_html( shirogane_college_t( 'wd_lead' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sg-phead__ph sp-parallax"} -->
<figure class="wp-block-image size-full sg-phead__ph sp-parallax"><img src="<?php echo shirogane_college_img( 'ward-wide.webp' ); ?>" alt="<?php echo esc_attr( shirogane_college_t( 'alt_p08' ) ); ?>"/></figure>
<!-- /wp:image -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"rooms","align":"full","className":"sg-sec sg-sec--hold","layout":{"type":"default"}} -->
<section id="rooms" class="wp-block-group alignfull sg-sec sg-sec--hold">
<!-- wp:group {"className":"sg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sg-wrap">
<!-- wp:group {"className":"sg-h5","layout":{"type":"default"}} -->
<div class="wp-block-group sg-h5">
<!-- wp:heading {"className":"sg-h5__t"} -->
<h2 class="wp-block-heading sg-h5__t"><?php echo esc_html( shirogane_college_t( 'wd_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-h5__s"} -->
<p class="sg-h5__s"><?php echo esc_html( shirogane_college_t( 'wd_s' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sg-intro"} -->
<p class="sg-intro"><?php echo esc_html( shirogane_college_t( 'wd_intro' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"align":"full","className":"sg-hexband sg-hexband--row","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull sg-hexband sg-hexband--row">
<!-- wp:html -->
<div class="sg-hexband__bg"><svg class="sg-tri" viewBox="0 0 1440 300" preserveAspectRatio="xMidYMid slice" aria-hidden="true" focusable="false"><polygon points="0,0 141,0 107,140" fill="#E4E9DB"/><polygon points="0,0 107,140 0,160" fill="#E4E9DB"/><polygon points="141,0 278,0 107,140" fill="#EDF0E6"/><polygon points="278,0 304,146 107,140" fill="#EDF0E6"/><polygon points="278,0 403,0 450,121" fill="#EDF0E6"/><polygon points="278,0 450,121 304,146" fill="#E4E9DB"/><polygon points="403,0 606,0 450,121" fill="#F3F5EE"/><polygon points="606,0 555,117 450,121" fill="#EDF0E6"/><polygon points="606,0 680,0 721,186" fill="#F3F5EE"/><polygon points="606,0 721,186 555,117" fill="#EDF0E6"/><polygon points="680,0 864,0 721,186" fill="#EDF0E6"/><polygon points="864,0 871,173 721,186" fill="#F3F5EE"/><polygon points="864,0 1040,0 999,171" fill="#EDF0E6"/><polygon points="864,0 999,171 871,173" fill="#EDF0E6"/><polygon points="1040,0 1118,0 999,171" fill="#E4E9DB"/><polygon points="1118,0 1120,132 999,171" fill="#EDF0E6"/><polygon points="1118,0 1300,0 1310,169" fill="#EDF0E6"/><polygon points="1118,0 1310,169 1120,132" fill="#EDF0E6"/><polygon points="1300,0 1440,0 1310,169" fill="#F3F5EE"/><polygon points="1440,0 1440,143 1310,169" fill="#EDF0E6"/><polygon points="0,160 107,140 0,300" fill="#F3F5EE"/><polygon points="107,140 111,300 0,300" fill="#EDF0E6"/><polygon points="107,140 304,146 269,300" fill="#F3F5EE"/><polygon points="107,140 269,300 111,300" fill="#E4E9DB"/><polygon points="304,146 450,121 269,300" fill="#F3F5EE"/><polygon points="450,121 409,300 269,300" fill="#EDF0E6"/><polygon points="450,121 555,117 558,300" fill="#E4E9DB"/><polygon points="450,121 558,300 409,300" fill="#EDF0E6"/><polygon points="555,117 721,186 558,300" fill="#E4E9DB"/><polygon points="721,186 745,300 558,300" fill="#EDF0E6"/><polygon points="721,186 871,173 840,300" fill="#F3F5EE"/><polygon points="721,186 840,300 745,300" fill="#EDF0E6"/><polygon points="871,173 999,171 840,300" fill="#F3F5EE"/><polygon points="999,171 1039,300 840,300" fill="#F3F5EE"/><polygon points="999,171 1120,132 1183,300" fill="#EDF0E6"/><polygon points="999,171 1183,300 1039,300" fill="#EDF0E6"/><polygon points="1120,132 1310,169 1183,300" fill="#F3F5EE"/><polygon points="1310,169 1260,300 1183,300" fill="#F3F5EE"/><polygon points="1310,169 1440,143 1440,300" fill="#EDF0E6"/><polygon points="1310,169 1440,300 1260,300" fill="#EDF0E6"/></svg></div><div class="sg-honeycomb sg-honeycomb--row sp-stagger"><a class="sg-hex sg-hex--r1 sp-reveal sp-reveal--up" href="#kennels"><span class="sg-hex__shape" style="--sg-fill:#5C6B48"><span class="sg-hex__t"><?php echo esc_html( shirogane_college_t( 'wd_hx1' ) ); ?></span><span class="sg-hex__c"><?php echo esc_html( shirogane_college_t( 'wd_hx1_c' ) ); ?></span></span></a><a class="sg-hex sg-hex--r2 sp-reveal sp-reveal--up" href="#theatre"><span class="sg-hex__shape" style="--sg-fill:#8E6E2A"><span class="sg-hex__t"><?php echo esc_html( shirogane_college_t( 'wd_hx2' ) ); ?></span><span class="sg-hex__c"><?php echo esc_html( shirogane_college_t( 'wd_hx2_c' ) ); ?></span></span></a><a class="sg-hex sg-hex--r3 sp-reveal sp-reveal--up" href="#imaging"><span class="sg-hex__shape" style="--sg-fill:#3F7C85"><span class="sg-hex__t"><?php echo esc_html( shirogane_college_t( 'hex4' ) ); ?></span><span class="sg-hex__c"><?php echo esc_html( shirogane_college_t( 'hex4_c' ) ); ?></span></span></a></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"kennels","align":"full","className":"sg-sec sg-sec--room","layout":{"type":"default"}} -->
<section id="kennels" class="wp-block-group alignfull sg-sec sg-sec--room">
<!-- wp:group {"className":"sg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sg-wrap">
<!-- wp:group {"className":"sg-h5","layout":{"type":"default"}} -->
<div class="wp-block-group sg-h5">
<!-- wp:heading {"className":"sg-h5__t"} -->
<h2 class="wp-block-heading sg-h5__t"><?php echo esc_html( shirogane_college_t( 'wd_k' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-h5__s"} -->
<p class="sg-h5__s"><?php echo esc_html( shirogane_college_t( 'wd_ks' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sg-split sg-split--57","layout":{"type":"default"}} -->
<div class="wp-block-group sg-split sg-split--57">
<!-- wp:group {"className":"sg-split__img","layout":{"type":"default"}} -->
<div class="wp-block-group sg-split__img">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sg-ph sg-ph--45"} -->
<figure class="wp-block-image size-full sg-ph sg-ph--45"><img src="<?php echo shirogane_college_img( 'day-handover.webp' ); ?>" alt="<?php echo esc_attr( shirogane_college_t( 'alt_p04' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sg-split__txt","layout":{"type":"default"}} -->
<div class="wp-block-group sg-split__txt">
<!-- wp:paragraph {"className":"sg-body"} -->
<p class="sg-body"><?php echo esc_html( shirogane_college_t( 'wd_k1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sg-body"} -->
<p class="sg-body"><?php echo esc_html( shirogane_college_t( 'wd_k2' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"theatre","align":"full","className":"sg-sec sg-sec--room","layout":{"type":"default"}} -->
<section id="theatre" class="wp-block-group alignfull sg-sec sg-sec--room">
<!-- wp:group {"className":"sg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sg-wrap">
<!-- wp:group {"className":"sg-h5","layout":{"type":"default"}} -->
<div class="wp-block-group sg-h5">
<!-- wp:heading {"className":"sg-h5__t"} -->
<h2 class="wp-block-heading sg-h5__t"><?php echo esc_html( shirogane_college_t( 'wd_t' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-h5__s"} -->
<p class="sg-h5__s"><?php echo esc_html( shirogane_college_t( 'wd_ts' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sg-split sg-split--66","layout":{"type":"default"}} -->
<div class="wp-block-group sg-split sg-split--66">
<!-- wp:group {"className":"sg-split__img","layout":{"type":"default"}} -->
<div class="wp-block-group sg-split__img">
<!-- wp:group {"className":"sg-pair","layout":{"type":"default"}} -->
<div class="wp-block-group sg-pair">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sg-ph sg-ph--32"} -->
<figure class="wp-block-image size-full sg-ph sg-ph--32"><img src="<?php echo shirogane_college_img( 'hero-ward-tray.webp' ); ?>" alt="<?php echo esc_attr( shirogane_college_t( 'alt_p03' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sg-ph sg-ph--32"} -->
<figure class="wp-block-image size-full sg-ph sg-ph--32"><img src="<?php echo shirogane_college_img( 'day-theatre.webp' ); ?>" alt="<?php echo esc_attr( shirogane_college_t( 'alt_p05' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sg-split__txt","layout":{"type":"default"}} -->
<div class="wp-block-group sg-split__txt">
<!-- wp:paragraph {"className":"sg-body"} -->
<p class="sg-body"><?php echo esc_html( shirogane_college_t( 'wd_t1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sg-body"} -->
<p class="sg-body"><?php echo esc_html( shirogane_college_t( 'wd_t2' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"imaging","align":"full","className":"sg-sec sg-sec--room","layout":{"type":"default"}} -->
<section id="imaging" class="wp-block-group alignfull sg-sec sg-sec--room">
<!-- wp:group {"className":"sg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sg-wrap">
<!-- wp:group {"className":"sg-h5","layout":{"type":"default"}} -->
<div class="wp-block-group sg-h5">
<!-- wp:heading {"className":"sg-h5__t"} -->
<h2 class="wp-block-heading sg-h5__t"><?php echo esc_html( shirogane_college_t( 'wd_i' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-h5__s"} -->
<p class="sg-h5__s"><?php echo esc_html( shirogane_college_t( 'wd_is' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sg-split sg-split--75","layout":{"type":"default"}} -->
<div class="wp-block-group sg-split sg-split--75">
<!-- wp:group {"className":"sg-split__txt","layout":{"type":"default"}} -->
<div class="wp-block-group sg-split__txt">
<!-- wp:paragraph {"className":"sg-body"} -->
<p class="sg-body"><?php echo esc_html( shirogane_college_t( 'wd_i1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sg-body"} -->
<p class="sg-body"><?php echo esc_html( shirogane_college_t( 'wd_i2' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sg-split__img","layout":{"type":"default"}} -->
<div class="wp-block-group sg-split__img">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sg-ph sg-ph--32"} -->
<figure class="wp-block-image size-full sg-ph sg-ph--32"><img src="<?php echo shirogane_college_img( 'imaging-position.webp' ); ?>" alt="<?php echo esc_attr( shirogane_college_t( 'alt_p14' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"animals","align":"full","className":"sg-sec sg-sec--animals","layout":{"type":"default"}} -->
<section id="animals" class="wp-block-group alignfull sg-sec sg-sec--animals">
<!-- wp:group {"className":"sg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sg-wrap">
<!-- wp:group {"className":"sg-h5","layout":{"type":"default"}} -->
<div class="wp-block-group sg-h5">
<!-- wp:heading {"className":"sg-h5__t"} -->
<h2 class="wp-block-heading sg-h5__t"><?php echo esc_html( shirogane_college_t( 'wd_ah' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-h5__s"} -->
<p class="sg-h5__s"><?php echo esc_html( shirogane_college_t( 'wd_as' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sg-intro"} -->
<p class="sg-intro"><?php echo esc_html( shirogane_college_t( 'wd_a1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sg-body sg-body--after"} -->
<p class="sg-body sg-body--after"><?php echo esc_html( shirogane_college_t( 'wd_a2' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"welfare","align":"full","className":"sg-sec sg-sec--rules","layout":{"type":"default"}} -->
<section id="welfare" class="wp-block-group alignfull sg-sec sg-sec--rules">
<!-- wp:group {"className":"sg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sg-wrap">
<!-- wp:group {"className":"sg-h5","layout":{"type":"default"}} -->
<div class="wp-block-group sg-h5">
<!-- wp:heading {"className":"sg-h5__t"} -->
<h2 class="wp-block-heading sg-h5__t"><?php echo esc_html( shirogane_college_t( 'wd_wh' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-h5__s"} -->
<p class="sg-h5__s"><?php echo esc_html( shirogane_college_t( 'wd_ws' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:html -->
<ul class="sg-rows sp-stagger"><li class="sg-row sp-reveal sp-reveal--up"><div class="sg-row__k"><?php echo esc_html( shirogane_college_t( 'wd_r1k' ) ); ?></div><div class="sg-row__v"><h3><?php echo esc_html( shirogane_college_t( 'wd_r1h' ) ); ?></h3><p><?php echo esc_html( shirogane_college_t( 'wd_r1p' ) ); ?></p></div></li><li class="sg-row sp-reveal sp-reveal--up"><div class="sg-row__k"><?php echo esc_html( shirogane_college_t( 'wd_r2k' ) ); ?></div><div class="sg-row__v"><h3><?php echo esc_html( shirogane_college_t( 'wd_r2h' ) ); ?></h3><p><?php echo esc_html( shirogane_college_t( 'wd_r2p' ) ); ?></p></div></li><li class="sg-row sp-reveal sp-reveal--up"><div class="sg-row__k"><?php echo esc_html( shirogane_college_t( 'wd_r3k' ) ); ?></div><div class="sg-row__v"><h3><?php echo esc_html( shirogane_college_t( 'wd_r3h' ) ); ?></h3><p><?php echo esc_html( shirogane_college_t( 'wd_r3p' ) ); ?></p></div></li><li class="sg-row sp-reveal sp-reveal--up"><div class="sg-row__k"><?php echo esc_html( shirogane_college_t( 'wd_r4k' ) ); ?></div><div class="sg-row__v"><h3><?php echo esc_html( shirogane_college_t( 'wd_r4h' ) ); ?></h3><p><?php echo esc_html( shirogane_college_t( 'wd_r4p' ) ); ?></p></div></li><li class="sg-row sp-reveal sp-reveal--up"><div class="sg-row__k"><?php echo esc_html( shirogane_college_t( 'wd_r5k' ) ); ?></div><div class="sg-row__v"><h3><?php echo esc_html( shirogane_college_t( 'wd_r5h' ) ); ?></h3><p><?php echo esc_html( shirogane_college_t( 'wd_r5p' ) ); ?></p></div></li></ul>
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
<div class="sg-picks sp-stagger"><a class="sg-pick sp-reveal sp-reveal--up" href="/visit/#ward-visit"><span class="sg-pick__ico" style="--sg-tile:#8E6E2A"><svg class="sg-ico" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M6 20.5v-17h12v17"/><path d="M4 20.5h16M14.5 12v1"/></svg></span><span class="sg-pick__t"><?php echo esc_html( shirogane_college_t( 'nx3' ) ); ?></span><svg class="sg-chev" width="8" height="14" viewBox="0 0 8 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M1 1l6 6-6 6"/></svg></a><a class="sg-pick sp-reveal sp-reveal--up" href="/course/"><span class="sg-pick__ico" style="--sg-tile:#7B5A44"><svg class="sg-ico" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M6 3.5v6a4 4 0 0 0 8 0v-6"/><path d="M10 13.5v2a4 4 0 0 0 8 0v-2"/><circle cx="18" cy="11.5" r="2"/></svg></span><span class="sg-pick__t"><?php echo esc_html( shirogane_college_t( 'nx8' ) ); ?></span><svg class="sg-chev" width="8" height="14" viewBox="0 0 8 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M1 1l6 6-6 6"/></svg></a><a class="sg-pick sp-reveal sp-reveal--up" href="/tutors/"><span class="sg-pick__ico" style="--sg-tile:#A5586B"><svg class="sg-ico" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="12" cy="8" r="3.5"/><path d="M5 20v-2.5a4.5 4.5 0 0 1 4.5-4.5h5a4.5 4.5 0 0 1 4.5 4.5V20"/></svg></span><span class="sg-pick__t"><?php echo esc_html( shirogane_college_t( 'nx4' ) ); ?></span><svg class="sg-chev" width="8" height="14" viewBox="0 0 8 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M1 1l6 6-6 6"/></svg></a></div>
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
