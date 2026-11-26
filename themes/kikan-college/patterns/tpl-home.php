<?php
/**
 * Title: Template: news list
 * Slug: kikan-college/tpl-home
 * Categories: kikan-college
 * Inserter: no
 * Viewport Width: 1440
 * Description: Posts list used by the posts page, archive, category and tag templates.
 */
?>
<!-- wp:group {"tagName":"section","className":"kc-sec kc-listing","layout":{"type":"default"}} -->
<section class="wp-block-group kc-sec kc-listing">
<!-- wp:group {"className":"kc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kc-wrap">
<!-- wp:group {"className":"kc-head","layout":{"type":"default"}} -->
<div class="wp-block-group kc-head">
<!-- wp:paragraph {"className":"kc-head__n"} -->
<p class="kc-head__n"><?php echo esc_html( kikan_college_t( 'list_n' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"kc-head__h"} -->
<h1 class="wp-block-heading kc-head__h"><?php echo esc_html( kikan_college_t( 'list_h' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:html -->
<div class="kc-rule" aria-hidden="true"></div>
<!-- /wp:html -->
<!-- wp:paragraph {"className":"kc-head__sub"} -->
<p class="kc-head__sub"><?php echo esc_html( kikan_college_t( 'list_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"kc-list"} -->
<!-- wp:group {"className":"kc-listrow","layout":{"type":"default"}} -->
<div class="wp-block-group kc-listrow">
<!-- wp:post-date {"format":"j M Y"} /-->
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:post-terms {"term":"category","className":"kc-chip"} /-->
<!-- wp:post-title {"isLink":true,"level":3,"className":"kc-listrow__t"} /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- /wp:post-template -->
<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-numbers /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->
<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( kikan_college_t( 'no_posts' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
