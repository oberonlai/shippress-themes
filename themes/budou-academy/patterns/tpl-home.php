<?php
/**
 * Title: Template: home
 * Slug: budou-academy/tpl-home
 * Categories: budou-academy
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"ba-main ba-main--front","layout":{"type":"constrained"}} -->
<main class="wp-block-group ba-main ba-main--front"><!-- wp:pattern {"slug":"budou-academy/inner-journal-head"} /-->

<!-- wp:group {"className":"ba-posts","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull ba-posts"><!-- wp:group {"className":"ba-posts__in","layout":{"type":"default"}} -->
<div class="wp-block-group ba-posts__in"><!-- wp:query {"queryId":1,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"ba-cards ba-cards--posts","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"ba-pcard","layout":{"type":"default"}} -->
<div class="wp-block-group ba-pcard"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"ba-pcard__img"} /-->

<!-- wp:post-terms {"term":"category","className":"ba-dotlabel ba-pcard__cat"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"ba-pcard__h"} /-->

<!-- wp:post-date {"className":"ba-pcard__date"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( budou_academy_t( 'k8269d459' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"budou-academy/inner-journal-note"} /--></main>
<!-- /wp:group -->