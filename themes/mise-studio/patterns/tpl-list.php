<?php
/**
 * Title: Template: post list
 * Slug: mise-studio/tpl-list
 * Categories: mise-studio
 * Inserter: no
 * Viewport Width: 1440
 * Description: Journal, archive, category, tag and search lists: a ring title and posts as dated rows in a white sheet.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ms-sec ms-sec--pagehead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ms-sec ms-sec--pagehead"><!-- wp:group {"className":"ms-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ms-wrap"><!-- wp:heading {"level":1,"className":"ms-h1 ms-h1--ring"} -->
<h1 class="wp-block-heading ms-h1 ms-h1--ring"><?php echo esc_html( mise_studio_t( 'ls_h' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"ms-sec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ms-sec"><!-- wp:group {"className":"ms-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ms-wrap"><!-- wp:group {"className":"ms-sheet","layout":{"type":"default"}} -->
<div class="wp-block-group ms-sheet"><!-- wp:query {"queryId":22,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"ms-list"} -->
<div class="wp-block-query ms-list"><!-- wp:post-template {"className":"ms-list__t"} -->
<!-- wp:group {"className":"ms-lrow","layout":{"type":"default"}} -->
<div class="wp-block-group ms-lrow"><!-- wp:post-date {"format":"j M Y","className":"ms-lrow__d"} /-->

<!-- wp:post-terms {"term":"category","className":"ms-lrow__c"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"ms-lrow__t"} /-->

<!-- wp:post-featured-image {"isLink":true,"width":"160px","height":"106px","scale":"cover","className":"ms-lrow__img"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
