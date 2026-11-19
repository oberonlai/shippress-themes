<?php
/**
 * Title: Template: journal list
 * Slug: kisha-rail/tpl-notes
 * Categories: kisha-rail
 * Viewport Width: 1440
 * Description: Posts list used by the posts page and the archive templates: white cards with the date, a category chip and the title.
 */
?>
<!-- wp:group {"tagName":"section","className":"kr-sec kr-notes","layout":{"type":"default"}} -->
<section class="wp-block-group kr-sec kr-notes">
<!-- wp:group {"className":"kr-pagehead","layout":{"type":"default"}} -->
<div class="wp-block-group kr-pagehead">
<!-- wp:paragraph {"className":"kr-label"} -->
<p class="kr-label"><?php echo esc_html( kisha_rail_t( 'notes_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"archive","level":1,"className":"kr-h1p"} /-->
</div>
<!-- /wp:group -->

<!-- wp:query {"queryId":9,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"kr-posts"} -->
<div class="wp-block-query kr-posts"><!-- wp:post-template {"className":"kr-posts__grid"} -->
<!-- wp:group {"className":"kr-post","layout":{"type":"default"}} -->
<div class="wp-block-group kr-post"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"kr-post__img"} /-->

<!-- wp:post-date {"className":"kr-post__date"} /-->

<!-- wp:post-terms {"term":"category","className":"kr-post__cat"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"kr-post__title"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->
<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-numbers /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query -->
</section>
<!-- /wp:group -->
