<?php
/**
 * Title: Home: care panels
 * Slug: shisei-clinic/front-care
 * Categories: shisei-clinic
 * Keywords: treatment, adjustment, movement
 * Viewport Width: 1440
 * Description: Two full-bleed treatment panels with a white title at the right, body at the bottom left and an outline pill.
 */
?>
<!-- wp:group {"className":"ss-care","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ss-care">
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/p09.webp' ) ); ?>","dimRatio":0,"minHeight":800,"minHeightUnit":"px","contentPosition":"top right","isDark":false,"className":"ss-panel ss-panel--adjustment sp-parallax","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull is-light has-custom-content-position is-position-top-right ss-panel ss-panel--adjustment sp-parallax" style="min-height:800px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( shisei_clinic_t( 'ae88cb7e7' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p09.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"className":"ss-panel__sub"} -->
<p class="ss-panel__sub"><?php echo wp_kses_post( shisei_clinic_t( 'kecf635a0' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"ss-panel__title"} -->
<h2 class="wp-block-heading ss-panel__title"><?php echo wp_kses_post( shisei_clinic_t( 'k4227750b' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ss-panel__body"} -->
<p class="ss-panel__body"><?php echo wp_kses_post( shisei_clinic_t( 'k68020aac' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"ss-panel__btn"} -->
<div class="wp-block-buttons ss-panel__btn"><!-- wp:button {"className":"is-style-ss-pill-outline"} -->
<div class="wp-block-button is-style-ss-pill-outline"><a class="wp-block-button__link wp-element-button" href="/treatments/#adjustment"><?php echo wp_kses_post( shisei_clinic_t( 'k6e978337' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/p10.webp' ) ); ?>","dimRatio":0,"minHeight":800,"minHeightUnit":"px","contentPosition":"top right","isDark":false,"className":"ss-panel ss-panel--movement sp-parallax","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull is-light has-custom-content-position is-position-top-right ss-panel ss-panel--movement sp-parallax" style="min-height:800px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( shisei_clinic_t( 'a4d2144c2' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p10.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"className":"ss-panel__sub"} -->
<p class="ss-panel__sub"><?php echo wp_kses_post( shisei_clinic_t( 'k5cc86ad4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"ss-panel__title"} -->
<h2 class="wp-block-heading ss-panel__title"><?php echo wp_kses_post( shisei_clinic_t( 'kde1c6ec0' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ss-panel__body"} -->
<p class="ss-panel__body"><?php echo wp_kses_post( shisei_clinic_t( 'kd160da74' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"ss-panel__btn"} -->
<div class="wp-block-buttons ss-panel__btn"><!-- wp:button {"className":"is-style-ss-pill-outline"} -->
<div class="wp-block-button is-style-ss-pill-outline"><a class="wp-block-button__link wp-element-button" href="/treatments/#movement"><?php echo wp_kses_post( shisei_clinic_t( 'k6e978337' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->
</section>
<!-- /wp:group -->
