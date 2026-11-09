<?php
/**
 * Title: Header bar
 * Slug: hibari-flight/head-bar
 * Categories: hibari-flight
 * Keywords: flight school, pilot, aviation
 * Viewport Width: 1440
 * Inserter: no
 * Description: Logo lockup on the left (drawn skylark mark and a two-line HIBARI / FLIGHT SCHOOL wordmark), small trial-flight link and the round menu button that opens the overlay.
 */
?>
<!-- wp:group {"className":"hf-bar","layout":{"type":"default"}} -->
<div class="wp-block-group hf-bar"><!-- wp:group {"className":"hf-bar__brand","layout":{"type":"default"}} -->
<div class="wp-block-group hf-bar__brand"><!-- wp:html -->
<a class="hf-bar__home" href="/" aria-label="Hibari Flight School, home"><img class="hf-mark" src="<?php echo esc_url( get_theme_file_uri( 'assets/mark.svg' ) ); ?>" alt="" width="48" height="48"/><span class="hf-bar__word"><span class="hf-bar__name">HIBARI</span><span class="hf-bar__sub">FLIGHT SCHOOL</span></span></a>
<!-- /wp:html --></div>
<!-- /wp:group --><!-- wp:group {"className":"hf-bar__right","layout":{"type":"default"}} -->
<div class="wp-block-group hf-bar__right"><!-- wp:paragraph {"className":"hf-bar__cta"} -->
<p class="hf-bar__cta"><a href="/trial-flight/">Book a trial flight</a></p>
<!-- /wp:paragraph --><!-- wp:navigation {"overlayMenu":"always","className":"hf-nav","icon":"menu","layout":{"type":"flex","orientation":"vertical"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
