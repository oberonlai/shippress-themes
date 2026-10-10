<?php
/**
 * Title: Latest news — three stories, the middle one stepping down
 * Slug: mori-no-kai/latest-news
 * Categories: mori-no-kai, query
 * Keywords: news, posts, latest, journal
 * Viewport Width: 1440
 * Description: The three most recent posts in a staggered row of cards with photographs, under a heading and a link to all the news.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mk-section","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull mk-section"><!-- wp:group {"align":"wide","className":"mk-head mk-split mk-split--7-5 mk-split--end","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide mk-head mk-split mk-split--7-5 mk-split--end"><!-- wp:group {"className":"mk-stack mk-stack--loose","layout":{"type":"default"}} -->
<div class="wp-block-group mk-stack mk-stack--loose"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">05 — From the field office</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">News from <em>the valley</em></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/news/">All news</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":11,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"mk-cards mk-cards--stagger"} -->
<div class="wp-block-query alignwide mk-cards mk-cards--stagger"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/5"} /-->

<!-- wp:group {"className":"mk-post-meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group mk-post-meta"><!-- wp:post-date {"format":"j M Y"} /-->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-excerpt {"excerptLength":20} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
