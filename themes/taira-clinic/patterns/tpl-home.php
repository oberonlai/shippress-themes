<?php
/**
 * Title: Template: news list
 * Slug: taira-clinic/tpl-home
 * Categories: taira-clinic
 * Inserter: no
 * Viewport Width: 1440
 * Description: Posts list for the posts page, archive, category, tag and search templates: dated rows with a category chip.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tc-pagehead tc-pagehead--plain","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tc-pagehead tc-pagehead--plain">
<!-- wp:group {"className":"tc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap">
<!-- wp:heading {"level":1,"className":"tc-h1 tc-h1--inner"} -->
<h1 class="wp-block-heading tc-h1 tc-h1--inner"><?php echo esc_html( taira_clinic_t( 'list_h' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tc-lead"} -->
<p class="tc-lead"><?php echo esc_html( taira_clinic_t( 'list_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"tc-sec tc-sec--page","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tc-sec tc-sec--page">
<!-- wp:group {"className":"tc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap">
<!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"tc-nrows"} -->
<!-- wp:group {"className":"tc-nrow","layout":{"type":"default"}} -->
<div class="wp-block-group tc-nrow">
<!-- wp:group {"className":"tc-nrow__m","layout":{"type":"default"}} -->
<div class="wp-block-group tc-nrow__m"><!-- wp:post-date {"format":"j M Y","className":"tc-nrow__d"} /-->
<!-- wp:post-terms {"term":"category","className":"tc-chip"} /--></div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-nrow__b","layout":{"type":"default"}} -->
<div class="wp-block-group tc-nrow__b"><!-- wp:post-title {"isLink":true,"level":3,"className":"tc-nrow__t"} /-->
<!-- wp:post-excerpt {"excerptLength":26,"className":"tc-nrow__x"} /--></div>
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
<p><?php echo esc_html( taira_clinic_t( 'no_posts' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
