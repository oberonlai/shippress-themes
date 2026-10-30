<?php
/**
 * Title: Notes: dossier cards
 * Slug: shirushi-customs/notes-list
 * Categories: shirushi-customs
 * Inserter: no
 * Description: The notes index as two columns of dossier cards: featured photograph and text panel fused, with the date as a bracket tag.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sc-sec sc-notesidx","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sc-sec sc-notesidx"><!-- wp:group {"className":"sc-in","layout":{"type":"default"}} -->
<div class="wp-block-group sc-in"><!-- wp:query {"queryId":21,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"sc-posts"} -->
<!-- wp:group {"className":"sc-card sc-card--case sc-card--post","layout":{"type":"default"}} -->
<div class="wp-block-group sc-card sc-card--case sc-card--post"><!-- wp:post-featured-image {"isLink":true,"sizeSlug":"large","className":"sc-card__ph"} /-->

<!-- wp:group {"className":"sc-card__txt","layout":{"type":"default"}} -->
<div class="wp-block-group sc-card__txt"><!-- wp:post-terms {"term":"category","className":"sc-note__cat"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"sc-card__t"} /-->

<!-- wp:post-excerpt {"excerptLength":26,"className":"sc-card__p"} /-->

<!-- wp:post-date {"format":"Y.m.d","className":"sc-tag"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
