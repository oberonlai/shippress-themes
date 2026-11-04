<?php
/**
 * Title: Notes list with pagination
 * Slug: sokuten-survey/tpl-notes-list
 * Categories: sokuten-survey
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"className":"ss-sec ss-notesec ss-notesec--list","tagName":"section","align":"full","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ss-sec ss-notesec ss-notesec--list">
<!-- wp:query {"queryId":22,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"ss-notes"} -->
<div class="wp-block-query ss-notes"><!-- wp:post-template {"className":"ss-notes__list"} -->
<!-- wp:group {"className":"ss-note","layout":{"type":"default"}} -->
<div class="wp-block-group ss-note"><!-- wp:post-date {"format":"Y.m.d","className":"ss-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"ss-note__title"} /-->

<!-- wp:post-terms {"term":"category","className":"ss-chip"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:query-pagination {"className":"ss-pager","layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->
</section>
<!-- /wp:group -->
