<?php
/**
 * Title: Home: what a review visit is for
 * Slug: soroe-clinic/front-review
 * Categories: soroe-clinic
 * Viewport Width: 1440
 * Description: Parallax photograph band with a white panel at the right: four numbered checks of a twenty-minute review visit.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"review","className":"so-cell so-review sp-parallax","layout":{"type":"default"}} -->
<section id="review" class="wp-block-group alignfull so-cell so-review sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"so-review__img"} -->
<figure class="wp-block-image size-full so-review__img"><img src="<?php echo soroe_clinic_img( 'p06-band-review-room.webp' ); ?>" alt="<?php echo soroe_clinic_a( 'alt_p06' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"so-review__panel sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group so-review__panel sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"so-label"} -->
<p class="so-label"><?php echo esc_html( soroe_clinic_t( 'r_label' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"so-h2s so-h2s--l"} -->
<h2 class="wp-block-heading so-h2s so-h2s--l"><?php echo esc_html( soroe_clinic_t( 'r_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"so-body"} -->
<p class="so-body"><?php echo esc_html( soroe_clinic_t( 'r_intro' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"so-checks","layout":{"type":"default"}} -->
<div class="wp-block-group so-checks"><!-- wp:group {"className":"so-check","layout":{"type":"default"}} -->
<div class="wp-block-group so-check"><!-- wp:paragraph {"className":"so-check__n"} -->
<p class="so-check__n">#1</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"so-check__h"} -->
<h3 class="wp-block-heading so-check__h"><?php echo esc_html( soroe_clinic_t( 'r_c1' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"so-check__t"} -->
<p class="so-check__t"><?php echo esc_html( soroe_clinic_t( 'r_c1_t' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"so-check","layout":{"type":"default"}} -->
<div class="wp-block-group so-check"><!-- wp:paragraph {"className":"so-check__n"} -->
<p class="so-check__n">#2</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"so-check__h"} -->
<h3 class="wp-block-heading so-check__h"><?php echo esc_html( soroe_clinic_t( 'r_c2' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"so-check__t"} -->
<p class="so-check__t"><?php echo esc_html( soroe_clinic_t( 'r_c2_t' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"so-check","layout":{"type":"default"}} -->
<div class="wp-block-group so-check"><!-- wp:paragraph {"className":"so-check__n"} -->
<p class="so-check__n">#3</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"so-check__h"} -->
<h3 class="wp-block-heading so-check__h"><?php echo esc_html( soroe_clinic_t( 'r_c3' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"so-check__t"} -->
<p class="so-check__t"><?php echo esc_html( soroe_clinic_t( 'r_c3_t' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"so-check","layout":{"type":"default"}} -->
<div class="wp-block-group so-check"><!-- wp:paragraph {"className":"so-check__n"} -->
<p class="so-check__n">#4</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"so-check__h"} -->
<h3 class="wp-block-heading so-check__h"><?php echo esc_html( soroe_clinic_t( 'r_c4' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"so-check__t"} -->
<p class="so-check__t"><?php echo esc_html( soroe_clinic_t( 'r_c4_t' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"so-link"} -->
<p class="so-link"><a href="<?php echo esc_url( home_url( '/review-visits/' ) ); ?>"><?php echo esc_html( soroe_clinic_t( 'r_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
