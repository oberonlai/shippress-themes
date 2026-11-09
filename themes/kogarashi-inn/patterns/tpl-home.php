<?php
/**
 * Title: Template: home
 * Slug: kogarashi-inn/tpl-home
 * Categories: kogarashi-inn
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"ki-main","layout":{"type":"constrained"}} -->
<main class="wp-block-group ki-main"><!-- wp:group {"className":"ki-container ki-archive__head","layout":{"type":"default"}} -->
<div class="wp-block-group ki-container ki-archive__head"><!-- wp:paragraph {"className":"ki-vlabel"} -->
<p class="ki-vlabel"><?php echo wp_kses_post( kogarashi_inn_t( 'k6b2b5614' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"ki-h1 ki-h1--page"} -->
<h1 class="wp-block-heading ki-h1 ki-h1--page"><?php echo wp_kses_post( kogarashi_inn_t( 'k93d52d90' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"ki-rule","layout":{"type":"default"}} -->
<div class="wp-block-group ki-rule"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ki-container ki-archive__list","layout":{"type":"default"}} -->
<div class="wp-block-group ki-container ki-archive__list"><!-- wp:query {"queryId":2,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"ki-cards","layout":{"type":"grid","columnCount":2}} -->
<!-- wp:group {"className":"ki-card","layout":{"type":"default"}} -->
<div class="wp-block-group ki-card"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","className":"ki-card__thumb"} /-->

<!-- wp:group {"className":"ki-card__body","layout":{"type":"default"}} -->
<div class="wp-block-group ki-card__body"><!-- wp:post-title {"level":3,"isLink":true,"className":"ki-card__title"} /-->

<!-- wp:post-date {"format":"(Y.m.d)","className":"ki-card__date"} /-->

<!-- wp:post-excerpt {"excerptLength":22,"className":"ki-card__excerpt"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->