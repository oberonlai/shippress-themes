<?php
/**
 * Title: Header bar
 * Slug: shirushi-customs/head-bar
 * Categories: shirushi-customs
 * Inserter: no
 * Description: Transparent header over the dark stage: wordmark, one menu and an outline pill.
 */
?>
<!-- wp:group {"align":"full","className":"sc-header","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull sc-header"><!-- wp:group {"className":"sc-bar","layout":{"type":"default"}} -->
<div class="wp-block-group sc-bar"><!-- wp:paragraph {"className":"sc-brand"} -->
<p class="sc-brand"><a href="/"><?php echo esc_html( sc_t( 'brand' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:navigation {"overlayMenu":"mobile","className":"sc-nav","layout":{"type":"flex","orientation":"horizontal"}} /-->

<!-- wp:paragraph {"className":"sc-head-pill"} -->
<p class="sc-head-pill"><a href="/contact/"><?php echo esc_html( sc_t( 'head_pill' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
