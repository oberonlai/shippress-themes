<?php
/**
 * Title: Template: search results
 * Slug: kango-college/tpl-search
 * Categories: kango-college
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"kc-main","layout":{"type":"default"}} -->
<main class="wp-block-group kc-main"><!-- wp:group {"tagName":"section","align":"full","className":"kc-page","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-page"><!-- wp:query-title {"type":"search","level":1,"className":"kc-page__title"} /-->

<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search"} /-->

<!-- wp:query {"queryId":4,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"className":"kc-notes__q"} -->
<div class="wp-block-query kc-notes__q"><!-- wp:post-template {"className":"kc-notes__list"} -->
<!-- wp:post-title {"level":3,"isLink":true,"className":"kc-note__title"} /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p>Nothing matched. Try another word.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->
