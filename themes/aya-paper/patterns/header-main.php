<?php
/**
 * Title: Header: brand, menu and call buttons
 * Slug: aya-paper/header-main
 * Categories: aya-paper
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"ap-header","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull ap-header"><!-- wp:group {"className":"ap-bar","layout":{"type":"default"}} -->
<div class="wp-block-group ap-bar"><!-- wp:site-title {"level":0,"className":"ap-brand"} /-->

<!-- wp:navigation {"overlayMenu":"always","className":"ap-nav","layout":{"type":"flex","orientation":"horizontal","justifyContent":"center"}} /-->

<!-- wp:paragraph {"className":"ap-contact"} -->
<p class="ap-contact"><a href="/contact/"><?php echo wp_kses_post( aya_paper_t( 'kbbaff128' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
