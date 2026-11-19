<?php
/**
 * Title: Header: wordmark and the one menu
 * Slug: rinrin-cycletours/header-main
 * Categories: rinrin-cycletours
 * Viewport Width: 1440
 * Description: Transparent header over the first photograph: wordmark with a wheel glyph and the single top menu in three link groups with arrows; after the hero the groups give way to an outline Menu pill.
 */
?>
<!-- wp:group {"className":"rc-head","layout":{"type":"default"}} -->
<div class="wp-block-group rc-head"><!-- wp:paragraph {"className":"rc-wordmark"} -->
<p class="rc-wordmark"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><svg class="rc-wheel" viewBox="0 0 24 24" width="22" height="22" aria-hidden="true" focusable="false"><circle cx="12" cy="12" r="10" fill="none" stroke="currentColor" stroke-width="1.5"/><circle cx="12" cy="12" r="2" fill="none" stroke="currentColor" stroke-width="1.5"/><path d="M12 2v8M12 14v8M2 12h8M14 12h8M5 5l5.5 5.5M13.5 13.5 19 19M19 5l-5.500 5.500M10.500 13.500 5 19" stroke="currentColor" stroke-width="1" fill="none"/></svg><?php echo esc_html( rinrin_cycletours_t( 'logo_name' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:navigation {"overlayMenu":"mobile","overlayBackgroundColor":"mist","overlayTextColor":"ink","className":"rc-nav","layout":{"type":"flex","justifyContent":"left"}} /--></div>
<!-- /wp:group -->
