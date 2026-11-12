<?php
/**
 * Title: Template: post list
 * Slug: haru-allergy/tpl-list
 * Categories: haru-allergy
 * Inserter: no
 * Description: Plain title and post list used by the blog, archive and search templates until the inner pages are built.
 */
?>
<!-- wp:group {"align":"full","className":"ha-list","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull ha-list"><!-- wp:query-title {"type":"archive","level":1,"className":"ha-list__title"} /-->

<!-- wp:query {"queryId":21,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-title {"level":2,"isLink":true,"className":"ha-list__item"} /-->

<!-- wp:post-date {"format":"j F Y"} /-->

<!-- wp:post-excerpt {"excerptLength":30} /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
