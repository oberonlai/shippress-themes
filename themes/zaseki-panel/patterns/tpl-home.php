<?php
/**
 * Title: Template: journal list
 * Slug: zaseki-panel/tpl-home
 * Categories: zaseki-panel
 * Inserter: no
 * Viewport Width: 1440
 * Description: Posts list used by the posts page, archive, category and tag templates.
 */
?>
<!-- wp:group {"className":"zp-sec zp-listing","tagName":"section","layout":{"type":"default"}} -->
<section class="wp-block-group zp-sec zp-listing">
<!-- wp:group {"className":"zp-wrap zp-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group zp-wrap zp-wrap--c">
<!-- wp:paragraph {"className":"zp-label"} -->
<p class="zp-label"><?php echo esc_html( zaseki_panel_t( 'list_label' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"zp-h2 zp-h2--page"} -->
<h1 class="wp-block-heading zp-h2 zp-h2--page"><?php echo esc_html( zaseki_panel_t( 'list_h' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:query {"query":{"perPage":8,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"zp-cards","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"zp-card2","layout":{"type":"default"}} -->
<div class="wp-block-group zp-card2">
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","className":"zp-card2__img"} /-->

<!-- wp:post-date {"format":"j M Y","className":"zp-card2__d"} /-->

<!-- wp:post-title {"isLink":true,"level":3,"className":"zp-card2__t"} /-->
</div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"zp-pager"} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( zaseki_panel_t( 'no_posts' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
