<?php
/**
 * Title: Template: journal list
 * Slug: enogu-supply/tpl-home
 * Categories: enogu-supply
 * Inserter: no
 * Viewport Width: 1440
 * Description: Posts list used by the posts page template.
 */
?>
<!-- wp:group {"className":"en-sec en-listing","tagName":"section","layout":{"type":"default"}} -->
<section class="wp-block-group en-sec en-listing">
<!-- wp:group {"className":"en-col en-col--wide","layout":{"type":"default"}} -->
<div class="wp-block-group en-col en-col--wide">
<!-- wp:group {"className":"en-title-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group en-title-wrap">
<!-- wp:heading {"level":1,"className":"en-title"} -->
<h1 class="wp-block-heading en-title"><?php echo esc_html( enogu_supply_t( 'list_h' ) ); ?></h1>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:query {"query":{"perPage":8,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"en-cards","layout":{"type":"grid","columnCount":4}} -->
<!-- wp:group {"className":"en-card","layout":{"type":"default"}} -->
<div class="wp-block-group en-card">
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"en-card__img"} /-->

<!-- wp:post-title {"isLink":true,"level":3,"className":"en-card__t"} /-->

<!-- wp:post-date {"format":"M j, Y","className":"en-card__d"} /-->
</div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"en-pager"} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( enogu_supply_t( 'no_posts' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
