<?php
/**
 * Title: Template: site notes list
 * Slug: kodou-charging/tpl-home
 * Categories: kodou-charging
 * Inserter: no
 * Viewport Width: 1440
 * Description: Posts list used by the posts page, archive, category, tag and search templates.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-sec--list kc-listing","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-sec kc-sec--list kc-listing">
<!-- wp:group {"className":"kc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kc-wrap">
<!-- wp:heading {"level":1,"className":"kc-h1"} -->
<h1 class="wp-block-heading kc-h1"><?php echo esc_html( kodou_charging_t( 'list_h' ) ); ?></h1>
<!-- /wp:heading --><!-- wp:paragraph {"className":"kc-lead"} -->
<p class="kc-lead"><?php echo esc_html( kodou_charging_t( 'list_p' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"kc-list"} -->
<!-- wp:group {"className":"kc-listrow","layout":{"type":"default"}} -->
<div class="wp-block-group kc-listrow">
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"kc-listrow__img"} /-->
<!-- wp:group {"className":"kc-listrow__b","layout":{"type":"default"}} -->
<div class="wp-block-group kc-listrow__b">
<!-- wp:post-date {"format":"j M Y","className":"kc-listrow__d"} /-->
<!-- wp:post-title {"isLink":true,"level":3,"className":"kc-listrow__t"} /-->
<!-- wp:post-excerpt {"excerptLength":28,"className":"kc-listrow__x"} /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- /wp:post-template -->
<!-- wp:query-pagination {"className":"kc-pager"} -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-numbers /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->
<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( kodou_charging_t( 'no_posts' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
