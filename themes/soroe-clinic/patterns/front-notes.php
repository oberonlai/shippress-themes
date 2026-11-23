<?php
/**
 * Title: Home: patients’ notes
 * Slug: soroe-clinic/front-notes
 * Categories: soroe-clinic
 * Viewport Width: 1440
 * Description: Paper cell: three patient notes in staggered masonry columns, each with a portrait photograph, facts line and quote.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"notes","className":"so-cell so-notes","layout":{"type":"default"}} -->
<section id="notes" class="wp-block-group alignfull so-cell so-notes"><!-- wp:group {"className":"so-notes__head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group so-notes__head sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"so-label"} -->
<p class="so-label"><?php echo esc_html( soroe_clinic_t( 'nt_label' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"so-h2"} -->
<h2 class="wp-block-heading so-h2"><?php echo esc_html( soroe_clinic_t( 'nt_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"so-body"} -->
<p class="so-body"><?php echo esc_html( soroe_clinic_t( 'nt_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"so-notes__cols sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group so-notes__cols sp-stagger"><!-- wp:group {"className":"so-note so-note--1 sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group so-note so-note--1 sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"so-photo"} -->
<figure class="wp-block-image size-full so-photo"><img src="<?php echo soroe_clinic_img( 'p08-note-lena.webp' ); ?>" alt="<?php echo soroe_clinic_a( 'alt_p08' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"className":"so-note__name"} -->
<p class="so-note__name"><?php echo esc_html( soroe_clinic_t( 'nt_n1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-note__facts"} -->
<p class="so-note__facts"><?php echo esc_html( soroe_clinic_t( 'nt_f1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-note__quote"} -->
<p class="so-note__quote"><?php echo esc_html( soroe_clinic_t( 'nt_q1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"so-note so-note--2 sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group so-note so-note--2 sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"so-photo"} -->
<figure class="wp-block-image size-full so-photo"><img src="<?php echo soroe_clinic_img( 'p09-note-tomas.webp' ); ?>" alt="<?php echo soroe_clinic_a( 'alt_p09' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"className":"so-note__name"} -->
<p class="so-note__name"><?php echo esc_html( soroe_clinic_t( 'nt_n2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-note__facts"} -->
<p class="so-note__facts"><?php echo esc_html( soroe_clinic_t( 'nt_f2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-note__quote"} -->
<p class="so-note__quote"><?php echo esc_html( soroe_clinic_t( 'nt_q2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"so-note so-note--3 sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group so-note so-note--3 sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"so-photo"} -->
<figure class="wp-block-image size-full so-photo"><img src="<?php echo soroe_clinic_img( 'p10-note-mariam.webp' ); ?>" alt="<?php echo soroe_clinic_a( 'alt_p10' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"className":"so-note__name"} -->
<p class="so-note__name"><?php echo esc_html( soroe_clinic_t( 'nt_n3' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-note__facts"} -->
<p class="so-note__facts"><?php echo esc_html( soroe_clinic_t( 'nt_f3' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-note__quote"} -->
<p class="so-note__quote"><?php echo esc_html( soroe_clinic_t( 'nt_q3' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-link"} -->
<p class="so-link"><a href="<?php echo esc_url( home_url( '/patient-notes/' ) ); ?>"><?php echo esc_html( soroe_clinic_t( 'nt_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
