<?php
/**
 * Title: Header: logo tile, floating nav slab, request pill
 * Slug: kantei-valuers/head-bar
 * Categories: kantei-valuers
 * Keywords: header, navigation
 * Viewport Width: 1440
 * Inserter: no
 * Description: A white square logo tile at the top-left and a white floating slab at the top-right with the anchor menu and the one request pill.
 */
$e = 'kantei_valuers_e';
$href = is_front_page() ? '#request' : '/contact/';
?>
<!-- wp:group {"className":"kv-header","layout":{"type":"default"}} -->
<div class="wp-block-group kv-header"><!-- wp:html -->
<a class="kv-tile" href="/"><svg class="kv-tile__mark" width="56" height="56" viewBox="0 0 56 56" aria-hidden="true" focusable="false"><rect x="2" y="2" width="52" height="52" fill="#4E555C"/><path d="M12 38h32M16 38v-5M24 38v-3M32 38v-5M40 38v-3" stroke="#fff" stroke-width="2" fill="none"/><path d="M12 20h32" stroke="#EC6C00" stroke-width="3"/></svg><span class="kv-tile__name"><?php echo esc_html( kantei_valuers_t( 'mark_name' ) ); ?></span><span class="kv-tile__sub"><?php echo esc_html( kantei_valuers_t( 'mark_sub' ) ); ?></span></a>
<!-- /wp:html -->

<!-- wp:group {"className":"kv-slab","layout":{"type":"default"}} -->
<div class="wp-block-group kv-slab"><!-- wp:navigation {"overlayMenu":"mobile","className":"kv-nav","layout":{"type":"flex","justifyContent":"left"}} /-->

<!-- wp:html -->
<a class="kv-pill kv-pill--head" href="<?php echo esc_attr( $href ); ?>"><svg width="16" height="16" viewBox="0 0 16 16" aria-hidden="true" focusable="false"><path d="M3.5 1.5h6l3 3v10h-9zM9.5 1.5v3h3M5.5 8h5M5.5 11h5" fill="none" stroke="currentColor" stroke-width="1.2"/></svg><span class="kv-tr"><span><?php echo esc_html( kantei_valuers_t( 'cta' ) ); ?></span><span aria-hidden="true"><?php echo esc_html( kantei_valuers_t( 'cta' ) ); ?></span></span></a>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
