<?php
/**
 * Title: Template: single post
 * Slug: kaimon-fishmongers/tpl-single
 * Categories: kaimon-fishmongers
 * Keywords: page, inner
 * Viewport Width: 1440
 * Description: A post with the catch head and its featured image as the dark head photo.
 */
?>
<!-- wp:group {"tagName":"main","className":"kf-main kf-main--single","layout":{"type":"default"}} -->
<main class="wp-block-group kf-main kf-main--single"><!-- wp:group {"tagName":"section","align":"full","className":"kf-catch kf-catch--inner sp-parallax","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kf-catch kf-catch--inner sp-parallax"><!-- wp:group {"className":"kf-catch__text","layout":{"type":"default"}} -->
<div class="wp-block-group kf-catch__text"><!-- wp:paragraph {"className":"kf-label kf-label--head"} -->
<p class="kf-label kf-label--head">COUNTER NOTES</p>
<!-- /wp:paragraph -->

<!-- wp:post-title {"level":1,"className":"kf-h1 kf-h1--inner"} /--></div>
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

<!-- wp:group {"align":"full","className":"kf-dock-wrap kf-dock-wrap--inner","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kf-dock-wrap kf-dock-wrap--inner"><!-- wp:group {"align":"full","className":"kf-single-photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kf-single-photo sp-parallax"><!-- wp:post-featured-image {"isLink":false,"aspectRatio":"auto","className":"kf-single__photo"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kf-tab kf-tab--post","backgroundColor":"paper","layout":{"type":"default"}} -->
<div class="wp-block-group kf-tab kf-tab--post has-paper-background-color has-background"><!-- wp:post-date {"format":"j F Y","className":"kf-news__date"} /-->

<!-- wp:post-terms {"term":"category","className":"kf-news__cat"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kf-sec kf-sec--in kf-post","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kf-sec kf-sec--in kf-post"><!-- wp:group {"className":"kf-narrow sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kf-narrow sp-reveal sp-reveal--up"><!-- wp:post-content {"layout":{"type":"default"}} /-->

<!-- wp:post-terms {"term":"post_tag","prefix":"Tagged: ","className":"kf-tags"} /-->

<!-- wp:paragraph {"className":"kf-link"} -->
<p class="kf-link"><a href="/journal/">More from the journal</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->
