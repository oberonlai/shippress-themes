<?php
/**
 * Title: Header: wordmark, menu, viewing tab
 * Slug: kasane-venue/header-main
 * Categories: kasane-venue
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"className":"kv-header","layout":{"type":"default"}} -->
<div class="wp-block-group kv-header"><!-- wp:html -->
<a class="kv-mark" href="/"><span class="kv-mark__1"><?php echo wp_kses_post( kasane_venue_t( 'wordmark_1' ) ); ?></span><span class="kv-mark__2"><?php echo wp_kses_post( kasane_venue_t( 'wordmark_2' ) ); ?></span></a>
<!-- /wp:html -->

<!-- wp:navigation {"overlayMenu":"mobile","className":"kv-nav","layout":{"type":"flex","orientation":"horizontal"}} /-->

<!-- wp:html -->
<a class="kv-pill" href="/viewings/"><?php echo wp_kses_post( kasane_venue_t( 'viewing_pill' ) ); ?></a>
<a class="kv-tab" href="/viewings/"><?php echo wp_kses_post( kasane_venue_t( 'tab' ) ); ?></a>
<!-- /wp:html --></div>
<!-- /wp:group -->
