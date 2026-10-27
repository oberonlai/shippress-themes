<?php
/**
 * Title: Header: title band
 * Slug: renkei-forum/head-band
 * Categories: renkei-forum
 * Viewport Width: 1440
 * Description: Blue title band with date lines, the forum name, anchor pills and the ticket button.
 */
?>
<!-- wp:group {"align":"full","className":"rf-band","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull rf-band"><!-- wp:group {"className":"rf-band__l","layout":{"type":"default"}} -->
<div class="wp-block-group rf-band__l"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( rf_t( 'k3d796a1d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( rf_t( 'k0899f98a' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:site-title {"level":0,"isLink":false,"className":"rf-band__title"} /-->

<!-- wp:group {"className":"rf-band__r","layout":{"type":"default"}} -->
<div class="wp-block-group rf-band__r"><!-- wp:navigation {"overlayMenu":"always","className":"rf-nav","layout":{"type":"flex","orientation":"horizontal"}} /-->

<!-- wp:buttons {"className":"rf-cta rf-cta--dark rf-cta--sm"} -->
<div class="wp-block-buttons rf-cta rf-cta--dark rf-cta--sm"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/tickets/#request"><?php echo wp_kses_post( rf_t( 'kbb872b0f' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
