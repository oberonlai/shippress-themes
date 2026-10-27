<?php
/**
 * Title: Header: wordmark band
 * Slug: shizuku-filter/header-main
 * Categories: shizuku-filter
 * Keywords: water filter, crowdfunding, landing
 * Viewport Width: 1440
 * Description: White band with the giant two-line wordmark, anchor menu, pill button and the fixed vertical pill.
 * Inserter: no
 */
?>
<!-- wp:group {"className":"sf-band","layout":{"type":"default"}} -->
<div class="wp-block-group sf-band">
<!-- wp:paragraph {"className":"sf-wm"} -->
<p class="sf-wm"><a href="/"><span class="sf-wm__l1"><?php shizuku_filter_e( 'wm1' ); ?></span><span class="sf-wm__l2"><?php shizuku_filter_e( 'wm2' ); ?><small class="sf-wm__tag"><?php shizuku_filter_e( 'wm_tag' ); ?></small></span></a></p>
<!-- /wp:paragraph -->
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
