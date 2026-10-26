<?php
/**
 * Title: Template: home
 * Slug: ayumi-podiatry/tpl-home
 * Categories: ayumi-podiatry
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"ap-main","layout":{"type":"default"}} -->
<main class="wp-block-group ap-main"><!-- wp:group {"className":"ap-page ap-wrap ap-journal","layout":{"type":"default"}} -->
<div class="wp-block-group ap-page ap-wrap ap-journal"><!-- wp:paragraph {"className":"ap-label"} -->
<p class="ap-label"><?php echo wp_kses_post( ayumi_podiatry_t( 'k6b2b5614' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"ap-h1"} -->
<h1 class="wp-block-heading ap-h1"><?php echo wp_kses_post( ayumi_podiatry_t( 'k8f57ebee' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:query {"query":{"perPage":10,"inherit":true}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"className":"ap-jcard","layout":{"type":"default"}} -->
<div class="wp-block-group ap-jcard"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"ap-jcard__img"} /-->
<!-- wp:group {"className":"ap-jcard__t","layout":{"type":"default"}} -->
<div class="wp-block-group ap-jcard__t"><!-- wp:post-date {"className":"ap-label"} /-->
<!-- wp:post-title {"isLink":true,"level":2,"className":"ap-h2"} /-->
<!-- wp:post-excerpt {"className":"ap-body"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->
<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->