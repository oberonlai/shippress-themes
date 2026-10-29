<?php
/**
 * Title: Template: home
 * Slug: shisei-clinic/tpl-home
 * Categories: shisei-clinic
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"ss-main","layout":{"type":"default"}} -->
<main class="wp-block-group ss-main"><!-- wp:pattern {"slug":"shisei-clinic/notes-head"} /-->

<!-- wp:pattern {"slug":"shisei-clinic/notes-intro"} /-->

<!-- wp:group {"className":"ss-sec ss-ibody ss-ibody--list","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ss-sec ss-ibody ss-ibody--list"><!-- wp:group {"className":"ss-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ss-wrap"><!-- wp:query {"queryId":0,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"ss-cards","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"ss-post","layout":{"type":"default"}} -->
<div class="wp-block-group ss-post"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/5","className":"ss-post__img"} /-->

<!-- wp:post-date {"className":"ss-post__date"} /-->

<!-- wp:post-title {"isLink":true,"level":2,"className":"ss-post__title"} /-->

<!-- wp:post-excerpt {"excerptLength":28,"className":"ss-post__ex"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"ss-pager","layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( shisei_clinic_t( 'k57c19c06' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->