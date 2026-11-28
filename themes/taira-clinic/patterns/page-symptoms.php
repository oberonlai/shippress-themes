<?php
/**
 * Title: Page: Symptoms we see
 * Slug: taira-clinic/page-symptoms
 * Categories: taira-clinic
 * Inserter: no
 * Viewport Width: 1440
 * Description: Page head with the docked finder box, a grid of eight plate cards, hairline rows and an emergency note.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tc-pagehead tc-pagehead--f","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tc-pagehead tc-pagehead--f">
<!-- wp:group {"className":"tc-wrap tc-pagehead__grid","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap tc-pagehead__grid">
<!-- wp:group {"className":"tc-pagehead__t","layout":{"type":"default"}} -->
<div class="wp-block-group tc-pagehead__t">
<!-- wp:paragraph {"className":"tc-crumb"} -->
<p class="tc-crumb"><a href="/"><?php echo esc_html( taira_clinic_t( 'crumb_home' ) ); ?></a> / <?php echo esc_html( taira_clinic_t( 'symptoms_title' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"tc-h1 tc-h1--inner"} -->
<h1 class="wp-block-heading tc-h1 tc-h1--inner"><?php echo esc_html( taira_clinic_t( 'symptoms_title' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tc-lead"} -->
<p class="tc-lead"><?php echo esc_html( taira_clinic_t( 'symptoms_lead' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-pagehead__ph tc-pagehead__ph--f","layout":{"type":"default"}} -->
<div class="wp-block-group tc-pagehead__ph tc-pagehead__ph--f">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo taira_clinic_img( 'p08-corridor-handrail.webp' ); ?>" alt="<?php echo taira_clinic_a( 'alt_p08' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:html -->
<nav class="tc-finder" aria-label="<?php echo taira_clinic_a( 'finder_label' ); ?>"><div class="tc-finder__in"><a class="tc-finder__row" href="#patterns"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><circle cx="8.5" cy="8.5" r="5.5"/><path d="M13 13l5 5"/></svg><span><?php echo esc_html( taira_clinic_t( 'finder_symptom' ) ); ?></span><svg width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M2 8h11M9 4l4 4-4 4"/></svg></a><a class="tc-finder__row" href="/assessment/"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><circle cx="8.5" cy="8.5" r="5.5"/><path d="M13 13l5 5"/></svg><span><?php echo esc_html( taira_clinic_t( 'finder_test' ) ); ?></span><svg width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M2 8h11M9 4l4 4-4 4"/></svg></a></div></nav>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"patterns","align":"full","className":"tc-sec tc-sec--page tc-sec--grid","layout":{"type":"default"}} -->
<section id="patterns" class="wp-block-group alignfull tc-sec tc-sec--page tc-sec--grid">
<!-- wp:group {"className":"tc-wrap tc-secthead tc-secthead--page","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap tc-secthead tc-secthead--page">
<!-- wp:heading {"className":"tc-h2"} -->
<h2 class="wp-block-heading tc-h2"><?php echo esc_html( taira_clinic_t( 'sx_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tc-secthead__p"} -->
<p class="tc-secthead__p"><?php echo esc_html( taira_clinic_t( 'sx_intro' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-wrap tc-grid tc-grid--3 sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap tc-grid tc-grid--3 sp-reveal sp-reveal--up">
<!-- wp:group {"className":"tc-card","layout":{"type":"default"}} -->
<div class="wp-block-group tc-card">
<!-- wp:paragraph {"className":"tc-card__plate"} -->
<p class="tc-card__plate"><?php echo esc_html( taira_clinic_t( 'sx1_t' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-card__ph"} -->
<figure class="wp-block-image size-full tc-card__ph"><img src="<?php echo taira_clinic_img( 'p03-edge-of-bed.webp' ); ?>" alt="<?php echo taira_clinic_a( 'alt_p03' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"className":"tc-card__x"} -->
<p class="tc-card__x"><?php echo esc_html( taira_clinic_t( 'sx1_x' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-card","layout":{"type":"default"}} -->
<div class="wp-block-group tc-card">
<!-- wp:paragraph {"className":"tc-card__plate"} -->
<p class="tc-card__plate"><?php echo esc_html( taira_clinic_t( 'sx2_t' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-card__ph"} -->
<figure class="wp-block-image size-full tc-card__ph"><img src="<?php echo taira_clinic_img( 'p09-video-goggles.webp' ); ?>" alt="<?php echo taira_clinic_a( 'alt_p09' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"className":"tc-card__x"} -->
<p class="tc-card__x"><?php echo esc_html( taira_clinic_t( 'sx2_x' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-card","layout":{"type":"default"}} -->
<div class="wp-block-group tc-card">
<!-- wp:paragraph {"className":"tc-card__plate"} -->
<p class="tc-card__plate"><?php echo esc_html( taira_clinic_t( 'sx3_t' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-card__ph"} -->
<figure class="wp-block-image size-full tc-card__ph"><img src="<?php echo taira_clinic_img( 'p11-walking-turning-head.webp' ); ?>" alt="<?php echo taira_clinic_a( 'alt_p11' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"className":"tc-card__x"} -->
<p class="tc-card__x"><?php echo esc_html( taira_clinic_t( 'sx3_x' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-card","layout":{"type":"default"}} -->
<div class="wp-block-group tc-card">
<!-- wp:paragraph {"className":"tc-card__plate"} -->
<p class="tc-card__plate"><?php echo esc_html( taira_clinic_t( 'sx4_t' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-card__ph"} -->
<figure class="wp-block-image size-full tc-card__ph"><img src="<?php echo taira_clinic_img( 'p04-station-concourse.webp' ); ?>" alt="<?php echo taira_clinic_a( 'alt_p04' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"className":"tc-card__x"} -->
<p class="tc-card__x"><?php echo esc_html( taira_clinic_t( 'sx4_x' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-card","layout":{"type":"default"}} -->
<div class="wp-block-group tc-card">
<!-- wp:paragraph {"className":"tc-card__plate"} -->
<p class="tc-card__plate"><?php echo esc_html( taira_clinic_t( 'sx5_t' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-card__ph"} -->
<figure class="wp-block-image size-full tc-card__ph"><img src="<?php echo taira_clinic_img( 'p05-cyclist-check.webp' ); ?>" alt="<?php echo taira_clinic_a( 'alt_p05' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"className":"tc-card__x"} -->
<p class="tc-card__x"><?php echo esc_html( taira_clinic_t( 'sx5_x' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-card","layout":{"type":"default"}} -->
<div class="wp-block-group tc-card">
<!-- wp:paragraph {"className":"tc-card__plate"} -->
<p class="tc-card__plate"><?php echo esc_html( taira_clinic_t( 'sx6_t' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-card__ph"} -->
<figure class="wp-block-image size-full tc-card__ph"><img src="<?php echo taira_clinic_img( 'p10-pad-eyes-closed.webp' ); ?>" alt="<?php echo taira_clinic_a( 'alt_p10' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"className":"tc-card__x"} -->
<p class="tc-card__x"><?php echo esc_html( taira_clinic_t( 'sx6_x' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-card","layout":{"type":"default"}} -->
<div class="wp-block-group tc-card">
<!-- wp:paragraph {"className":"tc-card__plate"} -->
<p class="tc-card__plate"><?php echo esc_html( taira_clinic_t( 'sx7_t' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-card__ph"} -->
<figure class="wp-block-image size-full tc-card__ph"><img src="<?php echo taira_clinic_img( 'p06-rising-with-stick.webp' ); ?>" alt="<?php echo taira_clinic_a( 'alt_p06' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"className":"tc-card__x"} -->
<p class="tc-card__x"><?php echo esc_html( taira_clinic_t( 'sx7_x' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-card","layout":{"type":"default"}} -->
<div class="wp-block-group tc-card">
<!-- wp:paragraph {"className":"tc-card__plate"} -->
<p class="tc-card__plate"><?php echo esc_html( taira_clinic_t( 'sx8_t' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-card__ph"} -->
<figure class="wp-block-image size-full tc-card__ph"><img src="<?php echo taira_clinic_img( 'p07-supermarket-aisle.webp' ); ?>" alt="<?php echo taira_clinic_a( 'alt_p07' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"className":"tc-card__x"} -->
<p class="tc-card__x"><?php echo esc_html( taira_clinic_t( 'sx8_x' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"tc-sec tc-sec--page","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tc-sec tc-sec--page">
<!-- wp:group {"className":"tc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap">
<!-- wp:group {"className":"tc-rows","layout":{"type":"default"}} -->
<div class="wp-block-group tc-rows">
<!-- wp:group {"className":"tc-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-row sp-reveal sp-reveal--up">
<!-- wp:heading {"level":2,"className":"tc-h3 tc-row__h"} -->
<h2 class="wp-block-heading tc-h3 tc-row__h"><?php echo esc_html( taira_clinic_t( 'symptoms_s1_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"tc-row__b","layout":{"type":"default"}} -->
<div class="wp-block-group tc-row__b">
<!-- wp:paragraph {"className":"tc-body"} -->
<p class="tc-body"><?php echo esc_html( taira_clinic_t( 'symptoms_s1_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-body"} -->
<p class="tc-body"><?php echo esc_html( taira_clinic_t( 'symptoms_s1_p2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-body"} -->
<p class="tc-body"><?php echo esc_html( taira_clinic_t( 'symptoms_s1_p3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-row sp-reveal sp-reveal--up">
<!-- wp:heading {"level":2,"className":"tc-h3 tc-row__h"} -->
<h2 class="wp-block-heading tc-h3 tc-row__h"><?php echo esc_html( taira_clinic_t( 'symptoms_s2_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"tc-row__b","layout":{"type":"default"}} -->
<div class="wp-block-group tc-row__b">
<!-- wp:paragraph {"className":"tc-body"} -->
<p class="tc-body"><?php echo esc_html( taira_clinic_t( 'symptoms_s2_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-body"} -->
<p class="tc-body"><?php echo esc_html( taira_clinic_t( 'symptoms_s2_p2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-body"} -->
<p class="tc-body"><?php echo esc_html( taira_clinic_t( 'symptoms_s2_p3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-row sp-reveal sp-reveal--up">
<!-- wp:heading {"level":2,"className":"tc-h3 tc-row__h"} -->
<h2 class="wp-block-heading tc-h3 tc-row__h"><?php echo esc_html( taira_clinic_t( 'symptoms_s3_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"tc-row__b","layout":{"type":"default"}} -->
<div class="wp-block-group tc-row__b">
<!-- wp:paragraph {"className":"tc-body"} -->
<p class="tc-body"><?php echo esc_html( taira_clinic_t( 'symptoms_s3_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-body"} -->
<p class="tc-body"><?php echo esc_html( taira_clinic_t( 'symptoms_s3_p2' ) ); ?></p>
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
<!-- wp:group {"tagName":"section","align":"full","className":"tc-sec tc-sec--page tc-sec--alert","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tc-sec tc-sec--page tc-sec--alert">
<!-- wp:group {"className":"tc-wrap tc-wrap--narrow","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap tc-wrap--narrow">
<!-- wp:group {"className":"tc-alert","layout":{"type":"default"}} -->
<div class="wp-block-group tc-alert">
<!-- wp:heading {"level":2,"className":"tc-h3"} -->
<h2 class="wp-block-heading tc-h3"><?php echo esc_html( taira_clinic_t( 'symptoms_s4_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tc-body"} -->
<p class="tc-body"><?php echo esc_html( taira_clinic_t( 'symptoms_s4_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-body"} -->
<p class="tc-body"><?php echo esc_html( taira_clinic_t( 'symptoms_s4_p2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-body"} -->
<p class="tc-body"><?php echo esc_html( taira_clinic_t( 'symptoms_s4_p3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
