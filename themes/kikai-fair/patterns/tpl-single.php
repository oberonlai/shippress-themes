<?php
/**
 * Title: Template: single
 * Slug: kikai-fair/tpl-single
 * Categories: kikai-fair
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"kf-main kf-main--single","layout":{"type":"constrained"}} -->
<main class="wp-block-group kf-main kf-main--single"><!-- wp:post-title {"level":1} /-->

<!-- wp:post-date /-->

<!-- wp:post-featured-image {"aspectRatio":"3/2"} /-->

<!-- wp:post-content {"layout":{"type":"constrained"}} /-->

<!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-terms {"term":"post_tag","prefix":"Tags: "} /-->

<!-- wp:buttons {"className":"kf-btn-line kf-single-cta"} -->
<div class="wp-block-buttons kf-btn-line kf-single-cta"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/request-a-pass/"><?php echo wp_kses_post( kikai_fair_t( 'k55f8b22f' ) ); ?><svg class="kf-arrow" width="28" height="6" viewBox="0 0 28 6" aria-hidden="true" focusable="false"><path d="M0 3H27M23.5.5 27 3l-3.5 2.5" fill="none" stroke="currentColor" stroke-width="1"/></svg></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></main>
<!-- /wp:group -->