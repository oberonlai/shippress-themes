<?php
/**
 * Title: Header: bar
 * Slug: ushio-line/head-bar
 * Categories: ushio-line
 * Keywords: ferry, harbour, header
 * Viewport Width: 1440
 * Description: Transparent overlay header: the two-line wordmark, menu and the dashed ellipse around Today's sailings.
 */
?>
<!-- wp:group {"className":"ul-bar","layout":{"type":"default"}} -->
<div class="wp-block-group ul-bar"><!-- wp:site-title {"level":0,"isLink":true,"className":"ul-mark"} /-->

<!-- wp:navigation {"overlayMenu":"mobile","className":"ul-nav","layout":{"type":"flex","orientation":"horizontal"}} /-->

<!-- wp:html -->
<a class="ul-today" href="/#day"><span class="ul-today__dot" aria-hidden="true"></span><?php echo esc_html( ushio_line_t( 'today' ) ); ?> ↓</a>
<!-- /wp:html --></div>
<!-- /wp:group -->
