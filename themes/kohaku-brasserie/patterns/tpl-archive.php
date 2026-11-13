<?php
/**
 * Title: Template: archive
 * Slug: kohaku-brasserie/tpl-archive
 * Categories: kohaku-brasserie
 * Inserter: no
 * Description: Archive, category, tag, search and fallback heading over a dated hairline ledger of posts.
 */
?>
<!-- wp:group {"align":"full","className":"kb-sec kb-arch","tagName":"section","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kb-sec kb-arch"><!-- wp:group {"className":"kb-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kb-wrap"><!-- wp:paragraph {"className":"kb-label"} -->
<p class="kb-label">(notes)</p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"archive","level":1,"className":"kb-arch__title"} /-->

<!-- wp:query {"queryId":1,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"className":"kb-ledger-q"} -->
<div class="wp-block-query kb-ledger-q"><!-- wp:post-template {"className":"kb-ledger-list"} -->
<!-- wp:group {"className":"kb-row","layout":{"type":"default"}} -->
<div class="wp-block-group kb-row"><!-- wp:post-date {"format":"d F Y","className":"kb-row__date"} /-->

<!-- wp:post-title {"isLink":true,"level":3,"className":"kb-row__title"} /-->

<!-- wp:post-terms {"term":"post_tag","className":"kb-row__tag"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"kb-pager"} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
