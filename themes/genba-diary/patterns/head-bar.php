<?php
/**
 * Title: Header: tile, anchor menu, two request cells
 * Slug: genba-diary/head-bar
 * Categories: genba-diary
 * Keywords: construction, site diary, landing
 * Viewport Width: 1440
 * Inserter: no
 * Description: Sticky 84 px white header: steel logo tile flush top-left, wordmark, centred anchor menu with dividers, two flush cells at the top-right edge.
 */
?>
<!-- wp:group {"className":"gd-bar","layout":{"type":"default"}} -->
<div class="wp-block-group gd-bar"><!-- wp:html -->
<svg class="gd-defs" width="0" height="0" aria-hidden="true" focusable="false"><defs><clipPath id="gd-tri" clipPathUnits="objectBoundingBox"><polygon points="0.0357,0 0.3476,0 0.3119,1 0,1"/><polygon points="0.3619,0 0.6738,0 0.6381,1 0.3262,1"/><polygon points="0.6881,0 1,0 0.9643,1 0.6524,1"/></clipPath><clipPath id="gd-tri-s" clipPathUnits="objectBoundingBox"><polygon points="0.0313,0 0.3458,0 0.3146,1 0,1"/><polygon points="0.3583,0 0.6729,0 0.6417,1 0.3271,1"/><polygon points="0.6854,0 1,0 0.9688,1 0.6542,1"/></clipPath></defs></svg>
<!-- /wp:html -->

<!-- wp:html -->
<a class="gd-tile" href="/" aria-label="<?php echo esc_attr( genba_diary_t( 'home_label' ) ); ?>">GD</a>
<!-- /wp:html -->

<!-- wp:site-title {"level":0,"className":"gd-brand"} /-->

<!-- wp:navigation {"overlayMenu":"mobile","className":"gd-nav","layout":{"type":"flex","justifyContent":"center"}} /-->

<!-- wp:html -->
<div class="gd-cells"><a class="gd-cell gd-cell--req" href="<?php echo is_front_page() ? '#request' : '/request/'; ?>"><svg viewBox="0 0 20 20" width="20" height="20" fill="none" stroke="#fff" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 3h9l3 3v11H4z"/><path d="M7 9h6M7 12.5h6"/></svg><span><?php echo esc_html( genba_diary_t( 'cta' ) ); ?></span></a><a class="gd-cell gd-cell--call" href="tel:+31105550141"><svg viewBox="0 0 20 20" width="20" height="20" fill="none" stroke="#fff" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 3l3 .5 1.2 3.3-1.8 1.4a9 9 0 0 0 4.4 4.4l1.4-1.8 3.3 1.2.5 3C13 18 2 7 5 3z"/></svg><span><?php echo esc_html( genba_diary_t( 'call' ) ); ?></span></a></div>
<!-- /wp:html --></div>
<!-- /wp:group -->
