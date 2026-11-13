<?php
/**
 * Title: Template: post list
 * Slug: shoko-archives/tpl-list
 * Categories: shoko-archives
 * Inserter: no
 * Viewport Width: 1440
 * Description: The journal list as tabbed photo cards.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sa-phead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sa-phead"><!-- wp:group {"className":"sa-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sa-wrap"><!-- wp:heading {"level":1,"className":"sa-phead__h1"} -->
<h1 class="wp-block-heading sa-phead__h1"><?php echo esc_html( shoko_archives_t( 'tpl_h' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"sa-sec sa-sec--end","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sa-sec sa-sec--end"><!-- wp:group {"className":"sa-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sa-wrap"><!-- wp:paragraph {"className":"sa-intro sa-intro--wide"} -->
<p class="sa-intro sa-intro--wide"><?php echo esc_html( shoko_archives_t( 'tpl_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query {"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"className":"sa-query","layout":{"type":"default"}} -->
<div class="wp-block-query sa-query"><!-- wp:post-template {"className":"sa-cards","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"sa-card","layout":{"type":"default"}} -->
<div class="wp-block-group sa-card"><!-- wp:group {"className":"sa-card__media","layout":{"type":"default"}} -->
<div class="wp-block-group sa-card__media"><!-- wp:post-terms {"term":"category","className":"sa-tab"} /-->

<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","className":"sa-card__img"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true,"className":"sa-card__t"} /-->

<!-- wp:post-excerpt {"excerptLength":28,"className":"sa-card__p"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"sa-pager"} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"className":"sa-intro"} -->
<p class="sa-intro"><?php echo esc_html( shoko_archives_t( 'tpl_none' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
