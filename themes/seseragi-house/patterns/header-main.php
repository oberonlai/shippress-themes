<?php
/**
 * Title: Header: overlay
 * Slug: seseragi-house/header-main
 * Categories: seseragi-house
 * Viewport Width: 1440
 * Description: Transparent overlay header: small label and wordmark top-left, an ask link and the one Menu button top-right.
 */
?>
<!-- wp:group {"className":"sese-head","layout":{"type":"default"}} -->
<div class="wp-block-group sese-head"><!-- wp:group {"className":"sese-head__brand","layout":{"type":"default"}} -->
<div class="wp-block-group sese-head__brand">
<!-- wp:paragraph {"className":"sese-head__label"} -->
<p class="sese-head__label"><?php echo esc_html( seseragi_house_t( 'head_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:site-title {"level":0,"className":"sese-logo"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sese-head__right","layout":{"type":"default"}} -->
<div class="wp-block-group sese-head__right">
<!-- wp:paragraph {"className":"sese-head__ask"} -->
<p class="sese-head__ask"><a href="/ask/"><?php echo esc_html( seseragi_house_t( 'head_ask' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:navigation {"overlayMenu":"always","className":"sese-nav","layout":{"type":"flex","justifyContent":"right"}} /-->
</div>
<!-- /wp:group --></div>
<!-- /wp:group -->
