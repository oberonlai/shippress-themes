<?php
/**
 * Title: Header: centred nav
 * Slug: kawa-dumplings/header-main
 * Categories: kawa-dumplings
 * Viewport Width: 1440
 * Description: Wordmark left, one centred top menu and a text link to the steam letter.
 */
?>
<!-- wp:group {"className":"kd-head","layout":{"type":"default"}} -->
<div class="wp-block-group kd-head"><!-- wp:site-title {"level":0,"className":"kd-logo"} /-->

<!-- wp:navigation {"overlayMenu":"mobile","className":"kd-nav","layout":{"type":"flex","justifyContent":"center"}} /-->

<!-- wp:paragraph {"className":"kd-head__letter"} -->
<p class="kd-head__letter"><a href="/steam-letter/"><?php echo esc_html( kawa_dumplings_t( 'head_letter' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
