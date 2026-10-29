<?php
/**
 * Title: Home: where eating stalls
 * Slug: eiyo-clinic/front-stalls
 * Categories: eiyo-clinic
 * Keywords: problem, coverflow
 * Viewport Width: 1440
 * Description: Centred label and heading, a static coverflow of three photographs with a paper caption card overlapping the centre photo, three tab labels between hairlines and three short paragraphs.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"problem","className":"ec-sec ec-stalls","layout":{"type":"default"}} -->
<section id="problem" class="wp-block-group alignfull ec-sec ec-stalls"><!-- wp:group {"className":"ec-in ec-stalls__head","layout":{"type":"default"}} -->
<div class="wp-block-group ec-in ec-stalls__head"><!-- wp:paragraph {"className":"ec-eyebrow"} -->
<p class="ec-eyebrow"><?php echo wp_kses_post( eiyo_clinic_t( 'k02094094' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"ec-h2"} -->
<h2 class="wp-block-heading ec-h2"><?php echo wp_kses_post( eiyo_clinic_t( 'ka859ba15' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ec-in ec-flow","layout":{"type":"default"}} -->
<div class="wp-block-group ec-in ec-flow"><!-- wp:html -->
<figure class="wp-block-image size-full ec-ph ec-ph--p05 ec-flow__side ec-flow__side--l"><img src="<?php echo esc_url( eiyo_clinic_img( 'p05' ) ); ?>" alt="" aria-hidden="true"/></figure>
<!-- /wp:html -->

<!-- wp:html -->
<figure class="wp-block-image size-full ec-ph ec-ph--p07 ec-flow__side ec-flow__side--r"><img src="<?php echo esc_url( eiyo_clinic_img( 'p07' ) ); ?>" alt="" aria-hidden="true"/></figure>
<!-- /wp:html -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ec-ph ec-ph--p06 ec-flow__main"} -->
<figure class="wp-block-image size-full ec-ph ec-ph--p06 ec-flow__main"><img src="<?php echo esc_url( eiyo_clinic_img( 'p06' ) ); ?>" alt="<?php echo esc_attr( eiyo_clinic_alts()['p06'] ?? '' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ec-flow__card","layout":{"type":"default"}} -->
<div class="wp-block-group ec-flow__card"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo wp_kses_post( eiyo_clinic_t( 'kcf428317' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( eiyo_clinic_t( 'ka5e56efd' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"ec-chip"} -->
<div class="wp-block-buttons ec-chip"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/approach/#stalls' ) ); ?>"><?php echo wp_kses_post( eiyo_clinic_t( 'kdd2f4022' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ec-in ec-tabs","layout":{"type":"default"}} -->
<div class="wp-block-group ec-in ec-tabs"><!-- wp:paragraph -->
<p><a href="<?php echo esc_url( home_url( '/approach/#stalls' ) ); ?>"><?php echo wp_kses_post( eiyo_clinic_t( 'kc61c6b12' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-current"} -->
<p class="is-current"><a href="<?php echo esc_url( home_url( '/approach/#stalls' ) ); ?>"><?php echo wp_kses_post( eiyo_clinic_t( 'kcf428317' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="<?php echo esc_url( home_url( '/approach/#stalls' ) ); ?>"><?php echo wp_kses_post( eiyo_clinic_t( 'k348e2da6' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ec-in ec-stalltext","layout":{"type":"default"}} -->
<div class="wp-block-group ec-in ec-stalltext"><!-- wp:paragraph -->
<p><strong><?php echo wp_kses_post( eiyo_clinic_t( 'kc61c6b12' ) ); ?></strong> <?php echo wp_kses_post( eiyo_clinic_t( 'kc9b4c293' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong><?php echo wp_kses_post( eiyo_clinic_t( 'kcf428317' ) ); ?></strong> <?php echo wp_kses_post( eiyo_clinic_t( 'k12d223e0' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong><?php echo wp_kses_post( eiyo_clinic_t( 'k348e2da6' ) ); ?></strong> <?php echo wp_kses_post( eiyo_clinic_t( 'k8879b34c' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
