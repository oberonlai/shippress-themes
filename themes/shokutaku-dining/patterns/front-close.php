<?php
/**
 * Title: Home: closing booking line
 * Slug: shokutaku-dining/front-close
 * Categories: shokutaku-dining
 * Keywords: booking, call to action
 * Viewport Width: 1440
 * Description: A centred closing line, a booking button and the phone number on the greige ground.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"shk-close","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull shk-close"><!-- wp:heading {"level":2,"className":"shk-close__h"} -->
<h2 class="wp-block-heading shk-close__h"><?php echo wp_kses_post( shokutaku_dining_t( 'k31ec8b64' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons {"className":"shk-btn-row shk-btn-row--center"} -->
<div class="wp-block-buttons shk-btn-row shk-btn-row--center"><!-- wp:button {"className":"shk-btn is-style-outline"} -->
<div class="wp-block-button shk-btn is-style-outline"><a class="wp-block-button__link wp-element-button" href="/reservations/#book"><?php echo wp_kses_post( shokutaku_dining_t( 'ka09e00d1' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"shk-note shk-note--center"} -->
<p class="shk-note shk-note--center"><?php echo wp_kses_post( shokutaku_dining_t( 'ke133e822' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
