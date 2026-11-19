<?php
/**
 * Title: Header: top bar
 * Slug: kisha-rail/header-main
 * Categories: kisha-rail
 * Viewport Width: 1440
 * Description: White sticky top bar with a rounded bottom: wordmark, one menu, language mark and two tiles flush right.
 */
?>
<!-- wp:group {"className":"kr-head","layout":{"type":"default"}} -->
<div class="wp-block-group kr-head">
<!-- wp:site-title {"level":0,"className":"kr-logo"} /-->

<!-- wp:navigation {"overlayMenu":"mobile","icon":"menu","className":"kr-nav","layout":{"type":"flex","justifyContent":"left"}} /-->

<!-- wp:html -->
<a class="kr-lang" href="/" aria-label="<?php echo esc_attr( kisha_rail_t( 'head_lang_label' ) ); ?>"><svg viewBox="0 0 24 24" width="16" height="16" aria-hidden="true" focusable="false"><circle cx="12" cy="12" r="9" fill="none" stroke="currentColor" stroke-width="1.4"/><path d="M3 12h18M12 3c3 3 3 15 0 18M12 3c-3 3-3 15 0 18" fill="none" stroke="currentColor" stroke-width="1.4"/></svg><span>EN</span></a>
<!-- /wp:html -->

<!-- wp:html -->
<div class="kr-tiles"><a class="kr-tile kr-tile--a" href="/brochure/"><svg viewBox="0 0 24 24" width="20" height="20" aria-hidden="true" focusable="false"><path d="M3 6h18v12H3z M3 6l9 7 9-7" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/></svg><span><?php echo esc_html( kisha_rail_t( 'head_brochure' ) ); ?></span></a><a class="kr-tile kr-tile--b" href="/departures-and-prices/"><span><?php echo esc_html( kisha_rail_t( 'head_departures' ) ); ?></span></a></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
