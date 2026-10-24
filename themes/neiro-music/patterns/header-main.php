<?php
/**
 * Title: Header: top bar
 * Slug: neiro-music/header-main
 * Categories: neiro-music
 * Description: Wordmark left, menu and Book a trial outline button at the right.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"className":"nm-bar nm-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group nm-bar nm-wrap"><!-- wp:paragraph {"className":"nm-mark"} -->
<p class="nm-mark"><a href="/">Neiro</a></p>
<!-- /wp:paragraph -->

<!-- wp:navigation {"overlayMenu":"mobile","className":"nm-nav","layout":{"type":"flex","justifyContent":"right"}} /-->

<!-- wp:buttons {"className":"nm-btn-wrap"} -->
<div class="wp-block-buttons nm-btn-wrap"><!-- wp:button {"className":"nm-btn"} -->
<div class="wp-block-button nm-btn"><a class="wp-block-button__link wp-element-button" href="/visit/"><?php echo esc_html( neiro_music_t( 'nav_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
