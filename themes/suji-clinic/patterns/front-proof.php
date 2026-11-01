<?php
/**
 * Title: Home: proof, parallax
 * Slug: suji-clinic/front-proof
 * Categories: suji-clinic
 * Keywords: clinic, proof, parallax, return to run
 * Viewport Width: 1440
 * Description: A full-width track photograph that moves slowly behind a still white panel listing the three return checks.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sj-proof sp-parallax","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sj-proof sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sj-proof__bg"} -->
<figure class="wp-block-image size-full sj-proof__bg"><img src="<?php echo suji_clinic_img( 'p1-dawn.webp' ); ?>" alt="<?php echo esc_attr( suji_clinic_t( 'alt_p1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sj-proof__panel","layout":{"type":"default"}} -->
<div class="wp-block-group sj-proof__panel"><!-- wp:paragraph {"className":"sj-sublabel"} -->
<p class="sj-sublabel"><?php echo esc_html( suji_clinic_t( 'proof_k' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"sj-h2 sj-h2--s"} -->
<h2 class="wp-block-heading sj-h2 sj-h2--s"><?php echo esc_html( suji_clinic_t( 'proof_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sj-proof__p"} -->
<p class="sj-proof__p"><?php echo esc_html( suji_clinic_t( 'proof_p' ) ); ?></p>
<!-- /wp:paragraph -->
<?php for ( $n = 1; $n <= 3; $n++ ) : ?>

<!-- wp:paragraph {"className":"sj-check"} -->
<p class="sj-check"><span class="sj-check__t"><?php echo esc_html( suji_clinic_t( "proof_{$n}_t" ) ); ?></span><span class="sj-check__v"><?php echo esc_html( suji_clinic_t( "proof_{$n}_v" ) ); ?></span></p>
<!-- /wp:paragraph -->
<?php endfor; ?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
