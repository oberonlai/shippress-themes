<?php
/**
 * Title: Template: search
 * Slug: kyukyu-college/tpl-search
 * Categories: kyukyu-college
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"kk-main","layout":{"type":"default"}} -->
<main class="wp-block-group kk-main"><!-- wp:group {"className":"kk-sec kk-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kk-sec kk-wrap"><!-- wp:query-title {"type":"search","level":1,"className":"kk-pagetitle"} /-->

<!-- wp:search {"label":"<?php echo esc_attr( kyukyu_college_t( 'a13348442' ) ); ?>","buttonText":"<?php echo esc_attr( kyukyu_college_t( 'a13348442' ) ); ?>"} /-->

<!-- wp:query {"queryId":3,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-title {"level":3,"isLink":true} /-->
<!-- wp:post-excerpt /-->
<!-- /wp:post-template -->
<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kyukyu_college_t( 'k5be125ad' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->