<?php
/**
 * Title: Page: A training day
 * Slug: shirogane-college/page-training-day
 * Categories: shirogane-college
 * Inserter: no
 * Viewport Width: 1440
 * Description: Training day page: eight time rows in three sticky-photo groups (morning, midday, afternoon) and a Monday-to-Friday week table.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sg-phead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sg-phead">
<!-- wp:group {"className":"sg-phead__panel","layout":{"type":"default"}} -->
<div class="wp-block-group sg-phead__panel">
<!-- wp:html -->
<nav class="sg-crumb" aria-label="Breadcrumb"><a href="/"><?php echo esc_html( shirogane_college_t( 'crumb_home' ) ); ?></a><span aria-hidden="true">›</span><span><?php echo esc_html( shirogane_college_t( 'crumb_day' ) ); ?></span></nav>
<!-- /wp:html -->
<!-- wp:heading {"level":1,"className":"sg-phead__h"} -->
<h1 class="wp-block-heading sg-phead__h"><?php echo esc_html( shirogane_college_t( 'td_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-phead__lead"} -->
<p class="sg-phead__lead"><?php echo esc_html( shirogane_college_t( 'td_lead' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sg-phead__ph sp-parallax"} -->
<figure class="wp-block-image size-full sg-phead__ph sp-parallax"><img src="<?php echo shirogane_college_img( 'day-handover.webp' ); ?>" alt="<?php echo esc_attr( shirogane_college_t( 'alt_p04' ) ); ?>" loading="eager"/></figure>
<!-- /wp:image -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"day","align":"full","className":"sg-sec sg-sec--day","layout":{"type":"default"}} -->
<section id="day" class="wp-block-group alignfull sg-sec sg-sec--day">
<!-- wp:group {"className":"sg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sg-wrap">
<!-- wp:group {"className":"sg-h5","layout":{"type":"default"}} -->
<div class="wp-block-group sg-h5">
<!-- wp:heading {"className":"sg-h5__t"} -->
<h2 class="wp-block-heading sg-h5__t"><?php echo esc_html( shirogane_college_t( 'td_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-h5__s"} -->
<p class="sg-h5__s"><?php echo esc_html( shirogane_college_t( 'td_s' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sg-intro"} -->
<p class="sg-intro"><?php echo esc_html( shirogane_college_t( 'td_intro' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"sg-dayg sg-dayg--a","layout":{"type":"default"}} -->
<div class="wp-block-group sg-dayg sg-dayg--a">
<!-- wp:group {"className":"sg-dayg__ph","layout":{"type":"default"}} -->
<div class="wp-block-group sg-dayg__ph">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sg-dayph"} -->
<figure class="wp-block-image size-full sg-dayph"><img src="<?php echo shirogane_college_img( 'hero-ward-bandage.webp' ); ?>" alt="<?php echo esc_attr( shirogane_college_t( 'alt_p01' ) ); ?>" loading="eager"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"className":"sg-cap"} -->
<p class="sg-cap"><?php echo esc_html( shirogane_college_t( 'td_cap1' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sg-times","layout":{"type":"default"}} -->
<div class="wp-block-group sg-times">
<!-- wp:heading {"level":3,"className":"sg-gh"} -->
<h3 class="wp-block-heading sg-gh"><?php echo esc_html( shirogane_college_t( 'td_gm' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:group {"className":"sg-time sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sg-time sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"sg-time__t"} -->
<p class="sg-time__t">07:45</p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"sg-time__b","layout":{"type":"default"}} -->
<div class="wp-block-group sg-time__b">
<!-- wp:heading {"level":3,"className":"sg-time__h"} -->
<h3 class="wp-block-heading sg-time__h"><?php echo esc_html( shirogane_college_t( 'day1_h' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-time__p"} -->
<p class="sg-time__p"><?php echo esc_html( shirogane_college_t( 'td1_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sg-chip"} -->
<p class="sg-chip"><?php echo esc_html( shirogane_college_t( 'day1_c' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sg-time sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sg-time sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"sg-time__t"} -->
<p class="sg-time__t">08:30</p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"sg-time__b","layout":{"type":"default"}} -->
<div class="wp-block-group sg-time__b">
<!-- wp:heading {"level":3,"className":"sg-time__h"} -->
<h3 class="wp-block-heading sg-time__h"><?php echo esc_html( shirogane_college_t( 'day2_h' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-time__p"} -->
<p class="sg-time__p"><?php echo esc_html( shirogane_college_t( 'td2_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sg-chip"} -->
<p class="sg-chip"><?php echo esc_html( shirogane_college_t( 'day2_c' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sg-time sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sg-time sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"sg-time__t"} -->
<p class="sg-time__t">10:00</p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"sg-time__b","layout":{"type":"default"}} -->
<div class="wp-block-group sg-time__b">
<!-- wp:heading {"level":3,"className":"sg-time__h"} -->
<h3 class="wp-block-heading sg-time__h"><?php echo esc_html( shirogane_college_t( 'day3_h' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-time__p"} -->
<p class="sg-time__p"><?php echo esc_html( shirogane_college_t( 'td3_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sg-chip"} -->
<p class="sg-chip"><?php echo esc_html( shirogane_college_t( 'day3_c' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sg-dayg sg-dayg--b","layout":{"type":"default"}} -->
<div class="wp-block-group sg-dayg sg-dayg--b">
<!-- wp:group {"className":"sg-dayg__ph","layout":{"type":"default"}} -->
<div class="wp-block-group sg-dayg__ph">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sg-dayph"} -->
<figure class="wp-block-image size-full sg-dayph"><img src="<?php echo shirogane_college_img( 'hero-ward-cat.webp' ); ?>" alt="<?php echo esc_attr( shirogane_college_t( 'alt_p02' ) ); ?>" loading="eager"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"className":"sg-cap"} -->
<p class="sg-cap"><?php echo esc_html( shirogane_college_t( 'td_cap2' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sg-times","layout":{"type":"default"}} -->
<div class="wp-block-group sg-times">
<!-- wp:heading {"level":3,"className":"sg-gh"} -->
<h3 class="wp-block-heading sg-gh"><?php echo esc_html( shirogane_college_t( 'td_gn' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:group {"className":"sg-time sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sg-time sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"sg-time__t"} -->
<p class="sg-time__t">12:00</p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"sg-time__b","layout":{"type":"default"}} -->
<div class="wp-block-group sg-time__b">
<!-- wp:heading {"level":3,"className":"sg-time__h"} -->
<h3 class="wp-block-heading sg-time__h"><?php echo esc_html( shirogane_college_t( 'td4_h' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-time__p"} -->
<p class="sg-time__p"><?php echo esc_html( shirogane_college_t( 'td4_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sg-chip"} -->
<p class="sg-chip"><?php echo esc_html( shirogane_college_t( 'td4_c' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sg-time sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sg-time sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"sg-time__t"} -->
<p class="sg-time__t">13:00</p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"sg-time__b","layout":{"type":"default"}} -->
<div class="wp-block-group sg-time__b">
<!-- wp:heading {"level":3,"className":"sg-time__h"} -->
<h3 class="wp-block-heading sg-time__h"><?php echo esc_html( shirogane_college_t( 'day4_h' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-time__p"} -->
<p class="sg-time__p"><?php echo esc_html( shirogane_college_t( 'td5_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sg-chip"} -->
<p class="sg-chip"><?php echo esc_html( shirogane_college_t( 'day4_c' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sg-dayg sg-dayg--b","layout":{"type":"default"}} -->
<div class="wp-block-group sg-dayg sg-dayg--b">
<!-- wp:group {"className":"sg-dayg__ph","layout":{"type":"default"}} -->
<div class="wp-block-group sg-dayg__ph">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sg-dayph"} -->
<figure class="wp-block-image size-full sg-dayph"><img src="<?php echo shirogane_college_img( 'day-theatre.webp' ); ?>" alt="<?php echo esc_attr( shirogane_college_t( 'alt_p05' ) ); ?>" loading="eager"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"className":"sg-cap"} -->
<p class="sg-cap"><?php echo esc_html( shirogane_college_t( 'cap_b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sg-times","layout":{"type":"default"}} -->
<div class="wp-block-group sg-times">
<!-- wp:heading {"level":3,"className":"sg-gh"} -->
<h3 class="wp-block-heading sg-gh"><?php echo esc_html( shirogane_college_t( 'td_ga' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:group {"className":"sg-time sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sg-time sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"sg-time__t"} -->
<p class="sg-time__t">15:00</p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"sg-time__b","layout":{"type":"default"}} -->
<div class="wp-block-group sg-time__b">
<!-- wp:heading {"level":3,"className":"sg-time__h"} -->
<h3 class="wp-block-heading sg-time__h"><?php echo esc_html( shirogane_college_t( 'day5_h' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-time__p"} -->
<p class="sg-time__p"><?php echo esc_html( shirogane_college_t( 'td6_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sg-chip"} -->
<p class="sg-chip"><?php echo esc_html( shirogane_college_t( 'day5_c' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sg-time sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sg-time sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"sg-time__t"} -->
<p class="sg-time__t">16:30</p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"sg-time__b","layout":{"type":"default"}} -->
<div class="wp-block-group sg-time__b">
<!-- wp:heading {"level":3,"className":"sg-time__h"} -->
<h3 class="wp-block-heading sg-time__h"><?php echo esc_html( shirogane_college_t( 'day6_h' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-time__p"} -->
<p class="sg-time__p"><?php echo esc_html( shirogane_college_t( 'td7_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sg-chip"} -->
<p class="sg-chip"><?php echo esc_html( shirogane_college_t( 'day6_c' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sg-time sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sg-time sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"sg-time__t"} -->
<p class="sg-time__t">17:00</p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"sg-time__b","layout":{"type":"default"}} -->
<div class="wp-block-group sg-time__b">
<!-- wp:heading {"level":3,"className":"sg-time__h"} -->
<h3 class="wp-block-heading sg-time__h"><?php echo esc_html( shirogane_college_t( 'day7_h' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-time__p"} -->
<p class="sg-time__p"><?php echo esc_html( shirogane_college_t( 'td8_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sg-chip"} -->
<p class="sg-chip"><?php echo esc_html( shirogane_college_t( 'day7_c' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
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
<!-- wp:group {"tagName":"section","anchor":"week","align":"full","className":"sg-sec sg-sec--week","layout":{"type":"default"}} -->
<section id="week" class="wp-block-group alignfull sg-sec sg-sec--week">
<!-- wp:group {"className":"sg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sg-wrap">
<!-- wp:group {"className":"sg-h5","layout":{"type":"default"}} -->
<div class="wp-block-group sg-h5">
<!-- wp:heading {"className":"sg-h5__t"} -->
<h2 class="wp-block-heading sg-h5__t"><?php echo esc_html( shirogane_college_t( 'td_wh' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-h5__s"} -->
<p class="sg-h5__s"><?php echo esc_html( shirogane_college_t( 'td_ws' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:table {"className":"sg-fees sg-week"} -->
<figure class="wp-block-table sg-fees sg-week"><table><thead><tr><th><?php echo esc_html( shirogane_college_t( 'td_th1' ) ); ?></th><th><?php echo esc_html( shirogane_college_t( 'td_th2' ) ); ?></th><th><?php echo esc_html( shirogane_college_t( 'td_th3' ) ); ?></th></tr></thead><tbody><tr><td><?php echo esc_html( shirogane_college_t( 'td_w1' ) ); ?></td><td><?php echo esc_html( shirogane_college_t( 'td_w1a' ) ); ?></td><td><?php echo esc_html( shirogane_college_t( 'td_w1b' ) ); ?></td></tr><tr><td><?php echo esc_html( shirogane_college_t( 'td_w2' ) ); ?></td><td><?php echo esc_html( shirogane_college_t( 'td_w2a' ) ); ?></td><td><?php echo esc_html( shirogane_college_t( 'td_w2b' ) ); ?></td></tr><tr><td><?php echo esc_html( shirogane_college_t( 'td_w3' ) ); ?></td><td><?php echo esc_html( shirogane_college_t( 'td_w3a' ) ); ?></td><td><?php echo esc_html( shirogane_college_t( 'td_w3b' ) ); ?></td></tr><tr><td><?php echo esc_html( shirogane_college_t( 'td_w4' ) ); ?></td><td><?php echo esc_html( shirogane_college_t( 'td_w4a' ) ); ?></td><td><?php echo esc_html( shirogane_college_t( 'td_w4b' ) ); ?></td></tr><tr><td><?php echo esc_html( shirogane_college_t( 'td_w5' ) ); ?></td><td><?php echo esc_html( shirogane_college_t( 'td_w5a' ) ); ?></td><td><?php echo esc_html( shirogane_college_t( 'td_w5b' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->
<!-- wp:paragraph {"className":"sg-note"} -->
<p class="sg-note"><?php echo esc_html( shirogane_college_t( 'td_wend' ) ); ?></p>
<!-- /wp:paragraph -->
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
<div class="sg-picks sp-stagger"><a class="sg-pick sp-reveal sp-reveal--up" href="/course/"><span class="sg-pick__ico" style="--sg-tile:#7B5A44"><svg class="sg-ico" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M6 3.5v6a4 4 0 0 0 8 0v-6"/><path d="M10 13.5v2a4 4 0 0 0 8 0v-2"/><circle cx="18" cy="11.5" r="2"/></svg></span><span class="sg-pick__t"><?php echo esc_html( shirogane_college_t( 'nx8' ) ); ?></span><svg class="sg-chev" width="8" height="14" viewBox="0 0 8 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M1 1l6 6-6 6"/></svg></a><a class="sg-pick sp-reveal sp-reveal--up" href="/visit/#ward-visit"><span class="sg-pick__ico" style="--sg-tile:#8E6E2A"><svg class="sg-ico" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M6 20.5v-17h12v17"/><path d="M4 20.5h16M14.5 12v1"/></svg></span><span class="sg-pick__t"><?php echo esc_html( shirogane_college_t( 'nx3' ) ); ?></span><svg class="sg-chev" width="8" height="14" viewBox="0 0 8 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M1 1l6 6-6 6"/></svg></a><a class="sg-pick sp-reveal sp-reveal--up" href="/admissions/#apply"><span class="sg-pick__ico" style="--sg-tile:#5C6B48"><svg class="sg-ico" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="4" y="5.5" width="16" height="14"/><path d="M4 10h16M8.5 3.5v4M15.5 3.5v4"/></svg></span><span class="sg-pick__t"><?php echo esc_html( shirogane_college_t( 'nx7' ) ); ?></span><svg class="sg-chev" width="8" height="14" viewBox="0 0 8 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M1 1l6 6-6 6"/></svg></a></div>
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
