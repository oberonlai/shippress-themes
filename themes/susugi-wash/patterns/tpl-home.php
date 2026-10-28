<?php
/**
 * Title: Template: home
 * Slug: susugi-wash/tpl-home
 * Categories: susugi-wash
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"sw-main sw-main--index","layout":{"type":"default"}} -->
<main class="wp-block-group sw-main sw-main--index"><!-- wp:group {"align":"full","className":"sw-sec sw-sec--thead","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull sw-sec sw-sec--thead"><!-- wp:group {"className":"sw-in","layout":{"type":"default"}} -->
<div class="wp-block-group sw-in"><!-- wp:paragraph {"className":"sw-side"} -->
<p class="sw-side"><?php echo wp_kses_post( susugi_wash_t( 'k5db37ace' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sw-no sw-no--c"} -->
<p class="sw-no sw-no--c"><?php echo wp_kses_post( susugi_wash_t( 'kbe2bf5a2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"sw-h1 sw-h1--c"} -->
<h1 class="wp-block-heading sw-h1 sw-h1--c"><?php echo wp_kses_post( susugi_wash_t( 'kf4c6f851' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sw-lede sw-lede--c"} -->
<p class="sw-lede sw-lede--c"><?php echo wp_kses_post( susugi_wash_t( 'k32cf51d3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sw-in sw-loop","layout":{"type":"default"}} -->
<div class="wp-block-group sw-in sw-loop"><!-- wp:query {"query":{"perPage":9,"postType":"post","inherit":true}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"sw-posts"} -->
<!-- wp:group {"className":"sw-post","layout":{"type":"default"}} -->
<div class="wp-block-group sw-post"><!-- wp:post-featured-image {"isLink":true,"sizeSlug":"large"} /-->
<!-- wp:group {"className":"sw-post__t","layout":{"type":"default"}} -->
<div class="wp-block-group sw-post__t"><!-- wp:post-date {"className":"sw-post__d"} /-->
<!-- wp:post-title {"level":2,"isLink":true} /-->
<!-- wp:post-excerpt {"excerptLength":40} /--></div>
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