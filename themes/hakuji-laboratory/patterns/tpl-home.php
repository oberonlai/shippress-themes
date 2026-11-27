<?php
/**
 * Title: Template: notices list
 * Slug: hakuji-laboratory/tpl-home
 * Categories: hakuji-laboratory
 * Inserter: no
 * Viewport Width: 1440
 * Description: Posts list used by the posts page, archive, category and tag templates: title-over-photo cards with a dot link.
 */
?>
<!-- wp:group {"className":"hk-sec hk-listing","tagName":"section","layout":{"type":"default"}} -->
<section class="wp-block-group hk-sec hk-listing">
<!-- wp:group {"className":"hk-inner","layout":{"type":"default"}} -->
<div class="wp-block-group hk-inner">
<!-- wp:paragraph {"className":"hk-lock__w"} -->
<p class="hk-lock__w"><?php echo esc_html( hakuji_laboratory_t( 'list_label' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"hk-h2 hk-h2--page"} -->
<h1 class="wp-block-heading hk-h2 hk-h2--page"><?php echo esc_html( hakuji_laboratory_t( 'list_h' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:query {"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"hk-pcards","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"hk-card","layout":{"type":"default"}} -->
<div class="wp-block-group hk-card">
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"auto","className":"hk-card__img"} /-->
<!-- wp:post-title {"isLink":true,"level":3,"className":"hk-card__t"} /-->
<!-- wp:post-date {"format":"j M Y","className":"hk-card__n"} /-->
</div>
<!-- /wp:group -->
<!-- /wp:post-template -->
<!-- wp:query-pagination {"className":"hk-pager"} -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-numbers /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->
<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( hakuji_laboratory_t( 'no_posts' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
