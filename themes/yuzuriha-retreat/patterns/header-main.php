<?php
/**
 * Title: Header: frosted strip, wordmark, centred menu and the ink pill
 * Slug: yuzuriha-retreat/header-main
 * Categories: yuzuriha-retreat
 * Viewport Width: 1440
 * Description: Fixed 67px frosted-glass strip over the first photograph: wordmark left, the one top menu centred, ink pill right.
 */
?>
<!-- wp:group {"className":"yr-head","layout":{"type":"default"}} -->
<div class="wp-block-group yr-head"><!-- wp:paragraph {"className":"yr-wordmark"} -->
<p class="yr-wordmark"><a href="<?php echo yuzuriha_retreat_url( '/' ); ?>"><?php echo esc_html( yuzuriha_retreat_t( 'logo_name' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:navigation {"overlayMenu":"mobile","className":"yr-nav","layout":{"type":"flex","justifyContent":"center"}} /-->

<!-- wp:paragraph {"className":"yr-pill"} -->
<p class="yr-pill"><a href="<?php echo yuzuriha_retreat_url( '/reserve/' ); ?>"><span class="yr-pill__long"><?php echo esc_html( yuzuriha_retreat_t( 'cta' ) ); ?></span><span class="yr-pill__short"><?php echo esc_html( yuzuriha_retreat_t( 'cta_short' ) ); ?></span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
