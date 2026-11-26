<?php
/**
 * Title: Template: notes list
 * Slug: teate-clinic/tpl-home
 * Categories: teate-clinic
 * Inserter: no
 * Viewport Width: 1440
 * Description: Posts list used by the posts page, archive, category, tag and search templates.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tc-sec tc-sec--list tc-listing","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tc-sec tc-sec--list tc-listing">
<!-- wp:group {"className":"tc-wrap tc-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap tc-wrap--c">
<!-- wp:group {"className":"tc-hrow","layout":{"type":"default"}} -->
<div class="wp-block-group tc-hrow">
<!-- wp:heading {"level":1,"className":"tc-h2"} -->
<h1 class="wp-block-heading tc-h2"><?php echo esc_html( teate_clinic_t( 'list_h' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tc-hlabel"} -->
<p class="tc-hlabel"><?php echo esc_html( teate_clinic_t( 'list_l' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"tc-lead"} -->
<p class="tc-lead"><?php echo esc_html( teate_clinic_t( 'list_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"tc-list"} -->
<!-- wp:group {"className":"tc-listrow","layout":{"type":"default"}} -->
<div class="wp-block-group tc-listrow">
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"tc-listrow__img"} /-->
<!-- wp:group {"className":"tc-listrow__b","layout":{"type":"default"}} -->
<div class="wp-block-group tc-listrow__b">
<!-- wp:post-date {"format":"j M Y","className":"tc-listrow__d"} /-->
<!-- wp:post-title {"isLink":true,"level":3,"className":"tc-listrow__t"} /-->
<!-- wp:post-excerpt {"excerptLength":28,"className":"tc-listrow__x"} /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- /wp:post-template -->
<!-- wp:query-pagination {"className":"tc-pager"} -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-numbers /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->
<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( teate_clinic_t( 'no_posts' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
