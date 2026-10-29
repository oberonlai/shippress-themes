<?php
/**
 * Title: Home: statement
 * Slug: eiyo-clinic/front-statement
 * Categories: eiyo-clinic
 * Keywords: statement, about
 * Viewport Width: 1440
 * Description: Four lines that light up from grey to ink while scrolling, a dot-arrow link, one paragraph and a tall photograph at the right.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"about","className":"ec-sec ec-statement-sec","layout":{"type":"default"}} -->
<section id="about" class="wp-block-group alignfull ec-sec ec-statement-sec"><!-- wp:group {"className":"ec-in ec-cols","layout":{"type":"default"}} -->
<div class="wp-block-group ec-in ec-cols"><!-- wp:group {"className":"ec-stmt","layout":{"type":"default"}} -->
<div class="wp-block-group ec-stmt"><!-- wp:group {"className":"ec-statement sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ec-statement sp-stagger"><!-- wp:paragraph {"className":"ec-line sp-reveal sp-reveal--up"} -->
<p class="ec-line sp-reveal sp-reveal--up"><?php echo wp_kses_post( eiyo_clinic_t( 'k1a4cae7f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ec-line sp-reveal sp-reveal--up"} -->
<p class="ec-line sp-reveal sp-reveal--up"><?php echo wp_kses_post( eiyo_clinic_t( 'k409e88dd' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ec-line sp-reveal sp-reveal--up"} -->
<p class="ec-line sp-reveal sp-reveal--up"><?php echo wp_kses_post( eiyo_clinic_t( 'kd5fc041b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ec-line sp-reveal sp-reveal--up"} -->
<p class="ec-line sp-reveal sp-reveal--up"><?php echo wp_kses_post( eiyo_clinic_t( 'k912f8f6c' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"ec-chip"} -->
<div class="wp-block-buttons ec-chip"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php echo wp_kses_post( eiyo_clinic_t( 'k7c16f89a' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"ec-stmt__body"} -->
<p class="ec-stmt__body"><?php echo wp_kses_post( eiyo_clinic_t( 'k7784e8ee' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ec-stmt__photo","layout":{"type":"default"}} -->
<div class="wp-block-group ec-stmt__photo"><?php echo eiyo_clinic_image( 'p04', '' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
