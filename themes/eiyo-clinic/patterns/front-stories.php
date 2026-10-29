<?php
/**
 * Title: Home: three stories
 * Slug: eiyo-clinic/front-stories
 * Categories: eiyo-clinic
 * Keywords: stories, cards
 * Viewport Width: 1440
 * Description: Eyebrow, heading and three 4:3 story cards that rise in one after the other.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"stories","className":"ec-sec ec-stories","layout":{"type":"default"}} -->
<section id="stories" class="wp-block-group alignfull ec-sec ec-stories"><!-- wp:group {"className":"ec-in ec-stories__head","layout":{"type":"default"}} -->
<div class="wp-block-group ec-in ec-stories__head"><!-- wp:paragraph {"className":"ec-eyebrow"} -->
<p class="ec-eyebrow"><?php echo wp_kses_post( eiyo_clinic_t( 'kcbb37401' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"ec-h2"} -->
<h2 class="wp-block-heading ec-h2"><?php echo wp_kses_post( eiyo_clinic_t( 'kb96cbfb6' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ec-in ec-cards sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ec-in ec-cards sp-stagger"><!-- wp:group {"className":"ec-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ec-card sp-reveal sp-reveal--up"><?php echo eiyo_clinic_image( 'p09', '' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo wp_kses_post( eiyo_clinic_t( 'k35b66a8d' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( eiyo_clinic_t( 'k349cb1f8' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"ec-chip ec-chip--bare"} -->
<div class="wp-block-buttons ec-chip ec-chip--bare"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/stories/' ) ); ?>"><?php echo wp_kses_post( eiyo_clinic_t( 'k21957bfd' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ec-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ec-card sp-reveal sp-reveal--up"><?php echo eiyo_clinic_image( 'p10', '' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo wp_kses_post( eiyo_clinic_t( 'kb6297200' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( eiyo_clinic_t( 'kcbb56d8f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"ec-chip ec-chip--bare"} -->
<div class="wp-block-buttons ec-chip ec-chip--bare"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/stories/' ) ); ?>"><?php echo wp_kses_post( eiyo_clinic_t( 'k21957bfd' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ec-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ec-card sp-reveal sp-reveal--up"><?php echo eiyo_clinic_image( 'p11', '' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo wp_kses_post( eiyo_clinic_t( 'k640f85bd' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( eiyo_clinic_t( 'k7f41558e' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"ec-chip ec-chip--bare"} -->
<div class="wp-block-buttons ec-chip ec-chip--bare"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/stories/' ) ); ?>"><?php echo wp_kses_post( eiyo_clinic_t( 'k21957bfd' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
