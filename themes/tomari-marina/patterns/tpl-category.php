<?php
/**
 * Title: Template: category
 * Slug: tomari-marina/tpl-category
 * Categories: tomari-marina
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"tm-main","style":{"spacing":{"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group tm-main" style="margin-top:0"><!-- wp:group {"tagName":"section","align":"full","className":"tm-t1__panel tm-head tm-head--plain","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tm-t1__panel tm-head tm-head--plain"><!-- wp:group {"className":"tm-t1__tl","layout":{"type":"default"}} -->
<div class="wp-block-group tm-t1__tl"><!-- wp:html -->
<svg class="tm-pennant" width="48" height="38" viewBox="0 0 48 38" aria-hidden="true" focusable="false"><path d="M2 0h4v38H2z M6 3l40 11L6 25z" fill="#C30D23"/></svg>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"tm-t1__label"} -->
<p class="tm-t1__label"><?php echo wp_kses_post( tomari_marina_t( 'k6b2b5614' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tm-t1__word"} -->
<p class="tm-t1__word"><?php echo wp_kses_post( tomari_marina_t( 'k80e97cbd' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"tm-t1__num"} -->
<p class="tm-t1__num">10</p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"archive","className":"tm-t1__statement"} /-->

<!-- wp:pattern {"slug":"tomari-marina/bottom-line-inner"} /--></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"tm-listing","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull tm-listing"><!-- wp:query {"queryId":1,"query":{"perPage":12,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"align":"wide","className":"tm-posts"} -->
<div class="wp-block-query alignwide tm-posts"><!-- wp:post-template {"layout":{"type":"grid","columnCount":4}} --><!-- wp:group {"className":"tm-post","layout":{"type":"default"}} -->
<div class="wp-block-group tm-post"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->
<!-- wp:post-date {"format":"<?php echo esc_attr( tomari_marina_t( 'date_fmt' ) ); ?>","className":"tm-meta"} /-->
<!-- wp:post-title {"level":3,"isLink":true} /--></div>
<!-- /wp:group --><!-- /wp:post-template -->
<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-numbers /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->