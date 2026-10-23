<?php
/**
 * Title: Header: brand, menu and call buttons
 * Slug: aoba-veterinary/header-main
 * Categories: aoba-veterinary
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"av-top","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull av-top"><!-- wp:group {"align":"wide","className":"av-top__in","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide av-top__in"><!-- wp:group {"className":"av-brand","layout":{"type":"default"}} -->
<div class="wp-block-group av-brand"><!-- wp:site-title {"level":0,"className":"av-brand__name"} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"av-call"} -->
<p class="av-call"><span class="av-call__label"><?php echo wp_kses_post( aoba_veterinary_t( 'k68e05a95' ) ); ?></span> <a href="tel:+15550142300">+1 555 0142 300</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"av-hours"} -->
<p class="av-hours"><?php echo wp_kses_post( aoba_veterinary_t( 'k1d912e17' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"av-navrow","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull av-navrow"><!-- wp:navigation {"overlayMenu":"mobile","className":"av-menu","layout":{"type":"flex","justifyContent":"center"}} /--></div>
<!-- /wp:group -->
