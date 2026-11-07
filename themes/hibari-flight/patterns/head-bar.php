<?php
/**
 * Title: Header bar
 * Slug: hibari-flight/head-bar
 * Categories: hibari-flight
 * Keywords: flight school, pilot, aviation
 * Viewport Width: 1440
 * Inserter: no
 * Description: Lark mark on a navy blob, centred wordmark, small trial-flight link and the round menu button that opens the overlay.
 */
?>
<!-- wp:group {"className":"hf-bar","layout":{"type":"default"}} -->
<div class="wp-block-group hf-bar"><!-- wp:group {"className":"hf-bar__brand","layout":{"type":"default"}} -->
<div class="wp-block-group hf-bar__brand"><!-- wp:html -->
<div class="hf-blob hf-blob--head" aria-hidden="true"></div>
<!-- /wp:html --><!-- wp:image {"sizeSlug":"full","linkDestination":"custom","href":"/","className":"hf-mark"} -->
<figure class="wp-block-image size-full hf-mark"><a href="/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/mark.svg' ) ); ?>" alt="Hibari Flight, home"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:group --><!-- wp:paragraph {"className":"hf-bar__word"} -->
<p class="hf-bar__word"><a href="/">HIBARI FLIGHT</a></p>
<!-- /wp:paragraph --><!-- wp:group {"className":"hf-bar__right","layout":{"type":"default"}} -->
<div class="wp-block-group hf-bar__right"><!-- wp:paragraph {"className":"hf-bar__cta"} -->
<p class="hf-bar__cta"><a href="/trial-flight/">Book a trial flight</a></p>
<!-- /wp:paragraph --><!-- wp:navigation {"overlayMenu":"always","className":"hf-nav","icon":"menu","layout":{"type":"flex","orientation":"vertical"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
