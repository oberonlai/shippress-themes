<?php
/**
 * Title: Single note head: gradient band with the title
 * Slug: koe-interpreters/head-single
 * Categories: koe-interpreters
 * Inserter: no
 * Viewport Width: 1440
 * Description: Gradient band with the category, the note title and the static seam strip with one photo capsule; no photo column.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","gradient":"head","className":"ko-pagehead sp-parallax","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ko-pagehead sp-parallax has-head-gradient-background has-background">
<!-- wp:group {"className":"ko-pagehead__in","layout":{"type":"default"}} -->
<div class="wp-block-group ko-pagehead__in">
<!-- wp:post-terms {"term":"category","className":"ko-label"} /-->
<!-- wp:post-title {"level":1} /-->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"ko-strip ko-strip--static","layout":{"type":"default"}} -->
<div class="wp-block-group ko-strip ko-strip--static">
<!-- wp:paragraph {"className":"ko-strip__in"} -->
<p class="ko-strip__in">Notes from the booth <img class="ko-cap" src="<?php echo koe_interpreters_img( 'p10.webp' ); ?>" alt="View through booth glass looking out over seated delegates in a bright hall."/> ·</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
