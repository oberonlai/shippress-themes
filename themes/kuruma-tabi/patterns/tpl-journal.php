<?php
/**
 * Title: Template: journal and archives
 * Slug: kuruma-tabi/tpl-journal
 * Categories: kuruma-tabi
 * Inserter: no
 * Viewport Width: 1440
 * Description: Emblem heading and a three-column list of posts.
 */
?>
<!-- wp:group {"tagName":"main","className":"kt-main kt-main--list","layout":{"type":"default"}} -->
<main class="wp-block-group kt-main kt-main--list"><!-- wp:group {"className":"kt-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kt-wrap"><!-- wp:group {"className":"kt-head","layout":{"type":"default"}} -->
<div class="wp-block-group kt-head"><!-- wp:html -->
<span class="kt-emblem"><?php echo kuruma_tabi_icon( 'wheel' ); ?></span>
<!-- /wp:html -->

<!-- wp:heading {"level":2,"className":"kt-h2"} -->
<h2 class="wp-block-heading kt-h2"><?php echo esc_html( kuruma_tabi_t( 'jr_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kt-sub"} -->
<p class="kt-sub"><?php echo esc_html( kuruma_tabi_t( 'jr_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":1,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"className":"kt-posts"} -->
<div class="wp-block-query kt-posts"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"2/1","className":"kt-post__img"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"kt-post__t"} /-->

<!-- wp:post-date {"className":"kt-post__d"} /-->

<!-- wp:post-excerpt {"moreText":"","excerptLength":28,"className":"kt-post__x"} /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->
