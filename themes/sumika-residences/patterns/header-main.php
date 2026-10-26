<?php
/**
 * Title: Header: brand, menu and call buttons
 * Slug: sumika-residences/header-main
 * Categories: sumika-residences
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"className":"sm-brand","layout":{"type":"default"}} -->
<div class="wp-block-group sm-brand"><!-- wp:paragraph {"className":"sm-brand__name"} -->
<p class="sm-brand__name"><a href="/"><?php echo wp_kses_post( sumika_residences_t( 'k4b4c1fce' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sm-brand__sub"} -->
<p class="sm-brand__sub"><?php echo wp_kses_post( sumika_residences_t( 'k7ce03e7c' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sm-pill","layout":{"type":"default"}} -->
<div class="wp-block-group sm-pill"><!-- wp:html -->
<?php echo wp_kses_post( sumika_residences_t( 'kff3058cd' ) ); ?>
<!-- /wp:html -->

<!-- wp:navigation {"overlayMenu":"mobile","className":"sm-nav","layout":{"type":"flex","orientation":"horizontal"}} /-->

<!-- wp:html -->
<span class="sm-pill__chip"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" aria-hidden="true"><circle cx="8" cy="8" r="3"/><path d="M8 1v2M8 13v2M1 8h2M13 8h2M3 3l1.4 1.4M11.6 11.6L13 13M3 13l1.4-1.4M11.6 4.4L13 3"/></svg><?php echo wp_kses_post( sumika_residences_t( 'k3207363e' ) ); ?></span>
<!-- /wp:html --></div>
<!-- /wp:group -->
