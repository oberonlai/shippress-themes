<?php
/**
 * Title: Home: full-bleed photo hero with info bar
 * Slug: hodoki-clinic/front-hero
 * Categories: hodoki-clinic
 * Keywords: home
 * Viewport Width: 1440
 * Description: Full-bleed treatment-room photograph, headline bottom-left with hairline and italic sub-line, then a white info bar.
 */
$hd = get_theme_file_uri( 'assets/images/' );
?>
<!-- wp:cover {"url":"<?php echo esc_url( $hd . 'hero-shoulder-guide.webp' ); ?>","dimRatio":0,"focalPoint":{"x":0.55,"y":0.45},"contentPosition":"bottom left","align":"full","className":"hd-hero sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-left hd-hero sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( hodoki_clinic_t( 'aeff634c3' ) ); ?>" src="<?php echo esc_url( $hd . 'hero-shoulder-guide.webp' ); ?>" style="object-position:55% 45%" data-object-fit="cover" data-object-position="55% 45%"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":1,"className":"hd-hero__title"} -->
<h1 class="wp-block-heading hd-hero__title"><?php echo wp_kses_post( hodoki_clinic_t( 'ka6b128eb' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"hd-hero__sub","layout":{"type":"default"}} -->
<div class="wp-block-group hd-hero__sub"><!-- wp:paragraph {"className":"hd-hero__rule"} -->
<p class="hd-hero__rule" aria-hidden="true"></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hd-hero__tag"} -->
<p class="hd-hero__tag"><?php echo wp_kses_post( hodoki_clinic_t( 'k92342473' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hd-hero__lead"} -->
<p class="hd-hero__lead"><?php echo wp_kses_post( hodoki_clinic_t( 'k9f785336' ) ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"hd-infobar","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hd-infobar"><!-- wp:group {"className":"hd-wrap hd-infobar__in","layout":{"type":"default"}} -->
<div class="wp-block-group hd-wrap hd-infobar__in"><!-- wp:group {"className":"hd-infobar__facts","layout":{"type":"default"}} -->
<div class="wp-block-group hd-infobar__facts"><!-- wp:paragraph {"className":"hd-fact"} -->
<p class="hd-fact"><?php echo wp_kses_post( hodoki_clinic_t( 'k7085c4fd' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hd-fact"} -->
<p class="hd-fact"><?php echo wp_kses_post( hodoki_clinic_t( 'k7768fd9c' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hd-fact"} -->
<p class="hd-fact"><?php echo wp_kses_post( hodoki_clinic_t( 'k70754ca8' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"hd-infobar__cta"} -->
<div class="wp-block-buttons hd-infobar__cta"><!-- wp:button {"className":"hd-pill hd-pill--sm is-style-outline"} -->
<div class="wp-block-button hd-pill hd-pill--sm is-style-outline"><a class="wp-block-button__link wp-element-button" href="/first-visit/"><?php echo wp_kses_post( hodoki_clinic_t( 'kfca8a5d7' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
