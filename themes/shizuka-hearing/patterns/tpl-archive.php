<?php
/**
 * Title: Template: archive
 * Slug: shizuka-hearing/tpl-archive
 * Categories: shizuka-hearing
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"sh-main sh-blog","layout":{"type":"default"}} -->
<main class="wp-block-group sh-main sh-blog"><!-- wp:group {"className":"sh-head","layout":{"type":"default"}} -->
<div class="wp-block-group sh-head"><!-- wp:paragraph {"className":"sh-eyebrow"} -->
<p class="sh-eyebrow"><?php echo wp_kses_post( shizuka_hearing_t( 'k3dbae2c6' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sh-sub"} -->
<p class="sh-sub"><?php echo wp_kses_post( shizuka_hearing_t( 'kd1813ed1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":1,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"className":"sh-posts"} -->
<div class="wp-block-query sh-posts"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","className":"sh-post__img"} /-->
<!-- wp:post-date {"className":"sh-post__date"} /-->
<!-- wp:post-title {"level":2,"isLink":true,"className":"sh-post__title"} /-->
<!-- wp:post-excerpt {"excerptLength":28} /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-numbers /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( shizuka_hearing_t( 'kbee0a8cf' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->