<?php
/**
 * Title: Home: the morning batch
 * Slug: yoake-patisserie/front-morning
 * Categories: yoake-patisserie
 * Viewport Width: 1440
 * Description: Wash band: kicker, em dash, two-line stack and two paragraphs; photograph flush to the right edge, dropped 110px.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"yk-wash yk-wash--110 yk-band yk-band--photo-right","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull yk-wash yk-wash--110 yk-band yk-band--photo-right"><!-- wp:group {"className":"yk-band__text sp-reveal","layout":{"type":"default"}} -->
<div class="wp-block-group yk-band__text sp-reveal"><!-- wp:paragraph {"className":"yk-kicker"} -->
<p class="yk-kicker"><?php echo wp_kses_post( yoake_patisserie_t( 'k8bebd797' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yk-dash"} -->
<p class="yk-dash" aria-hidden="true">—</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"yk-lines"} -->
<h2 class="wp-block-heading yk-lines"><?php echo wp_kses_post( yoake_patisserie_t( 'k80bec0ed' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( yoake_patisserie_t( 'kcbf82646' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( yoake_patisserie_t( 'ke7fc25c0' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yk-band__photo yk-band__photo--landscape sp-reveal sp-reveal--right","layout":{"type":"default"}} -->
<div class="wp-block-group yk-band__photo yk-band__photo--landscape sp-reveal sp-reveal--right"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/morning-counter.webp' ) ); ?>" alt="<?php echo esc_attr( yoake_patisserie_t( 'ad8a6b104' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
