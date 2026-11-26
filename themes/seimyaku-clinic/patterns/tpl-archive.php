<?php
/**
 * Title: Template: Archive
 * Slug: seimyaku-clinic/tpl-archive
 * Categories: seimyaku-clinic
 * Viewport Width: 1440
 * Description: Archive, category, tag and search results as a list of dated cards.
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sz-phead sz-phead--plain","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sz-phead sz-phead--plain"><!-- wp:group {"className":"sz-phead__text","layout":{"type":"default"}} -->
<div class="wp-block-group sz-phead__text"><!-- wp:query-title {"type":"archive","showPrefix":false,"level":1,"className":"sz-phead__title"} /-->

<!-- wp:paragraph {"className":"sz-lead"} -->
<p class="sz-lead">Practical notes from the team at Seimyaku Clinic.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"sz-notes sz-notes--list","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sz-notes sz-notes--list"><!-- wp:query {"queryId":2,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"className":"sz-posts"} -->
<div class="wp-block-query sz-posts"><!-- wp:post-template {"className":"sz-newslist","layout":{"type":"default"}} -->
<!-- wp:group {"className":"sz-note-card","layout":{"type":"default"}} -->
<div class="wp-block-group sz-note-card"><!-- wp:post-date {"format":"j M Y","className":"sz-note-card__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"sz-note-card__title"} /-->

<!-- wp:post-terms {"term":"category","className":"sz-card__chip"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p>Nothing here yet.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
