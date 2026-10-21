<?php
/**
 * Title: Template: index
 * Slug: kazu-data-course/tpl-index
 * Categories: kazu-data-course
 * Inserter: false
 */
?>
<!-- wp:group {"tagName":"main","className":"kz-main","layout":{"type":"default"}} -->
<main class="wp-block-group kz-main"><!-- wp:group {"tagName":"section","className":"kz-sec kz-pagesec","layout":{"type":"default"}} -->
<section class="wp-block-group kz-sec kz-pagesec"><!-- wp:group {"className":"kz-head","layout":{"type":"default"}} -->
<div class="wp-block-group kz-head"><!-- wp:heading {"level":1,"className":"kz-pagehead"} -->
<h1 class="wp-block-heading kz-pagehead"><?php echo esc_html( kazu_t( 'tpl_journal_title' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kz-subline kz-subline--page"} -->
<p class="kz-subline kz-subline--page"><?php echo esc_html( kazu_t( 'tpl_journal_sub' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kz-journal","layout":{"type":"default"}} -->
<div class="wp-block-group kz-journal"><!-- wp:query {"query":{"perPage":10,"inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"className":"kz-jrow","layout":{"type":"default"}} -->
<div class="wp-block-group kz-jrow"><!-- wp:post-date /-->

<!-- wp:group {"className":"kz-jtext","layout":{"type":"default"}} -->
<div class="wp-block-group kz-jtext"><!-- wp:post-title {"level":2,"isLink":true} /-->

<!-- wp:post-excerpt {"excerptLength":24} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->
