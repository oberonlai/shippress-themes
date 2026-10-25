<?php
/**
 * Title: Home: quiet night
 * Slug: mado-air/front-night
 * Categories: mado-air
 * Keywords: air purifier, landing, product
 * Viewport Width: 1440
 * Description: Photo band: a calm bedroom photograph with the text in ink on its pale left third.
 */
$u = get_theme_file_uri( 'assets/images/' );
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"night","className":"ma-night","layout":{"type":"default"}} -->
<section id="night" class="wp-block-group alignfull ma-night"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ma-night__bg"} -->
<figure class="wp-block-image size-full ma-night__bg"><img src="<?php echo esc_url( $u . 'night-bedroom.webp' ); ?>" alt="<?php echo esc_attr( mado_air_t( 'a3b390dc9' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"align":"wide","className":"ma-night__in","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ma-night__in"><!-- wp:group {"className":"ma-night__text sp-reveal","layout":{"type":"default"}} -->
<div class="wp-block-group ma-night__text sp-reveal"><!-- wp:paragraph {"className":"ma-label"} -->
<p class="ma-label"><?php echo wp_kses_post( mado_air_t( 'k4b470b40' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"ma-h2"} -->
<h2 class="wp-block-heading ma-h2"><?php echo wp_kses_post( mado_air_t( 'kc8589f6d' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"ma-rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity ma-rule"/>
<!-- /wp:separator -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( mado_air_t( 'ka854b2e0' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ma-note"} -->
<p class="ma-note"><strong><?php echo wp_kses_post( mado_air_t( 'ke1c4bc95' ) ); ?></strong> <?php echo wp_kses_post( mado_air_t( 'kf62fcaa4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
