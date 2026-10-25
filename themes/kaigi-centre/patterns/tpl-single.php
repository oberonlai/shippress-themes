<?php
/**
 * Title: Template: single
 * Slug: kaigi-centre/tpl-single
 * Categories: kaigi-centre
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"kc-main kc-main--front","layout":{"type":"default"}} -->
<main class="wp-block-group kc-main kc-main--front">
<!-- wp:group {"tagName":"section","align":"full","className":"kc-hero kc-hero--inner","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-hero kc-hero--inner">
<!-- wp:group {"className":"kc-hero__stagewrap","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hero__stagewrap">
<!-- wp:group {"className":"kc-hero__stage","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hero__stage">
<!-- wp:group {"className":"kc-hero__wipe-i sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hero__wipe-i sp-reveal sp-reveal--wipe">
<!-- wp:post-featured-image {"aspectRatio":"3/2","className":"kc-hero__photo"} /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-pill","layout":{"type":"default"}} -->
<div class="wp-block-group kc-pill">
<!-- wp:paragraph {"className":"kc-pill__text"} -->
<p class="kc-pill__text"><svg class="kc-pill__icon" viewBox="0 0 16 16" width="14" height="14" aria-hidden="true" focusable="false"><circle cx="8" cy="8" r="6.5" fill="none" stroke="currentColor" stroke-width="1.2"/><path d="M8 7v4M8 4.8v.1" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/></svg><?php echo esc_html( kaigi_centre_t( 'single_pill' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-hero__panel","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hero__panel">
<!-- wp:post-terms {"term":"category","separator":" · ","className":"kc-label kc-label--light"} /-->
<!-- wp:post-title {"level":1,"className":"kc-hero__title kc-hero__title--i"} /-->
<!-- wp:group {"className":"kc-rows","layout":{"type":"default"}} -->
<div class="wp-block-group kc-rows">
<!-- wp:group {"className":"kc-row kc-row--info","layout":{"type":"default"}} -->
<div class="wp-block-group kc-row kc-row--info">
<!-- wp:paragraph {"className":"kc-row__lab"} -->
<p class="kc-row__lab"><?php echo esc_html( kaigi_centre_t( 'single_date_lab' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:post-date {"format":"j M Y","className":"kc-row__val"} /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"kc-inner kc-inner--first","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-inner kc-inner--first"><!-- wp:post-content {"layout":{"type":"default"}} /--></section>
<!-- /wp:group -->
</main>
<!-- /wp:group -->
