<?php
/**
 * Title: Template: notes list
 * Slug: kango-college/tpl-home
 * Categories: kango-college
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"kc-main","layout":{"type":"default"}} -->
<main class="wp-block-group kc-main"><!-- wp:group {"tagName":"section","align":"full","className":"kc-page","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-page"><!-- wp:heading {"level":1,"className":"kc-page__title"} -->
<h1 class="wp-block-heading kc-page__title">Notes</h1>
<!-- /wp:heading -->

<!-- wp:query {"queryId":3,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"className":"kc-notes__q"} -->
<div class="wp-block-query kc-notes__q"><!-- wp:post-template {"className":"kc-notes__list"} -->
<!-- wp:group {"className":"kc-note kc-note--thumb","layout":{"type":"default"}} -->
<div class="wp-block-group kc-note kc-note--thumb"><!-- wp:post-date {"format":"j M Y","className":"kc-note__date"} /-->

<!-- wp:post-terms {"term":"category","className":"kc-chip kc-note__cat"} /-->

<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"250/118","width":"250px","height":"118px","className":"kc-note__thumb"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"kc-note__title"} /-->

<!-- wp:read-more {"content":"Read","className":"kc-ring kc-note__go"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->
