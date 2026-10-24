<?php
/**
 * Title: Template: single
 * Slug: seisui-environmental/tpl-single
 * Categories: seisui-environmental
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"ss-main","style":{"spacing":{"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group ss-main" style="margin-top:0"><!-- wp:group {"className":"ss-single","layout":{"type":"default"}} -->
<div class="wp-block-group ss-single"><!-- wp:post-date {"className":"ss-case__meta"} /-->

<!-- wp:post-title {"level":1,"className":"ss-single__title"} /-->

<!-- wp:post-featured-image {"aspectRatio":"16/9"} /-->

<!-- wp:post-content {"layout":{"type":"default"}} /-->

<!-- wp:paragraph {"className":"ss-more"} -->
<p class="ss-more"><a href="/journal/"><?php echo wp_kses_post( seisui_environmental_t( 'k4fb581ac' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->