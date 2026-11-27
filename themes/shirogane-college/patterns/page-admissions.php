<?php
/**
 * Title: Page: Admissions
 * Slug: shirogane-college/page-admissions
 * Categories: shirogane-college
 * Inserter: no
 * Viewport Width: 1440
 * Description: Admissions page: the five-cell audience row as an opening, a section per group, three hexagons for the ways in, six dated steps and eight questions.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sg-phead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sg-phead">
<!-- wp:group {"className":"sg-phead__panel","layout":{"type":"default"}} -->
<div class="wp-block-group sg-phead__panel">
<!-- wp:html -->
<nav class="sg-crumb" aria-label="Breadcrumb"><a href="/"><?php echo esc_html( shirogane_college_t( 'crumb_home' ) ); ?></a><span aria-hidden="true">›</span><span><?php echo esc_html( shirogane_college_t( 'crumb_adm' ) ); ?></span></nav>
<!-- /wp:html -->
<!-- wp:heading {"level":1,"className":"sg-phead__h"} -->
<h1 class="wp-block-heading sg-phead__h"><?php echo esc_html( shirogane_college_t( 'ad_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-phead__lead"} -->
<p class="sg-phead__lead"><?php echo esc_html( shirogane_college_t( 'ad_lead' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sg-phead__ph sp-parallax"} -->
<figure class="wp-block-image size-full sg-phead__ph sp-parallax"><img src="<?php echo shirogane_college_img( 'openday-tour.webp' ); ?>" alt="<?php echo esc_attr( shirogane_college_t( 'alt_p13' ) ); ?>"/></figure>
<!-- /wp:image -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"who","align":"full","className":"sg-sec sg-sec--who","layout":{"type":"default"}} -->
<section id="who" class="wp-block-group alignfull sg-sec sg-sec--who">
<!-- wp:group {"className":"sg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sg-wrap">
<!-- wp:group {"className":"sg-h5","layout":{"type":"default"}} -->
<div class="wp-block-group sg-h5">
<!-- wp:heading {"className":"sg-h5__t"} -->
<h2 class="wp-block-heading sg-h5__t"><?php echo esc_html( shirogane_college_t( 'ad_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-h5__s"} -->
<p class="sg-h5__s"><?php echo esc_html( shirogane_college_t( 'ad_s' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sg-intro"} -->
<p class="sg-intro"><?php echo esc_html( shirogane_college_t( 'ad_intro' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"sg-who sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group sg-who sp-stagger">
<!-- wp:html -->
<div class="sg-who__row"><div class="sg-who__cell sp-reveal sp-reveal--up"><svg class="sg-ico" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M3.5 8.5h17v10h-17z"/><path d="M9 8.5v-2h6v2"/><circle cx="8.5" cy="13" r="1"/><circle cx="12" cy="12" r="1"/><circle cx="15.5" cy="13" r="1"/><path d="M10.5 16.5c.5-1 2.5-1 3 0"/></svg><h3><?php echo esc_html( shirogane_college_t( 'who1' ) ); ?></h3><p><?php echo esc_html( shirogane_college_t( 'ad_c_career_changers' ) ); ?></p><a class="sg-tlink" href="#career-changers"><span><?php echo esc_html( shirogane_college_t( 'read_more' ) ); ?></span><svg class="sg-chev" width="8" height="14" viewBox="0 0 8 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M1 1l6 6-6 6"/></svg></a></div><div class="sg-who__cell sp-reveal sp-reveal--up"><svg class="sg-ico" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M7 8a5 5 0 0 1 10 0v11.5H7z"/><path d="M9.5 8h5M7 14h10M10 14v3h4v-3"/></svg><h3><?php echo esc_html( shirogane_college_t( 'who2' ) ); ?></h3><p><?php echo esc_html( shirogane_college_t( 'ad_c_school_leavers' ) ); ?></p><a class="sg-tlink" href="#school-leavers"><span><?php echo esc_html( shirogane_college_t( 'read_more' ) ); ?></span><svg class="sg-chev" width="8" height="14" viewBox="0 0 8 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M1 1l6 6-6 6"/></svg></a></div><div class="sg-who__cell sp-reveal sp-reveal--up"><svg class="sg-ico" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M6 3.5v6a4 4 0 0 0 8 0v-6"/><path d="M10 13.5v2a4 4 0 0 0 8 0v-2"/><circle cx="18" cy="11.5" r="2"/></svg><h3><?php echo esc_html( shirogane_college_t( 'who3' ) ); ?></h3><p><?php echo esc_html( shirogane_college_t( 'ad_c_clinic_staff' ) ); ?></p><a class="sg-tlink" href="#clinic-staff"><span><?php echo esc_html( shirogane_college_t( 'read_more' ) ); ?></span><svg class="sg-chev" width="8" height="14" viewBox="0 0 8 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M1 1l6 6-6 6"/></svg></a></div><div class="sg-who__cell sp-reveal sp-reveal--up"><svg class="sg-ico" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="8" cy="7" r="2.5"/><circle cx="16.5" cy="9" r="2"/><path d="M3.5 19.5v-4a4.5 4.5 0 0 1 9 0v4M13.5 19.5v-3a3.5 3.5 0 0 1 7 0v3"/></svg><h3><?php echo esc_html( shirogane_college_t( 'who4' ) ); ?></h3><p><?php echo esc_html( shirogane_college_t( 'ad_c_supporters' ) ); ?></p><a class="sg-tlink" href="#supporters"><span><?php echo esc_html( shirogane_college_t( 'read_more' ) ); ?></span><svg class="sg-chev" width="8" height="14" viewBox="0 0 8 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M1 1l6 6-6 6"/></svg></a></div><div class="sg-who__cell sp-reveal sp-reveal--up"><svg class="sg-ico" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M4 20.5v-12l8-4.5 8 4.5v12z"/><path d="M12 9.5v6M9 12.5h6"/></svg><h3><?php echo esc_html( shirogane_college_t( 'who5' ) ); ?></h3><p><?php echo esc_html( shirogane_college_t( 'ad_c_partner_clinics' ) ); ?></p><a class="sg-tlink" href="#partner-clinics"><span><?php echo esc_html( shirogane_college_t( 'read_more' ) ); ?></span><svg class="sg-chev" width="8" height="14" viewBox="0 0 8 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M1 1l6 6-6 6"/></svg></a></div></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"ways","align":"full","className":"sg-sec sg-sec--subs","layout":{"type":"default"}} -->
<section id="ways" class="wp-block-group alignfull sg-sec sg-sec--subs">
<!-- wp:group {"className":"sg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sg-wrap">
<!-- wp:group {"className":"sg-h5","layout":{"type":"default"}} -->
<div class="wp-block-group sg-h5">
<!-- wp:heading {"className":"sg-h5__t"} -->
<h2 class="wp-block-heading sg-h5__t"><?php echo esc_html( shirogane_college_t( 'ad_wh' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-h5__s"} -->
<p class="sg-h5__s"><?php echo esc_html( shirogane_college_t( 'ad_ws' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"anchor":"career-changers","className":"sg-sub","layout":{"type":"default"}} -->
<div id="career-changers" class="wp-block-group sg-sub">
<!-- wp:group {"className":"sg-sub__h","layout":{"type":"default"}} -->
<div class="wp-block-group sg-sub__h">
<!-- wp:html -->
<svg class="sg-ico" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M3.5 8.5h17v10h-17z"/><path d="M9 8.5v-2h6v2"/><circle cx="8.5" cy="13" r="1"/><circle cx="12" cy="12" r="1"/><circle cx="15.5" cy="13" r="1"/><path d="M10.5 16.5c.5-1 2.5-1 3 0"/></svg>
<!-- /wp:html -->
<!-- wp:heading {"level":3,"className":"sg-sub__t"} -->
<h3 class="wp-block-heading sg-sub__t"><?php echo esc_html( shirogane_college_t( 'who1' ) ); ?></h3>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sg-sub__b sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sg-sub__b sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"sg-body"} -->
<p class="sg-body"><?php echo esc_html( shirogane_college_t( 'ad1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sg-body"} -->
<p class="sg-body"><?php echo esc_html( shirogane_college_t( 'ad1b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"anchor":"school-leavers","className":"sg-sub","layout":{"type":"default"}} -->
<div id="school-leavers" class="wp-block-group sg-sub">
<!-- wp:group {"className":"sg-sub__h","layout":{"type":"default"}} -->
<div class="wp-block-group sg-sub__h">
<!-- wp:html -->
<svg class="sg-ico" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M7 8a5 5 0 0 1 10 0v11.5H7z"/><path d="M9.5 8h5M7 14h10M10 14v3h4v-3"/></svg>
<!-- /wp:html -->
<!-- wp:heading {"level":3,"className":"sg-sub__t"} -->
<h3 class="wp-block-heading sg-sub__t"><?php echo esc_html( shirogane_college_t( 'who2' ) ); ?></h3>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sg-sub__b sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sg-sub__b sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"sg-body"} -->
<p class="sg-body"><?php echo esc_html( shirogane_college_t( 'ad2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sg-body"} -->
<p class="sg-body"><?php echo esc_html( shirogane_college_t( 'ad2b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"anchor":"clinic-staff","className":"sg-sub","layout":{"type":"default"}} -->
<div id="clinic-staff" class="wp-block-group sg-sub">
<!-- wp:group {"className":"sg-sub__h","layout":{"type":"default"}} -->
<div class="wp-block-group sg-sub__h">
<!-- wp:html -->
<svg class="sg-ico" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M6 3.5v6a4 4 0 0 0 8 0v-6"/><path d="M10 13.5v2a4 4 0 0 0 8 0v-2"/><circle cx="18" cy="11.5" r="2"/></svg>
<!-- /wp:html -->
<!-- wp:heading {"level":3,"className":"sg-sub__t"} -->
<h3 class="wp-block-heading sg-sub__t"><?php echo esc_html( shirogane_college_t( 'who3' ) ); ?></h3>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sg-sub__b sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sg-sub__b sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"sg-body"} -->
<p class="sg-body"><?php echo esc_html( shirogane_college_t( 'ad3' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sg-body"} -->
<p class="sg-body"><?php echo esc_html( shirogane_college_t( 'ad3b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"anchor":"supporters","className":"sg-sub","layout":{"type":"default"}} -->
<div id="supporters" class="wp-block-group sg-sub">
<!-- wp:group {"className":"sg-sub__h","layout":{"type":"default"}} -->
<div class="wp-block-group sg-sub__h">
<!-- wp:html -->
<svg class="sg-ico" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="8" cy="7" r="2.5"/><circle cx="16.5" cy="9" r="2"/><path d="M3.5 19.5v-4a4.5 4.5 0 0 1 9 0v4M13.5 19.5v-3a3.5 3.5 0 0 1 7 0v3"/></svg>
<!-- /wp:html -->
<!-- wp:heading {"level":3,"className":"sg-sub__t"} -->
<h3 class="wp-block-heading sg-sub__t"><?php echo esc_html( shirogane_college_t( 'who4' ) ); ?></h3>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sg-sub__b sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sg-sub__b sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"sg-body"} -->
<p class="sg-body"><?php echo esc_html( shirogane_college_t( 'ad4' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sg-body"} -->
<p class="sg-body"><?php echo esc_html( shirogane_college_t( 'ad4b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"anchor":"partner-clinics","className":"sg-sub","layout":{"type":"default"}} -->
<div id="partner-clinics" class="wp-block-group sg-sub">
<!-- wp:group {"className":"sg-sub__h","layout":{"type":"default"}} -->
<div class="wp-block-group sg-sub__h">
<!-- wp:html -->
<svg class="sg-ico" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M4 20.5v-12l8-4.5 8 4.5v12z"/><path d="M12 9.5v6M9 12.5h6"/></svg>
<!-- /wp:html -->
<!-- wp:heading {"level":3,"className":"sg-sub__t"} -->
<h3 class="wp-block-heading sg-sub__t"><?php echo esc_html( shirogane_college_t( 'who5' ) ); ?></h3>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sg-sub__b sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sg-sub__b sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"sg-body"} -->
<p class="sg-body"><?php echo esc_html( shirogane_college_t( 'ad5' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sg-body"} -->
<p class="sg-body"><?php echo esc_html( shirogane_college_t( 'ad5b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"sg-sec sg-sec--hold","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sg-sec sg-sec--hold">
<!-- wp:group {"className":"sg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sg-wrap">
<!-- wp:group {"className":"sg-h5","layout":{"type":"default"}} -->
<div class="wp-block-group sg-h5">
<!-- wp:heading {"className":"sg-h5__t"} -->
<h2 class="wp-block-heading sg-h5__t"><?php echo esc_html( shirogane_college_t( 'ad_th' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-h5__s"} -->
<p class="sg-h5__s"><?php echo esc_html( shirogane_college_t( 'ad_ts' ) ); ?></p>
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
<div class="sg-hexband__bg"><svg class="sg-tri" viewBox="0 0 1440 300" preserveAspectRatio="xMidYMid slice" aria-hidden="true" focusable="false"><polygon points="0,0 140,0 111,133" fill="#EDF0E6"/><polygon points="0,0 111,133 0,175" fill="#F3F5EE"/><polygon points="140,0 293,0 111,133" fill="#E4E9DB"/><polygon points="293,0 255,176 111,133" fill="#E4E9DB"/><polygon points="293,0 466,0 448,112" fill="#EDF0E6"/><polygon points="293,0 448,112 255,176" fill="#F3F5EE"/><polygon points="466,0 573,0 448,112" fill="#E4E9DB"/><polygon points="573,0 615,189 448,112" fill="#EDF0E6"/><polygon points="573,0 721,0 732,160" fill="#EDF0E6"/><polygon points="573,0 732,160 615,189" fill="#F3F5EE"/><polygon points="721,0 871,0 732,160" fill="#EDF0E6"/><polygon points="871,0 836,109 732,160" fill="#E4E9DB"/><polygon points="871,0 983,0 1010,113" fill="#EDF0E6"/><polygon points="871,0 1010,113 836,109" fill="#E4E9DB"/><polygon points="983,0 1153,0 1010,113" fill="#E4E9DB"/><polygon points="1153,0 1127,128 1010,113" fill="#EDF0E6"/><polygon points="1153,0 1306,0 1258,147" fill="#EDF0E6"/><polygon points="1153,0 1258,147 1127,128" fill="#F3F5EE"/><polygon points="1306,0 1440,0 1258,147" fill="#EDF0E6"/><polygon points="1440,0 1440,145 1258,147" fill="#EDF0E6"/><polygon points="0,175 111,133 0,300" fill="#EDF0E6"/><polygon points="111,133 172,300 0,300" fill="#EDF0E6"/><polygon points="111,133 255,176 290,300" fill="#E4E9DB"/><polygon points="111,133 290,300 172,300" fill="#E4E9DB"/><polygon points="255,176 448,112 290,300" fill="#F3F5EE"/><polygon points="448,112 443,300 290,300" fill="#E4E9DB"/><polygon points="448,112 615,189 576,300" fill="#E4E9DB"/><polygon points="448,112 576,300 443,300" fill="#EDF0E6"/><polygon points="615,189 732,160 576,300" fill="#F3F5EE"/><polygon points="732,160 733,300 576,300" fill="#F3F5EE"/><polygon points="732,160 836,109 861,300" fill="#EDF0E6"/><polygon points="732,160 861,300 733,300" fill="#F3F5EE"/><polygon points="836,109 1010,113 861,300" fill="#E4E9DB"/><polygon points="1010,113 990,300 861,300" fill="#E4E9DB"/><polygon points="1010,113 1127,128 1192,300" fill="#EDF0E6"/><polygon points="1010,113 1192,300 990,300" fill="#E4E9DB"/><polygon points="1127,128 1258,147 1192,300" fill="#E4E9DB"/><polygon points="1258,147 1336,300 1192,300" fill="#EDF0E6"/><polygon points="1258,147 1440,145 1440,300" fill="#E4E9DB"/><polygon points="1258,147 1440,300 1336,300" fill="#EDF0E6"/></svg></div><div class="sg-honeycomb sg-honeycomb--row sp-stagger"><a class="sg-hex sg-hex--r1 sp-reveal sp-reveal--up" href="#ad-dip"><span class="sg-hex__shape" style="--sg-fill:#5C6B48"><span class="sg-hex__t"><?php echo esc_html( shirogane_college_t( 'ad_hx1' ) ); ?></span><span class="sg-hex__c"><?php echo esc_html( shirogane_college_t( 'ad_hx1_c' ) ); ?></span></span></a><a class="sg-hex sg-hex--r2 sp-reveal sp-reveal--up" href="#ad-found"><span class="sg-hex__shape" style="--sg-fill:#8E6E2A"><span class="sg-hex__t"><?php echo esc_html( shirogane_college_t( 'ad_hx2' ) ); ?></span><span class="sg-hex__c"><?php echo esc_html( shirogane_college_t( 'ad_hx2_c' ) ); ?></span></span></a><a class="sg-hex sg-hex--r3 sp-reveal sp-reveal--up" href="#ad-eve"><span class="sg-hex__shape" style="--sg-fill:#3F7C85"><span class="sg-hex__t"><?php echo esc_html( shirogane_college_t( 'ad_hx3' ) ); ?></span><span class="sg-hex__c"><?php echo esc_html( shirogane_college_t( 'ad_hx3_c' ) ); ?></span></span></a></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sg-wrap sg-wrap--after","layout":{"type":"default"}} -->
<div class="wp-block-group sg-wrap sg-wrap--after">
<!-- wp:html -->
<div class="sg-cols3 sp-stagger"><div id="ad-dip" class="sg-cols3__c sp-reveal sp-reveal--up"><h3><?php echo esc_html( shirogane_college_t( 'ad_hx1' ) ); ?></h3><p><?php echo esc_html( shirogane_college_t( 'ad_hxp1' ) ); ?></p></div><div id="ad-found" class="sg-cols3__c sp-reveal sp-reveal--up"><h3><?php echo esc_html( shirogane_college_t( 'ad_hx2' ) ); ?></h3><p><?php echo esc_html( shirogane_college_t( 'ad_hxp2' ) ); ?></p></div><div id="ad-eve" class="sg-cols3__c sp-reveal sp-reveal--up"><h3><?php echo esc_html( shirogane_college_t( 'ad_hx3' ) ); ?></h3><p><?php echo esc_html( shirogane_college_t( 'ad_hxp3' ) ); ?></p></div></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"apply","align":"full","className":"sg-sec sg-sec--apply","layout":{"type":"default"}} -->
<section id="apply" class="wp-block-group alignfull sg-sec sg-sec--apply">
<!-- wp:group {"className":"sg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sg-wrap">
<!-- wp:group {"className":"sg-h5","layout":{"type":"default"}} -->
<div class="wp-block-group sg-h5">
<!-- wp:heading {"className":"sg-h5__t"} -->
<h2 class="wp-block-heading sg-h5__t"><?php echo esc_html( shirogane_college_t( 'ad_ah' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-h5__s"} -->
<p class="sg-h5__s"><?php echo esc_html( shirogane_college_t( 'ad_as' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:html -->
<ul class="sg-rows sp-stagger"><li class="sg-row sp-reveal sp-reveal--up"><div class="sg-row__k"><?php echo esc_html( shirogane_college_t( 'ad_s1k' ) ); ?></div><div class="sg-row__v"><h3><?php echo esc_html( shirogane_college_t( 'ad_s1h' ) ); ?></h3><p><?php echo esc_html( shirogane_college_t( 'ad_s1p' ) ); ?></p></div></li><li class="sg-row sp-reveal sp-reveal--up"><div class="sg-row__k"><?php echo esc_html( shirogane_college_t( 'ad_s2k' ) ); ?></div><div class="sg-row__v"><h3><?php echo esc_html( shirogane_college_t( 'ad_s2h' ) ); ?></h3><p><?php echo esc_html( shirogane_college_t( 'ad_s2p' ) ); ?></p></div></li><li class="sg-row sp-reveal sp-reveal--up"><div class="sg-row__k"><?php echo esc_html( shirogane_college_t( 'ad_s3k' ) ); ?></div><div class="sg-row__v"><h3><?php echo esc_html( shirogane_college_t( 'ad_s3h' ) ); ?></h3><p><?php echo esc_html( shirogane_college_t( 'ad_s3p' ) ); ?></p></div></li><li class="sg-row sp-reveal sp-reveal--up"><div class="sg-row__k"><?php echo esc_html( shirogane_college_t( 'ad_s4k' ) ); ?></div><div class="sg-row__v"><h3><?php echo esc_html( shirogane_college_t( 'ad_s4h' ) ); ?></h3><p><?php echo esc_html( shirogane_college_t( 'ad_s4p' ) ); ?></p></div></li><li class="sg-row sp-reveal sp-reveal--up"><div class="sg-row__k"><?php echo esc_html( shirogane_college_t( 'ad_s5k' ) ); ?></div><div class="sg-row__v"><h3><?php echo esc_html( shirogane_college_t( 'ad_s5h' ) ); ?></h3><p><?php echo esc_html( shirogane_college_t( 'ad_s5p' ) ); ?></p></div></li><li class="sg-row sp-reveal sp-reveal--up"><div class="sg-row__k"><?php echo esc_html( shirogane_college_t( 'ad_s6k' ) ); ?></div><div class="sg-row__v"><h3><?php echo esc_html( shirogane_college_t( 'ad_s6h' ) ); ?></h3><p><?php echo esc_html( shirogane_college_t( 'ad_s6p' ) ); ?></p></div></li></ul>
<!-- /wp:html -->
<!-- wp:html -->
<p class="sg-applylinks"><a class="sg-tlink" href="/contact/"><span><?php echo esc_html( shirogane_college_t( 'ad_apply_a' ) ); ?></span><svg class="sg-chev" width="8" height="14" viewBox="0 0 8 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M1 1l6 6-6 6"/></svg></a> <a class="sg-tlink" href="mailto:admissions@shirogane-college.example?subject=<?php echo rawurlencode( shirogane_college_t( 'ad_apply_subj' ) ); ?>"><span><?php echo esc_html( shirogane_college_t( 'ad_apply_b' ) ); ?></span><svg class="sg-chev" width="8" height="14" viewBox="0 0 8 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M1 1l6 6-6 6"/></svg></a></p>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"entry","align":"full","className":"sg-sec sg-sec--entry","layout":{"type":"default"}} -->
<section id="entry" class="wp-block-group alignfull sg-sec sg-sec--entry">
<!-- wp:group {"className":"sg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sg-wrap">
<!-- wp:group {"className":"sg-h5","layout":{"type":"default"}} -->
<div class="wp-block-group sg-h5">
<!-- wp:heading {"className":"sg-h5__t"} -->
<h2 class="wp-block-heading sg-h5__t"><?php echo esc_html( shirogane_college_t( 'ad_eh' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-h5__s"} -->
<p class="sg-h5__s"><?php echo esc_html( shirogane_college_t( 'ad_es' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sg-split sg-split--57","layout":{"type":"default"}} -->
<div class="wp-block-group sg-split sg-split--57">
<!-- wp:group {"className":"sg-split__img","layout":{"type":"default"}} -->
<div class="wp-block-group sg-split__img">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sg-ph sg-ph--32"} -->
<figure class="wp-block-image size-full sg-ph sg-ph--32"><img src="<?php echo shirogane_college_img( 'hero-ward-bandage.webp' ); ?>" alt="<?php echo esc_attr( shirogane_college_t( 'alt_p01' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sg-split__txt","layout":{"type":"default"}} -->
<div class="wp-block-group sg-split__txt">
<!-- wp:paragraph {"className":"sg-body"} -->
<p class="sg-body"><?php echo esc_html( shirogane_college_t( 'ad_e1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sg-body"} -->
<p class="sg-body"><?php echo esc_html( shirogane_college_t( 'ad_e2' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"questions","align":"full","className":"sg-sec sg-sec--qa","layout":{"type":"default"}} -->
<section id="questions" class="wp-block-group alignfull sg-sec sg-sec--qa">
<!-- wp:group {"className":"sg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sg-wrap">
<!-- wp:group {"className":"sg-h5","layout":{"type":"default"}} -->
<div class="wp-block-group sg-h5">
<!-- wp:heading {"className":"sg-h5__t"} -->
<h2 class="wp-block-heading sg-h5__t"><?php echo esc_html( shirogane_college_t( 'ad_qh' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-h5__s"} -->
<p class="sg-h5__s"><?php echo esc_html( shirogane_college_t( 'ad_qs' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:html -->
<div class="sg-qa sp-stagger"><div class="sg-qa__i sp-reveal sp-reveal--up"><h3><?php echo esc_html( shirogane_college_t( 'ad_q1' ) ); ?></h3><p><?php echo esc_html( shirogane_college_t( 'ad_a1' ) ); ?></p></div><div class="sg-qa__i sp-reveal sp-reveal--up"><h3><?php echo esc_html( shirogane_college_t( 'ad_q2' ) ); ?></h3><p><?php echo esc_html( shirogane_college_t( 'ad_a2' ) ); ?></p></div><div class="sg-qa__i sp-reveal sp-reveal--up"><h3><?php echo esc_html( shirogane_college_t( 'ad_q3' ) ); ?></h3><p><?php echo esc_html( shirogane_college_t( 'ad_a3' ) ); ?></p></div><div class="sg-qa__i sp-reveal sp-reveal--up"><h3><?php echo esc_html( shirogane_college_t( 'ad_q4' ) ); ?></h3><p><?php echo esc_html( shirogane_college_t( 'ad_a4' ) ); ?></p></div><div class="sg-qa__i sp-reveal sp-reveal--up"><h3><?php echo esc_html( shirogane_college_t( 'ad_q5' ) ); ?></h3><p><?php echo esc_html( shirogane_college_t( 'ad_a5' ) ); ?></p></div><div class="sg-qa__i sp-reveal sp-reveal--up"><h3><?php echo esc_html( shirogane_college_t( 'ad_q6' ) ); ?></h3><p><?php echo esc_html( shirogane_college_t( 'ad_a6' ) ); ?></p></div><div class="sg-qa__i sp-reveal sp-reveal--up"><h3><?php echo esc_html( shirogane_college_t( 'ad_q7' ) ); ?></h3><p><?php echo esc_html( shirogane_college_t( 'ad_a7' ) ); ?></p></div><div class="sg-qa__i sp-reveal sp-reveal--up"><h3><?php echo esc_html( shirogane_college_t( 'ad_q8' ) ); ?></h3><p><?php echo esc_html( shirogane_college_t( 'ad_a8' ) ); ?></p></div></div>
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
<div class="sg-picks sp-stagger"><a class="sg-pick sp-reveal sp-reveal--up" href="/fees/"><span class="sg-pick__ico" style="--sg-tile:#5C6B48"><svg class="sg-ico" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="12" cy="12" r="8"/><path d="M14.5 9a3 3 0 1 0 0 6M8.5 11h5M8.5 13.5h5"/></svg></span><span class="sg-pick__t"><?php echo esc_html( shirogane_college_t( 'nx1' ) ); ?></span><svg class="sg-chev" width="8" height="14" viewBox="0 0 8 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M1 1l6 6-6 6"/></svg></a><a class="sg-pick sp-reveal sp-reveal--up" href="/visit/#open-day"><span class="sg-pick__ico" style="--sg-tile:#7B5A44"><svg class="sg-ico" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="4" y="5.5" width="16" height="14"/><path d="M4 10h16M8.5 3.5v4M15.5 3.5v4"/></svg></span><span class="sg-pick__t"><?php echo esc_html( shirogane_college_t( 'nx2' ) ); ?></span><svg class="sg-chev" width="8" height="14" viewBox="0 0 8 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M1 1l6 6-6 6"/></svg></a><a class="sg-pick sp-reveal sp-reveal--up" href="/visit/#ward-visit"><span class="sg-pick__ico" style="--sg-tile:#8E6E2A"><svg class="sg-ico" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M6 20.5v-17h12v17"/><path d="M4 20.5h16M14.5 12v1"/></svg></span><span class="sg-pick__t"><?php echo esc_html( shirogane_college_t( 'nx3' ) ); ?></span><svg class="sg-chev" width="8" height="14" viewBox="0 0 8 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M1 1l6 6-6 6"/></svg></a></div>
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
