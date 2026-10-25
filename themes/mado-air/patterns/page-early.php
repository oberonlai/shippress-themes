<?php
/**
 * Title: Page: early access
 * Slug: mado-air/page-early
 * Categories: mado-air
 * Keywords: air purifier, landing, product
 * Viewport Width: 1440
 * Description: Waitlist form.
 */
$u = get_theme_file_uri( 'assets/images/' );
?>
<!-- wp:group {"className":"ma-sec ma-pagehead","layout":{"type":"default"},"tagName":"section"} -->
<section class="wp-block-group ma-sec ma-pagehead"><!-- wp:group {"className":"ma-in","layout":{"type":"default"}} -->
<div class="wp-block-group ma-in"><!-- wp:paragraph {"className":"ma-label"} -->
<p class="ma-label"><?php echo wp_kses_post( mado_air_t( 'k1b5d528c' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:heading {"level":1,"className":"ma-h2 ma-h1p"} -->
<h1 class="wp-block-heading ma-h2 ma-h1p"><?php echo wp_kses_post( mado_air_t( 'kma_early_h' ) ); ?></h1>
<!-- /wp:heading --><!-- wp:separator {"className":"ma-rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity ma-rule"/>
<!-- /wp:separator --><!-- wp:paragraph {"className":"ma-lead"} -->
<p class="ma-lead"><?php echo wp_kses_post( mado_air_t( 'k8a123d43' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group --><!-- wp:group {"className":"ma-sec ma-sec--s","layout":{"type":"default"},"tagName":"section"} -->
<section class="wp-block-group ma-sec ma-sec--s"><!-- wp:group {"className":"ma-in","layout":{"type":"default"}} -->
<div class="wp-block-group ma-in"><!-- wp:group {"className":"ma-split","layout":{"type":"default"}} -->
<div class="wp-block-group ma-split"><!-- wp:group {"className":"ma-split__t","layout":{"type":"default"}} -->
<div class="wp-block-group ma-split__t"><!-- wp:heading {"level":3,"className":"ma-h3"} -->
<h3 class="wp-block-heading ma-h3"><?php echo wp_kses_post( mado_air_t( 'k1f89e6a3' ) ); ?></h3>
<!-- /wp:heading --><!-- wp:paragraph -->
<p><?php echo wp_kses_post( mado_air_t( 'ke0e84826' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:heading {"level":3,"className":"ma-h3"} -->
<h3 class="wp-block-heading ma-h3"><?php echo wp_kses_post( mado_air_t( 'k8538fc6f' ) ); ?></h3>
<!-- /wp:heading --><!-- wp:paragraph -->
<p><?php echo wp_kses_post( mado_air_t( 'kd7b2c0a1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"ma-split__f","layout":{"type":"default"}} -->
<div class="wp-block-group ma-split__f"><!-- wp:html -->
<form class="ma-form" method="get" action="<?php echo esc_url( home_url( '/thanks/' ) ); ?>"><p><label><?php echo wp_kses_post( mado_air_t( 'k49ee3087' ) ); ?><input type="text" name="name" required autocomplete="name"></label></p><p><label><?php echo wp_kses_post( mado_air_t( 'k1e884e30' ) ); ?><input type="email" name="email" required autocomplete="email"></label></p><p><label><?php echo wp_kses_post( mado_air_t( 'k59716c97' ) ); ?><input type="text" name="country" autocomplete="country-name"></label></p><p><label><?php echo wp_kses_post( mado_air_t( 'kd37d8955' ) ); ?><select name="colour"><option><?php echo wp_kses_post( mado_air_t( 'k56c377d8' ) ); ?></option><option><?php echo wp_kses_post( mado_air_t( 'k9e23f5f5' ) ); ?></option><option><?php echo wp_kses_post( mado_air_t( 'k37979b9c' ) ); ?></option></select></label></p><p><button type="submit" class="ma-formbtn"><?php echo wp_kses_post( mado_air_t( 'kfd278915' ) ); ?></button></p></form>
<!-- /wp:html --><!-- wp:image {"sizeSlug":"full","linkDestination":"none","aspectRatio":"16/9","scale":"cover"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $u . 'hero-bedroom-sill.webp' ); ?>" alt="<?php echo esc_attr( mado_air_t( 'a3a094d85' ) ); ?>" style="aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
