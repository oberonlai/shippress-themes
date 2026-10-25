<?php
/**
 * Title: Home: hero
 * Slug: mado-air/front-hero
 * Categories: mado-air
 * Keywords: air purifier, landing, product
 * Viewport Width: 1440
 * Description: Full-bleed window-sill photographs that crossfade, the product lockup lower left and a round play button lower right.
 */
$u = get_theme_file_uri( 'assets/images/' );
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"top","className":"ma-hero sp-parallax","layout":{"type":"default"}} -->
<section id="top" class="wp-block-group alignfull ma-hero sp-parallax"><!-- wp:group {"className":"ma-hero__layer sp-parallax__layer","layout":{"type":"default"}} -->
<div class="wp-block-group ma-hero__layer sp-parallax__layer"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ma-slide"} -->
<figure class="wp-block-image size-full ma-slide"><img src="<?php echo esc_url( $u . 'hero-sill-morning.webp' ); ?>" alt="<?php echo esc_attr( mado_air_t( 'a85258e0f' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ma-slide"} -->
<figure class="wp-block-image size-full ma-slide"><img src="<?php echo esc_url( $u . 'hero-living-shelf.webp' ); ?>" alt="<?php echo esc_attr( mado_air_t( 'a9bb08afa' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ma-slide"} -->
<figure class="wp-block-image size-full ma-slide"><img src="<?php echo esc_url( $u . 'hero-bedroom-sill.webp' ); ?>" alt="<?php echo esc_attr( mado_air_t( 'a9b238b96' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ma-hero__scrim","layout":{"type":"default"}} -->
<div class="wp-block-group ma-hero__scrim"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ma-hero__lock","layout":{"type":"default"}} -->
<div class="wp-block-group ma-hero__lock"><!-- wp:heading {"level":1,"className":"ma-hero__title"} -->
<h1 class="wp-block-heading ma-hero__title"><?php echo wp_kses_post( mado_air_t( 'kb1097b9d' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ma-hero__tag"} -->
<p class="ma-hero__tag"><?php echo wp_kses_post( mado_air_t( 'k6aa7fd78' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ma-hero__play"} -->
<p class="ma-hero__play"><a href="#night"><span class="ma-play__ring" aria-hidden="true"></span><span class="ma-play__txt"><?php echo wp_kses_post( mado_air_t( 'k5d058776' ) ); ?></span></a></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
