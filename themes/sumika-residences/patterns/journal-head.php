<?php
/**
 * Title: Journal: head and list
 * Slug: sumika-residences/journal-head
 * Categories: sumika-residences
 * Keywords: serviced apartments, residence
 * Viewport Width: 1440
 * Inserter: no
 * Description: Page head and the list of journal entries.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sm-sec sm-pagehead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sm-sec sm-pagehead">
<!-- wp:paragraph {"className":"sm-eyebrow"} -->
<p class="sm-eyebrow">Journal</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"sm-pagehead__h1"} -->
<h1 class="wp-block-heading sm-pagehead__h1">Notes from the houses</h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sm-sentence"} -->
<p class="sm-sentence">Short pieces on living in Calder Harbour for a season.</p>
<!-- /wp:paragraph -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"sm-sec sm-notes","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sm-sec sm-notes"><!-- wp:query {"queryId":1,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"sm-notes__q"} -->
<div class="wp-block-query sm-notes__q"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","className":"sm-note__img"} /-->

<!-- wp:group {"className":"sm-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group sm-note__text"><!-- wp:post-date {"format":"F j, Y","className":"sm-eyebrow"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"sm-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":24} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":"Newer"} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":"Older"} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p>No entries yet.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
