<?php
/**
 * Title: News list
 * Slug: ma-vertical/news-list
 * Categories: ma-vertical, posts, query
 * Keywords: news, posts, query, list
 * Block Types: core/query
 * Description: Latest posts as hairline rows — date, category, title — with a vertical section title on the right.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull" style="margin-top:0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"align":"wide","className":"ma-reverse","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide ma-reverse"><!-- wp:column {"width":"16%","className":"ma-section-head"} -->
<div class="wp-block-column ma-section-head" style="flex-basis:16%"><!-- wp:heading {"textAlign":"right","className":"is-style-tategaki"} -->
<h2 class="wp-block-heading has-text-align-right is-style-tategaki">Studio notes</h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"84%"} -->
<div class="wp-block-column" style="flex-basis:84%"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow">03 — Notes from the studio</p>
<!-- /wp:paragraph -->

<!-- wp:query {"queryId":11,"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-query" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:post-template {"className":"ma-rows"} -->
<!-- wp:group {"className":"ma-row","layout":{"type":"default"}} -->
<div class="wp-block-group ma-row"><!-- wp:post-date {"format":"Y.m.d"} /-->

<!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-title {"level":3,"isLink":true} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"className":"ma-muted"} -->
<p class="ma-muted">No notes yet.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:button {"className":"is-style-text-arrow"} -->
<div class="wp-block-button is-style-text-arrow"><a class="wp-block-button__link wp-element-button" href="/notes/">Read all notes</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
