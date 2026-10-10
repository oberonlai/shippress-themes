<?php
/**
 * Title: Latest insights — three notes on a rule
 * Slug: shiro-horitsu/latest-insights
 * Categories: shiro-horitsu, query
 * Keywords: insights, news, posts, articles, latest
 * Viewport Width: 1440
 * Description: A section head and the three newest posts as text-only columns, each on an ink rule with its date, category, title and summary.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sh-section","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull sh-section"><!-- wp:group {"align":"wide","className":"sh-split sh-split--7-5 sh-split--end sh-head","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide sh-split sh-split--7-5 sh-split--end sh-head"><!-- wp:group {"className":"sh-stack sh-stack--loose","layout":{"type":"default"}} -->
<div class="wp-block-group sh-stack sh-stack--loose"><!-- wp:paragraph {"className":"is-style-section"} -->
<p class="is-style-section">Insights</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Notes on the law, <em>plainly put</em></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/insights/">All insights</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"sh-cards"} -->
<div class="wp-block-query alignwide sh-cards"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"sh-post-meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group sh-post-meta"><!-- wp:post-date {"format":"j F Y"} /-->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-excerpt {"excerptLength":26} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
