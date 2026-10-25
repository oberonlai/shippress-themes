<?php
/**
 * Title: Home: gallery
 * Slug: mado-air/front-gallery
 * Categories: mado-air
 * Keywords: air purifier, landing, product
 * Viewport Width: 1440
 * Description: Three by two square photographs in a 980 px container.
 */
$u = get_theme_file_uri( 'assets/images/' );
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"gallery","className":"ma-sec ma-gallery","layout":{"type":"default"}} -->
<section id="gallery" class="wp-block-group alignfull ma-sec ma-gallery"><!-- wp:group {"className":"ma-in","layout":{"type":"constrained"}} -->
<div class="wp-block-group ma-in"><!-- wp:paragraph {"className":"ma-label"} -->
<p class="ma-label"><?php echo wp_kses_post( mado_air_t( 'k2edb7e03' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"ma-h2"} -->
<h2 class="wp-block-heading ma-h2"><?php echo wp_kses_post( mado_air_t( 'k4d6c9724' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"ma-rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity ma-rule"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"className":"ma-col880"} -->
<p class="ma-col880"><?php echo wp_kses_post( mado_air_t( 'k30afd5e3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ma-gal sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ma-gal sp-stagger"><!-- wp:group {"className":"ma-tile sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ma-tile sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","aspectRatio":"1/1","scale":"cover"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $u . 'gal-top-dial.webp' ); ?>" alt="<?php echo esc_attr( mado_air_t( 'a1e0496be' ) ); ?>" style="aspect-ratio:1/1;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ma-tile sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ma-tile sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","aspectRatio":"1/1","scale":"cover"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $u . 'gal-filter-slide.webp' ); ?>" alt="<?php echo esc_attr( mado_air_t( 'acb13c1dc' ) ); ?>" style="aspect-ratio:1/1;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ma-tile sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ma-tile sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","aspectRatio":"1/1","scale":"cover"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $u . 'gal-desk.webp' ); ?>" alt="<?php echo esc_attr( mado_air_t( 'a6b4d2948' ) ); ?>" style="aspect-ratio:1/1;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ma-tile sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ma-tile sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","aspectRatio":"1/1","scale":"cover"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $u . 'gal-reading-nook.webp' ); ?>" alt="<?php echo esc_attr( mado_air_t( 'aa2700970' ) ); ?>" style="aspect-ratio:1/1;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ma-tile sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ma-tile sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","aspectRatio":"1/1","scale":"cover"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $u . 'gal-kitchen.webp' ); ?>" alt="<?php echo esc_attr( mado_air_t( 'aacf56b10' ) ); ?>" style="aspect-ratio:1/1;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ma-tile sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ma-tile sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","aspectRatio":"1/1","scale":"cover"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $u . 'gal-carry-loop.webp' ); ?>" alt="<?php echo esc_attr( mado_air_t( 'a297571ac' ) ); ?>" style="aspect-ratio:1/1;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
