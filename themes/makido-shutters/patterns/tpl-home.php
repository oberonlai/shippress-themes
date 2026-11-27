<?php
/**
 * Title: Template: news list
 * Slug: makido-shutters/tpl-home
 * Categories: makido-shutters
 * Inserter: no
 * Viewport Width: 1440
 * Description: Posts list for the posts page, archive, category, tag and search templates: dated rows with a category pill.
 */
?>
<!-- wp:group {"align":"full","className":"mk-lens mk-lens--head","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull mk-lens mk-lens--head">
<!-- wp:group {"className":"mk-lens__in","layout":{"type":"default"}} -->
<div class="wp-block-group mk-lens__in">
<!-- wp:heading {"level":1,"textAlign":"center","className":"mk-h1"} -->
<h1 class="wp-block-heading has-text-align-center mk-h1"><?php echo esc_html( makido_shutters_t( 'list_h' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"mk-lens__p mk-lens__p--c"} -->
<p class="mk-lens__p mk-lens__p--c"><?php echo esc_html( makido_shutters_t( 'list_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"mk-sec mk-sec--list-page","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mk-sec mk-sec--list-page">
<!-- wp:group {"className":"mk-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mk-wrap">
<!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"mk-list"} -->
<!-- wp:group {"className":"mk-listrow","layout":{"type":"default"}} -->
<div class="wp-block-group mk-listrow">
<!-- wp:post-date {"format":"j M Y","className":"mk-listrow__d"} /-->
<!-- wp:post-terms {"term":"category","className":"mk-listrow__c"} /-->
<!-- wp:group {"className":"mk-listrow__b","layout":{"type":"default"}} -->
<div class="wp-block-group mk-listrow__b">
<!-- wp:post-title {"isLink":true,"level":3,"className":"mk-listrow__t"} /-->
<!-- wp:post-excerpt {"excerptLength":24,"className":"mk-listrow__x"} /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- /wp:post-template -->
<!-- wp:query-pagination {"className":"mk-pager-nav"} -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-numbers /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->
<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( makido_shutters_t( 'no_posts' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
