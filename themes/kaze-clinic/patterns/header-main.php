<?php
/**
 * Title: Header: floating white slab
 * Slug: kaze-clinic/header-main
 * Categories: kaze-clinic
 * Inserter: no
 * Viewport Width: 1440
 * Description: A white 68px slab with 8px radius inset from the viewport edges: logo mark and name, one menu with a green marker after Conditions, and two icon links with captions.
 */
?>
<!-- wp:group {"align":"full","className":"kz-head","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kz-head"><!-- wp:group {"className":"kz-head__slab","layout":{"type":"default"}} -->
<div class="wp-block-group kz-head__slab"><!-- wp:html -->
<a class="kz-brand__mark" href="/" aria-label="<?php echo esc_attr( kaze_clinic_t( 'hd_home' ) ); ?>"><svg class="kz-mark" width="30" height="24" viewBox="0 0 30 24" aria-hidden="true" focusable="false"><path d="M1 5h18a4 4 0 1 0-4-4M1 12h24a4 4 0 1 1-4 4M1 19h13a3 3 0 1 1-3 3" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></a>
<!-- /wp:html -->

<!-- wp:site-title {"level":0,"className":"kz-brand"} /-->

<!-- wp:navigation {"overlayMenu":"mobile","icon":"menu","className":"kz-nav","layout":{"type":"flex","orientation":"horizontal","justifyContent":"right"}} /-->

<!-- wp:html -->
<div class="kz-head__icons"><a href="/visit/"><svg width="20" height="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false"><path d="M10 18s6-5.2 6-10a6 6 0 1 0-12 0c0 4.800 6 10 6 10z" fill="none" stroke="currentColor" stroke-width="1.5"/><circle cx="10" cy="8" r="2" fill="none" stroke="currentColor" stroke-width="1.5"/></svg><span><?php echo esc_html( kaze_clinic_t( 'hd_visit' ) ); ?></span></a><a href="/book/"><svg width="20" height="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false"><rect x="3" y="4" width="14" height="13" rx="2" fill="none" stroke="currentColor" stroke-width="1.5"/><path d="M3 8h14M7 2.500v3M13 2.500v3" fill="none" stroke="currentColor" stroke-width="1.5"/></svg><span><?php echo esc_html( kaze_clinic_t( 'hd_book' ) ); ?></span></a></div>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
