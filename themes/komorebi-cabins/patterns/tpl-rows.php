<?php
/**
 * Title: Template: post rows
 * Slug: komorebi-cabins/tpl-rows
 * Categories: komorebi-cabins
 * Inserter: no
 * Viewport Width: 1440
 * Description: Ruled post rows with a 3:2 thumbnail for archive, category, tag, search and the posts page.
 */
?>
<!-- wp:query {"queryId":12,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"kc-rows kc-rows--thumbs"} -->
<div class="wp-block-query kc-rows kc-rows--thumbs"><!-- wp:post-template -->
<!-- wp:group {"className":"kc-row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-row"><!-- wp:post-date {"format":"<?php echo esc_attr( komorebi_cabins_t( 'date_fmt' ) ); ?>","className":"kc-row__d"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"kc-row__t"} /-->

<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"kc-row__img"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"arrow","className":"kc-pager-nav","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query -->
