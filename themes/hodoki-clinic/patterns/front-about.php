<?php
/**
 * Title: Home: arch photo beside a narrow text column
 * Slug: hodoki-clinic/front-about
 * Categories: hodoki-clinic
 * Keywords: home
 * Viewport Width: 1440
 * Description: Gradient two-line label with a hairline sub-label, a small photograph bleeding off the left edge, a text column and an arch-topped photograph.
 */
$hd = get_theme_file_uri( 'assets/images/' );
?>
<!-- wp:group {"className":"hd-sec hd-about","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hd-sec hd-about"><!-- wp:group {"className":"hd-wrap hd-about__grid","layout":{"type":"default"}} -->
<div class="wp-block-group hd-wrap hd-about__grid"><!-- wp:group {"className":"hd-about__main","layout":{"type":"default"}} -->
<div class="wp-block-group hd-about__main"><!-- wp:group {"className":"hd-small sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group hd-small sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $hd . 'intro-band-hands.webp' ); ?>" alt="<?php echo esc_attr( hodoki_clinic_t( 'a48d9bc2e' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hd-t2label","layout":{"type":"default"}} -->
<div class="wp-block-group hd-t2label"><!-- wp:group {"className":"hd-t2label__row","layout":{"type":"default"}} -->
<div class="wp-block-group hd-t2label__row"><!-- wp:paragraph {"className":"hd-gradtext hd-t2label__l1"} -->
<p class="hd-gradtext hd-t2label__l1"><?php echo wp_kses_post( hodoki_clinic_t( 'k33080c3d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hd-t2label__sub","layout":{"type":"default"}} -->
<div class="wp-block-group hd-t2label__sub"><!-- wp:paragraph {"className":"hd-hairline"} -->
<p class="hd-hairline" aria-hidden="true"></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hd-italic"} -->
<p class="hd-italic"><?php echo wp_kses_post( hodoki_clinic_t( 'k159213be' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hd-gradtext hd-t2label__l2"} -->
<p class="hd-gradtext hd-t2label__l2"><?php echo wp_kses_post( hodoki_clinic_t( 'kef328cfa' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hd-about__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hd-about__text sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"hd-h2"} -->
<h2 class="wp-block-heading hd-h2"><?php echo wp_kses_post( hodoki_clinic_t( 'k84f73555' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hd-body"} -->
<p class="hd-body"><?php echo wp_kses_post( hodoki_clinic_t( 'k5e7a018f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hd-body"} -->
<p class="hd-body"><?php echo wp_kses_post( hodoki_clinic_t( 'k693fc9ce' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hd-body"} -->
<p class="hd-body"><?php echo wp_kses_post( hodoki_clinic_t( 'k9443f745' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"hd-btns"} -->
<div class="wp-block-buttons hd-btns"><!-- wp:button {"className":"hd-pill is-style-outline"} -->
<div class="wp-block-button hd-pill is-style-outline"><a class="wp-block-button__link wp-element-button" href="/about/"><?php echo wp_kses_post( hodoki_clinic_t( 'k7c16f89a' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hd-about__arch","layout":{"type":"default"}} -->
<div class="wp-block-group hd-about__arch"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hd-arch hd-wipe-x sp-reveal sp-reveal--wipe"} -->
<figure class="wp-block-image size-full hd-arch hd-wipe-x sp-reveal sp-reveal--wipe"><img src="<?php echo esc_url( $hd . 'intro-arch-room.webp' ); ?>" alt="<?php echo esc_attr( hodoki_clinic_t( 'a4d7d3fc4' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
