<?php
/**
 * Title: Home: mirrored arch photograph and a names line
 * Slug: hodoki-clinic/front-therapists
 * Categories: hodoki-clinic
 * Keywords: home
 * Viewport Width: 1440
 * Description: An arch-topped photograph on the left, the gradient label and the lead therapist on the right, the other six names in one typographic line.
 */
$hd = get_theme_file_uri( 'assets/images/' );
?>
<!-- wp:group {"className":"hd-sec hd-team","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hd-sec hd-team"><!-- wp:group {"className":"hd-wrap hd-team__grid","layout":{"type":"default"}} -->
<div class="wp-block-group hd-wrap hd-team__grid"><!-- wp:group {"className":"hd-team__arch","layout":{"type":"default"}} -->
<div class="wp-block-group hd-team__arch"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hd-arch hd-wipe-x sp-reveal sp-reveal--wipe"} -->
<figure class="wp-block-image size-full hd-arch hd-wipe-x sp-reveal sp-reveal--wipe"><img src="<?php echo esc_url( $hd . 'team-arch-lead.webp' ); ?>" alt="<?php echo esc_attr( hodoki_clinic_t( 'a0c8455ae' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hd-team__main","layout":{"type":"default"}} -->
<div class="wp-block-group hd-team__main"><!-- wp:group {"className":"hd-t2label","layout":{"type":"default"}} -->
<div class="wp-block-group hd-t2label"><!-- wp:group {"className":"hd-t2label__row","layout":{"type":"default"}} -->
<div class="wp-block-group hd-t2label__row"><!-- wp:paragraph {"className":"hd-gradtext hd-t2label__l1"} -->
<p class="hd-gradtext hd-t2label__l1"><?php echo wp_kses_post( hodoki_clinic_t( 'k1f14b053' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hd-t2label__sub","layout":{"type":"default"}} -->
<div class="wp-block-group hd-t2label__sub"><!-- wp:paragraph {"className":"hd-hairline"} -->
<p class="hd-hairline" aria-hidden="true"></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hd-italic"} -->
<p class="hd-italic"><?php echo wp_kses_post( hodoki_clinic_t( 'ka768f520' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hd-gradtext hd-t2label__l2"} -->
<p class="hd-gradtext hd-t2label__l2"><?php echo wp_kses_post( hodoki_clinic_t( 'k732798a2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hd-team__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hd-team__text sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"hd-h2"} -->
<h2 class="wp-block-heading hd-h2"><?php echo wp_kses_post( hodoki_clinic_t( 'k6837d2c7' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hd-body"} -->
<p class="hd-body"><?php echo wp_kses_post( hodoki_clinic_t( 'k5552d4bc' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hd-people"} -->
<p class="hd-people"><strong><?php echo wp_kses_post( hodoki_clinic_t( 'kf5ac3ce2' ) ); ?></strong><?php echo wp_kses_post( hodoki_clinic_t( 'keed516c6' ) ); ?> <span class="hd-slash" aria-hidden="true">/</span> <strong><?php echo wp_kses_post( hodoki_clinic_t( 'kf1f5e96f' ) ); ?></strong><?php echo wp_kses_post( hodoki_clinic_t( 'k93c84e12' ) ); ?> <span class="hd-slash" aria-hidden="true">/</span> <strong><?php echo wp_kses_post( hodoki_clinic_t( 'k4583baa7' ) ); ?></strong><?php echo wp_kses_post( hodoki_clinic_t( 'k96cfed88' ) ); ?> <span class="hd-slash" aria-hidden="true">/</span> <strong><?php echo wp_kses_post( hodoki_clinic_t( 'k2ef37a54' ) ); ?></strong><?php echo wp_kses_post( hodoki_clinic_t( 'ka8ba9656' ) ); ?> <span class="hd-slash" aria-hidden="true">/</span> <strong><?php echo wp_kses_post( hodoki_clinic_t( 'k7e439e22' ) ); ?></strong><?php echo wp_kses_post( hodoki_clinic_t( 'ke1f8d74d' ) ); ?> <span class="hd-slash" aria-hidden="true">/</span> <strong><?php echo wp_kses_post( hodoki_clinic_t( 'kc87cc80d' ) ); ?></strong><?php echo wp_kses_post( hodoki_clinic_t( 'k8c2dd89f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"hd-btns"} -->
<div class="wp-block-buttons hd-btns"><!-- wp:button {"className":"hd-pill is-style-outline"} -->
<div class="wp-block-button hd-pill is-style-outline"><a class="wp-block-button__link wp-element-button" href="/therapists/"><?php echo wp_kses_post( hodoki_clinic_t( 'k1f9a1648' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
