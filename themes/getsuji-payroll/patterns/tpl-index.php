<?php
/**
 * Title: Template: index
 * Slug: getsuji-payroll/tpl-index
 * Categories: getsuji-payroll
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"gp-main gp-plain","layout":{"type":"constrained"}} -->
<main class="wp-block-group gp-main gp-plain"><!-- wp:heading {"level":1,"className":"gp-pole"} -->
<h1 class="wp-block-heading gp-pole"><?php echo wp_kses_post( getsuji_payroll_t( 'kb56600d0' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:query {"query":{"perPage":9,"postType":"post","inherit":true},"className":"gp-notes__query"} -->
<div class="wp-block-query gp-notes__query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"gp-note","layout":{"type":"default"}} -->
<div class="wp-block-group gp-note"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"gp-note__img"} /-->

<!-- wp:group {"className":"gp-note__meta","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group gp-note__meta"><!-- wp:post-date {"format":"Y-m-d","className":"gp-note__date"} /-->

<!-- wp:post-terms {"term":"category","className":"gp-tag"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true,"className":"gp-note__title"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"gp-pager"} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->