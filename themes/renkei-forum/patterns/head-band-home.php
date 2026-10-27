<?php
/**
 * Title: Header: title band (home, H1)
 * Slug: renkei-forum/head-band-home
 * Categories: renkei-forum
 * Viewport Width: 1440
 * Description: The same band with the forum name as the page H1.
 */
?>
<!-- wp:group {"align":"full","className":"rf-band rf-band--intro","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull rf-band rf-band--intro"><!-- wp:group {"className":"rf-band__l","layout":{"type":"default"}} -->
<div class="wp-block-group rf-band__l"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( rf_t( 'k3d796a1d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( rf_t( 'k0899f98a' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:site-title {"level":1,"isLink":false,"className":"rf-band__title"} /-->

<!-- wp:group {"className":"rf-band__r","layout":{"type":"default"}} -->
<div class="wp-block-group rf-band__r"><!-- wp:navigation {"overlayMenu":"always","className":"rf-nav","layout":{"type":"flex","orientation":"horizontal"}} /-->

<!-- wp:buttons {"className":"rf-cta rf-cta--dark rf-cta--sm"} -->
<div class="wp-block-buttons rf-cta rf-cta--dark rf-cta--sm"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/tickets/#request"><?php echo wp_kses_post( rf_t( 'kbb872b0f' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
