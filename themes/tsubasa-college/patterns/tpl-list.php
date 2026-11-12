<?php
/**
 * Title: Template: post list
 * Slug: tsubasa-college/tpl-list
 * Categories: tsubasa-college
 * Inserter: no
 * Description: Journal, archive, category, tag and search lists: bracket label, uppercase heading, short rule and a three-column post grid.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tc-sec tc-pagehead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tc-sec tc-pagehead"><!-- wp:group {"align":"wide","className":"tc-pagehead__in","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tc-pagehead__in"><!-- wp:heading {"level":1,"className":"tc-h1"} -->
<h1 class="wp-block-heading tc-h1"><?php echo esc_html( tsubasa_college_t( 'ls_h' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"tc-label"} -->
<p class="tc-label"><?php echo esc_html( tsubasa_college_t( 'ls_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"tc-rule","layout":{"type":"default"}} -->
<div class="wp-block-group tc-rule"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":22,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide","className":"tc-journal__q","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide tc-journal__q"><!-- wp:post-template {"className":"tc-journal__list","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"tc-journal__title"} /-->

<!-- wp:group {"className":"tc-journal__foot","layout":{"type":"default"}} -->
<div class="wp-block-group tc-journal__foot"><!-- wp:post-date {"format":"<?php echo esc_attr( tsubasa_college_t( 'date_fmt' ) ); ?>"} /-->

<!-- wp:paragraph {"className":"tc-chev-end"} -->
<p class="tc-chev-end"><span class="tc-chev">›</span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
