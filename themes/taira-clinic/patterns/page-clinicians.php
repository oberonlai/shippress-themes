<?php
/**
 * Title: Page: Clinicians
 * Slug: taira-clinic/page-clinicians
 * Categories: taira-clinic
 * Inserter: no
 * Viewport Width: 1440
 * Description: Page head, seven plate cards with the person as the plate, then a row on who you see and for what.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tc-pagehead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tc-pagehead">
<!-- wp:group {"className":"tc-wrap tc-pagehead__grid","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap tc-pagehead__grid">
<!-- wp:group {"className":"tc-pagehead__t","layout":{"type":"default"}} -->
<div class="wp-block-group tc-pagehead__t">
<!-- wp:paragraph {"className":"tc-crumb"} -->
<p class="tc-crumb"><a href="/"><?php echo esc_html( taira_clinic_t( 'crumb_home' ) ); ?></a> / <?php echo esc_html( taira_clinic_t( 'clinicians_title' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"tc-h1 tc-h1--inner"} -->
<h1 class="wp-block-heading tc-h1 tc-h1--inner"><?php echo esc_html( taira_clinic_t( 'clinicians_title' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tc-lead"} -->
<p class="tc-lead"><?php echo esc_html( taira_clinic_t( 'clinicians_lead' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-pagehead__ph","layout":{"type":"default"}} -->
<div class="wp-block-group tc-pagehead__ph">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo taira_clinic_img( 'p15-clinicians-notes.webp' ); ?>" alt="<?php echo taira_clinic_a( 'alt_p15' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"team","align":"full","className":"tc-sec tc-sec--page tc-sec--grid tc-band","layout":{"type":"default"}} -->
<section id="team" class="wp-block-group alignfull tc-sec tc-sec--page tc-sec--grid tc-band">
<!-- wp:group {"className":"tc-wrap tc-secthead tc-secthead--page","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap tc-secthead tc-secthead--page">
<!-- wp:heading {"className":"tc-h2"} -->
<h2 class="wp-block-heading tc-h2"><?php echo esc_html( taira_clinic_t( 'pp_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tc-secthead__p"} -->
<p class="tc-secthead__p"><?php echo esc_html( taira_clinic_t( 'pp_intro' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-wrap tc-grid tc-grid--3 sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap tc-grid tc-grid--3 sp-reveal sp-reveal--up">
<!-- wp:group {"className":"tc-card tc-card--np","layout":{"type":"default"}} -->
<div class="wp-block-group tc-card tc-card--np">
<!-- wp:paragraph {"className":"tc-card__plate"} -->
<p class="tc-card__plate"><?php echo esc_html( taira_clinic_t( 'pp1_t' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-card__x"} -->
<p class="tc-card__x"><?php echo esc_html( taira_clinic_t( 'pp1_x' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-card tc-card--np","layout":{"type":"default"}} -->
<div class="wp-block-group tc-card tc-card--np">
<!-- wp:paragraph {"className":"tc-card__plate"} -->
<p class="tc-card__plate"><?php echo esc_html( taira_clinic_t( 'pp2_t' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-card__x"} -->
<p class="tc-card__x"><?php echo esc_html( taira_clinic_t( 'pp2_x' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-card tc-card--np","layout":{"type":"default"}} -->
<div class="wp-block-group tc-card tc-card--np">
<!-- wp:paragraph {"className":"tc-card__plate"} -->
<p class="tc-card__plate"><?php echo esc_html( taira_clinic_t( 'pp3_t' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-card__x"} -->
<p class="tc-card__x"><?php echo esc_html( taira_clinic_t( 'pp3_x' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-card tc-card--np","layout":{"type":"default"}} -->
<div class="wp-block-group tc-card tc-card--np">
<!-- wp:paragraph {"className":"tc-card__plate"} -->
<p class="tc-card__plate"><?php echo esc_html( taira_clinic_t( 'pp4_t' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-card__x"} -->
<p class="tc-card__x"><?php echo esc_html( taira_clinic_t( 'pp4_x' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-card tc-card--np","layout":{"type":"default"}} -->
<div class="wp-block-group tc-card tc-card--np">
<!-- wp:paragraph {"className":"tc-card__plate"} -->
<p class="tc-card__plate"><?php echo esc_html( taira_clinic_t( 'pp5_t' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-card__x"} -->
<p class="tc-card__x"><?php echo esc_html( taira_clinic_t( 'pp5_x' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-card tc-card--np","layout":{"type":"default"}} -->
<div class="wp-block-group tc-card tc-card--np">
<!-- wp:paragraph {"className":"tc-card__plate"} -->
<p class="tc-card__plate"><?php echo esc_html( taira_clinic_t( 'pp6_t' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-card__x"} -->
<p class="tc-card__x"><?php echo esc_html( taira_clinic_t( 'pp6_x' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-card tc-card--np","layout":{"type":"default"}} -->
<div class="wp-block-group tc-card tc-card--np">
<!-- wp:paragraph {"className":"tc-card__plate"} -->
<p class="tc-card__plate"><?php echo esc_html( taira_clinic_t( 'pp7_t' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-card__x"} -->
<p class="tc-card__x"><?php echo esc_html( taira_clinic_t( 'pp7_x' ) ); ?></p>
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
<h2 class="wp-block-heading tc-h3 tc-row__h"><?php echo esc_html( taira_clinic_t( 'clinicians_s2_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"tc-row__b","layout":{"type":"default"}} -->
<div class="wp-block-group tc-row__b">
<!-- wp:paragraph {"className":"tc-body"} -->
<p class="tc-body"><?php echo esc_html( taira_clinic_t( 'clinicians_s2_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-body"} -->
<p class="tc-body"><?php echo esc_html( taira_clinic_t( 'clinicians_s2_p2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-body"} -->
<p class="tc-body"><?php echo esc_html( taira_clinic_t( 'clinicians_s2_p3' ) ); ?></p>
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
