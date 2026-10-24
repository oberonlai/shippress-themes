<?php
/**
 * Title: Home: giant light-serif phrase with two bleeding photographs
 * Slug: hodoki-clinic/front-unwind
 * Categories: hodoki-clinic
 * Keywords: home
 * Viewport Width: 1440
 * Description: Two-line gradient phrase with a photograph bleeding off each side edge at different heights, then a short method introduction.
 */
$hd = get_theme_file_uri( 'assets/images/' );
?>
<!-- wp:group {"className":"hd-unwind","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hd-unwind"><!-- wp:group {"className":"hd-phrase__wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hd-phrase__wrap"><!-- wp:group {"className":"hd-bleed hd-bleed--l sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group hd-bleed hd-bleed--l sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $hd . 'band-left-stretch.webp' ); ?>" alt="<?php echo esc_attr( hodoki_clinic_t( 'a694fdd32' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hd-phrase","layout":{"type":"default"}} -->
<div class="wp-block-group hd-phrase"><!-- wp:paragraph {"className":"hd-gradtext hd-phrase__l1"} -->
<p class="hd-gradtext hd-phrase__l1"><?php echo wp_kses_post( hodoki_clinic_t( 'k37b88a87' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hd-gradtext hd-phrase__l2"} -->
<p class="hd-gradtext hd-phrase__l2"><?php echo wp_kses_post( hodoki_clinic_t( 'k123f3603' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hd-bleed hd-bleed--r sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group hd-bleed hd-bleed--r sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $hd . 'band-right-window.webp' ); ?>" alt="<?php echo esc_attr( hodoki_clinic_t( 'aa0477fdf' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hd-unwind__txt sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hd-unwind__txt sp-reveal sp-reveal--up"><!-- wp:group {"className":"hd-unwind__lab","layout":{"type":"default"}} -->
<div class="wp-block-group hd-unwind__lab"><!-- wp:paragraph {"className":"hd-hairline"} -->
<p class="hd-hairline" aria-hidden="true"></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hd-italic"} -->
<p class="hd-italic"><?php echo wp_kses_post( hodoki_clinic_t( 'k6e8a080d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hd-body hd-unwind__p"} -->
<p class="hd-body hd-unwind__p"><?php echo wp_kses_post( hodoki_clinic_t( 'k1dc06322' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
