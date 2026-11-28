<?php
/**
 * Title: Page: Treatment
 * Slug: taira-clinic/page-treatment
 * Categories: taira-clinic
 * Inserter: no
 * Viewport Width: 1440
 * Description: Page head, three stage plate cards for Measure, Retrain, Return, then the stages in long form and the home programme.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tc-pagehead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tc-pagehead">
<!-- wp:group {"className":"tc-wrap tc-pagehead__grid","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap tc-pagehead__grid">
<!-- wp:group {"className":"tc-pagehead__t","layout":{"type":"default"}} -->
<div class="wp-block-group tc-pagehead__t">
<!-- wp:paragraph {"className":"tc-crumb"} -->
<p class="tc-crumb"><a href="/"><?php echo esc_html( taira_clinic_t( 'crumb_home' ) ); ?></a> / <?php echo esc_html( taira_clinic_t( 'treatment_title' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"tc-h1 tc-h1--inner"} -->
<h1 class="wp-block-heading tc-h1 tc-h1--inner"><?php echo esc_html( taira_clinic_t( 'treatment_title' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tc-lead"} -->
<p class="tc-lead"><?php echo esc_html( taira_clinic_t( 'treatment_lead' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-pagehead__ph","layout":{"type":"default"}} -->
<div class="wp-block-group tc-pagehead__ph">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo taira_clinic_img( 'p02-steady-on-pad.webp' ); ?>" alt="<?php echo taira_clinic_a( 'alt_p02' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"stages","align":"full","className":"tc-sec tc-sec--page tc-sec--grid tc-band","layout":{"type":"default"}} -->
<section id="stages" class="wp-block-group alignfull tc-sec tc-sec--page tc-sec--grid tc-band">
<!-- wp:group {"className":"tc-wrap tc-secthead tc-secthead--page","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap tc-secthead tc-secthead--page">
<!-- wp:heading {"className":"tc-h2"} -->
<h2 class="wp-block-heading tc-h2"><?php echo esc_html( taira_clinic_t( 'mt_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tc-secthead__p"} -->
<p class="tc-secthead__p"><?php echo esc_html( taira_clinic_t( 'mt_intro' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-wrap tc-grid tc-grid--3 sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap tc-grid tc-grid--3 sp-reveal sp-reveal--up">
<!-- wp:group {"className":"tc-card","layout":{"type":"default"}} -->
<div class="wp-block-group tc-card">
<!-- wp:paragraph {"className":"tc-card__plate"} -->
<p class="tc-card__plate"><?php echo esc_html( taira_clinic_t( 'mt1_t' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-card__ph"} -->
<figure class="wp-block-image size-full tc-card__ph"><img src="<?php echo taira_clinic_img( 'p09-video-goggles.webp' ); ?>" alt="<?php echo taira_clinic_a( 'alt_p09' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"className":"tc-card__x"} -->
<p class="tc-card__x"><?php echo esc_html( taira_clinic_t( 'mt1_x' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-card","layout":{"type":"default"}} -->
<div class="wp-block-group tc-card">
<!-- wp:paragraph {"className":"tc-card__plate"} -->
<p class="tc-card__plate"><?php echo esc_html( taira_clinic_t( 'mt2_t' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-card__ph"} -->
<figure class="wp-block-image size-full tc-card__ph"><img src="<?php echo taira_clinic_img( 'p10-pad-eyes-closed.webp' ); ?>" alt="<?php echo taira_clinic_a( 'alt_p10' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"className":"tc-card__x"} -->
<p class="tc-card__x"><?php echo esc_html( taira_clinic_t( 'mt2_x' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-card","layout":{"type":"default"}} -->
<div class="wp-block-group tc-card">
<!-- wp:paragraph {"className":"tc-card__plate"} -->
<p class="tc-card__plate"><?php echo esc_html( taira_clinic_t( 'mt3_t' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-card__ph"} -->
<figure class="wp-block-image size-full tc-card__ph"><img src="<?php echo taira_clinic_img( 'p12-kerb-step.webp' ); ?>" alt="<?php echo taira_clinic_a( 'alt_p12' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"className":"tc-card__x"} -->
<p class="tc-card__x"><?php echo esc_html( taira_clinic_t( 'mt3_x' ) ); ?></p>
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
<h2 class="wp-block-heading tc-h3 tc-row__h"><?php echo esc_html( taira_clinic_t( 'treatment_s1_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"tc-row__b","layout":{"type":"default"}} -->
<div class="wp-block-group tc-row__b">
<!-- wp:paragraph {"className":"tc-body"} -->
<p class="tc-body"><?php echo esc_html( taira_clinic_t( 'treatment_s1_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-body"} -->
<p class="tc-body"><?php echo esc_html( taira_clinic_t( 'treatment_s1_p2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-body"} -->
<p class="tc-body"><?php echo esc_html( taira_clinic_t( 'treatment_s1_p3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-row sp-reveal sp-reveal--up">
<!-- wp:heading {"level":2,"className":"tc-h3 tc-row__h"} -->
<h2 class="wp-block-heading tc-h3 tc-row__h"><?php echo esc_html( taira_clinic_t( 'treatment_s2_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"tc-row__b","layout":{"type":"default"}} -->
<div class="wp-block-group tc-row__b">
<!-- wp:paragraph {"className":"tc-body"} -->
<p class="tc-body"><?php echo esc_html( taira_clinic_t( 'treatment_s2_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-body"} -->
<p class="tc-body"><?php echo esc_html( taira_clinic_t( 'treatment_s2_p2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-body"} -->
<p class="tc-body"><?php echo esc_html( taira_clinic_t( 'treatment_s2_p3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-row sp-reveal sp-reveal--up">
<!-- wp:heading {"level":2,"className":"tc-h3 tc-row__h"} -->
<h2 class="wp-block-heading tc-h3 tc-row__h"><?php echo esc_html( taira_clinic_t( 'treatment_s3_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"tc-row__b","layout":{"type":"default"}} -->
<div class="wp-block-group tc-row__b">
<!-- wp:paragraph {"className":"tc-body"} -->
<p class="tc-body"><?php echo esc_html( taira_clinic_t( 'treatment_s3_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-body"} -->
<p class="tc-body"><?php echo esc_html( taira_clinic_t( 'treatment_s3_p2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-body"} -->
<p class="tc-body"><?php echo esc_html( taira_clinic_t( 'treatment_s3_p3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-row sp-reveal sp-reveal--up">
<!-- wp:heading {"level":2,"className":"tc-h3 tc-row__h"} -->
<h2 class="wp-block-heading tc-h3 tc-row__h"><?php echo esc_html( taira_clinic_t( 'treatment_s4_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"tc-row__b","layout":{"type":"default"}} -->
<div class="wp-block-group tc-row__b">
<!-- wp:paragraph {"className":"tc-body"} -->
<p class="tc-body"><?php echo esc_html( taira_clinic_t( 'treatment_s4_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-body"} -->
<p class="tc-body"><?php echo esc_html( taira_clinic_t( 'treatment_s4_p2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-body"} -->
<p class="tc-body"><?php echo esc_html( taira_clinic_t( 'treatment_s4_p3' ) ); ?></p>
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
