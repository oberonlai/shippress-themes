<?php
/**
 * Title: Page: the survey
 * Slug: fuchi-glazing/page-survey
 * Categories: fuchi-glazing
 * Inserter: no
 * Viewport Width: 1440
 * Description: Survey page: slanted head, readings plate, three things to have ready, the visit minute by minute and the written quote.
 */
?>
<!-- wp:group {"align":"full","className":"fg-crumbrow","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull fg-crumbrow">
<!-- wp:html -->
<p class="fg-crumb"><a href="/"><?php echo esc_html( fuchi_glazing_t( 'crumb_home' ) ); ?></a><svg width="8" height="12" viewBox="0 0 8 12" fill="none" stroke="currentColor" aria-hidden="true" focusable="false"><path d="M2 1l5 5-5 5"/></svg><span aria-current="page"><?php echo esc_html( fuchi_glazing_t( 'crumb_survey' ) ); ?></span></p>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"align":"full","className":"fg-phead","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull fg-phead">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"fg-phead__photo sp-parallax"} -->
<figure class="wp-block-image size-full fg-phead__photo sp-parallax"><img src="<?php echo fuchi_glazing_img( 'check-measure.webp' ); ?>" alt="<?php echo fuchi_glazing_a( 'alt_p12' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:html -->
<div class="fg-phead__frame" aria-hidden="true"><svg class="fg-phead__line" focusable="false"><rect x="1" y="1"/></svg></div>
<!-- /wp:html -->
<!-- wp:group {"className":"fg-phead__panel","layout":{"type":"default"}} -->
<div class="wp-block-group fg-phead__panel">
<!-- wp:heading {"level":1,"className":"fg-phead__h1"} -->
<h1 class="wp-block-heading fg-phead__h1"><?php echo esc_html( fuchi_glazing_t( 'sv2_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"fg-phead__lead"} -->
<p class="fg-phead__lead"><?php echo esc_html( fuchi_glazing_t( 'sv2_lead' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"fg-sec fg-sec--page fg-sec--intro","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull fg-sec fg-sec--page fg-sec--intro">
<!-- wp:group {"className":"fg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group fg-wrap">
<!-- wp:paragraph {"className":"fg-lead fg-lead--c"} -->
<p class="fg-lead fg-lead--c"><?php echo esc_html( fuchi_glazing_t( 'sv2_intro' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"fg-center","layout":{"type":"default"}} -->
<div class="wp-block-group fg-center">
<!-- wp:html -->
<a class="fg-cta fg-cta--lg" href="/contact/"><span><?php echo esc_html( fuchi_glazing_t( 'cta_book' ) ); ?></span><svg class="fg-cta__arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="8" cy="8" r="7.4"/><path d="M4.8 8h6M8.6 5.6 11 8l-2.4 2.4"/></svg></a>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"fg-sec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull fg-sec">
<!-- wp:group {"className":"fg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group fg-wrap">
<!-- wp:heading {"textAlign":"center","className":"fg-h2"} -->
<h2 class="wp-block-heading has-text-align-center fg-h2"><?php echo esc_html( fuchi_glazing_t( 'survey_h1' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"fg-plate sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group fg-plate sp-reveal sp-reveal--up">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","aspectRatio":"4/5","scale":"cover","className":"fg-plate__img"} -->
<figure class="wp-block-image size-full fg-plate__img"><img src="<?php echo fuchi_glazing_img( 'survey-laser.webp' ); ?>" alt="<?php echo fuchi_glazing_a( 'alt_p02' ); ?>" style="aspect-ratio:4/5;object-fit:cover"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"fg-plate__body","layout":{"type":"default"}} -->
<div class="wp-block-group fg-plate__body">
<!-- wp:html -->
<ul class="fg-readings"><li><span class="fg-readings__k"><?php echo esc_html( fuchi_glazing_t( 'sv_r1' ) ); ?></span><span class="fg-readings__v"><?php echo esc_html( fuchi_glazing_t( 'sv_r1v' ) ); ?></span></li><li><span class="fg-readings__k"><?php echo esc_html( fuchi_glazing_t( 'sv_r2' ) ); ?></span><span class="fg-readings__v"><?php echo esc_html( fuchi_glazing_t( 'sv_r2v' ) ); ?></span></li><li><span class="fg-readings__k"><?php echo esc_html( fuchi_glazing_t( 'sv_r3' ) ); ?></span><span class="fg-readings__v"><?php echo esc_html( fuchi_glazing_t( 'sv_r3v' ) ); ?></span></li><li><span class="fg-readings__k"><?php echo esc_html( fuchi_glazing_t( 'sv_r4' ) ); ?></span><span class="fg-readings__v"><?php echo esc_html( fuchi_glazing_t( 'sv_r4v' ) ); ?></span></li><li><span class="fg-readings__k"><?php echo esc_html( fuchi_glazing_t( 'sv_r5' ) ); ?></span><span class="fg-readings__v"><?php echo esc_html( fuchi_glazing_t( 'sv_r5v' ) ); ?></span></li><li><span class="fg-readings__k"><?php echo esc_html( fuchi_glazing_t( 'sv_r6' ) ); ?></span><span class="fg-readings__v"><?php echo esc_html( fuchi_glazing_t( 'sv_r6v' ) ); ?></span></li></ul>
<!-- /wp:html -->
<!-- wp:paragraph {"className":"fg-body"} -->
<p class="fg-body"><?php echo esc_html( fuchi_glazing_t( 'survey_s1_p1' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"fg-sec fg-sec--replace","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull fg-sec fg-sec--replace">
<!-- wp:group {"className":"fg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group fg-wrap">
<!-- wp:heading {"textAlign":"center","className":"fg-h2"} -->
<h2 class="wp-block-heading has-text-align-center fg-h2"><?php echo esc_html( fuchi_glazing_t( 'survey_h2' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"fg-prose fg-prose--wide","layout":{"type":"default"}} -->
<div class="wp-block-group fg-prose fg-prose--wide">
<!-- wp:paragraph {"className":"fg-body"} -->
<p class="fg-body"><?php echo esc_html( fuchi_glazing_t( 'survey_s2_p1' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"fg-ask sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group fg-ask sp-reveal sp-reveal--up">
<!-- wp:group {"className":"fg-ask__col","layout":{"type":"default"}} -->
<div class="wp-block-group fg-ask__col">
<!-- wp:paragraph {"className":"fg-ask__t"} -->
<p class="fg-ask__t"><?php echo esc_html( fuchi_glazing_t( 'rd_t1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fg-ask__x"} -->
<p class="fg-ask__x"><?php echo esc_html( fuchi_glazing_t( 'rd_x1' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group --><!-- wp:group {"className":"fg-ask__col","layout":{"type":"default"}} -->
<div class="wp-block-group fg-ask__col">
<!-- wp:paragraph {"className":"fg-ask__t"} -->
<p class="fg-ask__t"><?php echo esc_html( fuchi_glazing_t( 'rd_t2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fg-ask__x"} -->
<p class="fg-ask__x"><?php echo esc_html( fuchi_glazing_t( 'rd_x2' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group --><!-- wp:group {"className":"fg-ask__col","layout":{"type":"default"}} -->
<div class="wp-block-group fg-ask__col">
<!-- wp:paragraph {"className":"fg-ask__t"} -->
<p class="fg-ask__t"><?php echo esc_html( fuchi_glazing_t( 'rd_t3' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fg-ask__x"} -->
<p class="fg-ask__x"><?php echo esc_html( fuchi_glazing_t( 'rd_x3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"fg-sec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull fg-sec">
<!-- wp:group {"className":"fg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group fg-wrap">
<!-- wp:heading {"textAlign":"center","className":"fg-h2"} -->
<h2 class="wp-block-heading has-text-align-center fg-h2"><?php echo esc_html( fuchi_glazing_t( 'survey_h3' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"fg-body"} -->
<p class="fg-body"><?php echo esc_html( fuchi_glazing_t( 'survey_s3_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"fg-ledger sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group fg-ledger sp-stagger">
<!-- wp:group {"className":"fg-row sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group fg-row sp-reveal sp-reveal--wipe">
<!-- wp:paragraph {"className":"fg-row__d"} -->
<p class="fg-row__d"><?php echo esc_html( fuchi_glazing_t( 'mn_d1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fg-row__c"} -->
<p class="fg-row__c"><?php echo esc_html( fuchi_glazing_t( 'mn_c1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"fg-row__b","layout":{"type":"default"}} -->
<div class="wp-block-group fg-row__b">
<!-- wp:paragraph {"className":"fg-row__t"} -->
<p class="fg-row__t"><?php echo esc_html( fuchi_glazing_t( 'mn_t1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fg-row__x"} -->
<p class="fg-row__x"><?php echo esc_html( fuchi_glazing_t( 'mn_x1' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"fg-row sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group fg-row sp-reveal sp-reveal--wipe">
<!-- wp:paragraph {"className":"fg-row__d"} -->
<p class="fg-row__d"><?php echo esc_html( fuchi_glazing_t( 'mn_d2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fg-row__c"} -->
<p class="fg-row__c"><?php echo esc_html( fuchi_glazing_t( 'mn_c2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"fg-row__b","layout":{"type":"default"}} -->
<div class="wp-block-group fg-row__b">
<!-- wp:paragraph {"className":"fg-row__t"} -->
<p class="fg-row__t"><?php echo esc_html( fuchi_glazing_t( 'mn_t2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fg-row__x"} -->
<p class="fg-row__x"><?php echo esc_html( fuchi_glazing_t( 'mn_x2' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"fg-row sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group fg-row sp-reveal sp-reveal--wipe">
<!-- wp:paragraph {"className":"fg-row__d"} -->
<p class="fg-row__d"><?php echo esc_html( fuchi_glazing_t( 'mn_d3' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fg-row__c"} -->
<p class="fg-row__c"><?php echo esc_html( fuchi_glazing_t( 'mn_c3' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"fg-row__b","layout":{"type":"default"}} -->
<div class="wp-block-group fg-row__b">
<!-- wp:paragraph {"className":"fg-row__t"} -->
<p class="fg-row__t"><?php echo esc_html( fuchi_glazing_t( 'mn_t3' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fg-row__x"} -->
<p class="fg-row__x"><?php echo esc_html( fuchi_glazing_t( 'mn_x3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"fg-row sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group fg-row sp-reveal sp-reveal--wipe">
<!-- wp:paragraph {"className":"fg-row__d"} -->
<p class="fg-row__d"><?php echo esc_html( fuchi_glazing_t( 'mn_d4' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fg-row__c"} -->
<p class="fg-row__c"><?php echo esc_html( fuchi_glazing_t( 'mn_c4' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"fg-row__b","layout":{"type":"default"}} -->
<div class="wp-block-group fg-row__b">
<!-- wp:paragraph {"className":"fg-row__t"} -->
<p class="fg-row__t"><?php echo esc_html( fuchi_glazing_t( 'mn_t4' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fg-row__x"} -->
<p class="fg-row__x"><?php echo esc_html( fuchi_glazing_t( 'mn_x4' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"fg-row sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group fg-row sp-reveal sp-reveal--wipe">
<!-- wp:paragraph {"className":"fg-row__d"} -->
<p class="fg-row__d"><?php echo esc_html( fuchi_glazing_t( 'mn_d5' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fg-row__c"} -->
<p class="fg-row__c"><?php echo esc_html( fuchi_glazing_t( 'mn_c5' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"fg-row__b","layout":{"type":"default"}} -->
<div class="wp-block-group fg-row__b">
<!-- wp:paragraph {"className":"fg-row__t"} -->
<p class="fg-row__t"><?php echo esc_html( fuchi_glazing_t( 'mn_t5' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fg-row__x"} -->
<p class="fg-row__x"><?php echo esc_html( fuchi_glazing_t( 'mn_x5' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"fg-row sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group fg-row sp-reveal sp-reveal--wipe">
<!-- wp:paragraph {"className":"fg-row__d"} -->
<p class="fg-row__d"><?php echo esc_html( fuchi_glazing_t( 'mn_d6' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fg-row__c"} -->
<p class="fg-row__c"><?php echo esc_html( fuchi_glazing_t( 'mn_c6' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"fg-row__b","layout":{"type":"default"}} -->
<div class="wp-block-group fg-row__b">
<!-- wp:paragraph {"className":"fg-row__t"} -->
<p class="fg-row__t"><?php echo esc_html( fuchi_glazing_t( 'mn_t6' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fg-row__x"} -->
<p class="fg-row__x"><?php echo esc_html( fuchi_glazing_t( 'mn_x6' ) ); ?></p>
<!-- /wp:paragraph -->
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
<!-- wp:group {"tagName":"section","align":"full","className":"fg-sec fg-sec--page","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull fg-sec fg-sec--page">
<!-- wp:group {"className":"fg-wrap fg-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group fg-wrap fg-wrap--c">
<!-- wp:heading {"textAlign":"center","className":"fg-h2"} -->
<h2 class="wp-block-heading has-text-align-center fg-h2"><?php echo esc_html( fuchi_glazing_t( 'survey_h4' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"fg-body"} -->
<p class="fg-body"><?php echo esc_html( fuchi_glazing_t( 'survey_s4_p1' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"fg-sec fg-sec--quote fg-sec--foot","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull fg-sec fg-sec--quote fg-sec--foot">
<!-- wp:group {"className":"fg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group fg-wrap">
<!-- wp:paragraph {"className":"fg-lead"} -->
<p class="fg-lead"><?php echo esc_html( fuchi_glazing_t( 'foot_line' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"fg-center","layout":{"type":"default"}} -->
<div class="wp-block-group fg-center">
<!-- wp:html -->
<a class="fg-cta fg-cta--lg" href="/contact/"><span><?php echo esc_html( fuchi_glazing_t( 'cta_book' ) ); ?></span><svg class="fg-cta__arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="8" cy="8" r="7.4"/><path d="M4.8 8h6M8.6 5.6 11 8l-2.4 2.4"/></svg></a>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
