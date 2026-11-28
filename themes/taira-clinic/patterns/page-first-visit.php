<?php
/**
 * Title: Page: Your first visit
 * Slug: taira-clinic/page-first-visit
 * Categories: taira-clinic
 * Inserter: no
 * Viewport Width: 1440
 * Description: Page head, the five-stage patient path as slate title bars with text, then getting here beside a photograph.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tc-pagehead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tc-pagehead">
<!-- wp:group {"className":"tc-wrap tc-pagehead__grid","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap tc-pagehead__grid">
<!-- wp:group {"className":"tc-pagehead__t","layout":{"type":"default"}} -->
<div class="wp-block-group tc-pagehead__t">
<!-- wp:paragraph {"className":"tc-crumb"} -->
<p class="tc-crumb"><a href="/"><?php echo esc_html( taira_clinic_t( 'crumb_home' ) ); ?></a> / <?php echo esc_html( taira_clinic_t( 'first_visit_title' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"tc-h1 tc-h1--inner"} -->
<h1 class="wp-block-heading tc-h1 tc-h1--inner"><?php echo esc_html( taira_clinic_t( 'first_visit_title' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tc-lead"} -->
<p class="tc-lead"><?php echo esc_html( taira_clinic_t( 'first_visit_lead' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-pagehead__ph","layout":{"type":"default"}} -->
<div class="wp-block-group tc-pagehead__ph">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo taira_clinic_img( 'p13-clinic-entrance.webp' ); ?>" alt="<?php echo taira_clinic_a( 'alt_p13' ); ?>"/></figure>
<!-- /wp:image -->
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
<!-- wp:group {"className":"tc-stage sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-stage sp-reveal sp-reveal--up">
<!-- wp:heading {"level":2,"className":"tc-bar tc-bar--l"} -->
<h2 class="wp-block-heading tc-bar tc-bar--l"><span class="tc-bar__n">1</span> <?php echo esc_html( taira_clinic_t( 'fv1_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tc-body"} -->
<p class="tc-body"><?php echo esc_html( taira_clinic_t( 'fv1_p1' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-stage sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-stage sp-reveal sp-reveal--up">
<!-- wp:heading {"level":2,"className":"tc-bar tc-bar--l"} -->
<h2 class="wp-block-heading tc-bar tc-bar--l"><span class="tc-bar__n">2</span> <?php echo esc_html( taira_clinic_t( 'fv2_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tc-body"} -->
<p class="tc-body"><?php echo esc_html( taira_clinic_t( 'fv2_p1' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-stage sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-stage sp-reveal sp-reveal--up">
<!-- wp:heading {"level":2,"className":"tc-bar tc-bar--l"} -->
<h2 class="wp-block-heading tc-bar tc-bar--l"><span class="tc-bar__n">3</span> <?php echo esc_html( taira_clinic_t( 'fv3_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tc-body"} -->
<p class="tc-body"><?php echo esc_html( taira_clinic_t( 'fv3_p1' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-stage sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-stage sp-reveal sp-reveal--up">
<!-- wp:heading {"level":2,"className":"tc-bar tc-bar--l"} -->
<h2 class="wp-block-heading tc-bar tc-bar--l"><span class="tc-bar__n">4</span> <?php echo esc_html( taira_clinic_t( 'fv4_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tc-body"} -->
<p class="tc-body"><?php echo esc_html( taira_clinic_t( 'fv4_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-body"} -->
<p class="tc-body"><?php echo esc_html( taira_clinic_t( 'fv4_p2' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-stage sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-stage sp-reveal sp-reveal--up">
<!-- wp:heading {"level":2,"className":"tc-bar tc-bar--l"} -->
<h2 class="wp-block-heading tc-bar tc-bar--l"><span class="tc-bar__n">5</span> <?php echo esc_html( taira_clinic_t( 'fv5_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tc-body"} -->
<p class="tc-body"><?php echo esc_html( taira_clinic_t( 'fv5_p1' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"tc-sec tc-sec--page tc-band","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tc-sec tc-sec--page tc-band">
<!-- wp:group {"className":"tc-wrap tc-split tc-split--visit","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap tc-split tc-split--visit">
<!-- wp:group {"className":"tc-split__a","layout":{"type":"default"}} -->
<div class="wp-block-group tc-split__a">
<!-- wp:heading {"level":2,"className":"tc-h3"} -->
<h2 class="wp-block-heading tc-h3"><?php echo esc_html( taira_clinic_t( 'fv_get_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tc-body"} -->
<p class="tc-body"><?php echo esc_html( taira_clinic_t( 'fv_get_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-body"} -->
<p class="tc-body"><?php echo esc_html( taira_clinic_t( 'fv_get_p2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-body"} -->
<p class="tc-body"><?php echo esc_html( taira_clinic_t( 'fv_get_p3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-split__b tc-visit__ph","layout":{"type":"default"}} -->
<div class="wp-block-group tc-split__b tc-visit__ph">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo taira_clinic_img( 'p08-corridor-handrail.webp' ); ?>" alt="<?php echo taira_clinic_a( 'alt_p08' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
