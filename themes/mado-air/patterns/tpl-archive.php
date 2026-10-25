<?php
/**
 * Title: Template: archive
 * Slug: mado-air/tpl-archive
 * Categories: mado-air
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"ma-main ma-journal","layout":{"type":"constrained"}} -->
<main class="wp-block-group ma-main ma-journal"><!-- wp:paragraph {"className":"ma-label"} -->
<p class="ma-label"><?php echo wp_kses_post( mado_air_t( 'k3dbae2c6' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"archive","level":1,"className":"ma-h2 ma-h1p"} /-->

<!-- wp:separator {"className":"ma-rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity ma-rule"/>
<!-- /wp:separator -->

<!-- wp:query {"queryId":1,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"ma-posts"} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /-->
<!-- wp:post-title {"isLink":true,"level":2,"className":"ma-h3"} /-->
<!-- wp:post-date {"className":"ma-by"} /-->
<!-- wp:post-excerpt {"excerptLength":40} /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-numbers /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( mado_air_t( 'k67f0f397' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->