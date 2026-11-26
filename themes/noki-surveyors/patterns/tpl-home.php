<?php
/**
 * Title: Template: notes list
 * Slug: noki-surveyors/tpl-home
 * Categories: noki-surveyors
 * Inserter: no
 * Viewport Width: 1440
 * Description: Posts list used by the posts page, archive, category and tag templates.
 */
?>
<!-- wp:group {"tagName":"section","className":"nk-sec nk-listing","layout":{"type":"default"}} -->
<section class="wp-block-group nk-sec nk-listing">
<!-- wp:group {"className":"nk-wrap nk-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group nk-wrap nk-wrap--c">
<!-- wp:group {"className":"nk-hrow","layout":{"type":"default"}} -->
<div class="wp-block-group nk-hrow">
<!-- wp:heading {"level":1,"className":"nk-h2"} -->
<h1 class="wp-block-heading nk-h2"><?php echo esc_html( noki_surveyors_t( 'list_h' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"nk-hlabel"} -->
<p class="nk-hlabel"><?php echo esc_html( noki_surveyors_t( 'list_l' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"nk-listlede"} -->
<p class="nk-listlede"><?php echo esc_html( noki_surveyors_t( 'list_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"nk-list"} -->
<!-- wp:group {"className":"nk-listrow","layout":{"type":"default"}} -->
<div class="wp-block-group nk-listrow">
<!-- wp:post-date {"format":"j M Y","className":"nk-listrow__d"} /-->
<!-- wp:group {"className":"nk-listrow__b","layout":{"type":"default"}} -->
<div class="wp-block-group nk-listrow__b">
<!-- wp:post-terms {"term":"category","className":"nk-listrow__c"} /-->
<!-- wp:post-title {"isLink":true,"level":3,"className":"nk-listrow__t"} /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- /wp:post-template -->
<!-- wp:query-pagination {"className":"nk-pager"} -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-numbers /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->
<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( noki_surveyors_t( 'no_posts' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
