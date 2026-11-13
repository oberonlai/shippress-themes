<?php
/**
 * Title: Template: journal (posts page)
 * Slug: kaimon-fishmongers/tpl-journal
 * Categories: kaimon-fishmongers
 * Keywords: page, inner
 * Viewport Width: 1440
 * Description: The posts page.
 */
?>
<!-- wp:group {"tagName":"main","className":"kf-main kf-main--list","layout":{"type":"default"}} -->
<main class="wp-block-group kf-main kf-main--list"><!-- wp:group {"tagName":"section","align":"full","className":"kf-catch kf-catch--inner sp-parallax","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kf-catch kf-catch--inner sp-parallax"><!-- wp:group {"className":"kf-catch__text","layout":{"type":"default"}} -->
<div class="wp-block-group kf-catch__text"><!-- wp:paragraph {"className":"kf-label kf-label--head"} -->
<p class="kf-label kf-label--head">JOURNAL</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kf-h1 kf-h1--inner"} -->
<h1 class="wp-block-heading kf-h1 kf-h1--inner">Journal</h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kf-plate","layout":{"type":"default"}} -->
<div class="wp-block-group kf-plate"><!-- wp:paragraph -->
<p>Notes from</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>the counter.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kf-fishes","layout":{"type":"default"}} -->
<div class="wp-block-group kf-fishes"><!-- wp:image {"sizeSlug":"full","width":366,"height":1280,"linkDestination":"none","className":"kf-fish kf-fish--i1 sp-parallax__layer"} -->
<figure class="wp-block-image size-full kf-fish kf-fish--i1 sp-parallax__layer"><img src="<?php echo kaimon_fishmongers_img( 'p02-mackerel.webp' ); ?>" alt="Whole mackerel on dark slate showing muted blue and black stripes." width="366" height="1280"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","width":426,"height":1280,"linkDestination":"none","className":"kf-fish kf-fish--i2 sp-parallax__layer"} -->
<figure class="wp-block-image size-full kf-fish kf-fish--i2 sp-parallax__layer"><img src="<?php echo kaimon_fishmongers_img( 'p03-seabass.webp' ); ?>" alt="Whole sea bass on a plain dark slate surface." width="426" height="1280"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","width":426,"height":1278,"linkDestination":"none","className":"kf-fish kf-fish--i3 sp-parallax__layer"} -->
<figure class="wp-block-image size-full kf-fish kf-fish--i3 sp-parallax__layer"><img src="<?php echo kaimon_fishmongers_img( 'p05-shrimp.webp' ); ?>" alt="Pale shrimp on a plain dark slate surface." width="426" height="1278"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kf-sec kf-sec--in kf-list","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kf-sec kf-sec--in kf-list"><!-- wp:paragraph {"className":"kf-vtitle kf-vtitle--left"} -->
<p class="kf-vtitle kf-vtitle--left">Journal</p>
<!-- /wp:paragraph -->

<!-- wp:query {"query":{"perPage":9,"inherit":true},"className":"kf-prows"} -->
<div class="wp-block-query kf-prows"><!-- wp:post-template -->
<!-- wp:group {"className":"kf-prow","layout":{"type":"default"}} -->
<div class="wp-block-group kf-prow"><!-- wp:group {"className":"kf-prow__id kf-rule","layout":{"type":"default"}} -->
<div class="wp-block-group kf-prow__id kf-rule"><!-- wp:post-date {"format":"j F Y","className":"kf-news__date"} /-->

<!-- wp:post-terms {"term":"category","className":"kf-news__cat"} /-->

<!-- wp:post-title {"isLink":true,"level":3,"className":"kf-prow__title"} /-->

<!-- wp:post-excerpt {"excerptLength":28,"className":"kf-prow__excerpt"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1.43","className":"kf-row__thumb kf-prow__thumb"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->
