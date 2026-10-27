<?php
/**
 * Title: Header: updates title band
 * Slug: shizuku-filter/header-updates
 * Categories: shizuku-filter
 * Keywords: water filter, crowdfunding, landing
 * Viewport Width: 1440
 * Description: White band with the page title in the wordmark size, anchor menu and pill button.
 * Inserter: no
 */
?>
<!-- wp:group {"className":"sf-band sf-band--page","layout":{"type":"default"}} -->
<div class="wp-block-group sf-band sf-band--page">
<!-- wp:group {"className":"sf-pt","layout":{"type":"default"}} -->
<div class="wp-block-group sf-pt"><!-- wp:html -->
<a class="sf-pt__home" href="/"><?php shizuku_filter_e( 'brand' ); ?></a>
<!-- /wp:html --><!-- wp:heading {"level":1,"className":"sf-pt__t"} -->
<h1 class="wp-block-heading sf-pt__t"><?php shizuku_filter_e( 'hdr_updates' ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"sf-band__r","layout":{"type":"default"}} -->
<div class="wp-block-group sf-band__r">
<!-- wp:navigation {"overlayMenu":"mobile","className":"sf-nav","layout":{"type":"flex","orientation":"horizontal"}} /-->
<!-- wp:paragraph {"className":"sf-pillbtn"} -->
<p class="sf-pillbtn"><a href="/#rewards"><?php shizuku_filter_e( 'cta' ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:html -->
<a class="sf-tab" href="/#rewards"><span><?php shizuku_filter_e( 'pill' ); ?></span></a><a class="sf-sticky" href="/#rewards"><?php shizuku_filter_e( 'cta' ); ?></a>
<!-- /wp:html -->
