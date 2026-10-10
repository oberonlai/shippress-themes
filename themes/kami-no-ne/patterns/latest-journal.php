<?php
/**
 * Title: Journal — the latest three
 * Slug: kami-no-ne/latest-journal
 * Categories: kami-no-ne, featured, query
 * Keywords: journal, posts, blog, latest
 * Viewport Width: 1440
 * Description: The three newest journal posts with photographs, categories and dates, under a section title with a link to the journal.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kn-section kn-section--line kn-section--marked","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kn-section kn-section--line kn-section--marked"><!-- wp:paragraph {"className":"kn-vmark"} -->
<p class="kn-vmark"><span>04</span> The journal</p>
<!-- /wp:paragraph -->

<!-- wp:group {"align":"wide","className":"kn-head","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kn-head"><!-- wp:group {"className":"kn-head__titles","layout":{"type":"default"}} -->
<div class="wp-block-group kn-head__titles"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">From the journal</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Notes from the <em>paper table</em></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kn-link"} -->
<p class="kn-link"><a href="/journal/">Read the journal</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":11,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"kn-list kn-list--stagger"} -->
<div class="wp-block-query alignwide kn-list kn-list--stagger"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/5"} /-->

<!-- wp:group {"className":"kn-card-body","layout":{"type":"default"}} -->
<div class="wp-block-group kn-card-body"><!-- wp:group {"className":"kn-card-meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group kn-card-meta"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-date {"format":"M j, Y"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
