<?php
/**
 * Title: Template: news rows
 * Slug: shirogane-college/tpl-list
 * Categories: shirogane-college
 * Inserter: no
 * Viewport Width: 1440
 * Description: Posts list for the posts page, archive, category, tag and search templates: Azabu-style news rows with a square thumb, date, chip, title and chevron.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sg-sec sg-sec--list","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sg-sec sg-sec--list">
<!-- wp:group {"className":"sg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sg-wrap">
<!-- wp:heading {"level":1,"className":"sg-page__h"} -->
<h1 class="wp-block-heading sg-page__h"><?php echo esc_html( shirogane_college_t( 'list_h' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"sg-news"} -->
<!-- wp:group {"className":"sg-newsrow","layout":{"type":"default"}} -->
<div class="wp-block-group sg-newsrow">
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","width":"80px","height":"80px","className":"sg-newsrow__img"} /-->
<!-- wp:group {"className":"sg-newsrow__b","layout":{"type":"default"}} -->
<div class="wp-block-group sg-newsrow__b">
<!-- wp:post-date {"format":"j M Y","className":"sg-newsrow__d"} /-->
<!-- wp:post-terms {"term":"category","className":"sg-chip"} /-->
<!-- wp:post-title {"isLink":true,"level":3,"className":"sg-newsrow__t"} /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- /wp:post-template -->
<!-- wp:query-pagination {"className":"sg-pager"} -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-numbers /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->
<!-- wp:query-no-results -->
<!-- wp:paragraph {"className":"sg-body"} -->
<p class="sg-body"><?php echo esc_html( shirogane_college_t( 'no_posts' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->