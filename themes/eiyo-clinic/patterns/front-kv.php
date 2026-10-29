<?php
/**
 * Title: Home: inset photograph
 * Slug: eiyo-clinic/front-kv
 * Categories: eiyo-clinic
 * Keywords: hero, first screen
 * Viewport Width: 1440
 * Description: One rounded photograph inset 32 px from the sides that slowly crossfades between three table scenes and drifts with the scroll; the headline sits under it with a paper strip at the right.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"top","className":"ec-kvsec","layout":{"type":"default"}} -->
<section id="top" class="wp-block-group alignfull ec-kvsec"><!-- wp:group {"className":"ec-kv sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group ec-kv sp-parallax"><!-- wp:group {"className":"sp-parallax__layer","layout":{"type":"default"}} -->
<div class="wp-block-group sp-parallax__layer"><!-- wp:html -->
<figure class="wp-block-image size-full ec-ph ec-ph--p01 ec-slide ec-slide--1"><img src="<?php echo esc_url( eiyo_clinic_img( 'p01' ) ); ?>" alt="" fetchpriority="high"/></figure>
<!-- /wp:html -->

<!-- wp:html -->
<figure class="wp-block-image size-full ec-ph ec-ph--p02 ec-slide ec-slide--2"><img src="<?php echo esc_url( eiyo_clinic_img( 'p02' ) ); ?>" alt="" aria-hidden="true"/></figure>
<!-- /wp:html -->

<!-- wp:html -->
<figure class="wp-block-image size-full ec-ph ec-ph--p03 ec-slide ec-slide--3"><img src="<?php echo esc_url( eiyo_clinic_img( 'p03' ) ); ?>" alt="" aria-hidden="true"/></figure>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ec-kvrow","layout":{"type":"default"}} -->
<div class="wp-block-group ec-kvrow"><!-- wp:heading {"className":"ec-h1","level":1} -->
<h1 class="wp-block-heading ec-h1"><?php echo wp_kses_post( eiyo_clinic_t( 'kdea1f6a8' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"ec-strip","layout":{"type":"default"}} -->
<div class="wp-block-group ec-strip"><!-- wp:paragraph {"className":"ec-strip__day"} -->
<p class="ec-strip__day"><?php echo wp_kses_post( eiyo_clinic_t( 'k145166de' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ec-strip__text"} -->
<p class="ec-strip__text"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo wp_kses_post( eiyo_clinic_t( 'k52e16da8' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
