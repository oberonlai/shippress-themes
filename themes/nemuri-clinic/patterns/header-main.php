<?php
/**
 * Title: Header: brand, menu and call buttons
 * Slug: nemuri-clinic/header-main
 * Categories: nemuri-clinic
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"nc-header","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull nc-header"><!-- wp:group {"className":"nc-bar","layout":{"type":"default"}} -->
<div class="wp-block-group nc-bar"><!-- wp:group {"className":"nc-brand","layout":{"type":"default"}} -->
<div class="wp-block-group nc-brand"><!-- wp:site-title {"level":0,"className":"nc-brand__name"} /-->

<!-- wp:paragraph {"className":"nc-brand__sub"} -->
<p class="nc-brand__sub"><?php echo wp_kses_post( nemuri_clinic_t( 'k989e0def' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:navigation {"overlayMenu":"mobile","className":"nc-nav","layout":{"type":"flex","orientation":"horizontal"}} /-->

<!-- wp:paragraph {"className":"nc-tel"} -->
<p class="nc-tel"><span class="nc-tel__l"><?php echo wp_kses_post( nemuri_clinic_t( 'k6ab9375e' ) ); ?></span> <a href="tel:+12065550142">(206) 555-0142</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
