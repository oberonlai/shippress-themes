<?php
/**
 * Title: Page head: gradient band with the page title
 * Slug: koe-interpreters/head-page
 * Categories: koe-interpreters
 * Inserter: no
 * Viewport Width: 1440
 * Description: Gradient band with a label, the page title and the static seam strip; used by the 404 and search templates.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","gradient":"head","className":"ko-pagehead sp-parallax","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ko-pagehead sp-parallax has-head-gradient-background has-background">
<!-- wp:group {"className":"ko-pagehead__in","layout":{"type":"default"}} -->
<div class="wp-block-group ko-pagehead__in">
<!-- wp:paragraph {"className":"ko-label"} -->
<p class="ko-label">Koe Interpreters</p>
<!-- /wp:paragraph -->
<!-- wp:post-title {"level":1} /-->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"ko-strip ko-strip--static","layout":{"type":"default"}} -->
<div class="wp-block-group ko-strip ko-strip--static">
<!-- wp:paragraph {"className":"ko-strip__in"} -->
<p class="ko-strip__in">Two rooms, one voice <img class="ko-cap" src="<?php echo koe_interpreters_img( 'p10.webp' ); ?>" alt="View through booth glass looking out over seated delegates in a bright hall."/> ·</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
