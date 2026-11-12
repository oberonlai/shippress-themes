<?php
/**
 * Title: Template: single
 * Slug: homura-safety/tpl-single
 * Categories: homura-safety
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"hs-main","layout":{"type":"default"}} -->
<main class="wp-block-group hs-main"><!-- wp:group {"align":"full","className":"hs-plain","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull hs-plain"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-title {"level":1} /-->

<!-- wp:post-date {"format":"<?php echo esc_attr( homura_safety_t( 'date_fmt' ) ); ?>"} /-->

<!-- wp:post-featured-image {"aspectRatio":"16/9"} /-->

<!-- wp:post-content {"layout":{"type":"constrained"}} /-->

<!-- wp:post-terms {"term":"post_tag"} /--></div>
<!-- /wp:group --></main>
<!-- /wp:group -->