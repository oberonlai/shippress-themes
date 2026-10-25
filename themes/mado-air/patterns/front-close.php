<?php
/**
 * Title: Home: closing call to action
 * Slug: mado-air/front-close
 * Categories: mado-air
 * Keywords: air purifier, landing, product
 * Viewport Width: 1440
 * Description: Grey band repeating the pre-order call to action.
 */
$u = get_theme_file_uri( 'assets/images/' );
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ma-close","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ma-close"><!-- wp:group {"align":"wide","className":"ma-close__in","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ma-close__in"><!-- wp:group {"className":"ma-close__l","layout":{"type":"default"}} -->
<div class="wp-block-group ma-close__l"><!-- wp:heading {"level":2,"className":"ma-close__h"} -->
<h2 class="wp-block-heading ma-close__h"><?php echo wp_kses_post( mado_air_t( 'kb9e4f876' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph {"className":"ma-close__tx"} -->
<p class="ma-close__tx"><?php echo wp_kses_post( mado_air_t( 'k3f46fde6' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"ma-btnrow"} -->
<div class="wp-block-buttons ma-btnrow"><!-- wp:button {"className":"ma-pill ma-pill--fill ma-pill--lg"} -->
<div class="wp-block-button ma-pill ma-pill--fill ma-pill--lg"><a class="wp-block-button__link wp-element-button" href="/pre-order/"><?php echo wp_kses_post( mado_air_t( 'kde08ef55' ) ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"ma-pill ma-pill--line ma-pill--lg"} -->
<div class="wp-block-button ma-pill ma-pill--line ma-pill--lg"><a class="wp-block-button__link wp-element-button" href="/early-access/"><?php echo wp_kses_post( mado_air_t( 'k5c8e6fb7' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
