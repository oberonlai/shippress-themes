<?php
/**
 * Title: Home: one recovered case on a rounded parallax photograph band
 * Slug: hodoki-clinic/front-proof
 * Categories: hodoki-clinic
 * Keywords: home
 * Viewport Width: 1440
 * Description: A photograph band with 50px rounded corners and parallax, a scrim and centred white text.
 */
$hd = get_theme_file_uri( 'assets/images/' );
?>
<!-- wp:group {"className":"hd-sec hd-proofsec","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hd-sec hd-proofsec"><!-- wp:group {"className":"hd-proof sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group hd-proof sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sp-parallax__layer hd-proof__img"} -->
<figure class="wp-block-image size-full sp-parallax__layer hd-proof__img"><img src="<?php echo esc_url( $hd . 'proof-walk.webp' ); ?>" alt="<?php echo esc_attr( hodoki_clinic_t( 'ab3a93947' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hd-proof__scrim","layout":{"type":"default"}} -->
<div class="wp-block-group hd-proof__scrim"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hd-proof__in","layout":{"type":"default"}} -->
<div class="wp-block-group hd-proof__in"><!-- wp:group {"className":"hd-proof__lab","layout":{"type":"default"}} -->
<div class="wp-block-group hd-proof__lab"><!-- wp:paragraph {"className":"hd-hairline hd-hairline--w"} -->
<p class="hd-hairline hd-hairline--w" aria-hidden="true"></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hd-italic hd-italic--w"} -->
<p class="hd-italic hd-italic--w"><?php echo wp_kses_post( hodoki_clinic_t( 'kb5d96e1f' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":2,"className":"hd-proof__h sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading hd-proof__h sp-reveal sp-reveal--up"><?php echo wp_kses_post( hodoki_clinic_t( 'kd5b3307e' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"hd-proof__txt sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hd-proof__txt sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"hd-proof__p"} -->
<p class="hd-proof__p"><?php echo wp_kses_post( hodoki_clinic_t( 'k80964094' ) ); ?> </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hd-proof__p"} -->
<p class="hd-proof__p"><?php echo wp_kses_post( hodoki_clinic_t( 'k33627da8' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hd-proof__q"} -->
<p class="hd-proof__q"><?php echo wp_kses_post( hodoki_clinic_t( 'k00366dba' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"hd-btns hd-btns--c"} -->
<div class="wp-block-buttons hd-btns hd-btns--c"><!-- wp:button {"className":"hd-pill hd-pill--w is-style-outline"} -->
<div class="wp-block-button hd-pill hd-pill--w is-style-outline"><a class="wp-block-button__link wp-element-button" href="/stories/"><?php echo wp_kses_post( hodoki_clinic_t( 'ka41b40e6' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
