<?php
/**
 * Title: Home: your first visit
 * Slug: soroe-clinic/front-first
 * Categories: soroe-clinic
 * Viewport Width: 1440
 * Description: White cell: four first-visit steps in one row with small numerals, then a reception photograph beside the opening hours.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"first-visit","className":"so-cell so-first","layout":{"type":"default"}} -->
<section id="first-visit" class="wp-block-group alignfull so-cell so-first"><!-- wp:group {"className":"so-first__head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group so-first__head sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"so-label"} -->
<p class="so-label"><?php echo esc_html( soroe_clinic_t( 'fv_label' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"so-h2"} -->
<h2 class="wp-block-heading so-h2"><?php echo esc_html( soroe_clinic_t( 'fv_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"so-body"} -->
<p class="so-body"><?php echo esc_html( soroe_clinic_t( 'fv_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"so-steps sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group so-steps sp-stagger"><!-- wp:group {"className":"so-fstep sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group so-fstep sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"so-fstep__n"} -->
<p class="so-fstep__n"><span class="so-num__h">#</span>01</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"so-fstep__h"} -->
<h3 class="wp-block-heading so-fstep__h"><?php echo esc_html( soroe_clinic_t( 'fv_s1' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"so-fstep__t"} -->
<p class="so-fstep__t"><?php echo esc_html( soroe_clinic_t( 'fv_s1_t' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-fstep__f"} -->
<p class="so-fstep__f"><?php echo esc_html( soroe_clinic_t( 'fv_s1_f' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"so-fstep sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group so-fstep sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"so-fstep__n"} -->
<p class="so-fstep__n"><span class="so-num__h">#</span>02</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"so-fstep__h"} -->
<h3 class="wp-block-heading so-fstep__h"><?php echo esc_html( soroe_clinic_t( 'fv_s2' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"so-fstep__t"} -->
<p class="so-fstep__t"><?php echo esc_html( soroe_clinic_t( 'fv_s2_t' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-fstep__f"} -->
<p class="so-fstep__f"><?php echo esc_html( soroe_clinic_t( 'fv_s2_f' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"so-fstep sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group so-fstep sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"so-fstep__n"} -->
<p class="so-fstep__n"><span class="so-num__h">#</span>03</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"so-fstep__h"} -->
<h3 class="wp-block-heading so-fstep__h"><?php echo esc_html( soroe_clinic_t( 'fv_s3' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"so-fstep__t"} -->
<p class="so-fstep__t"><?php echo esc_html( soroe_clinic_t( 'fv_s3_t' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-fstep__f"} -->
<p class="so-fstep__f"><?php echo esc_html( soroe_clinic_t( 'fv_s3_f' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"so-fstep sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group so-fstep sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"so-fstep__n"} -->
<p class="so-fstep__n"><span class="so-num__h">#</span>04</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"so-fstep__h"} -->
<h3 class="wp-block-heading so-fstep__h"><?php echo esc_html( soroe_clinic_t( 'fv_s4' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"so-fstep__t"} -->
<p class="so-fstep__t"><?php echo esc_html( soroe_clinic_t( 'fv_s4_t' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-fstep__f"} -->
<p class="so-fstep__f"><?php echo esc_html( soroe_clinic_t( 'fv_s4_f' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"so-first__grid","layout":{"type":"default"}} -->
<div class="wp-block-group so-first__grid"><!-- wp:group {"className":"so-first__photo sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group so-first__photo sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"so-photo"} -->
<figure class="wp-block-image size-full so-photo"><img src="<?php echo soroe_clinic_img( 'p12-first-visit-reception.webp' ); ?>" alt="<?php echo soroe_clinic_a( 'alt_p12' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"so-first__info","layout":{"type":"default"}} -->
<div class="wp-block-group so-first__info"><!-- wp:heading {"level":3,"className":"so-h3"} -->
<h3 class="wp-block-heading so-h3"><?php echo esc_html( soroe_clinic_t( 'fv_hours_h' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:table {"className":"so-hours"} -->
<figure class="wp-block-table so-hours"><table><tbody><tr><td><?php echo esc_html( soroe_clinic_t( 'fv_d1' ) ); ?></td><td><?php echo esc_html( soroe_clinic_t( 'fv_h1' ) ); ?></td></tr><tr><td><?php echo esc_html( soroe_clinic_t( 'fv_d2' ) ); ?></td><td><?php echo esc_html( soroe_clinic_t( 'fv_h2' ) ); ?></td></tr><tr><td><?php echo esc_html( soroe_clinic_t( 'fv_d3' ) ); ?></td><td><?php echo esc_html( soroe_clinic_t( 'fv_h3' ) ); ?></td></tr><tr><td><?php echo esc_html( soroe_clinic_t( 'fv_d4' ) ); ?></td><td><?php echo esc_html( soroe_clinic_t( 'fv_h4' ) ); ?></td></tr><tr><td><?php echo esc_html( soroe_clinic_t( 'fv_d5' ) ); ?></td><td><?php echo esc_html( soroe_clinic_t( 'fv_h5' ) ); ?></td></tr><tr><td><?php echo esc_html( soroe_clinic_t( 'fv_d6' ) ); ?></td><td><?php echo esc_html( soroe_clinic_t( 'fv_h6' ) ); ?></td></tr><tr><td><?php echo esc_html( soroe_clinic_t( 'fv_d7' ) ); ?></td><td><?php echo esc_html( soroe_clinic_t( 'fv_h7' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->
<!-- wp:paragraph {"className":"so-body so-body--s"} -->
<p class="so-body so-body--s"><?php echo esc_html( soroe_clinic_t( 'fv_addr' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-body so-body--s"} -->
<p class="so-body so-body--s"><a href="tel:+0020555190"><?php echo esc_html( soroe_clinic_t( 'phone' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"so-btn so-btn--arrow-wrap"} -->
<div class="wp-block-buttons so-btn so-btn--arrow-wrap"><!-- wp:button {"className":"so-btn so-btn--arrow"} -->
<div class="wp-block-button so-btn so-btn--arrow"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/first-visit/' ) ); ?>"><?php echo esc_html( soroe_clinic_t( 'cta_book' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
