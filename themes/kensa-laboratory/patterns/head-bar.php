<?php
/**
 * Title: Header: bar
 * Slug: kensa-laboratory/head-bar
 * Categories: kensa-laboratory
 * Keywords: materials testing, laboratory, concrete
 * Viewport Width: 1440
 * Description: Slim top bar: wordmark, anchor menu and the booking button.
 */
?>
<!-- wp:group {"className":"kl-bar","layout":{"type":"default"}} -->
<div class="wp-block-group kl-bar"><!-- wp:site-title {"level":0,"isLink":true,"className":"kl-mark"} /-->

<!-- wp:navigation {"overlayMenu":"mobile","className":"kl-nav","layout":{"type":"flex","orientation":"horizontal"}} /-->

<!-- wp:html -->
<div class="wp-block-buttons kl-head__cta"><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/#book"><span class="kl-btn-long"><?php echo esc_html( kensa_laboratory_t( 'cta' ) ); ?></span><span class="kl-btn-short"><?php echo esc_html( kensa_laboratory_t( 'cta_short' ) ); ?></span></a></div>
</div>
<!-- /wp:html --></div>
<!-- /wp:group -->
